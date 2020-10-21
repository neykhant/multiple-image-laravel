<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{

    public function index()
    {
        $galleries =  Gallery::all();
        return view('home', compact('galleries'));
    }


    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg,|max:2048'
        ]);


        foreach ($request->file('image')  as $image  ) {

            $image_name = time() . '-' . $image->getClientOriginalName();

            $image->move(public_path('images'), $image_name);

            $gallery = new Gallery();
            $gallery->name = $image_name;
            // $gallery->user_id = Auth::user()->id;
            $gallery->save();
        }

        return redirect()->route('image.index')->with('status', 'The images uploaded!..');
        
    }



    public function destroy($id)
    {
        $gallery =  Gallery::findOrFail($id);
        $image_path = public_path().'/images/'. $gallery->name;
        File::delete($image_path);

        $gallery->delete();

        return redirect()->route('image.index')->with('status', 'The images deleted!..');
    }

    public function download($id)
    {
        $gallery =  Gallery::findOrFail($id);
        $image_path = public_path().'/images/'. $gallery->name;
        
        return response()->download($image_path);
    }
}
