<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        "id", "user","password","tipo"
    ];

    protected $table = "table_auth";
}
