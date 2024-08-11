@extends('admin.layouts.master')

@section('title', __('pages.form.edit', ['prop' => 'Gallery']))

@section('content')

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ms-3 mb-4">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Gallery</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('pages.form.edit', ['prop' => 'Gallery']) }}
            </li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">{{ __('pages.form.edit', ['prop' => 'Gallery']) }}</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.reise.gallery.update', $gallery->id) }}" class="row" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-12 mb-3">
                    <label for="category_id" class="form-label required">Category</label>
                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror" required>
                        <option value="">Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected(old('category_id', $gallery->category_id) == $category->id)>
                                {{ Str::ucfirst($category->name) }}
                            </option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="title" class="form-label required">Gallery Title</label>
                    <input type="text" name="title" id="title"
                        class="form-control @error('title') is-invalid @enderror"
                        placeholder="{{ __('pages.form.placeholder', ['prop' => 'Gallery Title']) }}"
                        value="{{ old('title', $gallery->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="sub_title" class="form-label required">Sub Title</label>
                    <input type="text" name="sub_title" id="sub_title"
                        class="form-control @error('sub_title') is-invalid @enderror"
                        placeholder="{{ __('pages.form.placeholder', ['prop' => 'Sub Title']) }}"
                        value="{{ old('sub_title', $gallery->sub_title) }}" required>
                    @error('sub_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="production_year" class="form-label required">Production Year</label>
                    <input type="text" name="production_year" id="production_year"
                        class="form-control @error('production_year') is-invalid @enderror"
                        placeholder="{{ __('pages.form.placeholder', ['prop' => 'Production Year']) }}"
                        value="{{ old('production_year', $gallery->production_year) }}" required>
                    @error('production_year')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-6 mb-3">
                    <label for="client_name" class="form-label required">Client Name</label>
                    <input type="text" name="client_name" id="client_name"
                        class="form-control @error('client_name') is-invalid @enderror"
                        placeholder="{{ __('pages.form.placeholder', ['prop' => 'Client Name']) }}"
                        value="{{ old('client_name', $gallery->client_name) }}" required>
                    @error('client_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="instagram_post_url" class="form-label">Instagram Post URL</label>
                    <input type="text" name="instagram_post_url" id="instagram_post_url" class="form-control @error('instagram_post_url') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Instagram Post URL']) }}" value="{{ old('instagram_post_url', $gallery->instagram_post_url) }}">
                    @error('instagram_post_url')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="tags" class="form-label required">Tags</label>
                    <input type="text" name="tags" id="tags" class="form-control separatorTags @error('tags') is-invalid @enderror" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Tags']) }}" value="{{ old('tags', implode(',', $gallery->tags)) }}" required>
                    <i><small>*To enter multiple or submit tags, you can use `tabs` on your keyboard</small></i>
                    @error('tags')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 mb-3">
                    <label for="description" class="form-label required">Description</label>
                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                        rows="5" placeholder="{{ __('pages.form.placeholder', ['prop' => 'Description']) }}">{{ old('description', $gallery->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-4 mb-3">
                    <label for="image" class="form-label">Image Preview</label>
                    <img src="{{ $gallery->getImageURL(type: 'reise') }}" onerror="this.src='{{ asset('assets/admin/img/skeleton/not-found-image.png') }}'"
                        alt="Gambar / Logo Client" class="preview-image" id="preview-image">
                </div>
                <div class="col-md-8 mb-3">
                    <label for="" class="form-label">Upload Image</label>
                    <input type="file" name="image" id="image"
                        class="form-control @error('image') is-invalid @enderror"
                        onchange="previewFile(this, 'preview-image')" accept="image/*">
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

@push('script')
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('.separatorTags');

        // initialize Tagify on the above input node reference
        new Tagify(input)
    </script>
@endpush
