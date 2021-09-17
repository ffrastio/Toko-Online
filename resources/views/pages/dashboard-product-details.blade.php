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
                                <form action="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Product Name</label>
                                                <input type="text" class="form-control" value="Shirrup Marjan" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Price</label>
                                                <input type="number" class="form-control" value="20000" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Category</label>
                                                <select name="kategory" class="form-control" placeholder="Foods">
                                                    <option value="" disabled>
                                                        Select Category
                                                    </option>
                                                    <option value="" selected>
                                                        Food & Drink
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Description</label>
                                                <textarea name="editor">
                                                  The Nike Air Max 720 SE goes bigger than ever before with Nike's tallest Air unit yet for 
                                                  unimaginable, all-day comfort. There's super breathable fabrics on the upper, while 
                                                  colours add a modern edge. Bring the past into the future with the Nike Air Max 2090, 
                                                  a bold look inspired by the DNA of the iconic Air Max 90. Brand-new Nike Air cushioning </textarea>
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
                                    <div class="col-md-4">
                                        <div class="gallery-container">
                                            <img src="/images/dashboard-product-1.jpg" alt="" class="img-gallery w-100" />
                                            <a href="#" class="delete-gallery">
                                                <img src="/images/icon-delete.svg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="gallery-container">
                                            <img src="/images/dashboard-product-2.jpg" alt="" class="img-gallery w-100" />
                                            <a href="#" class="delete-gallery">
                                                <img src="/images/icon-delete.svg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="gallery-container">
                                            <img src="/images/dashboard-product-3.jpg" alt="" class="img-gallery w-100" />
                                            <a href="#" class="delete-gallery">
                                                <img src="/images/icon-delete.svg" alt="" />
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <input type="file" name="" id="file" style="display: none" multiple />
                                        <button class="btn btn-secondary btn-block mt-4" onclick="thisFileUpload()">
                                            Add Photo
                                        </button>
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
