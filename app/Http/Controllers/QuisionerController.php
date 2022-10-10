<?php

namespace App\Http\Controllers;

use App\Models\Quisioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class QuisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Quisioner = Quisioner::latest()->get();
        return view('quisioner',compact('Quisioner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
     {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Quisioner = new Quisioner([
            'quisioner'=> $request->quisioner,
            'quisioner_deskripsi' => $request->quisioner_deskripsi,
           //  'quisioner_status'=>$request->0,
         ]);
         $Quisioner->save();
            return redirect()->route('quisioner')
            ->with('success','Quisioner created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('quisioner')->where('id',$id)->first();

        $quisioner_status = $data->quisioner_status;

        if($quisioner_status == 0){
            DB::table('quisioner')->where('id',$id)->update([
                'quisioner_status'=>1
            ]);
        }else{
            DB::table('quisioner')->where('id',$id)->update([
                'quisioner_status'=>0
            ]);
        }
        Session::flash('Success','Status berhasil di ubah');

        return redirect('quisioner');

    }
//status


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(QuisionerController $quisioner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuisionerController $quisioner)
    {
        //
    }
}
