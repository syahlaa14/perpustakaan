<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contacts';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'nama', 'email', 'pesan'];
    use HasFactory;
}
