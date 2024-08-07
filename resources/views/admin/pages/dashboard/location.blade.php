@extends('admin.layouts.master')

@section('title', __('pages.form.show', ['prop' => 'Location']))

@section('content')

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ms-3 mb-4">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Location</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('pages.form.show', ['prop' => 'Location']) }}
            </li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ __('pages.form.show', ['prop' => 'Location']) }}</h5>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-12 mb-3">
                    <label for="name" class="form-label required">Model Name</label>
                    <input type="text" class="form-control" value="{{ $location->model_name }}" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">Country Name</label>
                    <input type="text" class="form-control" value="{{ $location->country_name ?? '-' }}" disabled>
                </div>

                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">Region Name</label>
                    <input type="text" class="form-control" value="{{ $location->region_name ?? '-' }}" disabled>
                </div>

                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">City Name</label>
                    <input type="text" class="form-control" value="{{ $location->city_name ?? '-' }}" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-6 mb-3">
                    <label for="name" class="form-label required">Zip Code</label>
                    <input type="text" class="form-control" value="{{ empty($location->zip_code) ? '-' : $location->zip_code }}" disabled>
                </div>

                <div class="col-6 mb-3">
                    <label for="name" class="form-label required">Postal Code</label>
                    <input type="text" class="form-control" value="{{ $location->postal_code ?? '-' }}" disabled>
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">Latitude</label>
                    <input type="text" class="form-control" value="{{ $location->latitude ?? '-' }}" disabled>
                </div>

                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">Longitude</label>
                    <input type="text" class="form-control" value="{{ $location->longitude ?? '-' }}" disabled>
                </div>

                <div class="col-4 mb-3">
                    <label for="name" class="form-label required">Timezone</label>
                    <input type="text" class="form-control" value="{{ $location->timezone ?? '-' }}" disabled>
                </div>
            </div>

            <div class="col-12">
                <a href="{{ $gmapsLocation }}" class="btn btn-primary w-100" target="_blank">
                    <span class="tf-icons bx bx-map me-1"></span>
                    Find Location on Google Maps
                </a>
            </div>

        </div>
    </div>
@endsection
