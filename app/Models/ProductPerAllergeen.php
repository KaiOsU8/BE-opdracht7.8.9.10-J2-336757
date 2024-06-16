<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerAllergeen extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';    
    const CREATED_AT = 'DatumAangemaakt';

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'id');
    }
    
    public function allergeen()
    {
        return $this->belongsTo(Allergeen::class, 'AllergeenId', 'id');
    }

}
