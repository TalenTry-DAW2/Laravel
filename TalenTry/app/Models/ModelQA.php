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
        'AnswerID',
        'QuestionID',
        'StartDate',
        'FinishDate'
    ];

    public function record()
    {
        return $this->belongsTo(Record::class, 'RecordID', 'RecordID');
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class, 'AnswerID', 'AnswerID');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'QuestionID', 'QuestionID');
    }
}
