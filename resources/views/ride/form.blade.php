<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Form Validation in Laravel</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-5">
        <form action="{{ route('ride.store') }}" method="POST" class="p-4 rounded shadow bg-white">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Nomor Whatsapp</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror" required>
                  <option value="">-- Pilih Jenis Kelamin --</option>
                  <option value="P" {{ old('gender') === "P" ? 'selected' : '' }}>Perempuan</option>
                  <option value="L" {{ old('gender') === "L" ? 'selected' : '' }}>Laki-laki</option>
                </select>
                @error('gender')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pickup_location" class="form-label">Lokasi Jemput</label>
                <input type="text" name="pickup_location" id="pickup_location" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="dropoff_location" class="form-label">Tujuan</label>
                <input type="text" name="dropoff_location" id="dropoff_location" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="distance" class="form-label">Jarak (km)</label>
                <input type="number" name="distance" id="distance" class="form-control" step="0.1" required>
            </div>

            <div class="mb-3">
                <label for="pickup_time" class="form-label">Pickup Time</label>
                <input type="date" name="pickup_time" id="pickup_time" class="form-control" onchange="invoicedue(event);" required value="{{ old('pickup_time') }}">
            </div>

            <div class="d-flex justify-content-end gap-2">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Hitung Biaya</button>
            </div>
        </form>
    </div>
</body>

</html>        