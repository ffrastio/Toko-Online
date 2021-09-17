@extends('layouts.app')

@section('title')
    MonkerMart - Category Product
@endsection

@section('content')
    <div class="page-content page-home">
        <!-- Start Categories -->
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>All Categories</h5>
                    </div>
                    <div class="row">
                        @php
                            $incrementCategory = 0;
                        @endphp
                        @forelse ($categories as $category)
                            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up"
                                data-aos-delay="{{ $incrementCategory += 100 }}">
                                <a href="{{ route('category-detail', $category->slug) }}"
                                    class="component-categories d-block">
                                    <div class="categories-image">
                                        <img src="{{ Storage::url($category->photo) }}" alt="Gadget"
                                            class="w-100" />
                                    </div>
                                    <p class="categories-text">{{ $category->name }}</p>
                                </a>
                            </div>
                        @empty
                            <div class="col-12 py-5 text-center" data-aos="fade-up" data-aos-delay="100">
                                Kategori Belum Tersedia
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
        <!-- End Categories -->
        <!-- Start New Product -->
        <section class="store-new-products">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12" data-aos="fade-in">
                        <h5>All Products</h5>
                    </div>
                </div>
                <div class="row">
                    @php
                        $incrementProducts = 0;
                    @endphp
                    @forelse ($products as $product)
                        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up"
                            data-aos-delay="{{ $incrementProducts += 100 }}">
                            <a href="{{ route('detail', $product->slug) }}" class="component-products d-block">
                                <div class="products-thumbnail">
                                    <div class="product-image" @if ($product->galleries)
                                        style="background-image:
                                        url({{ Storage::url($product->galleries->first()->photos) }})
                                    @else
                                        background-color : #eee
                                    @endif
                                        ">
                                </div>
                            </div>
                            <div class="product-text">{{ $product->name }}</div>
                            <div class="product-price">Rp. {{ $product->price }}</div>
                            </a>
                        </div>
                    @empty
                        <div class="col-12 py-4 text-center">
                            <p>Barang belum tersedia</p>
                        </div>
                    @endforelse
                </div>
                <div class="row">
                    <div class="col-12 mt-4 text-right">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </section>
</div>
@endsection
