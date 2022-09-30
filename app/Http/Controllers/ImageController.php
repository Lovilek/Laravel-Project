<?php

namespace App\Http\Controllers;

use App\Models\Fottbalers;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\PrettyPrinter\Standard;

class ImageController extends Controller
{

    public function index()
    {
        $pictures = Image::all();


        return view('indexImage', ['pictures' => $pictures]);

    }





    public function create()
    {
        $pictures=Image::all();
        return view('createImage',['pictures'=>$pictures]);
    }


    public function store(Request $request)
    {

        Image::create([
            'name'=>$request->name,
            'imgSrc'=>$request->imgSrc


        ]);
        return redirect()->route('image.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }


    public function edit($id)
    {
        $pictures=Image::find($id);
        return view('editImage',['pictures'=>$pictures]);
    }


    public function update(Request $request, $id)
    {
        $pictures=Image::find($id);
        $pictures->update([
            'name'=>$request->name,
            'imgSrc'=>$request->imgSrc


        ]);
        return redirect()->route('image.index');
    }


    public function destroy($id)
    {

        $footballer=Fottbalers::all();
        $pictures=Image::find($id);

        foreach ($footballer as $foot){
            if($foot->image_id==$id){
                $foot->delete();
            }
        }


        $pictures->delete();
        return redirect()->route('image.index');
    }
}
