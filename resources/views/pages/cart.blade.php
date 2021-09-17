@extends('layouts.app')

@section('title')
    Cart Page
@endsection

@section('content')
    <!-- Start Page Content -->
    <div class="page-content page-cart">
        <!-- BreadCrumb section -->
        <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main Card -->
        <section class="store-cart">
            <div class="container">
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-12 table-responsive">
                        <table class="table table-borderless table-cart">
                            <thead>
                                <tr>
                                    <td>Image</td>
                                    <td>Name &amp; Seller</td>
                                    <td>Price</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-sofa.jpg" alt="" class="image-table" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sofa Ternyaman</div>
                                        <div class="product-subtitle">by Fani Frastio</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Rp 1.000.000</div>
                                        <div class="product-subtitle">Rupiah</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart px-4">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-sneaker.jpg" alt="" class="image-table" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Sneaker</div>
                                        <div class="product-subtitle">by BuildWith Angga</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Rp 2.000.000</div>
                                        <div class="product-subtitle">Rupiah</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart px-4">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 25%">
                                        <img src="/images/product-coffee.jpg" alt="" class="image-table" />
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Coffee Holder</div>
                                        <div class="product-subtitle">by BuildWith Angga</div>
                                    </td>
                                    <td style="width: 35%">
                                        <div class="product-title">Rp 500.000</div>
                                        <div class="product-subtitle">Rupiah</div>
                                    </td>
                                    <td style="width: 20%">
                                        <a href="#" class="btn btn-remove-cart px-4">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="150">
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <h2 class="mb-2">Shipping Details</h2>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="addressOne">Address 1</label>
                            <input type="text" class="form-control" id="addressOne" name="addressOne" value=""
                                placeholder="Alamat Utama" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="addressTwo">Address 2</label>
                            <input type="text" class="form-control" id="addressTwo" name="addressTwo" value=""
                                placeholder="Alamat Alternatif" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value=""
                                placeholder="Provinsi" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value=""
                                placeholder="Kabupaten/Kotamadya" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postalCode">Postal Code</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode" value=""
                                placeholder="Kode Pos" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" id="Country" name="Country" value="Indonesia" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" value=""
                                placeholder="08123456789" />
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-delay="250">
                    <div class="col-12 mb-4">
                        <h2>Payment Informations</h2>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title">$10</div>
                        <div class="product-subtitle">Country Tax</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title">$280</div>
                        <div class="product-subtitle">Product Insurance</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title">$580</div>
                        <div class="product-subtitle">Ship to Jakarta</div>
                    </div>
                    <div class="col-4 col-md-2">
                        <div class="product-title text-success">$392,409</div>
                        <div class="product-subtitle">Total</div>
                    </div>
                    <div class="col-8 col-md-3">
                        <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">Checkout Now</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Page Content  -->
@endsection
