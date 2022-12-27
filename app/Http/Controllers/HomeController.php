<?php

namespace App\Http\Controllers;


use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventInfo;
use App\Models\EventCategory;
use App\Models\Enquiries;
use App\Models\Gallary;
use App\Models\GallaryImages;
use App\Models\Bookings;
use App\Models\GetinTouch;
use App\Models\Payments;
use App\Models\Blogs;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Razorpay\Api\Api;
use Session;

use Exception;

class HomeController extends Controller
{
    public function loadHome(Request $request){
        try{
            
            $data['eventsTitles'] = EventCategory::all();
            $data['blogs'] = Blogs::all();
            $data['album1'] = Gallary :: first();
            $data['album2'] = Gallary :: skip(1)->take(1)->first();
            $data['album3'] = Gallary :: skip(2)->take(1)->first();
            $data['album4'] = Gallary :: skip(3)->take(1)->first();
            return view('welcome',$data);
        }catch(Exception $e){

            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to load Home !');
            return back();
        }
    }
    public function loadAboutus(Request $request){
        return view('aboutus');
    }
    public function loadContactus(Request $request){
        return view('contactus');
    }

    public function loadToorInfo(EventInfo $event,Request $request){
        
        $data['tour'] = $event;
        return view('toorInfo',$data);

    }

    public function SaveEnquiry(Request $request){
   
        try {
             $enquiry = new Enquiries;
             $enquiry->name = $request->name;
             $enquiry->destination = $request->destination;
             $enquiry->date = $request->date;
             $enquiry->toor_id = $request->toor_id;
             $enquiry->save();
             $request->session()->flash('success', 'Enquiry Sent Successfully !');
             return back();
         } catch (Exception $e) {
             Log::error($e->getMessage());
             $request->session()->flash('error', 'Failed to send Enquiry !');
             return back();
         }

    }

    public function loadToorList(EventCategory $event,Request $request){

        $data['event'] = $event;
        $data['tours'] = $event->Eventinfos()->get();

        return view('toorList',$data);

    }

    public function loadToorBooking(EventInfo $tour,Request $request){

        // dd($tour);

        $data['tour'] = $tour;

        return view('booking',$data);

    }

    public function StoreBooking(EventInfo $tour,Request $request){
     
       
        try {
            $booking  = new Bookings;
            $booking->firstname = $request->firstname;
            $booking->lastname = $request->lastname;
            $booking->email = $request->email;
            $booking->contact = $request->contact;
            $booking->city = $request->city;
            $booking->postal = $request->postal;
            $booking->people = $request->people;
            $booking->male = $request->male;
            $booking->female = $request->female;
            $booking->kids = $request->kids;
            $booking->event_info_id = $tour->id;
            $booking->price = $tour->price;
            $booking->user_id = Auth::id();
            $booking->isPaid = false;
            $booking->save();

            $payment = new Payments;

            $payment->amount = $tour->price * $booking->people;
            $payment->booking_id = $booking->id;
            $payment->user_id = Auth::id();
            $payment->isPaid = FALSE;

            $payment->save();

            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $razorPayOrder = $api->order->create(array('receipt' => $payment->id, 'amount' => $payment->amount * 100, 'currency' => 'INR')); // Creates order
            $razorPayOrderId = $razorPayOrder['id'];

            // Session::put('order_id',$razorPayOrderId);
            // Session::put('amount',$tour->amount*100);

            $payment->order_id = $razorPayOrderId;
            $payment->save();
            

            
            $request->session()->flash('success', 'Please Checkout !');
            return redirect(route('order.checkout',['tour'=>$tour,'payment'=>$payment,'booking'=>$booking]));
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to send Booking !');
            return back();
        }

    }

    public function loadcheckout(EventInfo $tour,Payments $payment,Bookings $booking,Request $request){
        // dd($payment);
        $data['tour'] = $tour;
        $data['payment'] = $payment;
        $data['booking'] = $booking;
        return view('checkout',$data);
    }
    
    public function loadAllGallary(Request $request){

        // $data['setAlbumID'] = $album->id;
        $data['albums'] = Gallary::all();
        $data['images'] = GallaryImages::all();
        return view('viewGallary',$data);
    }

    public function BlogInfo(Blogs $blog,Request $request){
        
        $data['blog'] = $blog;

        return view('blogInfo',$data);

    }

    public function PaySuccess(Payments $payment,Request $request){
         
    
        $payment->razorpay_id = $request->razorpay_payment_id;
        $payment->isPaid = TRUE;
        $payment->save();
        $booking = Bookings::find($payment->booking_id);
        $booking->isPaid = true;
        $booking->save();
        $request->session()->flash('success', 'Booking Sent Successfully !');

        return redirect()->route('user.profile');
    }

    public function storeGetinTouch(Request $request){
       
        try {
            $getintouch = new GetinTouch;
            $getintouch->email = $request->email;
            $getintouch->contact = $request->contact;
            $getintouch->name = $request->name;
            $getintouch->subject = $request->subject;
            $getintouch->message = $request->message;
            $getintouch->save();
            $request->session()->flash('success', 'Enquiry Sent Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to send Enquiry !');
            return back();
        }
    }
}
