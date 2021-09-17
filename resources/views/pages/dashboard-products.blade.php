@extends('layouts.dashboard')

@section('title')
    Dashboard - Products
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
          <div class="dashboard-heading">
            <h2 class="dashboard-title">My Products</h2>
            <p class="dashboard-subtitle">Manage it well and get money</p>
          </div>
          <div class="dashboard-content">
            <div class="row">
              <div class="col-12">
                <a
                  href="{{route ('dashboard-product-create')}}"
                  class="btn btn-success px-4"
                  >Add New Product</a
                >
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12 col-sm-6 col-md-4 col-lg-3 ">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/dashboard-product-1.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/product-sofa.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/dashboard-product-1.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/dashboard-product-2.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/dashboard-product-1.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <a
                  href="{{route('dashboard-product-details', 1)}}"
                  class="card card-dashboard-product d-block"
                >
                  <div class="card-body">
                    <img
                      src="/images/dashboard-product-3.jpg"
                      alt=""
                      class="mb-2 w-100"
                    />
                    <p class="product-title">Shirup Marzzan</p>
                    <p class="product-subtitle">Foods</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection