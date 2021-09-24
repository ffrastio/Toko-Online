@extends('layouts.dashboard')

@section('title')
    Dashboard - Transactions
@endsection

@section('content')
    <!-- Section Content -->
    <div class="section-content dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                    Big result start from the small one
                </p>
            </div>
            <div class="dashboard-content">
                <div class="row mt-3">
                    <div class="col-12 mt-2">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-sell-product-tab" data-toggle="pill"
                                    href="#pills-sell-product" role="tab" aria-controls="pills-sell-product"
                                    aria-selected="true">Sell Product</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-buy-product-tab" data-toggle="pill" href="#pills-buy-product"
                                    role="tab" aria-controls="pills-buy-product" aria-selected="false">Buy Product</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-sell-product" role="tabpanel"
                                aria-labelledby="pills-sell-product-tab">
                                @foreach ($sellTransaction as $transaction)
                                <a href="{{route ('dashboard-transaction-details', $transaction->id)}}" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-1">
                                                <img src="{{Storage::url($transaction->product->galleries->first()->photos ?? '')}}" alt="" class="image-card" />
                                            </div>
                                            <div class="col-md-4">{{$transaction->product->name}}</div>
                                            <div class="col-md-3">{{$transaction->product->user->name}}</div>
                                            <div class="col-md-3">{{$transaction->created_at}}</div>
                                            <div class="col-md-1">
                                                <img src="/images/dashboard-arrow-right.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            <div class="tab-pane fade" id="pills-buy-product" role="tabpanel"
                                aria-labelledby="pills-buy-product-tab">
                                @foreach ($buyTransaction as $transaction)
                                <a href="{{route ('dashboard-transaction-details', $transaction->id)}}" class="card card-list d-block">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-md-1">
                                                <img src="{{Storage::url($transaction->product->galleries->first()->photos ?? '')}}" alt="" class="image-card" />
                                            </div>
                                            <div class="col-md-4">{{$transaction->product->name}}</div>
                                            <div class="col-md-3">{{$transaction->product->user->store_name}}</div>
                                            <div class="col-md-3">{{$transaction->created_at}}</div>
                                            <div class="col-md-1">
                                                <img src="/images/dashboard-arrow-right.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
