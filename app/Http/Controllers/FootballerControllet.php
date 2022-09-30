<?php

namespace App\Http\Controllers;

use App\Models\Fottbalers;
use App\Models\Image;
use Illuminate\Http\Request;

class FootballerControllet extends Controller
{

    public function index()
    {
        $pictures=Image::all();

        $allFootballers=Fottbalers::all();

        return view('index1',['allFootballers'=>$allFootballers,'pictures'=>$pictures]);

    }


    public function create()
    {
        $pictures=Image::all();
        return view('create',['pictures'=>$pictures]);

    }


    public function store(Request $request)
    {
        Fottbalers::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'club'=>$request->club,
            'position'=>$request->name,
            'age'=>$request->age,
            'price'=>$request->price,
            'image_id'=>$request->image_id

        ]);
        return redirect()->route('football.index');
    }


    public function show($id)
    {
        $pictures=Image::all();

        $footballer=Fottbalers::find($id);
        return view('show',['football'=>$footballer,'pictures'=>$pictures]);
    }


    public function edit($id)
    {
        $pictures=Image::all();

        $footballer=Fottbalers::find($id);
         return view('edit',['football'=>$footballer,'pictures'=>$pictures]);
    }


    public function update(Request $request, $id)
    {
        $footballer=Fottbalers::find($id);

        $footballer->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'club'=>$request->club,
            'position'=>$request->name,
            'age'=>$request->age,
            'price'=>$request->price,
            'image_id'=>$request->image_id



        ]);
        return redirect()->route('football.index');
    }


    public function destroy($id)
    {
        $footballer=Fottbalers::find($id);
        $footballer->delete();
        return redirect()->route('football.index');

    }
}
