<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DoctorTranslation extends Model
{
    use HasFactory;
    protected $fillable= ['name','appointments'];
    public $timestamps=false;

}
