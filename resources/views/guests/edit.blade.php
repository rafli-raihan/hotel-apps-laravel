@extends('app')
@section('title', 'Tambah Tamu')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                @foreach ($errors->all() as $i)
                    <ul class="text-danger">
                        <li>{{ $i }}</li>
                    </ul>
                @endforeach
                <h3 class="card-title">
                    {{ $title ?? '' }}
                </h3>
                <div class="card-body">
                    <form action="{{ route('guests.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama_tamu" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="">No. Telp</label>
                            <input type="number" class="form-control" name="no_tel" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Check_In</label>
                            <input type="date" class="form-control" name="check_in" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Check_Out</label>
                            <input type="date" class="form-control" name="check_out" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Kebutuhan Khusus</label>
                            <input type="radio" name="statusnya" id="ada" class="form-check-input"
                                onclick="toggleinput(true)"> Ada
                            <input type="radio" name="statusnya" id="tidak_ada" class="form-check-input"
                                onclick="toggleinput(false)"> Tidak Ada
                            <input type="text" class="form-control" style="display: none" name="kebutuhan_khusus"
                                id="kebutuhan_khusus">
                        </div>
                        <script>
                            function toggleinput(show) {
                                const kebutuhan_khusus = document.querySelector("#kebutuhan_khusus");

                                kebutuhan_khusus.style.display = show ? 'block' : 'none';
                            }
                        </script>
                        <div class="mb-3">
                            <label for="">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">No. Kamar</label>
                            <select name="no_kamar" class="form-control" id="">
                                <option value="">--Pilih No--</option>
                                <option value="17A">17A</option>
                                <option value="17B">17B</option>
                                <option value="17C">17C</option>
                                <option value="17D">17D</option>
                                <option value="17E">17E</option>
                                <option value="17F">17F</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="">Status Tamu</label>
                            <select name="status_tamu" class="form-control" id="">
                                <option value="">--Pilih Status--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button name="simpan" class="btn btn-primary">Simpan</button>
                        <a href="{{ url()->previous() }}" class="text-muted">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
