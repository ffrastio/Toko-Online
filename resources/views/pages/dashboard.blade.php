@extends('layouts.dashboard')

@section('title')
    Dashboard
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">Look what you have made today!</p>
            </div>
            <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="dashboard-card-title">Customer</div>
                                <div class="dashboard-card-subtitle">50</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="dashboard-card-title">Revenue</div>
                                <div class="dashboard-card-subtitle">$931,290</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="dashboard-card-title">Transaction</div>
                                <div class="dashboard-card-subtitle">22,409,399</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <h5 class="mb-3">Recent Transaction</h5>
                        <a href="{{ route('dashboard-transaction-details', 1) }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <img src="/images/product-coffee.jpg" alt="" class="image-card" />
                                    </div>
                                    <div class="col-md-4">Coffee Kedjora</div>
                                    <div class="col-md-3">Angga Risky</div>
                                    <div class="col-md-3">12 Januari, 2020</div>
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('dashboard-transaction-details', 1) }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <img src="/images/product-drone.jpg" alt="" class="image-card" />
                                    </div>
                                    <div class="col-md-4">Mavic KW</div>
                                    <div class="col-md-3">Arwama Juhari</div>
                                    <div class="col-md-3">12 Januari, 2020</div>
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('dashboard-transaction-details', 1) }}" class="card card-list d-block">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-1">
                                        <img src="/images/product-nike.jpg" alt="" class="image-card" />
                                    </div>
                                    <div class="col-md-4">Nike Black</div>
                                    <div class="col-md-3">Fahri Saputra</div>
                                    <div class="col-md-3">12 Januari, 2020</div>
                                    <div class="col-md-1">
                                        <img src="/images/dashboard-arrow-right.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
