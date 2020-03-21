<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    protected $fillable = ['image','position','caption','caption_direction','caption_transition','header_transition','header_text','header_direction','para_transition','para_direction','para_text','height'];
}
