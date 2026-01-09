<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    // แสดงข้อมูลทั้งหมด
    public function index()
    {
        $pokedexs = Pokedex::all();
        return view('pokedexs.index', compact('pokedexs'));
    }

    // แสดงฟอร์มเพิ่มข้อมูล
    public function create()
    {
        return view('pokedexs.create');
    }

    // บันทึกข้อมูล (INSERT)
    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required|string',
        'type' => 'required|string',
        'species' => 'required|string',
        'height' => 'required|integer',
        'weight' => 'required|integer',
        'hp' => 'required|numeric',
        'attack' => 'required|numeric',
        'defense' => 'required|numeric',
        'image_url' => 'required|string',
    ]);

    Pokedex::create($request->all());
    return redirect('/pokedexs');
    }


    // แสดงฟอร์มแก้ไข
    public function edit($id)
    {
        $pokedex = Pokedex::find($id);
        return view('pokedexs.edit', compact('pokedex'));
    }

    // แก้ไขข้อมูล (UPDATE)
    public function update(Request $request, $id)
    {
        $pokedex = Pokedex::find($id);
        $pokedex->update($request->all());
        return redirect('/pokedexs');
    }

    // ลบข้อมูล (DELETE)
    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect('/pokedexs');
    }
}
