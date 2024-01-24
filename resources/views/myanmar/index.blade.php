@extends('layouts.main')
@section('content')
    <section class="cta-main" style="background-image: url({{ asset('data/bagan.webp') }})">
        <div class="container">
            <div class="space-80"></div>
            <div class="row align-items-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <h2>
                        @if (session('key') == 'jp')
                            ミャンマーとは？
                        @elseif (session('key') == 'mm')
                            ミャンマーとは？
                        @else
                            What is Myanmar?
                        @endif
                    </h2>
                    <p class="text-white">
                        @if (session('key') == 'jp')
                            ミャンマー連邦共和国
                        @elseif (session('key') == 'mm')
                            ミャンマー連邦共和国
                        @else
                            Republic of the Union of Myanmar
                        @endif
                    </p>
                </div>
            </div>
            <div class="space-80"></div>
        </div>
    </section>



    <section class="content-tab" id="our-philo">
        <div class="container">
            <div class="space-90"></div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('data/mm.jpg') }}" alt="">
                    <p>
                        ミャンマーは同じアジアですが、日本からは遠い所にあります。日本へは約８時間、ミャンマーへは約６時間かかります。
                        成田国際空港から直行便に乗ることも可能です。
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="our-philo-content">
                        <h4>
                            ミャンマー連邦共和国
                        </h4>
                        <div class="space-5"></div>
                        <ul class="mb-0">
                            <li class="d-flex pb-3">
                                <span class="list-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.107 29.107">
                                        <g>
                                            <g id="c147_full_moon">
                                                <g>
                                                    <path
                                                        d="M14.554,0C6.561,0,0,6.562,0,14.552c0,7.996,6.561,14.555,14.554,14.555c7.996,0,14.553-6.559,14.553-14.555     C29.106,6.562,22.55,0,14.554,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="Capa_1_14_"> </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </span>
                                <span class="list-text">
                                    <span style="color:#262832; font-weight:600;">
                                        総人口：5,457万人 (2023年9月）
                                    </span>
                                </span>
                            </li>

                            <li class="d-flex pb-3">
                                <span class="list-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.107 29.107">
                                        <g>
                                            <g id="c147_full_moon">
                                                <g>
                                                    <path
                                                        d="M14.554,0C6.561,0,0,6.562,0,14.552c0,7.996,6.561,14.555,14.554,14.555c7.996,0,14.553-6.559,14.553-14.555     C29.106,6.562,22.55,0,14.554,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="Capa_1_14_"> </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </span>
                                <span class="list-text">
                                    <span style="color:#262832; font-weight:600;">
                                        国土　：68万平方キロメートル
                                    </span>
                                </span>
                            </li>

                            <li class="d-flex pb-3">
                                <span class="list-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.107 29.107">
                                        <g>
                                            <g id="c147_full_moon">
                                                <g>
                                                    <path
                                                        d="M14.554,0C6.561,0,0,6.562,0,14.552c0,7.996,6.561,14.555,14.554,14.555c7.996,0,14.553-6.559,14.553-14.555     C29.106,6.562,22.55,0,14.554,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="Capa_1_14_"> </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </span>
                                <span class="list-text">
                                    <span style="color:#262832; font-weight:600;">
                                        民族　：ビルマ族（約70％、その他多くの少数民族）
                                    </span>
                                </span>
                            </li>

                            <li class="d-flex pb-3">
                                <span class="list-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.107 29.107">
                                        <g>
                                            <g id="c147_full_moon">
                                                <g>
                                                    <path
                                                        d="M14.554,0C6.561,0,0,6.562,0,14.552c0,7.996,6.561,14.555,14.554,14.555c7.996,0,14.553-6.559,14.553-14.555     C29.106,6.562,22.55,0,14.554,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="Capa_1_14_"> </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </span>
                                <span class="list-text">
                                    <span style="color:#262832; font-weight:600;">
                                        宗教　：仏教（90％）、キリスト教、回教等
                                    </span>
                                </span>
                            </li>

                            <li class="d-flex pb-3">
                                <span class="list-icon"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 29.107 29.107">
                                        <g>
                                            <g id="c147_full_moon">
                                                <g>
                                                    <path
                                                        d="M14.554,0C6.561,0,0,6.562,0,14.552c0,7.996,6.561,14.555,14.554,14.555c7.996,0,14.553-6.559,14.553-14.555     C29.106,6.562,22.55,0,14.554,0z">
                                                    </path>
                                                </g>
                                            </g>
                                            <g id="Capa_1_14_"> </g>
                                        </g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                        <g></g>
                                    </svg>
                                </span>
                                <span class="list-text">
                                    <span style="color:#262832; font-weight:600;">
                                        一人当たりのGDPは推定1,278ドル（約13.5万円）です。日本は44,246ドル（約470万円）なので日本のおよそ34分の1ということになります。
                                    </span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-60 d-done d-md-block"></div>
            <div class="space-60"></div>
        </div>
    </section>



    <section class="valua-tab" style="background-image: url({{ asset('data/whymm.jpg') }})">
        <div class="space-60"></div>
        <div class="space-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-lg-12 text-center">
                    <div class="ot-heading">
                        <h3 class="main-head text-white">
                            なぜミャンマーなのか？
                        </h3>
                    </div>

                    <div class="space-20"></div>
                    <div class="space-3"></div>
                    <p class="text-white px-xl-5" style="font-size: 19px;">
                        ミャンマー人は日本との親和性が高い最も好ましい人材と言えます。高い就労意欲を持つことや国民の90%が仏教徒であること、また識字率の高さから教育水準が相対的に高い若年層の人材が多いことから、今後の成長が見込まれる「ラストフロンティア」として注目されています。

                        <br>

                        国民の90%が敬虔な仏教徒であることや高い就労意欲を持つことなど、ミャンマー人は日本人に近い国民性を持っています。また識字率の高さや日本語の上達スピードの速さなど、高い教育水準を持った優秀な若者が多いのですが、良い仕事に就けるチャンスが少なく、日本で働きたいという意欲を強く持っています。
                    </p>
                    <div class="space-20"></div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fulid" style="background-color: #F4FBFF;">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <div class="service-quote">
                        <div class="service-quote-desc">
                            <h3 style="color: black">
                                ミャンマーギャラリー
                            </h3>
                        </div>
                    </div>
                </center>
            </div>

            <div class="col-md-12">

                <body
                    style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
                    <script src="https://www.heinmyintmyatgeneralservices.com/public/assets/jssor.slider-28.1.0.min.js"
                        type="text/javascript"></script>

                    <script type="text/javascript">
                        window.jssor_1_slider_init = function() {
                            var jssor_1_options = {
                                $AutoPlay: 1,
                                $AutoPlaySteps: 5,
                                $SlideDuration: 160,
                                $SlideWidth: 200,
                                $SlideSpacing: 3,
                                $ArrowNavigatorOptions: {
                                    $Class: $JssorArrowNavigator$,
                                    $Steps: 5
                                },
                                $BulletNavigatorOptions: {
                                    $Class: $JssorBulletNavigator$,
                                    $SpacingX: 16,
                                    $SpacingY: 16
                                }
                            };

                            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                            /*#region responsive code begin*/
                            var MAX_WIDTH = 1500;

                            function ScaleSlider() {
                                var containerElement = jssor_1_slider.$Elmt.parentNode;
                                var containerWidth = containerElement.clientWidth;

                                if (containerWidth) {

                                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                                    jssor_1_slider.$ScaleWidth(expectedWidth);
                                } else {
                                    window.setTimeout(ScaleSlider, 10);
                                }
                            }

                            ScaleSlider();

                            $Jssor$.$AddEvent(window, "load", ScaleSlider);
                            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                            /*#endregion responsive code end*/
                        };
                    </script>

                    <style>
                        /*jssor slider loading skin spin css*/
                        .jssorl-009-spin img {
                            animation-name: jssorl-009-spin;
                            animation-duration: 1.6s;
                            animation-iteration-count: infinite;
                            animation-timing-function: linear;
                        }

                        @keyframes jssorl-009-spin {
                            from {
                                transform: rotate(0deg);
                            }

                            to {
                                transform: rotate(360deg);
                            }
                        }

                        /*jssor slider bullet skin 057 css*/
                        .jssorb057 .i {
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssorb057 .i .b {
                            fill: none;
                            stroke: #fff;
                            stroke-width: 2000;
                            stroke-miterlimit: 10;
                            stroke-opacity: 0.4;
                        }

                        .jssorb057 .i:hover .b {
                            stroke-opacity: .7;
                        }

                        .jssorb057 .iav .b {
                            stroke-opacity: 1;
                        }

                        .jssorb057 .i.idn {
                            opacity: .3;
                        }

                        /*jssor slider arrow skin 073 css*/
                        .jssora073 {
                            display: block;
                            position: absolute;
                            cursor: pointer;
                        }

                        .jssora073 .a {
                            fill: #ddd;
                            fill-opacity: .7;
                            stroke: #000;
                            stroke-width: 160;
                            stroke-miterlimit: 10;
                            stroke-opacity: .7;
                        }

                        .jssora073:hover {
                            opacity: .8;
                        }

                        .jssora073.jssora073dn {
                            opacity: .4;
                        }

                        .jssora073.jssora073ds {
                            opacity: .3;
                            pointer-events: none;
                        }
                    </style>

                    <div id="jssor_1"
                        style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:150px;overflow:hidden;visibility:hidden;">
                        <div data-u="slides"
                            style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:150px;overflow:hidden;">
                            @foreach ($images as $image)
                                <div>
                                    <img data-u="image" src="{{ asset('data/mm_gallery/' . $image) }}"
                                        style="width: 100%; height: 200px; object-fit: cover; background-size: corver;" />
                                </div>
                            @endforeach
                        </div>

                        <div data-u="arrowleft" class="jssora073" style="width:50px;height:50px;top:0px;left:30px;"
                            data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <path class="a"
                                    d="M4037.7,8357.3l5891.8,5891.8c100.6,100.6,219.7,150.9,357.3,150.9s256.7-50.3,357.3-150.9 l1318.1-1318.1c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3L7745.9,8000l4216.4-4216.4 c100.6-100.6,150.9-219.7,150.9-357.3c0-137.6-50.3-256.7-150.9-357.3l-1318.1-1318.1c-100.6-100.6-219.7-150.9-357.3-150.9 s-256.7,50.3-357.3,150.9L4037.7,7642.7c-100.6,100.6-150.9,219.7-150.9,357.3C3886.8,8137.6,3937.1,8256.7,4037.7,8357.3 L4037.7,8357.3z">
                                </path>
                            </svg>
                        </div>
                        <div data-u="arrowright" class="jssora073" style="width:50px;height:50px;top:0px;right:30px;"
                            data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <path class="a"
                                    d="M11962.3,8357.3l-5891.8,5891.8c-100.6,100.6-219.7,150.9-357.3,150.9s-256.7-50.3-357.3-150.9 L4037.7,12931c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3L8254.1,8000L4037.7,3783.6 c-100.6-100.6-150.9-219.7-150.9-357.3c0-137.6,50.3-256.7,150.9-357.3l1318.1-1318.1c100.6-100.6,219.7-150.9,357.3-150.9 s256.7,50.3,357.3,150.9l5891.8,5891.8c100.6,100.6,150.9,219.7,150.9,357.3C12113.2,8137.6,12062.9,8256.7,11962.3,8357.3 L11962.3,8357.3z">
                                </path>
                            </svg>
                        </div>
                    </div>

                    <script type="text/javascript">
                        jssor_1_slider_init();
                    </script>
                </body>
            </div>
        </div>
    </div>
@endsection
