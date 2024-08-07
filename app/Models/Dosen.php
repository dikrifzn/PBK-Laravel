<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // kolom mana saja yang boleh di di isi user
    protected $fillable = ["nama", "pengampu"];

    // kolom mana saja yang tidak boleh di isi user
    protected $guarded = ["id"];
}
