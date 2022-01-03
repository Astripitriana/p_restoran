<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();
        return view('admin.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('admin.menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'kategori' => 'required',
        //     'harga' => 'required',
        //     'status' => 'required',

        // ]);

        $menu = new Menu;
//DB            CREATE
        $menu->nama = $request->nama;
        if ($request->hasFile('gambar_masakan')) {
            $image = $request->file('gambar_masakan');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/menu/', $name);
            $menu->gambar_masakan = $name;
        }
        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->status = $request->status;

        $menu->save();
        return redirect()->route('menu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('admin.menu.edit', compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'jk' => 'required',
        //     'alamat' => 'required',
        //     'no_hp' => 'required',

        // ]);

        $menu = Menu::findOrFail($id);
        $menu->nama = $request->nama;
        // upload image / foto

        if ($request->hasFile('gambar_masakan')) {
            $menu->deleteImage();
            $image = $request->file('gambar_masakan');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('image/menu/', $name);
            $menu->gambar_masakan = $name;
        }

        $menu->kategori = $request->kategori;
        $menu->harga = $request->harga;
        $menu->status = $request->status;
        $menu->save();

        return redirect()->route('menu.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $menu = Menu::findOrFail($id);
        $menu->deleteImage();
        $menu->delete();
        return redirect()->route('menu.index');

    }
}
