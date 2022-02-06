<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];

    public function post() {
        return $this->belongsToMany(Post::class,'category_posts');
    }
}
