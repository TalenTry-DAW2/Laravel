<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelQA extends Model
{
    use HasFactory;
    protected $table ="QA";

    protected $fillable = [
        'RecordID',
        'QuestionID',
        'answer',
        'QuestionPoints',
        'StartDate',
        'FinishDate'
    ];

    public function record()
    {
        return $this->belongsTo(ModelRecord::class, 'RecordID', 'RecordID');
    }

    public function question()
    {
        return $this->belongsTo(ModelQuestion::class, 'QuestionID', 'QuestionID');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
