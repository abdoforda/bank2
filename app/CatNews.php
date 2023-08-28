<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class CatNews extends Model
{
    use Translatable;
    protected $translatable = ['name'];
    use HasFactory;

    public function news()
    {
        return $this->hasMany(News::class, 'cat_id');
    }
}
