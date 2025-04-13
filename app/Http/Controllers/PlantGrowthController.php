<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlantGrowth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class PlantGrowthController extends Controller
{
    // Menampilkan daftar data pertumbuhan tanaman
    public function index()
    {
        $plants = PlantGrowth::all(); // Ambil semua data dari database
    
        return view('plant-growth.index', compact('plants')); // Kirim data ke view
        
    }
    
    public function create()
    {
        return view('plant-growth.create');

    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'plant_type' => 'required|string',
            'activity_history' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan foto
        $photoPath = $request->file('photo')->store('plant_photos', 'public');

        // Prediksi waktu panen berdasarkan jenis tanaman
        $harvestTime = $this->predictHarvestTime($request->plant_type);

        // Simpan data ke database
        PlantGrowth::create([
            'user_id' => Auth::id(), // ✅ Tambahkan ini
            'plant_type' => $request->plant_type,
            'activity_history' => $request->activity_history,
            'photo' => $photoPath,
            'harvest_time' => $harvestTime,
        ]);

        return redirect()->route('plant_growth.index')->with('success', 'Data pertumbuhan tanaman berhasil disimpan! Perkiraan panen: ' . $harvestTime->format('d M Y'));
    }

    private function predictHarvestTime($plantType)
    {
        $today = Carbon::today();

        // Aturan prediksi panen berdasarkan jenis tanaman
        $harvestDays = match ($plantType) {
            'Padi' => 120, // 4 bulan
            'Jagung' => 90, // 3 bulan
            'Kedelai' => 100, // sekitar 3,5 bulan
            'Cabai' => 80,  // sekitar 2,5 bulan
            default => 100, // default 3 bulan lebih
        };

        return $today->addDays($harvestDays);
    }
    
}
