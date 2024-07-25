@extends('admin.layouts.master')

@section('title', __('pages.form.default', ['prop' => 'Gallery Image']))

@section('content')

    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ms-3 mb-4">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Gallery Image</a>
            </li>
            <li class="breadcrumb-item active">
                {{ __('pages.form.default', ['prop' => 'Gallery Image']) }}
            </li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title">{{ __('pages.form.default', ['prop' => 'Gallery Image']) }}</h5>
                <button type="button" class="btn btn-info btn-sm" id="add-gallery">
                    <span class="tf-icons bx bx-plus me-1"></span> Gambar
                </button>
            </div>
        </div>
        <div class="card-body">
            <form action="" class="row" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="gallery-box-wrapper">
                    <div class="gallery-box">
                        <img src="{{ asset('assets/admin/img/skeleton/not-found-image.png') }}" class="preview-gallery"
                            alt="">
                        <div class="gallery-button-group">
                            <label for="" class="btn btn-sm btn-secondary mb-0 upload-gallery-button">
                                <span class="tf-icons bx bx-upload me-1"></span>
                            </label>
                            <button type="button" class="btn btn-danger btn-sm delete-gallery">
                                <span class="tf-icons bx bx-trash-alt"></span>
                            </button>
                        </div>
                        <input type="file" name="galleries[]" class="upload-gallery-input" accept="image/*">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $("#add-gallery").off('click').on('click', function(event) {
                const galleryBox = `<div class="gallery-box">
                            <img src="{{ asset('assets/admin/img/skeleton/not-found-image.png') }}" class="preview-gallery" alt="">
                            <div class="gallery-button-group">
                                <label for="" class="btn btn-sm btn-secondary mb-0 upload-gallery-button">
                                    <span class="tf-icons bx bx-upload me-1"></span>
                                </label>
                                <button type="button" class="btn btn-danger btn-sm delete-gallery">
                                    <span class="tf-icons bx bx-trash-alt"></span>
                                </button>
                            </div>
                            <input type="file" name="galleries[]" class="upload-gallery-input" accept="image/*">
                        </div>`;

                $(".gallery-box-wrapper").append(galleryBox);
            })
        })

        $(document).off('click', '.upload-gallery-button').on('click', '.upload-gallery-button', function(event) {
            $(this).parents('.gallery-box').find('.upload-gallery-input').click();
        })

        $(document).on('change', '.upload-gallery-input', function(event) {
            const input = $(this);
            var file = $(input).get(0).files[0];
            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $(input).parents('.gallery-box').find('.preview-gallery').attr("src", reader.result);
                };

                reader.readAsDataURL(file);
            }
        })

        $(document).off('click', '.delete-gallery').on('click', '.delete-gallery', function(event) {
            $(this).parents('.gallery-box').remove();
        })
    </script>
@endpush
