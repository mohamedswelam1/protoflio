<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts= About::get();
        return view('apanel.about.aboutDetails', compact('abouts'));
    }

    public function add ()
    {
        return view('apanel.about.updateAbout');
    }

    public function store(Request $request)
    { 
       
        $request->validate([
            'name'=> 'required|min:3' ,
            'age'=> 'required|min:2', 
            'title'=>'required|min:2',
            'from'=> 'required|min:3',
            'lives_in'=>'required|min:3',
            'gender'=>'required|min:4',
            'description'=> 'required|min:10',
            'image'=> 'required|mimes:jpg,png'
        ]);

        About::create([

            'name'=>$request->name , 
            'age'=>$request->age , 
            'title'=>$request->title , 
            'from'=> $request-> from, 
            'live_in'=> $request->lives_in,
            'gender'=>$request->gender ,
            'description'=>$request->description, 
            'image'=>$request->image
        
        ]);
        session()->flash('done', 'about Was Added');
        return redirect(route('admin.about'));

    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'name'=> 'required|min:3' ,
            'age'=> 'required|min:2', 
            'title'=>'required|min:2',
            'from'=> 'required|min:3',
            'lives_in'=>'required|min:3',
            'gender'=>'required|min:4',
            'description'=> 'required|min:10',
            'image'=> 'required|mimes:jpg,png'
        ]);
        $about=About::find($id);
        if($about)
        {
             $about->update([
                'name'=>$request->name , 
                'age'=>$request->age , 
                'title'=>$request->title , 
                'from'=> $request-> from, 
                'live_in'=> $request->lives_in,
                'gender'=>$request->gender ,
                'description'=>$request->description, 
                'image'=>$request->image

             ]);
        }
        session()->flash('done', 'about Was updated');
        return redirect(route('admin.about'));
    }
      


}
