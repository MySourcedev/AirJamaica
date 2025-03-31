@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>{{ isset($airport) ? 'Edit' : 'Create' }} Airport</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($airport) ? route('airports.update', $airport->id) : route('airports.store') }}">
                        @csrf
                        @if(isset($airport)) @method('PUT') @endif

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">ICAO Code*</label>
                                <input type="text" name="ICAO_code" class="form-control @error('ICAO_code') is-invalid @enderror" 
                                       value="{{ old('ICAO_code', $airport->ICAO_code ?? '') }}" required>
                                @error('ICAO_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">IATA Code</label>
                                <input type="text" name="IATA_code" class="form-control @error('IATA_code') is-invalid @enderror" 
                                       value="{{ old('IATA_code', $airport->IATA_code ?? '') }}">
                                @error('IATA_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name*</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name', $airport->name ?? '') }}" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">City*</label>
                                <input type="text" name="city" class="form-control @error('city') is-invalid @enderror" 
                                       value="{{ old('city', $airport->city ?? '') }}" required>
                                @error('city')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Country*</label>
                                <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" 
                                       value="{{ old('country', $airport->country ?? '') }}" required>
                                @error('country')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Latitude*</label>
                                <input type="number" step="0.000001" name="latitude" class="form-control @error('latitude') is-invalid @enderror" 
                                       value="{{ old('latitude', $airport->latitude ?? '') }}" required>
                                @error('latitude')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Longitude*</label>
                                <input type="number" step="0.000001" name="longitude" class="form-control @error('longitude') is-invalid @enderror" 
                                       value="{{ old('longitude', $airport->longitude ?? '') }}" required>
                                @error('longitude')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ isset($airport) ? 'Update' : 'Create' }} Airport
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection