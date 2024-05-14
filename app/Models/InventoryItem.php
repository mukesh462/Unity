<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    use HasFactory;
    protected $table = 'inventory_items';
    protected $fillable = ['name', 'price', 'quantity_in_stock', 'description', 'status', 'id'];

}
