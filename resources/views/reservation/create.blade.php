@extends('app')
@section('title', 'Tambah Reservasi')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h3 class="card-title">
                    {{ $title ?? '' }}
                </h3>
                <div class="card-body">
                    <form action="{{ route('reservation.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="">Nama Tamu: </label>
                                    <input type="text" class="form-control" name="guest_name" placeholder="Masukkan Nama"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Telepon/No: </label>
                                    <input type="number" class="form-control" name="guest_name"
                                        placeholder="Masukkan Telepon">
                                </div>
                                <div class="mb-3">
                                    <label for="">Kategori Kamar</label>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">Pilih Kategori Kamar</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">No. Kamar</label>
                                    <select name="guest_room_number" id="" class="form-select">
                                        <option value="">Pilih No. Kamar</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Payment Method</label>
                                    <select name="payment_method" id="" class="form-select">
                                        <option value="cc">Credit Card</option>
                                        <option value="cash">Cash</option>
                                        <option value="bank">Bank Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="">Email Tamu: </label>
                                    <input type="email" class="form-control" name="guest_email"
                                        placeholder="Masukkan Email">
                                </div>
                                <div class="mb-3">
                                    <label for="">Jumlah Tamu: </label>
                                    <select name="guest_qty" id="" class="form-control">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="">Nama Kamar</label>
                                    <select name="category_id" id="" class="form-select">
                                        <option value="">Pilih Kamar</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Catatan Tamu</label>
                                    <textarea name="guest_notes" id="" class="form-control"></textarea>
                                </div>
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title">Rangkuman Pembayaran</h5>
                                        <div class="d-flex justify-content-between">
                                            <span>Harga Kamar (per malam)</span>
                                            <span id="roomRate"> Rp. 0</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Berapa malam</span>
                                            <span id="totalNight">0</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Subtotal</span>
                                            <span id="subtotal"> Rp. 0</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Tax</span>
                                            <span id="tax"> Rp. 0</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>GrandTotal</span>
                                            <span id="totalAmount"> Rp. 0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--
                        <div class="mb-3">
                            <label for="">Gambar</label>
                            <input type="file" class="form-control" name="image_cover" required>
                        </div> --}}
                        <button name="simpan" class="btn btn-primary">Simpan</button>
                        <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
