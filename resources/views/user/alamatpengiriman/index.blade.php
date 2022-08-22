@extends('../user//layout.main')

@section('body')
<div class="container">
    <div class="row">
        <div class="col col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">
                            Alamat Pengiriman
                        </div>
                        <div class="col-auto">
                            @if ($url = Session::get('url'))
                                <a href="{{ $url }}" class="btn btn-sm btn-danger">Tutup</a>
                            @else
                                <a href="{{ url()->previous() }}" class="btn btn-sm btn-danger">Tutup</a>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Penerima</th>
                                    <th>Alamat</th>
                                    <th>No tlp</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($item as $i)
                                <tr>
                                    <td>
                                        {{ $i->nama_penerima }}
                                    </td>
                                    <td>
                                        {{ $i->alamat }} <br>
                                        {{ $i->kelurahan }}, {{ $i->kecamatan }} <br>
                                        {{ $i->kota }}, {{ $i->provinsi }} - {{ $i->kodepos }}
                                    </td>
                                    <td>
                                        {{ $i->no_tlp }}
                                    </td>
                                    <td>
                                        <form action="/user/alamat/{{ $i->id }}" method="POST">
                                        @csrf
                                        @if ($url = Session::get('url'))
                                            <input type="hidden" name="url" value="{{ $url }}">
                                        @else
                                            <input type="hidden" name="url" value="{{ url()->previous() }}">   
                                        @endif
                                        @if ($i->status == 'utama')
                                            <button type="submit" class="btn btn-success btn-sm" disabled>Set Utama</button>
                                        @else
                                            <button type="submit" class="btn btn-primary btn-sm">Set Utama</button>
                                        @endif
                                        </form>
                                    </td>
                                    <td>
                                        <form action="/user/alamat/{{ $i->id }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus')">
                                            @method('delete')
                                            @csrf
                                            @if ($url = Session::get('url'))
                                                <input type="hidden" name="url" value="{{ $url }}">
                                            @else
                                                <input type="hidden" name="url" value="{{ url()->previous() }}">   
                                            @endif
                                            <button class="btn btn-danger border-0" type="submit"><i class="fa fa-trash" ></i></button>
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
        <div class="col col-8">
            <div class="card">
                <div class="card-header">
                    Form Alamat Pengiriman
                </div>
                <div class="card-body">
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-warning">{{ $error }}</div>
                    @endforeach
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-success"><p>{{ $message }}</p></div>
                    @endif
                    <form action="/user/alamat" method="POST">
                        @csrf
                        @if ($url = Session::get('url'))
                            <input type="hidden" name="url" value="{{ $url }}">
                        @else
                            <input type="hidden" name="url" value="{{ url()->previous() }}">   
                        @endif
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nama_penerima">Nama Penerima</label>
                                    <input type="text" name="nama_penerima" class="form-control" value="{{ old('nama_penerima') }}">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                                </div>
                                <div class="form-group">
                                    <label for="no_tlp">No Tlpt</label>
                                    <input type="text" name="no_tlp" class="form-control" value="{{ old('no_tlp') }}">
                                </div>
                                <div class="form-group">
                                    <label for="provinsi">Provinsi</label>
                                    <input type="text" name="provinsi" class="form-control" value="{{ old('provinsi') }}">
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="kota">Kota</label>
                                        <input type="text" name="kota" class="form-control" value="{{ old('kota') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" name="kecamatan" class="form-control" value="{{ old('kecamatan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control" value="{{ old('kelurahan') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos">Kode Pos</label>
                                        <input type="text" name="kodepos" class="form-control" value="{{ old('kodepos') }}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection