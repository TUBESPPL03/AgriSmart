<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExpertiseController extends Controller
{
    public function index()
    {
        $expertises = Expertise::all();
        return view('expertises.index', compact('expertises'));
    }

    public function create()
    {
        return view('expertises.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bidang_keahlian' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'sertifikat' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('bidang_keahlian', 'durasi');

        if ($request->hasFile('sertifikat')) {
            $data['sertifikat'] = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        Expertise::create($data);

        return redirect()->route('expertises.index')->with('success', 'Data keahlian berhasil ditambahkan.');
    }

    public function edit(Expertise $expertise)
    {
        return view('expertises.edit', compact('expertise'));
    }

    public function update(Request $request, Expertise $expertise)
    {
        $request->validate([
            'bidang_keahlian' => 'required|string|max:255',
            'durasi' => 'required|integer',
            'sertifikat' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048'
        ]);

        $data = $request->only('bidang_keahlian', 'durasi');

        if ($request->hasFile('sertifikat')) {
            // Hapus sertifikat lama jika ada
            if ($expertise->sertifikat && Storage::disk('public')->exists($expertise->sertifikat)) {
                Storage::disk('public')->delete($expertise->sertifikat);
            }

            $data['sertifikat'] = $request->file('sertifikat')->store('sertifikat', 'public');
        }

        $expertise->update($data);

        return redirect()->route('expertises.index')->with('success', 'Data keahlian berhasil diperbarui.');
    }

    public function destroy(Expertise $expertise)
    {
        // Hapus file sertifikat jika ada
        if ($expertise->sertifikat && Storage::disk('public')->exists($expertise->sertifikat)) {
            Storage::disk('public')->delete($expertise->sertifikat);
        }

        $expertise->delete();
        return redirect()->route('expertises.index')->with('success', 'Data keahlian berhasil dihapus.');
    }
}
