<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertemuan extends Model
{
    use HasFactory;
    protected $table = "pertemuan";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','pertemuan'];

    public function mulai(){
        return $this->hasMany(Mulai::class);
    }

}
