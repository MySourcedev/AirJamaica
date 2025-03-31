@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">{{ __('Reset Your Password') }}</h4>
                </div>

                <div class="card-body">
                    <div class="alert alert-info mb-4">
                        <i class="fas fa-info-circle me-2"></i>
                        {{ __('You are receiving this email because we received a password reset request for your account.') }}
                    </div>

                    <div class="text-center mb-4">
                        <a href="{{ $actionUrl }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-key me-2"></i>
                            {{ __('Reset Password') }}
                        </a>
                    </div>

                    <div class="alert alert-light">
                        <p class="mb-2"><strong>{{ __('Important:') }}</strong></p>
                        <ul class="mb-1">
                            <li>{{ __('This link will expire in :count minutes.', ['count' => $expiresInMinutes]) }}</li>
                            <li>{{ __('If you didn\'t request this, please ignore this email.') }}</li>
                        </ul>
                    </div>

                    <div class="mt-4 text-muted small">
                        <p>{{ __('If you\'re having trouble clicking the button, copy and paste this URL into your browser:') }}</p>
                        <div class="p-2 bg-light rounded">
                            <code class="text-break">{{ $actionUrl }}</code>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-center text-muted small">
                    {{ __('If you have any questions, please contact our support team.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
    }
    .card-header {
        padding: 1.25rem;
    }
    .btn-primary {
        background-color: #1a237e;
        border-color: #1a237e;
        padding: 0.5rem 1.5rem;
    }
    .btn-primary:hover {
        background-color: #303f9f;
        border-color: #303f9f;
    }
    code {
        word-break: break-all;
    }
</style>
@endpush