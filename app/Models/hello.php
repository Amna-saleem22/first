<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hello extends Model
{
    use HasFactory;
    protected $table ="hello";
    protected $primaryKey = "id";
}
