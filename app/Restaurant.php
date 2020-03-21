<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    public $fillable = ['period','menu_title','menu_desc','price'];
}
