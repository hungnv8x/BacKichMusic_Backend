<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


        public function song()
        {
            return $this->hasMany(Song::class);
        }

        public function singer()
        {
            return $this->hasMany(Singer::class);
        }

        public function album()
        {
            return $this->hasMany(Album::class);
        }





}
