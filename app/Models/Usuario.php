<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        "id", "user","password","id_profesor"
    ];

    protected $table = "table_auth";
}
