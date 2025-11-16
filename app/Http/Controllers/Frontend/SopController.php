<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SopController extends Controller
{
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
            'nama_file' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen' => 'required|mimes:pdf|max:10240', // max 10MB
        ]);

        $dokumenPath = null;

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');

            // Generate nama file unik
            $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());

            // Upload ke public/storage/sops
            $destinationPath = public_path('storage/sops');

            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $dokumenPath = 'sops/' . $fileName;
        }

        Sop::create([
            'nama_file' => $request->nama_file,
            'tanggal' => $request->tanggal,
            'dokumen' => $dokumenPath,
        ]);

        return redirect()->route('admin.sops')->with('success', 'SOP berhasil ditambahkan');
    }

    public function edit($id)
    {
        $sop = Sop::findOrFail($id);
        return view('pages.admin.edit.editsop', compact('sop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_file' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'dokumen' => 'nullable|mimes:pdf|max:10240',
        ]);

        $sop = Sop::findOrFail($id);
        $dokumenPath = $sop->dokumen;

        if ($request->hasFile('dokumen')) {
            // Hapus file lama
            if ($sop->dokumen && File::exists(public_path('storage/' . $sop->dokumen))) {
                File::delete(public_path('storage/' . $sop->dokumen));
            }

            $file = $request->file('dokumen');
            $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());

            $destinationPath = public_path('storage/sops');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $dokumenPath = 'sops/' . $fileName;
        }

        $sop->update([
            'nama_file' => $request->nama_file,
            'tanggal' => $request->tanggal,
            'dokumen' => $dokumenPath,
        ]);

        return redirect()->route('admin.sops')->with('success', 'SOP berhasil diupdate');
    }

    public function destroy($id)
    {
        $sop = Sop::findOrFail($id);

        // Hapus file
        if ($sop->dokumen && File::exists(public_path('storage/' . $sop->dokumen))) {
            File::delete(public_path('storage/' . $sop->dokumen));
        }

        $sop->delete();

        return redirect()->route('admin.sops')->with('success', 'SOP berhasil dihapus');
    }
}
