<?php

namespace App\Http\Controllers;

use App\Models\Kalender;
use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function index()
    {
        $kalender = Kalender::all();
        return view('kalender.daftar_kalender', compact('kalender'));
    }
    public function tambah()
    {
        return view('kalender.tambah_kalender');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'tahun_ajaran' => 'required',
            'gambar' => 'required',
        ]);
        $data = $request->except(['_token']);
        if ($request->file('gambar')) {
            $namaGbr = time() . '.' . $request->file('gambar')->extension();
            $data['gambar'] = $request->file('gambar')->move('data_file/', $namaGbr);
        }
        Kalender::create($data);

        return redirect('admin/kalender');
    }

    public function destroy($id)
    {
        $item = Kalender::findOrFail($id);
        unlink($item->gambar);
        $item->delete();
        return redirect()->back();
    }

    public function edit(Request $request, $id)
    {
        $kalender = Kalender::findOrFail($id);
        return view('kalender.edit_kalender', compact('kalender'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'tahun_ajaran' => 'required',
            'gambar' => 'required',
        ]);

        $item = Kalender::findOrFail($id);
        $data = $request->except(['_token']);


        if ($request->file('gambar')) {

            if ($item->gambar != '') {
                unlink($item->gambar);
            }

            $namaGbr = time() . '.' . $request->file('gambar')->extension();
            $data['gambar'] = $request->file('gambar')->move('data_file/', $namaGbr);
        }
        $item->update($data);
        return redirect('admin/kalender');
    }

    public function tampil_home()
    {
        $kalender = Kalender::all();
        return view('welcome', compact('kalender'));
    }
}
