@extends('admin.index')

@section('content')
    <div class="container m-4">
        <form action="/admin/post_kalender" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="pad mb-2 p-3">
                <label for="">Tahun Ajaran</label>
                <input type="text" class="form-control" name="tahun_ajaran">
            </div>
            <div class="pad mb-2 p-3">
                <label for="">Masukan Gambar Kalender</label>
                <input class="form-control " type="file" id="formFile" name="gambar">
            </div>
            <div class="pad mb-2 p-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection