<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $item = Item::oldest()->paginate(10);
        if ($request->wantsJson()) {
            return response()->json($item);
        }
        return view('pages.app.manage_item.index', compact('item'))
            ->with('i', (request()->input('page', 1) - 1) * 10);;
    }

    /**
     * Store a newly created resource in storage.
     */

    public function create()
    {
        return view('pages.app.manage_item.create',);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|max:100',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|max:100',
        ]);

        $item = Item::create($request->all());
        if ($request->wantsJson()) {
            return response()->json([
                'message'=>'item berhasil ditambahkan',
                "item" => $item,
            ]);
        }
        return redirect()->route('Item.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_item)
    {
        $item = Item::findOrFail($id_item);
        return view('pages.app.manage_item.show', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function edit($id_item)
    {
        $item = Item::find($id_item);
        return view('pages.app.manage_item.edit', compact('item'));
    }


    public function update(Request $request, $id_item)
    {
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required|numeric',
            'harga' => 'required|numeric',
            'deskripsi' => 'required|max:100',

        ]);



        $item = Item::find($id_item);
        $item->update($request->all());
        if ($request->wantsJson()) {
            return response()->json([
                'message'=>'item berhasil diperbarui',
                "item" => $item
            ]);
        }
        return redirect()->route('Item.index')->with('success', 'Item berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_item, Request $request)
{
    $item = Item::find($id_item);

    if (!$item) {
        return response()->json(['message' => 'Item tidak ditemukan'], 404);
    }

    $item->delete();

    if ($request->wantsJson()) {
        return response()->json([
            'message' => 'Item berhasil dihapus'
        ]);
    }

    return redirect()->route('Item.index')->with('success', 'Item berhasil dihapus');
}

}
