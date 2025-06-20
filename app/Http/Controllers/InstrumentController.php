<?php

namespace App\Http\Controllers;

use App\Models\Instrument;
use Illuminate\Http\Request;

class InstrumentController extends Controller
{
    public function index()
    {
        $instruments = Instrument::all();
        return view('admin.data_alatmusik',  compact('instruments'));
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'type' => 'required',
        'stock' => 'required|integer',
        'price' => 'required|integer',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('instruments', 'public');
    }

    Instrument::create([
        'name' => $request->name,
        'type' => $request->type,
        'stock' => $request->stock,
        'price' => $request->price,
        'image_path' => $imagePath,
    ]);

    return redirect()->back()->with('success', 'Alat musik berhasil ditambahkan.');
}
public function destroy($id)
{
    $instrument = Instrument::findOrFail($id);
    
    // Hapus gambar dari storage (jika ada)
    if ($instrument->image_path && \Storage::disk('public')->exists($instrument->image_path)) {
        \Storage::disk('public')->delete($instrument->image_path);
    }

    $instrument->delete();

    return redirect()->route('alatmusik.index')->with('success', 'Data berhasil dihapus');
}
}