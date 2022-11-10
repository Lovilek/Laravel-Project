<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Fottbalers;
use App\Services\FootballService;
use Illuminate\Http\Request;

class FootballerControllerApi extends Controller
{
    protected $footballService;
    public function __construct(FootballService $footballService)
    {

        $this->footballService=$footballService;
    }

    public function index(){
         try{
             $football= $this->footballService->getAll();

             return response()->json([

                 'status'=>true,
                 'football'=>$football
             ]);
         }catch (\Exception $exception){
             return response()->json([
                 'status'=>false,
                 'message'=>$exception->getMessage()
             ],$exception->getCode());
         }
    }
    public function create(Request $request)
    {
        $this->footballService->createPlayer($request);


    }
    public function findId($id){
        $football= $this->footballService->getById($id);

        return response()->json([

            'status'=>true,
            'football'=>$football
        ]);
    }
    public function update(Request $request,$id)
    {
        $this->footballService->updatePlayer($request,$id);


    }
    public function delete($id)
    {
        $this->footballService->deletePlayer($id);


    }
}
