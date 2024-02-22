<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRecord extends Model
{
    use HasFactory;
    protected $table ="Record";

    protected $fillable = [
        'DNI',
        'score',
        'StartDate',
        'FinishDate'
    ];

    public function user()
    {
        return $this->belongsTo(ModelUsers::class, 'DNI', 'DNI');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
