<?php

namespace App\Services\Impl;

use App\Models\Fottbalers;
use App\Services\FootballService;
use Illuminate\Http\Request;

class FootballServiceImpl implements FootballService
{

    public function getAll()
    {
           $football=Fottbalers::all();
           return $football;
     }
    public function createPlayer(Request $request)
    {

        Fottbalers::create([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'club'=>$request->club,
            'position'=>$request->position,
            'age'=>$request->age,
            'price'=>$request->price,
            'image_id'=>$request->image_id

        ]);


    }

    public function getById($id)
    {
        $football=Fottbalers::find($id);
        return $football;
    }

    public function updatePlayer(Request $request, $id)
    {
        $footballer=Fottbalers::find($id);

        $footballer->update([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'club'=>$request->club,
            'position'=>$request->position,
            'age'=>$request->age,
            'price'=>$request->price,
            'image_id'=>$request->image_id



        ]);

    }

    public function deletePlayer($id)
    {
        $footballer=Fottbalers::find($id);
        $footballer->delete();
    }
}
