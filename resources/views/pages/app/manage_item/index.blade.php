@extends('layouts.app')

@section('title', 'Manage Item')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Manage Item</h1>
            </div>


            <div class="section-body">

                <div class="col-12 col-md-12 col-lg-12">

                    <a href="{{ route('Item.create') }}" class="btn btn-primary mt-5">
                        <h3>Add Item</h3>
                    </a>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table-bordered table-md table">
                                    <tr>

                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($item as $itm)
                                        <tr>
                                            <td>{{ ++$i}}</td>
                                            <td>{{ $itm->nama_produk }}</td>
                                            <td>{{ $itm->stok }}</td>
                                            <td>{{ $itm->harga }}</td>
                                            <td>{{ $itm->deskripsi }}</td>

                                            <td>
                                                <form action="{{ route('Item.destroy', $itm->id_item) }}" method="POST">

                                                    <a href="{{ route('Item.edit', $itm->id_item) }}"
                                                        class="btn btn-secondary">Edit</a>

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    @section('js')
    @endsection
@endpush
