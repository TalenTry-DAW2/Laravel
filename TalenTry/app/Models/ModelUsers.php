<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ModelUsers extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table ="users";
    protected $primaryKey = 'UserID';
    protected $fillable = [
        'DNI',
        'name',
        'password',
        'email',
        'phone',
        'photo',
        'type',
        'visibility'
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($model) {
    //         // Ensure the 'type' attribute is one of the specified options
    //         $allowedTypes = ['Usuario', 'Empresa', 'Administrador'];
    //         if (!in_array($model->type, $allowedTypes)) {
    //             throw new \InvalidArgumentException("Invalid 'type' value");
    //         }
    //     });
    // }

    public function records()
    {
        return $this->hasMany(ModelRecord::class, 'DNI', 'DNI');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
