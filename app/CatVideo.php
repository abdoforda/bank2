<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CatVideo extends Model
{
    use Translatable;
    protected $translatable = ['name'];

    public function videos()
    {
        return $this->hasMany(Vid::class, 'catVideo_id');
    }
}
