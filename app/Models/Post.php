<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     public const PUBLISH= 1;
     public const DRAFT = 0;

    use HasFactory;
    protected $fillable = ['image_id','user_id', 'category_id', 'title', 'description', 'status'];
    
    

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function image(){
   
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
    
}
