@extends('admin.layouts.master')

@section('title', __('pages.table.index', ['prop' => 'Service']))

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Service</li>
    </ol>
</nav>

<!-- Tabel Service -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">{{ __('pages.table.index', ['prop' => 'Service']) }}</h5>
        <div class="d-flex align-items-center gap-2">
            <a href="{{ route('admin.reise.service.create') }}" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ __('pages.table.tooltip.create', ['prop' => 'Service']) }}">
                <i class="bx bx-plus-circle"></i>
            </a>
        </div>
    </div>
    <div class="card-body pt-1">
        <div class="table-responsive text-nowrap">
            <table class="table table-hover simple-dataTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Sub Title</th>

                        <th class="text-center">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($services as $service)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->sub_title }}</td>
                            <td>
                                <div class="d-flex flex-wrap align-items-center justify-content-center gap-2">
                                    <a href="{{ route('admin.reise.service.edit', $service->id) }}" class="btn btn-info btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ __('pages.table.tooltip.edit', ['prop' => 'Service']) }}">
                                        <i class="bx bx-edit-alt"></i>
                                    </a>
                                    <a href="{{ route('admin.reise.service.destroy', $service->id) }}" class="btn btn-danger btn-icon btn-sm delete-confirm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="{{ __('pages.table.tooltip.delete', ['prop' => 'Service']) }}">
                                        <i class="bx bx-trash-alt"></i>
                                    </a>
                                </div>
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
