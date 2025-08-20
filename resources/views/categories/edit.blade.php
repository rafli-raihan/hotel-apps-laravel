@extends('app')
@section('title', 'Ubah Kategori Kamar')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 class="card-title">
                    {{ $title ?? '' }}
                </h3>
                <div class="card-body">
                    <form action="{{ route('categories.update', $edit->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama"
                                value="{{ $edit->name ?? '' }}" required>
                        </div>
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
