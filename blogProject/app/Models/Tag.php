<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table = 'tags';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $guarded = [];

    public function post() {
        return $this->belongsToMany(Post::class, 'post_tags');
    }


}
