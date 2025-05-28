@extends('components.master')

@section('content')
<div class="row">
    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body d-flex justify-content-start align-items-center gap-4" style="min-height: 300px;">
                <div>
                    <h4 class="mb-0">Police App Illustration</h4>
                </div>
                <img src="{{ asset('assets/images/logos/police.jpg') }}" alt="Police App Illustration" class="img-fluid" style="max-height: 300px; object-fit: contain;">
            </div>
        </div>
    </div>


    <div class="col-lg-4">
        <div class="row">
            <div class="col-lg-12">
                <!-- Mission (mengganti Monthly Earnings) -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3 fw-semibold">Mission</h5>
                        <p class="text-muted fs-4 mb-0">
                            To empower citizens and law enforcement through a seamless digital platform that enables real-time reporting, efficient communication, and community collaboration—promoting safety, transparency, and trust across all levels of society.
                        </p>
                    </div>
                </div>
                <!-- Vision (mengganti Yearly Breakup) -->
                <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-3 fw-semibold">Vision</h5>
                        <p class="text-muted fs-4 mb-0">
                            To build a safer, more transparent society by fostering seamless communication and trust between citizens and law enforcement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
