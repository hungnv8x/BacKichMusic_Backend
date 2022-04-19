<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function singer()
    {
        return $this->belongsTo(Singer::class);
    }

    public function song()
    {
        return $this->belongsTo(Song::class);
    }

    
}
