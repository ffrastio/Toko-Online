@extends('layouts.auth')

@section('title')
    Register Account
@endsection

@section('content')
    <!-- Section Content -->
    <div class="page-content page-auth" id="register">
        <div class="section store-auth">
            <div class="container">
                <div class="row row-login align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <h2>
                            Memulai untuk jual beli <br />
                            dengan cara terbaru
                        </h2>
                        <form action="" class="mt-4">
                            <div class="form-group mb-4">
                                <label>Full Name</label>
                                <input type="text" class="form-control is-valid" v-model="name" autofocus />
                            </div>
                            <div class="form-group mb-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control is-invalid" v-model="email" />
                            </div>
                            <div class="form-group mb-4">
                                <label>Password</label>
                                <input type="password" class="form-control" v-model="password" />
                            </div>
                            <div class="form-group mb-4">
                                <label>Store</label>
                                <p class="text-muted">Apakah anda juga ingin membuka toko?</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open" id="openStoreTrue"
                                        v-model="is_store_open" :value="true" />
                                    <label for="openStoreTrue" class="custom-control-label">Baik, Boleh</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="is_store_open"
                                        id="openStoreFalse" v-model="is_store_open" :value="false" />
                                    <label for="openStoreFalse" class="custom-control-label">Tidak, Nanti saja</label>
                                </div>
                            </div>
                            <div class="form-group mb-4" v-if="is_store_open">
                                <label>Nama Toko</label>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="form-group mb-4" v-if="is_store_open">
                                <label>Kategori</label>
                                <select name="kategory" class="form-control">
                                    <option value="" disabled>Select Category</option>
                                </select>
                            </div>

                            <a href="/" class="btn btn-success px-4 btn-block">Sign Up Now</a>
                            <a href="/login.html" class="btn btn-signup mt-2 px-4 btn-block">Back to Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <div class="container" style="display: none">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script src="https://unpkg.com/vue-toasted"></script>
    <script>
        Vue.use(Toasted);

        var register = new Vue({
            el: "#register",
            mounted() {
                AOS.init();

                this.$toasted.error(
                    "Maaf, tampaknya email sudah terdaftar pada sistem kami.", {
                        position: "top-center",
                        className: "rounded",
                        duration: 2000,
                    }
                );
            },
            data: {
                name: "Fani Frastio",
                email: "fanitl2a@gmail.com",
                password: "",
                is_store_open: true,
                name_store: "",
            },
        });
    </script>
@endpush
