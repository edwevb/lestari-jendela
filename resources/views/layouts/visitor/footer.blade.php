<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <div class="p-b-15">
                    <img class="img-responsive" height="100" src="/assets/img/logo.png" alt="">
                </div>
                <p class="stext-107 cl7">
                    Any questions? Let us know in <br>
                    {{ $profile->address }}
                </p>
                <table class="table-borderless stext-107 cl7" width="100%">
                    <tr>
                        <td><i class="fa fa-phone"></i></td>
                        <td>:&nbsp;</td>
                        <td>{{ $profile->no_tlp }}</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-envelope-open"></i></td>
                        <td>:&nbsp;</td>
                        <td>{{ $profile->email }}</td>
                    </tr>
                    <tr>
                        <td><i class="fa fa-chrome"></i></td>
                        <td>:&nbsp;</td>
                        <td>
                            <a class=" cl1 hov-cl0" href="www.lestarijendela.com">www.lestarijendela.com</a>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    NAVIGATE
                </h4>

                <ul>
                    <li class="p-b-10">
                        <a href="/home/product" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            PRODUCT
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/home/product/category/upvc" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            UPVC
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/home/product/category/aluminium" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            ALUMINIUM
                        </a>
                    </li>

                    <li class="p-b-10">
                        <a href="/home/gallery" class="stext-112 cl7 hov-cl1 trans-04">
                            <i class="zmdi zmdi-circle"></i>
                            GALLERY
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <h4 class="stext-301 cl0 p-b-30">
                    INFO
                </h4>

                <li class="p-b-10">
                    <a href="/home/blog" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-circle"></i>
                        BLOG
                    </a>
                </li>

                <li class="p-b-10">
                    <a href="/home/about" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-circle"></i>
                        ABOUT
                    </a>
                </li>

                <li class="p-b-10">
                    <a href="/home/FAQs" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-circle"></i>
                        FAQs
                    </a>
                </li>

                <li class="p-b-10">
                    <a href="/home/brochure/download" class="stext-112 cl7 hov-cl1 trans-04">
                        <i class="zmdi zmdi-download"></i>
                        Brochure
                    </a>
                </li>

                <div class="p-t-27">
                    <a href="https://www.facebook.com/lestarijendela" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-facebook"></i>
                    </a>

                    <a href="https://www.instagram.com/lestarijendela" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                        <i class="fa fa-youtube"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-25">
                <div class="fb-page" data-href="https://www.facebook.com/lestarijendela" data-tabs="timeline"
                    data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/lestarijendela" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/lestarijendela">Lestari Jendela</a></blockquote>
                </div>
            </div>
        </div>

        <div class="p-t-40">
            <p class="stext-107 cl6 txt-center">
                Copyright &copy;{{ now()->format('Y') }}
                All rights reserved
            </p>
        </div>
    </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="zmdi zmdi-chevron-up"></i>
    </span>
</div>

{{-- <div class="wa">
    <a title="Chat Via WhatsApp" href="https://api.whatsapp.com/send?phone=6281388505188" target="_blank"
        class="text-decoration-none">
        <i class="zmdi zmdi-whatsapp zmdi-hc-5x"></i>
    </a>
</div> --}}
@include('layouts.visitor.components.script')
