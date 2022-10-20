<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = "Absensi";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'matkul_id','pertemuan_id','user_id','tgl','jammasuk','keterangan','file'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function matkul()
    {
        return $this->belongsTo(Matkul::class,'matkul_id','id');
    }
    public function pertemuan()
    {
        return $this->belongsTo(pertemuan::class);
    }
}
