<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'tbl_user'; // Nama tabel di database
    protected $primaryKey = 'id_user'; // Primary key
    public $timestamps = false; // Jika tidak ada created_at dan updated_at

    protected $fillable = [
        'nama_lengkap',
        'no_telp',
        'email',
        'password',
        'level',
    ];

    protected $hidden = [
        'password',
    ];

}
