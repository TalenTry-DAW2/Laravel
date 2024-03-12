<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelRecord extends Model
{
    use HasFactory;
    protected $table ="record";

    protected $fillable = [
        'UserID',
        'score',
        'StartDate',
        'FinishDate'
    ];

    public function user()
    {
        return $this->belongsTo(ModelUsers::class, 'UserID', 'UserID');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
