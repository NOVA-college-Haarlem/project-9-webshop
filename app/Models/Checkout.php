<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
        'tussenvoegsel',
        'achternaam',
        'email',
        'telefoonnummer',
        'land',     
        'postcode',
        'huisnummer',
        'straat',
        'woonplaats',
        'facatuursadress1',
        'facatuursadress2',
    ];
}