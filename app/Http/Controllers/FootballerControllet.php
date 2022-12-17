<?php

namespace App\Http\Controllers;

use App\Models\football_club;
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
        $clubs=football_club::all();
        return view('create',['pictures'=>$pictures,'clubs'=>$clubs]);

    }


    public function store(Request $request)
    {
        Fottbalers::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'football_clubs_id'=>$request->football_clubs_id,
            'position'=>$request->position,
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
        $picture=Image::find($footballer->image_id);
        return view('show',['football'=>$footballer,'picture'=>$pictures]);
    }


    public function edit($id)
    {
        $pictures=Image::all();
        $clubs=football_club::all();

        $footballer=Fottbalers::find($id);
         return view('edit',['football'=>$footballer,'pictures'=>$pictures,'clubs'=>$clubs]);
    }


    public function update(Request $request, $id)
    {
        $footballer=Fottbalers::find($id);

        $footballer->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'football_clubs_id'=>$request->football_clubs_id,
            'position'=>$request->position,
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
