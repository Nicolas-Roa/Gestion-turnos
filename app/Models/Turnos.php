<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo;

class Turnos extends Model
{
    use HasFactory;

    protected function tipo(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                $tipo = Tipo::find($value);
                return $tipo->prefijo;
            }
        );
    }
}
