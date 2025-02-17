<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];


    public function polyLikes():MorphMany
    {
        return $this->morphMany(Like::class,'likeble');
    }

    //like gas many
}
