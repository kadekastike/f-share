<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;
    protected $table = 'jurnal';
    protected $primaryKey = 'jurnal_id';
    public $incrementing = true;
    protected $fillable = ['judul_jurnal', 'file', 'kategori', 'tipe', 'nama_user'];
    public $timestamps = false;

}
