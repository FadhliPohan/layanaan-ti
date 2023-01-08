<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    use HasFactory;
    protected $table = 'aduan';
    protected $primaryKey = 'id';
    protected $guarded = [];
    // protected $fillable=[];

    public $timestamps = true;

    
}