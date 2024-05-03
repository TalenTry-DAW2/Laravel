<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelShare extends Model
{
    use HasFactory;
    protected $table ="share";

    protected $primaryKey = 'ShareID';

    protected $fillable = [
        'UserID',
        'CompanyID',
        'ExpiredDate'
    ];

    public function user()
    {
        return $this->belongsTo(ModelUsers::class, 'UserID', 'UserID');
    }

    public function company()
    {
        return $this->belongsTo(ModelCompany::class, 'CompanyID', 'CompanyID');
    }

    const UPDATED_AT = null;
    const CREATED_AT = null;
}
