@extends('index')

@section('content')
    <!-- page title area end -->
    <div class="main-content-inner">

        <!-- market value area start -->
        <div class="row mt-5 mb-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h2>Daftar Quisioner</h2>
                            <button style="margin-bottom:20px" data-toggle="modal" data-target="#myModal"
                                class="btn btn-info col-md-2">Tambah Quisioner</button>
                        </div>
                        <div class="data-tables datatable-dark">
                            <table id="dataTable3" class="display" style="width:100%">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Kuisioner</th>
                                        <th>Deksripsi Kuisioner</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Quisioner as $quis)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $quis->quisioner }}</td>
                                            <td>{{ $quis->quisioner_deskripsi }}</td>
                                            <td>
                                                @if ($quis->quisioner_status=='1')
                                                    <p style="color:green">Publish</p>
                                                @else
  <a href="{{ route('quisioner.show', $quis->id) }}"><button type="button" class="btn btn-danger" data-dismiss="modal">Publish</button></a>
                                                @endif

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ route('quisioner.edit', $quis->id) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-pencil"></i> </a>
                                                    <form action="{{ route('quisioner.destroy', $quis->id) }}"
                                                        method="POST">

                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fa fa-trash"></i></button>
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
<!-- modal input -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Quisioner</h4>
            </div>

            <div class="modal-body">
                <form action="{{ route('quisioner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kuisioner</label>
                        <input name="quisioner" type="text" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Kuisioner</label>
                        <input name="quisioner_deskripsi" type="text" class="form-control" required autofocus>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <input name="addproduct" type="submit" class="btn btn-primary" value="Tambah">
            </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataTable3').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'print'
            ]
        });
    });
</script>
