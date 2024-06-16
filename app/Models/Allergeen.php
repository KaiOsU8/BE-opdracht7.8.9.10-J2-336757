<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergeen extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';
    
    public function productPerAllergeen()
    {
        return $this->hasMany(ProductPerAllergeen::class, 'AllergeenId', 'id');
    }
}
