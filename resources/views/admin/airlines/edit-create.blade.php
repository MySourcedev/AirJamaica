@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>{{ isset($airline) ? 'Edit' : 'Create' }} Airline</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ isset($airline) ? route('airlines.update', $airline->id) : route('airlines.store') }}">
                        @csrf
                        @if(isset($airline)) @method('PUT') @endif

                        <div class="mb-3">
                            <label class="form-label">ICAO Code*</label>
                            <input type="text" name="ICAO_code" class="form-control @error('ICAO_code') is-invalid @enderror" 
                                   value="{{ old('ICAO_code', $airline->ICAO_code ?? '') }}" required>
                            @error('ICAO_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">IATA Code</label>
                            <input type="text" name="IATA_code" class="form-control @error('IATA_code') is-invalid @enderror" 
                                   value="{{ old('IATA_code', $airline->IATA_code ?? '') }}">
                            @error('IATA_code')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Name*</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                                   value="{{ old('name', $airline->name ?? '') }}" required>
                            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Callsign*</label>
                            <input type="text" name="callsign" class="form-control @error('callsign') is-invalid @enderror" 
                                   value="{{ old('callsign', $airline->callsign ?? '') }}" required>
                            @error('callsign')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Country*</label>
                            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" 
                                   value="{{ old('country', $airline->country ?? '') }}" required>
                            @error('country')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ isset($airline) ? 'Update' : 'Create' }} Airline
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection