<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function products()
    {
        return view('products');
    }

    public function product_details()
    {
        return view('product-details');
    }
    public function create_product()
    {
        return view('dashboard.products');
    }

    public function show_product()
    {
        $items = Item::all();
        return view('home', compact('items'));
    }

    public function admin_dashboard()
    {
        $items = Item::all();
        return view('dashboard.index', compact('items'));
    }
    public function admin_charts()
    {
        $items = Item::all();
        return view('dashboard.charts', compact('items'));
    }

    public function admin_tables()
    {
        $items = Item::all();
        return view('dashboard.tables', compact('items'));
    }

    public function show($id)     //Can pass either id or item parameter
    {
        $items = Item::find($id);
        return view('dashboard.edit-product',  ['item' => $items]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
            'product_quantity' => 'required',
        ]);

        $items = Item::find($id);
        $items->product_name = $request->product_name;
        $items->product_price = $request->product_price;

        $image = $request->product_image;
        $imagename = time() . '.' . $image->extension();
        $request->product_image->move('itemImage', $imagename);
        $items->product_image = $imagename;

        $items->product_description = $request->product_description;
        $items->product_category = $request->product_category;
        $items->product_quantity = $request->product_quantity;
        $items->save();
        return back()->with('success', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect('/admin-tables')->with('success', 'Product Deleted Successfully');
    }

    public function store_product(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_image' => 'required',
            'product_description' => 'required',
            'product_category' => 'required',
            'product_quantity' => 'required',
        ]);

        $item = new Item();
        $item->product_name = $request->product_name;
        $item->product_price = $request->product_price;

        $image = $request->product_image;
        $imagename = time() . '.' . $image->extension();
        $request->product_image->move('itemImage', $imagename);
        $item->product_image = $imagename;

        $item->product_description = $request->product_description;
        $item->product_category = $request->product_category;
        $item->product_quantity = $request->product_quantity;

        $item->save();
        return redirect('/add-product')->with('success', 'Product Added Successfully');
    }
}
