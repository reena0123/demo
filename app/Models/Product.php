<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
    	"name",
    	"brand_id",
    	"size",
    	"color",
    	"serial_number"
    ];

    public function brand()
    {
    	
    }
}
