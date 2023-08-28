<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Str;


class News extends Model
{
    use Translatable;
    protected $translatable = ['name', 'short_desc','content'];
    protected $appends = array('slug');

    public function cat()
    {
        return $this->belongsTo('App\CatNews', 'cat_id');
    }

    public function setSlugAttribute($vv)
    {
        if($vv == null){
            $this->attributes['slug'] = Str::slug($this->getTranslatedAttribute('name', 'en'));
        }else{
            $this->attributes['slug'] = Str::slug($vv);
        }

    }

    public function getSlugAttribute($vv)
    {
        return $vv;
    }
}
