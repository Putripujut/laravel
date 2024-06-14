Belajar Laravel, Tulisan ini tampilan dari Views<br>

@if(session('success'))
    <div class="alert alert-success "style="color: red";>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
@endif

<a href="{{ url('kelas/create') }}">Tambah Data</a>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Nama Kelas</td>
        <td>Jurusan</td>
        <td>Lokasi Ruangan</td>
        <td>Nama Wali Kelas</td>
        <td colspan="2">Aksi</td>
    </tr>
    @foreach ($kelas as $row)
    <tr>
        <td>{{ isset($i) ? ++$i : $i = 1}}</td>
        <td>{{ $row->nama_kelas }}</td>
        <td>{{ $row->jurusan }}</td>
        <td>{{ $row->lokasi_ruangan }}</td>
        <td>{{ $row->nama_wali_kelas }}</td>
        <td><a href="{{ url('/kelas/edit/' . $row->id)}}">Edit</a></td>
        <td>
            <form action="{{ url('/kelas', $row->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<style>

</style>