@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header" style="text-transform:uppercase; font-weight:bold">{{ __('Portal PPDB') }}</div>
                <div class="card-body" style="text-transform:uppercase; font-weight:bold">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <i class="fa fa-info-circle" aria-hidden="true"></i> 
                        {{ __('Selamat Datang di Portal PPDB') }}
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    
                    <div class="mt-3">
                        <a href="{{ route('daftar.index') }}">
                            <button class="btn btn-primary" style="text-transform:uppercase; font-weight:bold">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Daftar PPDB
                            </button>
                        </a>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('daftar.shows', $user) }}">
                            <button class="btn btn-success" style="text-transform:uppercase; font-weight:bold">
                                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                Result PPDB
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
