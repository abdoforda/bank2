<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Support\Str;

class Video extends Model
{
    use Translatable;
    protected $translatable = ['name', 'short_desc','content'];
    protected $appends = array('slug');

    public function getSlugAttribute()
    {
        return route('technical_analysis_videos_show', [app()->getLocale(), Str::slug($this->getTranslatedAttribute('name', 'en'))]);
    }

}
