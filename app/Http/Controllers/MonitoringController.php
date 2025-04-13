<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlantGrowth;
use Illuminate\Support\Facades\Storage;

class MonitoringController extends Controller
{
    public function index()
    {
        $plantGrowths = PlantGrowth::latest()->get();
        return view('monitoring.index', compact('plantGrowths'));
    }

    public function create()
    {
        return view('monitoring.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'plant_type' => 'required|string',
            'activity_history' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'harvest_time' => 'required|date',
        ]);

        // Proses simpan foto ke folder "plant_photos"
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('plant_photos', 'public');
        }

        // Simpan ke DB
        PlantGrowth::create([
            'plant_type' => $validated['plant_type'],
            'activity_history' => $validated['activity_history'],
            'photo' => $photoPath,
            'harvest_time' => $validated['harvest_time'],
        ]);

        return redirect()->route('monitoring.index')->with('status', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $plantGrowth = PlantGrowth::findOrFail($id);

        if ($plantGrowth->photo) {
            Storage::disk('public')->delete($plantGrowth->photo);
        }

        $plantGrowth->delete();

        return redirect()->route('monitoring.index')->with('status', 'Data berhasil dihapus!');
    }
}
