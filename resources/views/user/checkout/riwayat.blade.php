@extends('../user/layout.main')

@section('body')
    <table class="table table-striped table-sm">
        @foreach ($riwayat as $i)
            <tr>
                <td><small>{{ $i->created_at }}</small></td>
                <td><img src="{{ url('storage/'.$i->produk->image) }}" class="image img-fluid"></td>
                <td>{{ $i->produk->nama }}</td>
                <td>{{ $i->alamat->alamat }}-{{ $i->alamat->kota }}-{{ $i->alamat->kecamatan }}-{{ $i->alamat->kelurahan }}:{{ $i->alamat->nama_penerima }}-{{ $i->alamat->no_tlp }}</td>
                <td>{{ $i->produk->harga }}</td>
            </tr>
        @endforeach
    </table>
@endsection