<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EventInfo;
use App\Models\EventCategory;
use Livewire\withPagination;

class ToorList extends Component
{
    public $event = "";
    public $destination,$price,$type,$date,$minPrice,$maxPrice;
   
    public function mount($event)
    {
        $this->event = $event;
    }

    public function Resetdata(){
        $this->destination = "";
        $this->price = "";
        $this->type = "";
        $this->date = "";
        $this->minPrice = "";
        $this->maxPrice = "";
    }


    public function render()
    {
       
        $tour = EventInfo::query();

        $tour->where('event_category_id','=',$this->event->id);

        if($this->destination){
           $tour->where('destination','like', '%' . $this->destination . '%');
       }

       if($this->price){
        $tour->where('price','=',$this->price);
       }

       if($this->type){

        $tour->where('type','=',$this->type);
       }

       if($this->date){
      
        $tour->where('departure','=',$this->date);
       }

       if($this->minPrice){
         $tour->where('price','>=',$this->minPrice);
       }

       if($this->maxPrice){
        $tour->where('price','<=',$this->maxPrice);
        
       }

     

       

        $data['event'] = $this->event;
        $data['tours'] = $tour->paginate(6);
        return view('livewire.toor-list',$data);
    }
}
