@extends('admin.layout.main')

@section('body')
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <td >No</td>
                <td >Nama User</td>
                <td >Nama Produk</td>
                <td >Harga</td>
                <td >Alamat</td>
                <td>Tanggal</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $i)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $i->user->username }}</td>
                    <td>{{ $i->produk->nama }}</td>
                    <td>{{ $i->produk->harga }}</td>
                    <td>{{ $i->alamat->alamat }}-{{ $i->alamat->kota }}-{{ $i->alamat->kecamatan }}-{{ $i->alamat->kelurahan }}:{{ $i->alamat->nama_penerima }}-{{ $i->alamat->no_tlp }}</td>
                    <td>{{ $i->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection