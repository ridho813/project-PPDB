@extends('admin.index')

@section('content')
    <!-- page title area end -->
    <div class="main-content-inner">

        <!-- market value area start -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Daftar Seleksi Siswa PPDB</h2>
                        </div>
                        <div class="data-tables datatable-dark">
                            <table id="dataTable3" class="table table-hover text-center align-middle" style="width:100%; cursor: pointer;">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Alamat</th>
                                        <th>No.Telp Ortu</th>
                                        <th>Umur</th>
                                        <th>Seleksi Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seleksi as $seleksi_siswa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $seleksi_siswa->nisn }}</td>
                                            <td>{{ $seleksi_siswa->nama_lengkap }}</td>
                                            <td>{{ $seleksi_siswa->alamat }}</td>
                                            <td>{{ $seleksi_siswa->no_telp }}</td>
                                            <td>{{ $seleksi_siswa->umur }}</td>
                                            <td>
                                                @if ($seleksi_siswa->seleksi_status == '0')
                                                    <a href="{{ route('seleksi.show', $seleksi_siswa->id) }}"><button type="button" value="terima" class="btn btn-success btn-sm">Terima</button></a>
                                                @else
                                                    @if ($seleksi_siswa->seleksi_status == '1')
                                                        <p style="color:green">Telah Diterima</p>
                                                    @else
                                                        <p style="color:red">Telah Ditolak</p>
                                                    @endif
                                                @endif

                                            </td>
                                            <td>
                                                <form action="{{ route('seleksi.destroy',$seleksi_siswa->id) }}" method="Post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- row area start-->
    </div>
@endsection

<script>
    $(document).ready(function() {
        $('#dataTable3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ],
            searching: false
        });
    });
</script>
