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
            <form action="{{ route('admin.reise.gallery.image.form.save', $gallery_id) }}" class="row" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="gallery-box-wrapper">
                    @if ($pictures->count() < 1)
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
                    @else
                        @foreach ($pictures as $picture)
                            <div class="gallery-box">
                                <img src="{{ $picture->getImageURL(type: 'reise') }}" class="preview-gallery" alt="">
                                <div class="gallery-button-group">
                                    <label for="" class="btn btn-sm btn-secondary mb-0 upload-gallery-button">
                                        <span class="tf-icons bx bx-upload me-1"></span>
                                    </label>
                                    <button type="button" class="btn btn-danger btn-sm delete-gallery" data-type="destroy"
                                        data-picture-id="{{ $picture->id }}">
                                        <span class="tf-icons bx bx-trash-alt"></span>
                                    </button>
                                </div>
                                <input type="file" name="galleries[]" class="upload-gallery-input" accept="image/*">
                            </div>
                        @endforeach
                    @endif

                </div>
                <div class="col-12 mt-3">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $("#add-gallery").off('click').on('click', function(event) {
                const galleryBox = `<div class="gallery-box">
                            <img src="{{ asset('assets/admin/img/skeleton/not-found-image.png') }}" class="preview-gallery" alt="">
                            <div class="gallery-button-group">
                                <label for="" class="btn btn-sm btn-secondary mb-0 upload-gallery-button">
                                    <span class="tf-icons bx bx-upload me-1"></span>
                                </label>
                                <button type="button" class="btn btn-danger btn-sm delete-gallery" data-type="remove">
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

        $(document).off('click', '.delete-gallery[data-type="remove"]').on('click', '.delete-gallery[data-type="remove"]',
            function(event) {
                removePicture($(this).parents('.gallery-box'), 'remove');
            })

        $(document).off('click', '.delete-gallery[data-type="destroy"]').on('click', '.delete-gallery[data-type="destroy"]',
            function(event) {
                removePicture($(this), 'destroy');
            })

        function removePicture(elem, type) {
            if (type == 'remove') elem.remove();

            if (type == 'destroy') {
                const galleryBox = elem.parents('.gallery-box');
                const imageId = "{{ $gallery_id }}";
                const pictureId = elem.data('picture-id');

                let destroyUrl = "{{ route('admin.gart.gallery.image.destroy', ['id' => ':id', 'pictureId' => ':pictureId']) }}";
                destroyUrl = destroyUrl.replace(':id', imageId);
                destroyUrl = destroyUrl.replace(':pictureId', pictureId);

                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You won\'t be able to revert this!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        galleryBox.hide();
                        $.ajax({
                            url: destroyUrl,
                            method: 'POST',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                                _method: 'DELETE'
                            },
                            success: function(response) {

                                galleryBox.remove();
                                Swal.fire(
                                    'Deleted!',
                                    'Your image has been deleted.',
                                    'success'
                                );
                            },
                            error: function(response) {
                                galleryBox.fadeIn(200);
                                Swal.fire(
                                    'Error!',
                                    'Failed to delete image.',
                                    'error'
                                );
                            }
                        });
                    }
                });
            }
        }
    </script>
@endpush
