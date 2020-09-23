<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menurestoran extends Model
{
    use HasFactory;
    protected $table = 'menuMakanan';
    protected $fillable = ['foto', 'nama', 'deskripsi', 'harga'];
}
