<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Videos extends Model
{
    use HasFactory;

    protected $guarded = [];

        public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggleable');
    }
}

