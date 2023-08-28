<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Cat extends Model
{
    use HasTranslations;
    public $translatable = ['title'];
    
    protected $fillable = [
        'title',
    ];

}
