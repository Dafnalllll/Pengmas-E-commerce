<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sops = Sop::latest()->get();
        return view('pages.admin.sop', compact('sops'));
    }

    public function create()
    {
        return view('pages.admin.add.addsop');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_file'     => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen'          => 'nullable|mimes:pdf|max:15360', // max 15MB',
        ]);

        $filePath = null;
        if ($request->hasFile('dokumen')) {
            $filePath = $request->file('dokumen')->store('sops', 'public');
        }

        Sop::create([
            'nama_file'     => $request->nama_file,
            'tanggal' => $request->tanggal,
            'dokumen'          => $filePath,
        ]);

        return redirect()->route('admin.sops')->with('success', 'SOP berhasil ditambahkan');
    }

    public function edit($id)
    {
        $sop = Sop::findOrFail($id);
        return view('pages.admin.edit.sop', compact('sop'));
    }

    public function update(Request $request, $id)
    {
        $sop = Sop::findOrFail($id);

        $request->validate([
            'nama_file'     => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen'       => 'nullable|mimes:pdf|max:15360', // max 15MB',
        ]);

        $filePath = $sop->dokumen; // Pertahankan file lama jika tidak ada file baru yang di-upload
        if ($request->hasFile('dokumen')) {
            // Hapus file lama dari storage jika ada
            if ($sop->dokumen) {
                Storage::disk('public')->delete($sop->dokumen);
            }
            $filePath = $request->file('dokumen')->store('sops', 'public');
        }

        $sop->update([
            'nama_file'     => $request->nama_file,
            'tanggal' => $request->tanggal,
            'dokumen'          => $filePath,
        ]);

        return redirect()->route('admin.sops')->with('success', 'SOP berhasil diperbarui');
    }

    public function destroy($id)
    {
        $sop = Sop::findOrFail($id);
        // Hapus file dari storage jika ada
        if ($sop->dokumen) {
            Storage::disk('public')->delete($sop->dokumen);
        }
        $sop->delete();
        return redirect()->route('admin.sops')->with('success', 'SOP berhasil dihapus');
    }
}
