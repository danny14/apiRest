<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoInhalador extends Model
{
   public $timestamps = false;
   protected $fillable = ['id','tipo_inhalador','cantidad'];
}
