<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = [
        'Aantal',
        'DatumEerstVolgendeLevering',
        'DatumLevering',
        'ProductId',
        'LeverancierId',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'ProductId', 'id');
    }
    
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'LeverancierId', 'id');
    }
}
