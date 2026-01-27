<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    protected $fillable = [
        "name",
        "logo",
        "color"
    ];

    public function Contact() {
        return $this->hasMany(contacts::class);
    }
}
