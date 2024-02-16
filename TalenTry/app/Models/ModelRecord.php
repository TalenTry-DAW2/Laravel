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
        return $this->belongsTo(User::class, 'DNI', 'DNI');
    }
}
