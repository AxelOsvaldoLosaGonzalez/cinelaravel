<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clasificacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="clasificaciones";
    protected $primaryKey="id";
    protected $fillable=["desc_clas"];
}
