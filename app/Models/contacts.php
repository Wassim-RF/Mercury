<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contacts extends Model
{
    protected $fillable = [
        "name",
        "phone_number",
        "group_id"
    ];

    public function Group() {
        return $this->belongsTo(group::class);
    }
}
