@extends('layouts.main')
@section('content')
    <style>
        .om_area {
            background-image: linear-gradient(45deg, #fbffbb, #d1fbff);
            background-color: #f4fbff;
            background-image: linear-gradient(#e7f7ff 1px, transparent 0), linear-gradient(90deg, #e7f7ff 1px, transparent 0);
            background-size: 15px 15px;
            padding: 4rem 0;
        }
    </style>
    <section class="content-tab om_area" id="our-philo">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12">
                    <center>
                        <img src="{{ asset('data/company/logo.png') }}" alt="">
                    </center>
                </div>

                <div class="col-lg-12 mb-5 mb-lg-0 py-5">
                    <p>
                        ミャンマーは情勢不安により国内の仕事がなく、ミャンマーの多くの若者は海外での働き先を探しています。そして高齢化・人材不足に悩む日本。両国の問題を解決をする為、GASは両国の架け橋となりたいという強い想いがあります。
                        <br><br>
                        しかし、ミャンマーの若者にとって母国と異なる言葉・文化・習慣がある日本社会で働くことは簡単ではありません。
                        一方、受け入れ企業様にもミャンマー人材に関して言葉や文化の違いにより、日本での生活は大丈夫なのかと言う様々なご懸念があることでしょう。
                        <br><br>
                        そうしたお互いの様々な悩みを解決する為、GASは語学はもちろん、生活教育にも力を入れ、日本社会に通用する人材を育て送り出します。
                        <br><br>
                        「悩みを解消し、共に成長を目指す送り出し機関GAS」
                        <br><br>
                        を経営理念に、GASの全ての関係者様を全力でサポートしていきます。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="content-tab" id="our-philo">
        <div class="container">
            <div class="space-50"></div>
            <div class="row align-items-center">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <center>
                        <div class="ot-heading">
                            <h3 class="main-head">
                                会社概要
                            </h3>
                        </div>
                    </center>
                    <br>
                    <center>
                        <img src="{{ asset('data/company/table.png') }}" alt="" style="width: 80%;">
                    </center>
                </div>
            </div>
        </div>
        <br>
    </section>


    <section class="content-tab om_area" id="our-philo">
        <div class="container">
            <div class="space-50"></div>
            <div class="row d-flex justify-content-around">
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <center>
                        <div class="ot-heading">
                            <h3 class="main-head">
                                ミャンマー連邦共和国政府承認したG A S
                            </h3>
                            <br>
                        </div>
                    </center>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="about_image_1 wow fadeInUp2" data-wow-delay=".1s">
                        <img src="{{ asset('data/1.jpg') }}" alt="image_not_found"
                            style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                        <div style="background-color: blue; padding: 20px;  box-shadow: white 0px 1px 3px, black 0px 0px 0px 3px;"
                            class="py-2">
                            <h5 style="color: white; text-align: center; font-size: 12px;">
                                <i>
                                    会社登記簿謄本
                                </i>
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="about_image_1 wow fadeInUp2" data-wow-delay=".1s">
                        <img src="{{ asset('data/2.jpg') }}" alt="image_not_found"
                            style="width: 100%; height: 400px; background-size: center; object-fit: cover;">
                        <div style="background-color: blue; padding: 20px;  box-shadow: white 0px 1px 4px, black 0px 0px 0px 3px;"
                            class="py-2">
                            <h5 style="color: white; text-align: center; font-size: 12px;">
                                <i>
                                    ミャンマー連邦共和国政府承認海外人材送り出し機関
                                </i>
                            </h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="value-testi">
        <div class="container">
            <div class="space-60 d-none d-md-block"></div>
            <div class="space-60"></div>
            <div class="ot-heading text-center">
                <span class="is_highlight">testimonials</span>
                <h3 class="main-head">What People Say About Us</h3>
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="ot-testimonials ot-testimonials-carousel-2" data-loop="true" data-time="7000"
                        data-auto="true" data-arrows="true" data-dots="false">
                        <div class="owl-carousel owl-theme">
                            <div class="testi-item">
                                <div class="tphoto">
                                    <img src="{{ asset('data/md1.png') }}" alt="Oliver Simson">
                                </div>
                                <div class="ttext">“We know a diverse workforce and an inclusive culture matters to our
                                    clients. Through philanthropy and employee volunteerism, we support the diverse
                                    communities where our employees live.”</div>
                                <div class="t-head">
                                    <div class="tinfo">
                                        <h6>Oliver Simson</h6>
                                        <span>client of company</span>
                                    </div>
                                </div>
                            </div>


                            <div class="testi-item">
                                <div class="tphoto"><img src="{{ asset('data/md1.png') }}" alt="Mary Grey"></div>
                                <div class="ttext">“We know a diverse workforce and an inclusive culture matters to our
                                    clients. Through philanthropy and employee volunteerism, we support the diverse
                                    communities where our employees live.”</div>
                                <div class="t-head">
                                    <div class="tinfo">
                                        <h6>Mary Grey</h6>
                                        <span>Manager</span>
                                    </div>
                                </div>
                            </div>


                            <div class="testi-item">
                                <div class="tphoto"><img src="{{ asset('data/md1.png') }}" alt="Samanta Fox"></div>
                                <div class="ttext">“We know a diverse workforce and an inclusive culture matters to our
                                    clients. Through philanthropy and employee volunteerism, we support the diverse
                                    communities where our employees live.”</div>
                                <div class="t-head">
                                    <div class="tinfo">
                                        <h6>Samanta Fox</h6>
                                        <span>Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-60 d-none d-md-block"></div>
            <div class="space-60"></div>
        </div>
    </section>
@endsection
