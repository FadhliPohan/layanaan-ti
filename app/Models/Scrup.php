<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scrup extends Model
{
    use HasFactory;
    protected $table = 'scrup';
    protected $primaryKey = 'id';
    // protected $fillable = [];
    protected $guarded = [];
    public $timestamps = true;
}
