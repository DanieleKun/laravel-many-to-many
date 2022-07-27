<?php

namespace App\Models;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Slugger;

    protected $fillable = [
        'title', 'content', 'excerpt', 'category_id', 'image', 'slug'
    ];

    // static protected $slugColumnName = 'percorso';
    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function users() {
        return $this->belongsTo('App\Models\User');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
