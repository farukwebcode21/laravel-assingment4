<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name'];

    public function products(){
        return $this->hasMany(Product::class);
    }
    public function posts(){
        $posts =  $this->hasMany(Post::class);
        foreach($posts as $post){
            echo "Post :".$post->title. "\n";
        }
    }
}
