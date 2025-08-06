@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Hasil Perhitungan Ongkir</h2>
    <div class="alert alert-info">
        <strong>Nama:</strong> {{ $ride->name }}<br>
        <strong>Nomor Whatsapp:</strong> {{ $ride->phone_number }}<br>
        <strong>Jenis Kelamin:</strong>
        @if($ride->gender === 'L')
            Laki-laki
        @elseif($ride->gender === 'P')
            Perempuan
        @else
            -
        @endif<br>
        <strong>Lokasi Jemput:</strong> {{ $ride->pickup_location }}<br>
        <strong>Tujuan:</strong> {{ $ride->dropoff_location }}<br>
        <strong>Jarak:</strong> {{ $ride->distance }} km<br>
        <strong>Waktu Jemput:</strong> {{ $ride->pickup_time }}<br>
        <strong>Harga:</strong> Rp {{ number_format($ride->price, 0, ',', '.') }}
    </div>  
    <a href="{{ url('/ride') }}" class="btn btn-danger">Kembali</a>
    </a>
    <a href="https://wa.me/+6287841274541?text=Hallo%20Shipmin%20saya%20mau%20diantar%20pakai%20layanan%20ShipRide!%0A%0ADengan%20Format%20Order%0ANama%20:%20{{ urlencode($ride->name) }}%0ANo%20WA%20:%20{{ urlencode($ride->phone_number) }}%0AJenis%20Kelamin%20:%20{{ urlencode($ride->gender === 'L' ? 'Laki-laki' : ($ride->gender === 'P' ? 'Perempuan' : '-')) }}%0AAlamat%20Penjemputan%20:%20{{ urlencode($ride->pickup_location) }}%0AAlamat%20Tujuan%20:%20{{ urlencode($ride->dropoff_location) }}%0AWaktu%20Penjemputan%20(Tgl%20%26%20bulan)%20:%20{{ urlencode($ride->pickup_time) }}%0AHarga%20Ongkir%20:%20Rp%20{{ urlencode(number_format($ride->price, 0, ',', '.')) }}"
   class="btn btn-success">
   pesan
</a>

</div>
@endsection
