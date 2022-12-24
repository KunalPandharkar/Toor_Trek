<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bookings;
use App\Models\Payments;
use App\Models\TourMessages;
use Illuminate\Support\Facades\Log;
use App\Models\EventInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function loadUserProfile(){
        $data['user'] = Auth::user();

        $data['AllBookings'] = Bookings::where('user_id',Auth::id())->get();
        $data['PaidBookings'] = Bookings::where(
            [
                ['user_id',Auth::id()],
                ['isPaid',true]
            ]
            )->get();
        

        return view('User.profile',$data);
    }

    public function updateProfile(Request $request){
        try{
            $user = User::find(Auth::id());
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact = $request->contact;
            $user->address = $request->address;
            $user->age = $request->age;
            $user->gender = $request->gender;
           
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/users/'.$user->name.' '.$user->id);
                $path = str_replace('public','',$path);
                $user->image = $path;
            }


            $user->save();
            $request->session()->flash('success', 'Profile Updated Successfully');
            return back();
        }catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to update profile');
            return back();
        }
    }
    
    public function loadMessages(Request $request,EventInfo $activeTour=NULL){

     
        $booking = Bookings::where(
            [
                ['user_id',Auth::id()],
            ]
        )->first();

        if($booking == NULL){
            $data['isNull'] = true;
            $request->session()->flash('success', 'You Dont Have Any Bookings !');
            // return back();
            return view('User.mesaages',$data);
        }

        $bookigs = Bookings::where('user_id',Auth::id());

        $tour = EventInfo::where('id',$booking->event_info_id)->first();

        $result = DB::table('event_infos')
        ->select('event_infos.*','bookings.*')
        ->join('bookings','bookings.event_info_id','=','event_infos.id')
        ->where(['bookings.user_id' => Auth::id(),'bookings.isPaid' => true])
        ->get();

        // dd($result);

        
        if($activeTour != NULL){
            $data['ActiveTour'] = $activeTour;
            $data['messages'] = $activeTour->messages()->get();
        }else{
            $data['ActiveTour'] = $tour;
            $data['messages'] = $tour->messages()->get();
        }
         
        $data['allBookings'] = $result;

        $data['isNull'] = false;
        

        // dd($data['messages']);
        return view('User.mesaages',$data);
    }
 
}
