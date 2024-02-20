<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUsers extends Model
{
    use HasFactory;
    protected $table ="Users";

    protected $fillable = [
        'name',
        'password',
        'email',
        'type',
        'phone'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Ensure the 'type' attribute is one of the specified options
            $allowedTypes = ['Usuario', 'Empresa', 'Administrador'];
            if (!in_array($model->type, $allowedTypes)) {
                throw new \InvalidArgumentException("Invalid 'type' value");
            }
        });
    }

    public function records()
    {
        return $this->hasMany(ModelRecord::class, 'DNI', 'DNI');
    }
}
