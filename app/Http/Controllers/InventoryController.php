<?php

namespace App\Http\Controllers;

use App\Export\ProductExport;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use App\Models\InventoryItem;
use App\Models\InventoryItemHistory;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class InventoryController extends Controller
{
    //
    public function index()
    {
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
        $user = auth()->user();
        $history->user_id = $user->id;
        $history->user_type = $user->user_type;
        $history->item_id = $item->id;
        $history->ref_type = "ItemUpdate";
        $history->note = "User Update the Inventory Item";
        $history->status = 1;
        $history->save();
        $toast =  [
            'type' => 'success',
            'message' => 'updated Successfully'
        ];
        Session::put('toast', $toast);

        return redirect()->route('items.index')->with('success', 'Item updated successfully.');
    }

    public function destroy(InventoryItem $item)
    {
        // $item->delete();
        $item = InventoryItem::where('id', $item->id)->first();
        $item->status = 0;
        $user = auth()->user();
        $history = new InventoryItemHistory();
        $history->user_id = $user->id;
        $history->user_type = $user->user_type;
        $history->item_id = $item->id;
        $history->ref_type = "ItemDelete";
        $history->note = "User Delete the Inventory Item";
        $history->status = 1;
        $history->save();
        $item->delete();
        $toast =  [
            'type' => 'success',
            'message' => 'deleted Successfully'
        ];
        Session::put('toast', $toast);
        return redirect()->route('items.index');
    }
    public function userDestroy(AdminUser $item)
    {

        $item->delete();
        $toast =  [
            'type' => 'success',
            'message' => 'deleted Successfully'
        ];
        Session::put('toast', $toast);
        return redirect()->route('subAdmin.list');
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
        $user = auth()->user();
        $history->user_id = $user->id;
        $history->user_type = $user->user_type;
        $history->item_id = $item->id;
        $history->ref_type = "ItemCreate";
        $history->note = "User Create a New Inventory Item";
        $history->status = 1;
        $history->save();
        $toast =  [
            'type' => 'success',
            'message' => 'added Successfully'
        ];
        Session::put('toast', $toast);
        return redirect()->route('items.index')->with('success', 'Item created successfully.');
    }
    public function showHistory(InventoryItem $item)
    {
        $data = InventoryItemHistory::where('item_id', $item['id'])
            ->leftJoin('inventory_items', 'inventory_items.id', 'inventory_item_histories.item_id')
            ->leftJoin('admin_users', 'admin_users.id', 'inventory_item_histories.user_id')
            ->select("inventory_item_histories.*", 'inventory_items.name', 'admin_users.first_name')->get();

        // return $data;
        return view('inventory.history', compact('data'));
    }

    // Sub Admin --- 
    public function subAdminList()
    {
        $users = AdminUser::where('user_type', 2)->orderBy('id', 'asc')->get();
        return view('subadmin.subAdminList', compact('users'));
    }
    public function subAdminCreate(Request $request)
    {
        if ($request->id) {
            $data = AdminUser::where('id', $request->id)->first();
        } else {
            $data = '';
        }
        return view('subadmin.subAdminCreate', compact('data'));
    }
    public function subadmin_save(Request $request)
    {
        // return $request->user_id;
        $validatedData = $request->validate([
            'first_name' => 'required',
            'dob' => 'required',
            'mobile' => 'required',
            'username' => 'required',
            'password' => 'required',
            'access_menu' => 'required',
        ]);
        if ($request->user_id) {
            $formData = AdminUser::where('id', $request->user_id);
            $validatedData['access_menu'] = json_encode($validatedData['access_menu']);
            $formData->update($validatedData);
        } else {
            $validatedData['password'] = Hash::make($validatedData['password']);
            $validatedData['username'] = $validatedData['username'];
            $validatedData['user_type'] = 2;
            $validatedData['access_menu'] = json_encode($validatedData['access_menu']);
            $validatedData['last_name'] = isset($request->last_name) && $request->last_name  != "" ? $request->last_name  : null;
            $validatedData['address'] = isset($request->address) && $request->address  != "" ? $request->address  : null;
            $validatedData['city'] = isset($request->city) && $request->city  != "" ? $request->city  : null;
            $validatedData['state'] = isset($request->state) && $request->state  != "" ? $request->state  : null;
            $validatedData['pincode'] = isset($request->pincode) && $request->pincode  != "" ? $request->pincode  : null;

            AdminUser::create($validatedData);
        }
        $toast =  [
            'type' => 'success',
            'message' => 'Saved Successfully'
        ];
        Session::put('toast', $toast);

        return redirect()->route('subAdmin.list');
    }
    function exportPdf()
    {
        // $dompdf = new Dompdf();
        $items = InventoryItem::orderBy('id', 'asc')->get();
        // $html = view('inventory.inventoryPdf', compact('items'))->render();
        // $dompdf->loadHtml($html);
        // $dompdf->setPaper('A4', 'portrait');
        $pdf = PDF::loadView('inventory.inventoryPdf', compact('items'));

        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="indexmember.pdf"',
        ];
        return  $pdf->download('inventory.pdf');
    }
    public function exportExcel()
    {
        return Excel::download(new ProductExport, 'invoices.xlsx');
    }
    public function productSearch(Request $request)
    {
        $current_user = InventoryItem::whereRaw('LOWER(name) LIKE ?', ["%{$request->q}%"])->orderbydesc('id')->get();
        if ($current_user->isEmpty()) {
            return response()->json(['message' => 'No items found'], 404);
        }
        return response()->json(['data' => $current_user]);
    }
    public function productSearchView(Request $request)
    {
        return view('inventory.search');
    }
}
