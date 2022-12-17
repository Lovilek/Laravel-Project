<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class football_club extends Model
{
    use HasFactory;
    protected $fillable=['club_name', 'image'];

}
