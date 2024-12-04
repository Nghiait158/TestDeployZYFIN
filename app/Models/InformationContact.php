<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationContact extends Model
{
    use HasFactory;

    protected $table = 'get_in_touch_trinhvantrungnghia'; 

    protected $fillable = [
        'contact_name', 
        'contact_email', 
        'contact_country', 
        'contact_company', 
        'contact_support', 
        'contact_details', 
    ];

    public $timestamps = true; 
}
