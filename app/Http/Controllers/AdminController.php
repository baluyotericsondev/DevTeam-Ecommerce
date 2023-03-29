<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

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
        return view('add-product');
    }

    public function show_product()
    {
        $items = Item::all();
        return view('home', compact('items'));
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
        return redirect('/add-product');
    }
}
