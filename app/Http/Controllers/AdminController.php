<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Coach;
use App\Models\Gym;
use App\Models\Gymclass;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
    }



    public function members()
    {
        $data=Gym::all();
        return view("admin.members", compact('data'));
    }


    public function deletemember($id){

        $data=Gym::find($id);
        $data->delete();
        return redirect()->back();

    }


    public function masseges()
    {
        $data=Message::all();
        return view('admin.messages', compact('data'));
    }


    public function deletemassege($id)  {

        $data=Message::find($id);
        $data->delete();
        return redirect()->back();
        
    }



    public function coach()
    {
        
        return view('admin\coach');
    }


    public function storecoach(Request $request){
        $path=$request->image->store('public/coach');
      Coach::create([
            "name"=>$request->name,
            "about"=>$request->about,
            "image"=>$path,

        ]);

        return redirect()->route('admin.addcoach');

    }



    /**
     * Show the form for creating a new resource.
     */
    public function showcoach()
    {
        $data=coach::all();
        return view('admin.showcoach' ,compact('data'));
    }


    public function deletecoach($id){

        $data=coach::find($id);
        $data->delete();
        return redirect()->back();

    }



    public function addclass() {


        return view('admin.addclass');
        
    }

   
    public function storeclass(Request $request)
    {
        $image=$request->image->store('public/classes');
        Gymclass::create([

            'class'=>$request->class,
            'price'=>$request->price,
            'content'=>$request->content,
            'image'=>$image,


        ]);

        return redirect()->route('admin.addclass');
    }



    public function showclass(){
        $class=Gymclass::all();

        return view('admin.showclass' ,compact('class'));

    }

    public function deleteclass($id) {
        $class=Gymclass::find($id);
        $class->delete();
        return redirect()->back();
        
    }

 
}
