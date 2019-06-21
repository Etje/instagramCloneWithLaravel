<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : '/uploads/P47GRN9H7MXVzr4t31tD7Fqd9QzURQXK63r4j3IM.png';
        return '/storage/' . $imagePath;
    }

    public function followers() {
        return $this->belongsToMany(User::class);
    }

    public function user() {
        return $this->belongsTo(user::class);
    }
}
