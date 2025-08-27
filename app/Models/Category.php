<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan (opsional jika sesuai konvensi)
    protected $table = 'categories';

    // Primary key (opsional, default 'id')
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'name',
        'description',
        'status'
    ];

    // Jika tabel tidak menggunakan timestamps (created_at & updated_at)
    public $timestamps = true;
}
