<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\EventInfo;
use App\Models\EventCategory;
use App\Models\EventDatesRate;
use App\Models\Tourimages;
use App\Models\Bookings;
use App\Models\Blogs;
use App\Models\Gallary;
use App\Models\GallaryImages;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Enquiries;
use Exception;

class AdminController extends Controller
{
    public function loadDashboard(){

        if(Auth::user()->isAdmin == 1){
            $data['event_count'] = EventInfo::count();
            $data['users_count'] = User::count();
            $data['enquiry_count'] = Enquiries::count();
            $data['albums_count'] = Gallary::count();
            $data['enquiry'] = Enquiries::all();
            return view('admin.dashboard',$data);
        }else{
            return back();
        }
    }

    public function loadEvents(){
        try {
           $data['event_categories'] = EventCategory::all();
           return view('admin.events',$data);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to load events !');
            return back();
        }
    }

    public function storeEvent(Request $request){
        try {
            $event = new EventCategory;
            $event->title = $request->title;
            $event->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/events/'.$event->id.$request->title);
                $path = str_replace('public','',$path);
                $event->image = $path;
            }
            $event->save();
            $request->session()->flash('success', 'Event Created Successfully !');
            return back();
         } catch (Exception $e) {
             Log::error($e->getMessage());
             $request->session()->flash('error', 'Failed to store, Events');
             return back();
         }
    }

    public function updateEvent(Request $request,EventCategory $event){
        try {

            
            $event->title = $request->title;
            $event->description = $request->description;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/events/'.$event->id.$request->title);
                $path = str_replace('public','',$path);
                $event->image = $path;
            }
            $event->save();
            $request->session()->flash('success', 'Event Updated Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to update, Events');
            return back();
        }
    }

    public function deleteEvent(EventCategory $event,Request $request){
        try {
            $name = $event->title;
            $event->delete();
            $request->session()->flash('success', $name. ' Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Event');
            return back();
        }
    }

    public function getTours(EventCategory $event,Request $request){
        $data['main_event'] = $event;
        $data['tours'] = $event->Eventinfos()->get();
        return view('admin.Tours',$data);
    }

    public function storeTour(Request $request){
        try {
            $tour = new EventInfo;
            $tour->title = $request->title;
            $tour->price = $request->price;
            $tour->type = $request->type;
            $tour->duration = $request->duration;
            $tour->destination = $request->destination;
            $tour->event_category_id = $request->Parentevent;
            $tour->departure = $request->departure;
            $tour->offers = $request->offers;
            $tour->details = $request->details;
            $tour->mrp = $request->mrp;
            $tour->discount = $request->discount;


            $event = EventCategory::find($request->Parentevent);

            if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $name = $image->getClientOriginalName();
                    $path = $image->store('public/tours/'.$event->title.'_'.$request->title);
                    $path = str_replace('public','',$path);
                    $tour->image= $path;
            }

            $tour->save();

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $img) {
                    $name = $img->getClientOriginalName();
                    $path = $img->store('public/tours/'.$event->title.'_'.$request->title.'/trips');
                    $path = str_replace('public','',$path);
                    
                    $tour->images()->create([
                       'image' => $path,
                       'event_info_id' => $tour->id,
                    ]);

                    // $imgName = Storage::disk('spaces')->putFile('images', $img, 'public');
                    // ProductImage::create([
                    //     'image' => $imgName,
                    //     'product_id' => $product->id
                    // ]);
                    // //$img->move(public_path('images'), $imgName);
                }
            }

            //save dates&rates

            $dates = $request->dates;
            $variants = $request->variants;
            $durations = $request->durations;
            $prices = $request->prices;
    

            if ($dates) {
                for ($i = 0; $i < count($dates); $i++) {
                    if ($dates[$i] !== null && $variants[$i] !== null && $durations[$i] != null && $prices[$i] != null) {
                        $tour->Eventdatesrates()->create([
                            'duration'=>$durations[$i],
                            'variant'=>$variants[$i],
                            'date' => $dates[$i],
                            'price' => $prices[$i]
                        ]);
                    }
                }
            }

           
            $request->session()->flash('success', 'Tour Added Successfully !');
            return redirect()->intended(route('admin.events.tours',$event));
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Add Tour');
            return back();
        }
    } 

    public function updateTour(EventInfo $tour,Request $request){
      
        try {
            $tour->title = $request->title;
            $tour->price = $request->price;
            $tour->type = $request->type;
            $tour->duration = $request->duration;
            $tour->destination = $request->destination;
            $tour->departure = $request->departure;
            $tour->offers = $request->offers;
            $tour->details = $request->details;
            $tour->mrp = $request->mrp;
            $tour->discount = $request->discount;

            $event = EventCategory::find($request->Parentevent);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/tours/'.$event->title.'_'.$request->title);
                $path = str_replace('public','',$path);
                $tour->image= $path;
             }

            $tour->save();

            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $img) {
                    $name = $img->getClientOriginalName();
                    $path = $img->store('public/tours/'.$event->title.'_'.$request->title.'/trips');
                    $path = str_replace('public','',$path);
                    
                    $tour->images()->create([
                       'image' => $path,
                       'event_info_id' => $tour->id,
                    ]);

                    // $imgName = Storage::disk('spaces')->putFile('images', $img, 'public');
                    // ProductImage::create([
                    //     'image' => $imgName,
                    //     'product_id' => $product->id
                    // ]);
                    // //$img->move(public_path('images'), $imgName);
                }
            }

            $dates = $request->dates;
            $variants = $request->variants;
            $durations = $request->durations;
            $prices = $request->prices;
    

            if ($dates) {
                $tour->Eventdatesrates()->delete();
                for ($i = 0; $i < count($dates); $i++) {
                    if ($dates[$i] !== null && $variants[$i] !== null && $durations[$i] != null && $prices[$i] != null) {
                        $tour->Eventdatesrates()->create([
                            'duration'=>$durations[$i],
                            'variant'=>$variants[$i],
                            'date' => $dates[$i],
                            'price' => $prices[$i]
                        ]);
                    }
                }
            }else{
                $tour->Eventdatesrates()->delete();
            }

            $request->session()->flash('success', 'Tour Updated Successfully !');
           
            return redirect()->intended(route('admin.events.tours',$event));
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to update, Tour');
            return back();
        }
    }

    public function deleteTour(EventInfo $tour, Request $request){
        try {
            $name = $tour->title;
            $tour->delete();
            $request->session()->flash('success', $name. ' Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Tour');
            return back();
        }
    }



    public function loadEditTour(EventInfo $tour,Request $request){
          $data['events'] = EventCategory::all();
          $data['tour'] = $tour;
          return view('admin.editTours',$data);
    }
    public function loadAddTour(Request $request,EventCategory $event){
        $data['Pevent'] = $event;
        $data['events'] = EventCategory::all();
        return view('admin.storeTours',$data);
    }

    public function loadUsers(Request $request){
        $data['users'] = User::all();
        return view('admin.user',$data);
    }
    public function DeleteUser(User $user,Request $request){
        try {
            $name = $user->name;
            $user->delete();
            $request->session()->flash('success', $name. ' Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, User');
            return back();
        }
    }

    // public function LoadEnquiry(Request $request){
        
       
    //     $data['enquiry'] = Enquiries::all();
    //     return view('admin.enquiry',$data);

    // } 
    public function LoadBookings(Request $request){
        $data['bookings'] = Bookings::all();
        return view('admin.bookings',$data);
    }

    public function LoadGallary(Request $request){
       
        $data['gallary'] = Gallary::all();

        return view('admin.Gallary',$data);

    }

    public function storeAlbum(Request $request){

        try {
           
             $album = new Gallary;

             $album->albumtitle = $request->title;
             $album->location = $request->location;

             if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/albums/'.$request->title.'_'.$request->location);
                $path = str_replace('public','',$path);
                $album->cover= $path;
             }
             
             $album->save();

            $request->session()->flash('success','Album Added Successfully !');
            return back();
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Add Album');
            return back();
        }
    }

    public function deleteAlbum(Gallary $album,Request $request){
        try {
            $name = $album->albumtitle;
            $album->delete();
            $request->session()->flash('success', $name. ' Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Album');
            return back();
        }
    }

    public function updateAlbum(Gallary $album,Request $request){
        try {
            
            $album->albumtitle = $request->title;
            $album->location = $request->location;
            $alname = $request->title;

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/albums/'.$request->title.'_'.$request->location);
                $path = str_replace('public','',$path);
                $album->cover= $path;
             }

             $album->save();
            $request->session()->flash('success', $alname. ' Updated Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Update, Album');
            return back();
        }

    }

    public function loadAlbumImages(Gallary $album,Request $request){
         
        $data['album'] = $album;
        $data['images'] = $album->images()->get();

        return view('admin.albumImages',$data);

    }

    public function deleteAlbumImage(GallaryImages $image,Request $request){
        try {
            $image->delete();
            $request->session()->flash('success','Image Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Image');
            return back();
        }

    }

    public function storeAlbumImages(Gallary $album,Request $request){
        try {
            if ($request->hasFile('images')) {
                $images = $request->file('images');
                foreach ($images as $img) {
                    $name = $img->getClientOriginalName();
                    $path = $img->store('public/albums/'.$album->albumtitle.'_'.$album->location.'images');
                    $path = str_replace('public','',$path);
                    
                    $album->images()->create([
                       'image' => $path,
                       'gallary_id' => $album->id,
                    ]);
                }
            }
            $request->session()->flash('success','Image added Successfully !');
            return back();
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Add, Image');
            return back();
        }
    }

    public function loadAdminBlogs(Request $request){
        
        $data['blogs'] = Blogs::all();

        return view('admin.blogs',$data);
    }

    public function loadCreateBlog(Request $request){
        return view('admin.storeBlog');
    }

    public function storeBlog(Request $request){
      

          try {
             $blog = new Blogs;
             $blog->type = $request->type;
             $blog->title = $request->title;
             $blog->info = $request->details;
             $blog->specialtext = $request->specialtext;
             $blog->user = $request->username;
             $blog->aboutuser = $request->userinfo;
             $blog->tags = $request->tags;

             if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/blogs/'.$request->type.'_'.$request->title);
                $path = str_replace('public','',$path);
                $blog->image= $path;
            }

            if ($request->hasFile('userimage')) {
                $image = $request->file('userimage');
                $name = $image->getClientOriginalName();
                $path = $image->store('public/blogs/'.$request->type.'_'.$request->title.'/users'.'/');
                $path = str_replace('public','',$path);
                $blog->userimage= $path;
            }

            $blog->save();


            $request->session()->flash('success','Blog Posted Successfully !');
            return redirect()->intended(route('admin.blogs'));
        } catch (Exception $e) {
            dd($e);
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Blog');
            return back();
        }

    }

    public function deleteBlog(Blogs $blog,Request $request){
        try {
            $name = $blog->title;
            $blog->delete();
            $request->session()->flash('success', $name. ' Deleted Successfully !');
            return back();
        } catch (Exception $e) {
            Log::error($e->getMessage());
            $request->session()->flash('error', 'Failed to Delete, Blog');
            return back();
        }
    }
}
