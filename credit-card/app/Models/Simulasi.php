<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulasi extends Model
{
    protected $table = 'simulasi';
    protected $fillable =['id', 'CODE_GENDER', 'FLAG_OW0_CAR', 'FLAG_OW0_REALT1', 'CNT_CHILDREN', 'AMT_INCOME_TOTAL', 'NAME_EDUCATION_TYPE', 'NAME_FAMILY_STATUS', 'NAME_HOUSING_TYPE', 'DAYS_BIRTH', 'DAYS_EMPLOYED', 'JOB','TARGET'];
}
