<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    // polimorfica uno a uno - uno a muchos

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}