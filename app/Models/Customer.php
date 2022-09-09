<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    //protected $fillable = ['nama', 'no_ktp', 'no_hp', 'gender', 'alamat'];
    protected $guarded = [];
}
