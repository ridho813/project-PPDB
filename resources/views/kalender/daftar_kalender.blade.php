@extends('admin.index')

@section('content')

    <div class="container m-4">
        
        <table class="table">
            <tr>
                <td>Tahun Ajaran</td>
                <td>Gambar</td>
                <td colspan="2">Aksi</td>
            </tr>
            @foreach ($kalender as $item)
            <tr>
                <td>{{ $item->tahun_ajaran }}</td>
                <td><img src="{{ url($item->gambar) }}" style="width: 300px" alt=""></td>
                <td><a href="{{ '/admin/edit/'.$item->id }}" class="btn btn-warning">Edit</a></td>
                <td><a href="{{ '/admin/destroy/'.$item->id }}" class="btn btn-danger">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="container">
        <a class="btn btn-primary" href="/admin/tambah_kalender">Tambah</a>
    </div>



     <script>
        function hapus(id){
            document.querySelector('#delete').href="destroy/"+id;
            console.log('hapus')
        }
    </script>
    <script>
function myFunction() {
  var txt = confirm("Hapus Produk?");
  if (txt == false) {
    close();
  } 
}
</script>
@endsection