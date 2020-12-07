<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
    //
    public function showName(){
        return 'My Name Rawan';
    }
    
    public function getIndex(){ 
        $obj=new \stdClass();
        $obj->name='Ali';
        $obj->id=9999;
        $obj->gender='male';
        return view('welcome',compact('obj'));
    }
        
    public function getName(){ 
      
        return view('welcome')->with('name',"Rawan");
    }
    
    
}
