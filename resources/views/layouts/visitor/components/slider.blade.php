    <!-- Slider -->
    <section class="section-slide">
        <div class="wrap-slick1 rs2-slick1">
            <div class="slick1">
                @foreach ($sliders as $slider)
                    <div class="item-slick1 bg-overlay1 lazy" style="background-image:url({{ $slider->takeImage }});"
                        data-thumb="{{ $slider->takeImage }}" data-caption="uPVC">
                        <div class="container h-full">
                            <div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
                                {{-- <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-202 cl0 respon2">
                                uPVC
                            </span>
                        </div> --}}
                                <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="0">
                                    <h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
                                        {{ $slider->heading }}
                                    </h2>
                                </div>

                                <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="800">
                                    <a href="/home/product"
                                        class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                        Learn More
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="wrap-slick1-dots p-lr-10"></div> --}}
        </div>
    </section>
