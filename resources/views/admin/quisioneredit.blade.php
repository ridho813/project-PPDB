@extends('admin.index')

@section('content')
    <div class="row-md-4">
        <div class="col-lg-6">
            <div>
                <h2>Edit Kategori</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('dashboard') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('quisioner.update', $Quisioner->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Quisioner:</strong>
        <input type="text" name="quisioner" class="form-control" placeholder="Company Name">
        @error('nama')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Deskrips Quisioner:</strong>
        <input type="text" name="quisioner_deskripsi" class="form-control" placeholder="Company Email">
        @error('email')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
        @enderror
        </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
        </form>

@endsection
