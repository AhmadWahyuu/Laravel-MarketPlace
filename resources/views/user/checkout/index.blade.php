@extends('../user/layout.main')

@section('body')
<div class="container">
    <div class="row">
        <div class="col col-8">
            <div class="row mb-2">
                <div class="col col-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            Item
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Produk</th>
                                        <th>Harga</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>{{ $produk->nama }}</td>
                                        <td>{{ $produk->harga }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col col-12">
                    <div class="card">
                        <div class="card-header">Alamat Pengiriman</div>
                        <div class="card-body">
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
                                        @if ($item)
                                        @foreach($item as $i)
                                        <tr>
                                            <td>{{ $i->nama_penerima }}</td>
                                            <td>{{ $i->alamat }}</td>
                                            <td>{{ $i->kelurahan }}</td>
                                            <td>{{ $i->kota }}</td>
                                            <td>{{ $i->no_tlp }}</td>
                                            <td><a href="/user/alamat" class="btn btn-success btn-sm">Ubah Alamat</a></td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/user/alamat" class="btn btn-sm btn-primary">Tambah Alamat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-4">
            <div class="card">
                <div class="card-header">Ringkasan</div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>No Invoice</td>
                            <td class="text-right">No Invoice</td>
                        </tr>
                        <tr>
                            <td>Subtotal</td>
                            <td class="text-right">{{ $produk->harga }}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td class="text-right">{{ $produk->harga }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <form action="/user/checkout" method="POST">
                        @csrf
                        <input type="number" name="produk_id" id="produk_id" style="display: none" value="{{ $produk->id }}">
                        @foreach ($item as $i)
                            <input type="number" name="user_id" id="produk_id" style="display: none" value="{{ $i->user_id }}">
                            <input type="number" name="alamat_id" id="produk_id" style="display: none" value="{{ $i->id }}">
                        @endforeach
                        <button type="submit" class="btn btn-danger btn-block">Buat Pesanan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection