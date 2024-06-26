<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    use HasFactory;
    protected $table ="Category";

    protected $fillable = [
        'CategoryName',
        'description',
        'image'
    ];

    public function questions()
    {
        return $this->hasMany(ModelQuestion::class, 'CategoryID', 'CategoryID');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
