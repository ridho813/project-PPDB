@extends('admin.index')

@section('content')
    <div class="container m-4">
        <form action="{{ '/admin/update/'.$kalender->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pad mb-2 p-3">
                <label for="">Tahun Ajaran</label>
                <input type="text" class="form-control" name="tahun_ajaran" value="{{ $kalender->tahun_ajaran }}">
            </div>
            <div class="pad mb-2 p-3">
                <label for="">Masukan Gambar Kalender</label><br>
                <img width="500px" src="{{ url($kalender->gambar) }}" alt="">
                <input class="form-control " type="file" id="formFile" name="gambar">
            </div>
            <div class="pad mb-2 p-3">
                <button class="btn btn-primary"  type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection