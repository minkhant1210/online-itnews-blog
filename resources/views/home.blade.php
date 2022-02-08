@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-xl-3">
            <div>
                <div class="bg-white shadow-sm p-3 d-flex align-items-center">
                    <i class="fas fa-fw fa-suitcase fa-2x text-primary"></i>
                    <div class="mb-0 ms-3">
                        <p class="fw-bold h4 mb-0">24</p>
                        <p class="mb-0 text-black-50">Total Jobs</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div>
                <div class="bg-white shadow-sm p-3 d-flex align-items-center">
                    <i class="fas fa-fw fa-users fa-2x text-primary"></i>
                    <div class="mb-0 ms-3">
                        <p class="fw-bold h4 mb-0">544</p>
                        <p class="mb-0 text-black-50">Total Users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div>
                <div class="bg-white shadow-sm p-3 d-flex align-items-center">
                    <i class="fas fa-fw fa-box fa-2x text-primary"></i>
                    <div class="mb-0 ms-3">
                        <p class="fw-bold h4 mb-0">214</p>
                        <p class="mb-0 text-black-50">Total Order</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-3">
            <div>
                <div class="bg-white shadow-sm p-3 d-flex align-items-center">
                    <i class="fas fa-fw fa-map-pin fa-2x text-primary"></i>
                    <div class="mb-0 ms-3">
                        <p class="fw-bold h4 mb-0">16</p>
                        <p class="mb-0 text-black-50">Total Places</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
