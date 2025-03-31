<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Add New Aircraft</h5>
                        <a href="{{ route('aircraft.index') }}" class="btn btn-sm btn-outline-secondary">
                            <i class="fas fa-arrow-left me-1"></i> Back to List
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('aircraft.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="ICAO_code" class="col-md-4 col-form-label text-md-end">ICAO Code</label>
                            <div class="col-md-6">
                                <input id="ICAO_code" type="text" 
                                       class="form-control @error('ICAO_code') is-invalid @enderror" 
                                       name="ICAO_code" value="{{ old('ICAO_code') }}" 
                                       required autofocus>
                                @error('ICAO_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="model" class="col-md-4 col-form-label text-md-end">Model</label>
                            <div class="col-md-6">
                                <input id="model" type="text" 
                                       class="form-control @error('model') is-invalid @enderror" 
                                       name="model" value="{{ old('model') }}" required>
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="registration" class="col-md-4 col-form-label text-md-end">Registration</label>
                            <div class="col-md-6">
                                <input id="registration" type="text" 
                                       class="form-control @error('registration') is-invalid @enderror" 
                                       name="registration" value="{{ old('registration') }}" required>
                                @error('registration')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="max_pax" class="col-md-4 col-form-label text-md-end">Max Passengers</label>
                            <div class="col-md-6">
                                <input id="max_pax" type="number" 
                                       class="form-control @error('max_pax') is-invalid @enderror" 
                                       name="max_pax" value="{{ old('max_pax') }}" required>
                                @error('max_pax')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="max_cargo" class="col-md-4 col-form-label text-md-end">Max Cargo (lbs)</label>
                            <div class="col-md-6">
                                <input id="max_cargo" type="number" 
                                       class="form-control @error('max_cargo') is-invalid @enderror" 
                                       name="max_cargo" value="{{ old('max_cargo') }}" required>
                                @error('max_cargo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save me-1"></i> Save Aircraft
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>