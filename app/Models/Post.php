<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','content','category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function media(){
        return $this->hasMany(Media::class);
    }

    public function viewed_users(){
        return $this->hasMany(ActionLog::class, 'post_id');
    }

}
