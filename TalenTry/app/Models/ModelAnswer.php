<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAnswer extends Model
{
    use HasFactory;
    protected $table ="Answer";

    protected $fillable = [
        'answer',
        'QuestionID',
        'QuestionPoints'
    ];
}
