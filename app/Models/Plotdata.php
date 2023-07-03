<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plotdata extends Model
{
    use HasFactory;
    protected $table = "plotdatas";
    protected $primaryKey = "id";
}
