<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [

        "anno",
        "mese",
        "giorno",
        "ora",
        "minuto"
    ];


    public $timestamps = false;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
