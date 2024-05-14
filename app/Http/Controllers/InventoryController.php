<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Models\InventoryItem;
use App\Models\InventoryItemHistory;

class InventoryController extends Controller
{
    //
    public function index(){
        $items = InventoryItem::orderBy('id', 'asc')->get();
        return view('inventory.itemview', compact('items'));
    }
    public function edit(InventoryItem $item)
    {
        return view('inventory.edit', compact('item'));
    }

    public function update(Request $request, InventoryItem $item)
    {
        $item->update($request->all());

        $history = new InventoryItemHistory();
        $history->user_id = 1;
        $history->user_type = 2;
        $history->item_id = $item->id;
        $history->ref_type = "ItemUpdate";
        $history->note = "User Update the Inventory Item";
        $history->status = 1;
        $history->save();
        
        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(InventoryItem $item)
    {
        // $item->delete();
        $item = InventoryItem::where('id', $item->id)->first();
        $item->status = 0;
        $item->save();
        $history = new InventoryItemHistory();
        $history->user_id = 1;
        $history->user_type = 2;
        $history->item_id = $item->id;
        $history->ref_type = "ItemDelete";
        $history->note = "User Delete the Inventory Item";
        $history->status = 1;
        $history->save();
        return redirect()->route('items.index')->with('success', 'Item deleted successfully.');
    }
    public function create()
    {
        return view('inventory.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'quantity_in_stock' => 'required|integer|min:0',
        ]);

        $item = new InventoryItem();
        $item->name = $validatedData['name'];
        $item->description = $validatedData['description'];
        $item->price = $validatedData['price'];
        $item->quantity_in_stock = $validatedData['quantity_in_stock'];
        $item->save();

        $history = new InventoryItemHistory();
        $history->user_id = 1;
        $history->user_type = 2;
        $history->item_id = $item->id;
        $history->ref_type = "ItemCreate";
        $history->note = "User Create a New Inventory Item";
        $history->status = 1;
        $history->save();

        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }
    public function showHistory(InventoryItem $item){
        $data = InventoryItemHistory::where('item_id', $item['id'])
            ->leftJoin('inventory_items', 'inventory_items.id', 'inventory_item_histories.item_id')->select("inventory_item_histories.*", 'inventory_items.name')->get();
            // return $data;
        return view('inventory.history', compact('data'));
    }

    // Sub Admin --- 
    public function subAdminList(){
        $users = AdminUser::where('user_type', 2)->orderBy('id', 'asc')->get();
        return view('subadmin.subAdminList', compact('users'));
    }
    public function subAdminCreate()
    {
        $data = '';
        return view('subadmin.subAdminCreate', compact('data'));
    }
}
