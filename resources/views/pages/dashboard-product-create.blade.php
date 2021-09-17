@extends('layouts.dashboard')

@section('title')
    Dashboard - Product Create
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Create New Product</h2>
                <p class="dashboard-subtitle">Create your own product</p>
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
                                                <input type="text" class="form-control" placeholder="Shirrup Marjan" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label>Price</label>
                                                <input type="number" class="form-control" placeholder="2000" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Category</label>
                                                <select name="kategory" class="form-control" placeholder="Foods">
                                                    <option value="" disabled selected>
                                                        Select Category
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4">
                                                <label>Description</label>
                                                <textarea name="editor"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group mb-4">
                                                <label for="">Thumbnail</label>
                                                <input type="file" name="" id="" class="form-control" />
                                            </div>
                                            <p class="text-muted">*Dapat memasukkan lebih dari 1 foto product</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <button class="btn btn-success w-100" type="submit">
                        Create Product
                    </button>
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
@endpush
