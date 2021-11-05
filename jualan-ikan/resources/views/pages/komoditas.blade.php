@extends('layouts.default')
@section('carousel')
@include('includes.banner')
@endsection
@section('content')
<main class="for-card" style="height: auto !important; overflow-y: auto;">
    <div class="container d-flex mt-4">
        <div class="row justify-content-center">

            @foreach($komoditas as $key => $value)
            <div class="col-4 mb-3 mx-2">
                <div class="inner-slider-menu">
                    <div class="top-inner">
                        <div class="inner-img">
                            <img src="https://cf.shopee.co.id/file/fa2e1d80db2119fa087372675cd46d3e" alt="">
                        </div>
                    </div>
                    <div class="center-inner">
                        <h2>
                            <span class="text-base">
                                <span class="line-clamp">500kg 12 sack</span>
                            </span>
                            <span class="text-flex">
                                <span class="text-desc">Ikan Tongkol Segar</span>
                            </span>
                        </h2>
                        <div class="disc-inner-amount">
                            <div class="price-discount">
                                <div class="disc-value">10%</div>
                            </div>
                            <div class="strikethrough">Rp10.000.000</div>
                        </div>
                        <div class="price-amount">Rp1.000.000</div>
                    </div>
                    {{-- <div class="footer-inner">
                        <div class="footer-inner-flex">
                            <div class="footer-inner-flex-center">
                                <div class="footer-inner-text">10.000 terjual</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            @endforeach


            {{-- <div class="col-4 mb-3 mx-2">
                <div class="inner-slider-menu">
                    <div class="top-inner">
                        <div class="inner-img">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="center-inner">
                        <h2>
                            <span class="text-base">
                                <span class="line-clamp">500kg 12 sack</span>
                            </span>
                            <span class="text-flex">
                                <span class="text-desc">Ikan Tongkol Segar</span>
                            </span>
                        </h2>
                        <div class="disc-inner-amount">
                            <div class="price-discount">
                                <div class="disc-value">10%</div>
                            </div>
                            <div class="strikethrough">Rp10.000.000</div>
                        </div>
                        <div class="price-amount">Rp1.000.000</div>
                    </div>
                    <div class="footer-inner">
                        <div class="footer-inner-flex">
                            <div class="footer-inner-flex-center">
                                <div class="footer-inner-text">10.000 terjual</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-3 mx-2">
                <div class="inner-slider-menu">
                    <div class="top-inner">
                        <div class="inner-img">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="center-inner">
                        <h2>
                            <span class="text-base">
                                <span class="line-clamp">500kg 12 sack</span>
                            </span>
                            <span class="text-flex">
                                <span class="text-desc">Ikan Tongkol Segar</span>
                            </span>
                        </h2>
                        <div class="disc-inner-amount">
                            <div class="price-discount">
                                <div class="disc-value">10%</div>
                            </div>
                            <div class="strikethrough">Rp10.000.000</div>
                        </div>
                        <div class="price-amount">Rp1.000.000</div>
                    </div>
                    <div class="footer-inner">
                        <div class="footer-inner-flex">
                            <div class="footer-inner-flex-center">
                                <div class="footer-inner-text">10.000 terjual</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</main>
@endsection
@section('footer')
    @include('includes.footer')
@endsection
@section('owl')
@include('includes.owl-script')
@endsection
