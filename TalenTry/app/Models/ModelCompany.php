<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCompany extends Model
{
    use HasFactory;
    protected $table ="Company";

    protected $fillable = [
        'name',
        'NIF',
        'address',
        'password',
        'UserID'
    ];

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
