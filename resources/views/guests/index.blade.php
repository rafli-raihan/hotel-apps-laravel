@extends('app')
@section('title', 'Data Tamu')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title ?? '' }}</h3>
                    <div align="right" class="mb-3">
                        <a href="{{ route('guests.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Tgl. Check in / Checkout</th>
                                <th>No. Kamar</th>
                                <th>Kontak Tamu</th>
                                <th>Status Tamu</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($guestDatas as $index => $guest)
                                    <td>{{ $index += 1 }}</td>
                                    <td>{{ $guest->nama_tamu }}</td>
                                    <td>
                                        <div class="d-block">Check In : {{ $guest->check_in }}</div>
                                        <div class="d-block">Check Out : {{ $guest->check_out }}</div>
                                    </td>
                                    <td>{{ $guest->no_kamar }}</td>
                                    <td>
                                        <div class="d-block">
                                            No. Telp: {{ $guest->no_tel }}
                                        </div>
                                        <div class="d-block">
                                            Email: {{ $guest->email }}
                                        </div>
                                        <div class="d-block">
                                            Alamat: {{ $guest->alamat }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-block">
                                            Kelas: {{ $guest->status_tamu }}
                                        </div>
                                        <div class="d-block">
                                            Disabilitas: {{ $guest->kebutuhan_khusus }}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('guests.edit', $guest->id) }}"
                                            class="btn btn-outline-success">Edit</a>
                                        <form action="" method="post" onclick="return confirm()"
                                            style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
