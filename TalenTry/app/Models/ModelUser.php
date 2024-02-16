<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUser extends Model
{
    use HasFactory;
    protected $table ="User";

    protected $fillable = [
        'name',
        'password',
        'email',
        'type',
        'phone'
    ];

    public function records()
    {
        return $this->hasMany(Record::class, 'DNI', 'DNI');
    }
}
