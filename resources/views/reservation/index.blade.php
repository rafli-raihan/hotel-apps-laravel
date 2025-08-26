@extends('app')
@section('title', 'Data Reservasi')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $title ?? '' }}</h3>
                    <div align="right" class="mb-3">
                        <a href="{{ route('reservation.create') }}" class="btn btn-primary">Tambah</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kamar</th>
                                <th>No. Reservasi</th>
                                <th>Tamu</th>
                                <th>Check In</th>
                                <th>Check Out</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                                <tr>
                                    <td>{{ $index += 1 }}</td>
                                    <td>{{ $data->guest_name }}</td>
                                    <td>{{ $data->reservation_number }}</td>
                                    <td>
                                        <small>
                                            Nama: {{ $data->guest_name }}
                                            <br>
                                            Email: {{ $data->guest_email }}
                                            <br>
                                            No. Telp: {{ $data->guest_phone }}
                                        </small>
                                    </td>
                                    <td>{{ $data->guest_check_in }}</td>
                                    <td>{{ $data->guest_check_out }}</td>
                                    <td>{{ $data->isReserve }}</td>
                                    <td>
                                        <a href="{{ route('reservation.edit') }}" class="btn btn-outline-success">Edit</a>
                                        <form action="{{ route('reservation.destroy') }}" method="post"
                                            onclick="return confirm()" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
