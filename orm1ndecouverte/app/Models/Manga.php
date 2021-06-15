<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function dessinateur() {
        return $this->belongsTo(Dessinateur::class);
    }

    public function scenariste() {
        return $this->belongsTo(Scenariste::class);
    }

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

}
