<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cine extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey="id_ciudad";
    protected $fillable=["calle","numero","telefono"];

    public function getCiudad()
    {
        return$this->hasOne(Ciudad::class,"id_ciudad","id_ciudad");
    }
}
