<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;
    protected $table = "surat";
    protected $primarykey = "id";
    protected $fillable = [
        'id','nama_surat','isi_surat', 'min_nilai', 'maks_nilai'];
    public $timestamps = false;
     
}
