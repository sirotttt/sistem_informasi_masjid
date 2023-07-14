<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = "jabatan";
    protected $guarded = ['id'];
    public $timestamps = false;

    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
}
