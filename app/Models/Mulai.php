<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mulai extends Model
{
    use HasFactory;
    protected $table = "mulai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','matkul_id','pertemuan_id','start_time','end_time'];
    
   

    public function matkul(){
        return $this->belongsTo(Matkul::class);
    }

    public function pertemuan(){
        return $this->belongsTo(Pertemuan::class);
    }
    
}

