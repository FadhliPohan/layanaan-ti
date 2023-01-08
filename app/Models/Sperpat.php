<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sperpat extends Model
{
    use HasFactory;
    protected $table = 'sperpat';
    protected $primaryKey = 'id';

    // protected $fillable =[];
    protected $guarded = [];

    public $timestamps = true;
}
