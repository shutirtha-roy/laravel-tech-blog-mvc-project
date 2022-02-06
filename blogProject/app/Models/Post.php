<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $guarded = [];

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class,'category_posts');
    }

    public function tag() {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
