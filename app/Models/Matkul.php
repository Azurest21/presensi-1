<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    use HasFactory;
    protected $table = "matkul";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','matkul','dosen_nidn','user_id','sks', 'tahun_id'];

    public function Absensi(){
        return $this->hasMany(Absensi::class);
    }    
    public function mulai(){
        return $this->hasMany(Mulai::class);
    }

    public function Tahun(){
        return $this->belongsTo(Tahun::class);
    }
    public function Dosen(){
        return $this->belongsTo(Dosen::class);
    }
    public function Krs(){
        return $this->hasMany(Krs::class);
    }
    public function Ijin(){
        return $this->hasMany(Ijin::class);
    }  
}
