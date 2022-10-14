<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quisioner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuisionerController extends Controller
{
    public function index()
    {
        $Quisioner = Quisioner::latest()->get();
        return view('admin.quisioner', compact('Quisioner'));
    }

    public function create(Request $request)
    {
        //
    }

    public function store(Request $request)
    {
        $Quisioner = new Quisioner([
            'quisioner' => $request->quisioner,
            'quisioner_deskripsi' => $request->quisioner_deskripsi,
            'quisioner_status' => 0,
        ]);
        $Quisioner->save([]);
        return redirect()->route('quisioner')
            ->with('success', 'Quisioner created successfully.');
    }

    public function show($id)
    {
        $data = DB::table('quisioner')->where('id', $id)->first();

        $quisioner_status = $data->quisioner_status;

        if ($quisioner_status == 0) {
            DB::table('quisioner')->where('id', $id)->update([
                'quisioner_status' => 1
            ]);
        } else {
            DB::table('quisioner')->where('id', $id)->update([
                'quisioner_status' => 1
            ]);
        }
        Session::flash('Success', 'Status berhasil di ubah');

        return redirect('admin/quisioner');
    }

    public function edit(Quisioner $Quisioner)
    {
        return view('admin.quisioneredit', compact('Quisioner'));
    }

    public function update(Request $request, Quisioner $Quisioner)
    {

        $request->validate([
            'quisioner' => 'required',
            'quisioner_deskripsi' => 'required',
        ]);

        $Quisioner->update($request->all());

        return redirect()->route('quisioner')
            ->with('sukses', 'Company Has Been updated successfully');
    }

    public function destroy(Quisioner $Quisioner)
    {
        $Quisioner->delete();
        return redirect('admin/quisioner')->with([
            'message' => 'Deleted Successfully !',
            'type' => 'danger'
        ]);
    }
}
