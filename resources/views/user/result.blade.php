@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header d-flex justify-content-between align-items-center" style="text-transform:uppercase; font-weight:bold">
                    {{ __('Hasil Seleksi PPDB') }}
                    <a href="{{ url('home') }}">
                        <button class="btn btn-warning" style="text-transform:uppercase; font-weight:bold">
                            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
                            Kembali
                        </button>
                    </a>
                </div>
                <div class="card-body" style="text-transform:uppercase; font-weight:bold">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <style>
                        .tabels {
                            background-color: whitesmoke;
                            border: 2px solid black;
                        }
                        .tabels tr {
                            text-align: left;
                            letter-spacing: 3px;
                        }
                        .divs {
                            padding-left: 230px; 
                            padding-top: 5px;
                        }
                    </style>
                    <div class="divs">
                        <table class="tabels">
                            <tbody>
                                @foreach ($siswa as $data)
                                    @if ($data->user->id == Auth::user()->id)
                                        <tr>
                                            <td>Nisn</td>
                                            <td>:</td>
                                            <td>{{ $data->nisn }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>:</td>
                                            <td>{{ $data->nama_lengkap }}</td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>{{ $data->alamat }}</td>
                                        </tr>
                                        <tr>
                                            <td>No.Telp Ortu</td>
                                            <td>:</td>
                                            <td>+62{{ $data->no_telp }}</td>
                                        </tr>
                                        <tr>
                                            <td>Umur</td>
                                            <td>:</td>
                                            <td>{{ $data->umur }}</td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>:</td>
                                            <td>
                                                @if ($data->seleksi_status == '1')
                                                    <span style="color: green">Lolos</span>
                                                @else
                                                    @if ($data->seleksi_status == '0')
                                                        <span style="color: brown">Pending</span>
                                                    @else
                                                        <span style="color: red">Ditolak</span>
                                                    @endif
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- @if ($siswa == !Auth::check($user->id))
                        <i class="fa fa-info-circle" aria-hidden="true"></i> 
                            {{ __('Anda Belum Mendaftar Pada Seleksi Calon PPDB') }}
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                    @else
                        <i class="fa fa-info-circle" aria-hidden="true"></i> 
                            {{ __('Anda Telah Terdaftar Pada Seleksi Calon PPDB') }}
                        <i class="fa fa-info-circle" aria-hidden="true"></i>
                        <style>
                            .tabels {
                                background-color: whitesmoke;
                                border: 2px solid black;
                            }
                            .tabels tr {
                                text-align: left;
                                letter-spacing: 3px;
                            }
                            .divs {
                                padding-left: 230px; 
                                padding-top: 5px;
                            }
                        </style>
                        <div class="divs">
                            <table class="tabels">
                                <tbody>
                                    @foreach ($siswa as $data)
                                        @if ($user->id)
                                            <tr>
                                                <td>Nisn</td>
                                                <td>:</td>
                                                <td>{{ $data->nisn }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td>:</td>
                                                <td>{{ $data->nama_lengkap }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat</td>
                                                <td>:</td>
                                                <td>{{ $data->alamat }}</td>
                                            </tr>
                                            <tr>
                                                <td>No.Telp Ortu</td>
                                                <td>:</td>
                                                <td>+62{{ $data->no_telp }}</td>
                                            </tr>
                                            <tr>
                                                <td>Umur</td>
                                                <td>:</td>
                                                <td>{{ $data->umur }}</td>
                                            </tr>
                                            <tr>
                                                <td>Status</td>
                                                <td>:</td>
                                                <td>
                                                    @if ($data->seleksi_status == '1')
                                                        <span style="color: green">Lolos</span>
                                                    @else
                                                        @if ($data->seleksi_status == '0')
                                                            <span style="color: brown">Pending</span>
                                                        @else
                                                            <span style="color: red">Gagal</span>
                                                        @endif
                                                    @endif
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
