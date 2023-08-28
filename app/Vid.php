<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Vid extends Model
{
    use Translatable;
    protected $translatable = ['name','desc'];
}
