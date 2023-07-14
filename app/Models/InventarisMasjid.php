<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarisMasjid extends Model
{
    use HasFactory;
    protected $table = "inventaris_masjid";
    protected $guarded = ['id'];
    public $timestamps = false;


}
