<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\Gym;
use App\Models\Gymclass;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GymController extends Controller
{
   



    public function index(){

        $data=Coach::all();
        $class=Gymclass::all();
    return view('users\index',compact(['data','class']));
    }
  

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Gym::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,

        ]);
        return to_route('gym.index')->with('data',$data);
    }

   public function storemessage(Request $request)  {


    $message=Message::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message,

    ]);
    return to_route('gym.index')->with('message',$message);
    
   }
   

   public function  redirects(){
    $user=Auth::user()->usertype;
    if($user == 1)
    return to_route('admin.index');
    else
    return  to_route('gym.index');
   }


 

   

    
}
