<?php

namespace App\Export;

use App\Models\InventoryItem;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    public function collection()
    {
        return InventoryItem::all();
    }
}
