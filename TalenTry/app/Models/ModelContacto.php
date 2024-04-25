<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelContacto extends Model
{
    use HasFactory;
    protected $table ="contacto";

    protected $fillable = [
        'UserID',
        'nombre',
        'email',
        'mensaje'
    ];

    public function user()
    {
        return $this->belongsTo(ModelUsers::class, 'UserID', 'UserID');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
