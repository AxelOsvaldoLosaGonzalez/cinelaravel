<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Descuento extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey="id";
    protected $fillable=["desc_desc","porcentaje"];
}
