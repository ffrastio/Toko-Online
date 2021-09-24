@extends('layouts.dashboard')

@section('title')
    Dashboard - Product Details
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Shirup Marzan</h2>
                <p class="dashboard-subtitle">Product Details</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form action="{{ route('dashboard-product-update', $product->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control" value="{{ $product->name }}"
                                                    name="name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Price</label>
                                                <input type="number" class="form-control" value="{{ $product->price }}"
                                                    name="price" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Category</label>
                                                <select name="categories_id" class="form-control">
                                                    <option value="{{ $product->categories_id }}">Tidak diganti
                                                        ({{ $product->categories->name }})
                                                    </option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Description</label>
                                                <textarea name="description" id="editor">{!! $product->description !!}</textarea>
                                            </div>
                                            <button class="btn btn-success btn-block" type="submit">
                                                Create Product
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($product->galleries as $gallery)
                                        <div class="col-md-4">
                                            <div class="gallery-container">
                                                <img src="{{ Storage::url($gallery->photos ?? '') }}" alt=""
                                                    class="img-gallery w-100" />
                                                <a href="{{ route('dashboard-product-gallery-delete', $gallery->id) }}"
                                                    class="delete-gallery">
                                                    <img src="/images/icon-delete.svg" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-12">
                                        <form action="{{ route('dashboard-product-gallery-upload') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="products_id" value="{{ $product->id }}">
                                            <input type="file" name="photos" id="file" style="display: none"
                                                onchange="form.submit()" />
                                            <button class="btn btn-secondary btn-block mt-4" onclick="thisFileUpload()" type="button">
                                                Add Photo
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace("editor");
    </script>
    <script>
        function thisFileUpload() {
            document.getElementById("file").click();
        }
    </script>
@endpush
