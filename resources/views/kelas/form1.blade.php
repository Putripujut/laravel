@session('error')
    <div class="aler alert-error">
        {{ session('galat') }}
    </div>
@endsession

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>WARNING!</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $galat)
                <li>{{ $galat }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Form Kelas</h1>
<form action="{{ url('kelas', @$kelas->id) }}" method="POST">
    @csrf

    @if (!@empty($kelas))
        @method('PATCH')
    @endif

    Nama Kelas          : <input type="text" name="nama_kelas" value="{{ old('nama_kelas', @$kelas->nama_kelas) }}"><br>
    Jurusan             : 
    <select name="jurusan">
        <option value="">Pilih Jurusan</option>
        <option value="Teknik Instalasi Tenaga Listrik" {{ old('jurusan', @$kelas->jurusan) == 'Teknik Instalasi Tenaga Listrik' ? 'selected' : '' }}>Teknik Instalasi Tenaga Listrik</option>
        <option value="Teknik Otomasi Industri" {{ old('jurusan', @$kelas->jurusan) == 'Teknik Otomasi Industri' ? 'selected' : '' }}>Teknik Otomasi Industri</option>
        <option value="Teknik Audio Video"> {{ old('jurusan', @$kelas->jurusan) == 'Teknik Audio Video' ? 'selected' : '' }}Teknik Audio Video</option>
        <option value="Desain Komunikasi Visual" {{ old('jurusan', @$kelas->jurusan) == 'Desain Komunikasi Visual' ? 'selected' : '' }}>Desain Komunikasi Visual</option>
        <option value="Rekayasa Perangkat Lunak" {{ old('jurusan', @$kelas->jurusan) == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
        <option value="Teknik Komputer dan Jaringan" {{ old('jurusan', @$kelas->jurusan) == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
    </select><br>
    Lokasi Ruangan : <input type="text" name="lokasi_ruangan" value="{{ old('lokasi_ruangan', @$kelas->lokasi_ruangan) }}"><br>
    Nama Wali Kelas     :<br>
    <input type="text" name="nama_wali_kelas" value="{{ old('nama_wali_kelas', @$kelas->nama_wali_kelas) }}"><br>
    <input type="submit" value="Simpan">   
</form>