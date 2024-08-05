@extends('admin.layouts.master')

@section('title', __('pages.form.edit', ['prop' => 'Service']))

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Service</a>
        </li>
        <li class="breadcrumb-item active">
            {{ __('pages.form.edit', ['prop' => 'Service']) }}
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ __('pages.form.edit', ['prop' => 'Service']) }}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.gart.service.update', $service->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="col-6 mb-3">
                <label for="title" class="form-label required">Service Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Service Title']) }}" value="{{ old('title', $service->title) }}" required>
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                <label for="sub_title" class="form-label required">Sub Title</label>
                <input type="text" name="sub_title" id="sub_title" class="form-control @error('sub_title') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Sub Title']) }}" value="{{ old('sub_title', $service->sub_title) }}" required>
                @error('sub_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label required">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Description']) }}">{{ old('description', $service->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="attachment_url" class="form-label">URL</label>
                <input type="text" name="attachment_url" id="attachment_url" class="form-control @error('attachment_url') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'URL']) }}" value="{{ old('attachment_url', $service->attachment_url) }}">
                @error('attachment_url')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary w-100">
                    <span class="tf-icons bx bx-save me-1"></span>
                    {{ __('pages.button.submit') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
