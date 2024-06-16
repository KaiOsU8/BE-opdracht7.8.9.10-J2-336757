<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = ['Naam', 'ContactPersoon', 'LeverancierNummer', 'Mobiel',];


    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'LeverancierId', 'id');
    }

    public function contact()
    {
        return $this->hasOne(Contact::class, 'id', 'ContactId');
    }

}
