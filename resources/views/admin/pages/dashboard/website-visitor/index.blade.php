@extends('admin.layouts.master')

@section('title', __('pages.table.index', ['prop' => 'Website Visitor']))

@section('content')
{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Website Visitor</li>
    </ol>
</nav>

<!-- Tabel Website Visitor -->
<div class="card">
    <div class="d-flex align-items-center justify-content-between pe-4  ">
        <h5 class="card-header mb-0">{{ __('pages.table.index', ['prop' => 'Website Visitor']) }}</h5>
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
                        <th>Session ID</th>
                        <th>IP Address</th>
                        <th>User Agent</th>
                        <th>Guest ?</th>

                        <th class="text-center">Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitors as $visitor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $visitor->session_id }}</td>
                            <td>{{ $visitor->ip_address }}</td>
                            <td>{{ Str::limit($visitor->user_agent, 40, '...') }}</td>
                            <td>
                                <span class="badge bg-{{ $visitor->is_guest ? 'warning' : 'primary' }}">
                                    {{ $visitor->is_guest ? 'Guest' : 'User' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('admin.dashboard.location', $visitor->id) }}" class="btn btn-primary btn-icon btn-sm" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="top" data-bs-html="true" data-bs-original-title="Show Location">
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
