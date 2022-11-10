<?php

namespace App\Services;

use Illuminate\Http\Request;

interface FootballService
{
 public function getAll();
 public function createPlayer(Request $request);
 public function getById($id);
 public function updatePlayer(Request $request,$id);
 public function deletePlayer($id);
}
