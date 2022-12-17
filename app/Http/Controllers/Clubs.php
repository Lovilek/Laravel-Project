<?php

namespace App\Http\Controllers;

use App\Models\football_club;
use App\Models\Fottbalers;
use App\Models\Image;
use Illuminate\Http\Request;

class Clubs extends Controller
{

    public function index()
    {

        $allClubs=football_club::all();

        return view('clubs/clubIndex',['allClubs'=>$allClubs]);

    }


    public function create()
    {
        return view('clubs/createClub');

    }


    public function store(Request $request)
    {
        football_club::create([
            'club_name'=>$request->club_name,
            'image'=>$request->image,


        ]);
        return redirect()->route('clubs.index');
    }


    public function show($id)
    {
        $pictures=Image::all();

        $Clubs=Fottbalers::all();
        return view('clubs/showPlayers',['Clubs'=>$Clubs,'id_club'=>$id,'pictures'=>$pictures]);
    }


    public function edit($id)
    {

        $clubs=football_club::find($id);
        return view('clubs/editClub',['clubs'=>$clubs]);
    }


    public function update(Request $request, $id)
    {
        $clubs=football_club::find($id);

        $clubs->update([
            'club_name'=>$request->club_name,
            'image'=>$request->image

        ]);
        return redirect()->route('clubs.index');
    }


    public function destroy($id)
    {
        $footballer=Fottbalers::all();
        $clubs=football_club::find($id);

        foreach ($footballer as $foot){
            if($foot->football_clubs_id==$id){
                $foot->delete();
            }
        }


        $clubs->delete();
        return redirect()->route('clubs.index');

    }
}
