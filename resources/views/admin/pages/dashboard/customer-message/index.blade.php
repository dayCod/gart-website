@extends('admin.layouts.master')

@section('title', __('pages.table.index', ['prop' => 'Customer Message']))

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Customer Message</li>
    </ol>
</nav>

<div class="row mb-4">
    <div class="col-md-6 col-sm-12">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Gart Studio Interactions</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $countGartStudioInteraction }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-image-alt bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-md-6 col-sm-12">
        <a href="#" class="card card-hover h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="card-info">
                        <p class="card-text mb-2">Reise Stories Interactions</p>
                        <div class="d-flex align-items-end mb-2">
                            <h4 class="card-title mb-0 me-2">{{ $countReiseStoriesInteraction }}</h4>
                        </div>
                    </div>
                    <div class="card-icon align-self-center">
                        <span class="badge bg-label-primary rounded p-2">
                            <i class="bx bx-image-alt bx-sm"></i>
                        </span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Tabel Customer Message -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">{{ __('pages.table.index', ['prop' => 'Customer Message']) }}</h5>
        <div class="d-flex align-items-center gap-2">
            {{-- <a href="{{ route('admin.gart.category.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ __('pages.table.tooltip.create', ['prop' => 'Category']) }}">
                <i class="bx bx-plus-circle"></i>
            </a> --}}
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Type</th>
                        <th>Message</th>

                        <th class="text-center">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customerMessages as $customerMessage)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customerMessage->name }}</td>
                            <td>{{ $customerMessage->email }}</td>
                            <td>{{ $customerMessage->phone_number }}</td>
                            <td>{{ $customerMessage->type == 'gart' ? 'Gart Studio' : 'Reise Stories' }}</td>
                            <td>{{ $customerMessage->message }}</td>
                            <td>
                                <a href="{{ route('admin.dashboard.location', $customerMessage->id) }}" class="btn btn-primary btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Show Location">
                                    <i class="bx bx-map"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End Tabel Client -->
@endsection
