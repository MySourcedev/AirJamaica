<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<form method="POST" action="{{ isset($aircraft) ? route('aircraft.update', $aircraft->id) : route('aircraft.store') }}">
    @csrf
    @if(isset($aircraft))
        @method('PUT')
    @endif

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="ICAO_code" class="form-label">ICAO Code</label>
            <input type="text" class="form-control @error('ICAO_code') is-invalid @enderror" 
                   id="ICAO_code" name="ICAO_code" 
                   value="{{ old('ICAO_code', $aircraft->ICAO_code ?? '') }}" required>
            @error('ICAO_code')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" 
                   id="model" name="model" 
                   value="{{ old('model', $aircraft->model ?? '') }}" required>
            @error('model')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-md-6">
            <label for="registration" class="form-label">Registration</label>
            <input type="text" class="form-control @error('registration') is-invalid @enderror" 
                   id="registration" name="registration" 
                   value="{{ old('registration', $aircraft->registration ?? '') }}" required>
            @error('registration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-3">
            <label for="max_pax" class="form-label">Max Passengers</label>
            <input type="number" class="form-control @error('max_pax') is-invalid @enderror" 
                   id="max_pax" name="max_pax" 
                   value="{{ old('max_pax', $aircraft->max_pax ?? '') }}" required>
            @error('max_pax')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-3">
            <label for="max_cargo" class="form-label">Max Cargo (lbs)</label>
            <input type="number" class="form-control @error('max_cargo') is-invalid @enderror" 
                   id="max_cargo" name="max_cargo" 
                   value="{{ old('max_cargo', $aircraft->max_cargo ?? '') }}" required>
            @error('max_cargo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
        <button type="submit" class="btn btn-primary px-4 py-2">
            <i class="fas fa-save me-2"></i>{{ isset($aircraft) ? 'UPDATE' : 'CREATE' }} AIRCRAFT
        </button>
    </div>
</form>
</body>
</html>
