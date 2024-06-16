<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    protected $fillable = ['Straat', 'Huisnummer', 'Postcode', 'Stad'];
    
    public function leverancier()
    {
        return $this->belongsTo(Leverancier::class, 'ContactId', 'id');
    }
}
