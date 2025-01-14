<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandProduct extends Model
{
    use HasFactory;

    protected $table ='command_product';

    protected $fillable = [
        'command_id',
        'product_id'
    ];
}
