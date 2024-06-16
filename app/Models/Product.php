<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    public function magazijn()
    {
        return $this->hasMany(Magazijn::class, 'ProductId', 'id');
    }

    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'ProductId', 'id');
    }

    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'ProductId', 'id');
    }

    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class);
    }

}
