<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="directores";
    protected $primaryKey="id";
    protected $fillable=["nom_d","ap_d","am_d"];
}
