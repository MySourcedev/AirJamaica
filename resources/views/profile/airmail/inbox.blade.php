@extends('layouts.app')

@section('content')
<div class="container-fluid mt-3">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">AIRMail+3</h5>
                </div>
                <div class="card-body p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bi bi-inbox"></i> Inbox</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-pencil-square"></i> Compose New message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bi bi-gear"></i> Settings</a>
                        </li>
                    </ul>
                    
                    <hr class="my-1">
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Send New AIRMail Message</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row">
                            <label for="to" class="col-sm-2 col-form-label fw-bold">To:</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="to">
                                    <option selected>[Select a pilot]</option>
                                    <option>Pilot 1</option>
                                    <option>Pilot 2</option>
                                    <option>Pilot 3</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="subject" class="col-sm-2 col-form-label fw-bold">Subject:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Message:</label>
                            <textarea class="form-control" rows="10"></textarea>
                        </div>
                        
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">SEND AIRMAIL</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection