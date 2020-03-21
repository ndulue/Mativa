<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['image1','image2','image3','image4','image5','room_desc','add_desc','title','price','feature1','feature2','feature3'];
}
