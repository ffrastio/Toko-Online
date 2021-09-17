@extends('layouts.success')

@section('title')
    Checkout Success
@endsection

@section('content')
    <div class="page-content page-success">
        <div class="store-success">
            <div class="container">
                <div class="row align-items-center justify-content-center row-login">
                    <div class="col-lg-6 text-center">
                        <img src="/images/success.svg" alt="" class="mb-4">
                        <h2 class="mb-4">Transaction Processed!</h2>
                        <p>Silahkan tunggu konfirmasi email dari kami dan
                            kami akan menginformasikan resi secepat mungkin!</p>
                        <a href="/dashboard.html" class="btn btn-success mb-4 px-4 btn-block">My Dashboard</a>
                        <a href="/" class="btn btn-shopping px-4 btn-block">Go to Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
