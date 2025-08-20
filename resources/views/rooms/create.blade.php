@extends('app')
@section('title', 'Tambah Kamar')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 class="card-title">
                    {{ $title ?? '' }}
                </h3>
                <div class="card-body">
                    <form action="{{ route('rooms.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Kategori Kamar</label>
                            <select name="category_id" id="" class="form-select">
                                <option value="">Pilih Kategori Kamar</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Harga</label>
                            <input type="number" class="form-control" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Fasilitas</label>
                            <textarea class="form-control" name="facility"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control" name="image_cover" required>
                        </div>
                        <button name="simpan" class="btn btn-primary">Simpan</button>
                        <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
