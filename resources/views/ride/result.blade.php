@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hasil Perhitungan Ongkir</h2>
    <div class="alert alert-info">
        <strong>Nama:</strong> {{ $ride->name }}<br>
        <strong>Nomor Whatsapp:</strong> {{ $ride->phone_number }}<br>
        <strong>Jenis Kelamin:</strong>
        <strong>Lokasi Jemput:</strong> {{ $ride->pickup_location }}<br>
        <strong>Tujuan:</strong> {{ $ride->dropoff_location }}<br>
        <strong>Jarak:</strong> {{ $ride->distance }} km<br>
        <strong>Waktu Jemput:</strong> {{ $ride->pickup_time }}<br>
        <strong>Harga:</strong> Rp {{ number_format($ride->price, 0, ',', '.') }}
    </div>
    <a href="{{ url('/ride') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
