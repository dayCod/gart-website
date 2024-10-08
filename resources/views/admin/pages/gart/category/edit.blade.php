@extends('admin.layouts.master')

@section('title', __('pages.form.edit', ['prop' => 'Category']))

@section('content')

{{-- Breadcrumb --}}
<nav aria-label="breadcrumb">
    <ol class="breadcrumb ms-3 mb-4">
        <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="#">Category</a>
        </li>
        <li class="breadcrumb-item active">
            {{ __('pages.form.edit', ['prop' => 'Category']) }}
        </li>
    </ol>
</nav>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ __('pages.form.edit', ['prop' => 'Category']) }}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.gart.category.update', $category->id) }}" class="row" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-6 mb-3">
                <label for="name" class="form-label required">Category Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Category Name']) }}" value="{{ old('name', $category->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-6 mb-3">
                <label for="sub_name" class="form-label required">Sub Name</label>
                <input type="text" name="sub_name" id="sub_name" class="form-control @error('sub_name') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Sub Name']) }}" value="{{ old('sub_name', $category->sub_name) }}" required>
                @error('sub_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12 mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Description']) }}">{{ old('description', $category->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4 mb-3">
                <label for="image" class="form-label">Image Preview</label>
                <img src="{{ $category->getImageURL() }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'" alt="Gambar / Logo Client" class="preview-image" id="preview-image">
            </div>
            <div class="col-md-8 mb-3">
                <label for="" class="form-label">Upload Image</label>
                <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="previewFile(this, 'preview-image')" accept="image/*">
                <i><small>*Upload High Definition Quality For a Better Image Resolution</small></i>
                @error('image')
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
