<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $table = "pengurus";
    protected $guarded = ['id'];
    public  $timestamps = false;

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
