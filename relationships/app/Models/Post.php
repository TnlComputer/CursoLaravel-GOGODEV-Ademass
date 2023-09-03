<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // polimorfica uno a uno
    //     public function image(): MorphOne
    // {
    //     return $this->morphOneMorphOne(Image::class, 'imageable');
    // }

    // polimorfica uno a muchos
    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    // polimorfica muchos a muchos

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggleable');
    }
}
