<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelQuestion extends Model
{
    use HasFactory;
    protected $table ="Question";

    protected $fillable = [
        'question',
        'CategoryID'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryID', 'CategoryID');
    }

    public function answers()
    {
        return $this->hasMany(Answer::class, 'QuestionID', 'QuestionID');
    }
}
