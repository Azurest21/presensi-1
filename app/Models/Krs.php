<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    use HasFactory;
    protected $table = "krs";
    protected $primarykey = "id";
    protected $fillable = [
        'id','matkul_id','user_id'];

        public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function matkul()
    {
        return $this->belongsTo(Matkul::class);
    }
}
