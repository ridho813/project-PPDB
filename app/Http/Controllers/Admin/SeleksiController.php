<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SeleksiController extends Controller
{
    public function index()
    {
        $seleksi = Siswa::all();
        return view('admin.seleksi', compact('seleksi'));
    }

    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Request $request, $id)
    {
        $data = DB::table('siswa')->where('id', $id)->first();

        $status = $data->seleksi_status;

        if ($status == '0') {
            DB::table('siswa')->where('id', $id)->update([
                'seleksi_status' => 1
            ]);
        }

        Session::flash('Success', 'Status Seleksi Siswa Berhasil di Ubah!');

        return redirect('admin/seleksi');
    }

    public function edit(User $Seleksi)
    {
        //
    }

    public function update(Request $request, User $Seleksi)
    {
        //
    }

    public function destroy(User $Seleksi)
    {
        $Seleksi->delete();
        return redirect('admin/seleksi')->with([
            'message' => 'Data Seleksi PPDB Siswa Berhasil di Hapus!',
            'type' => 'danger'
        ]);
    }
}
