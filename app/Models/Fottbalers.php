<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fottbalers extends Model
{
    use HasFactory;
    protected $fillable=['name','surname','club','position','age','price','image_id'];

}
