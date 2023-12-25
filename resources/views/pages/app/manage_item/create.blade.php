@extends('layouts.app')

@section('title', 'Nambah Item')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Nambah Item</h1>
            </div>

            <div class="section-body mt-5">
                <div class="card ">
                    <form action="{{ route('Item.store') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" class="form-control" name="nama_produk" placeholder="Nama_produk">
                                </div>
                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" class="form-control" name="stok" placeholder="Stok">
                                </div>
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" class="form-control" name="harga" placeholder="Harga ">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi ">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <center><button type="submit" class="btn btn-primary">Simpan</button></center>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    @section('js')
        <script></script>
    @endsection
@endpush
