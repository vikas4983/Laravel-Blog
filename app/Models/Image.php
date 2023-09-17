<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // public $uploadDirectory = 'storage/auth/posts';
    public const POST_IMAGE = 1;
    
    protected $fillable = ['image','image1','type'];

    // public function image(): Attribute{
    //     return Attribute::make(
    //         get: fn ($image) => $this->uploadDirectory.$image
    //     );
    // }
}
