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




    <section class="value-testi" style="background-color: #dbdbdb">
        <div class="container">

            <br><br>
            <div class="post-nav clearfix">
                <div class="post-prev">
                    <a href="javascript::void(0)">
                        <div class="">
                            <img src="{{ asset('data/md1.png') }}" alt="" style="width: 130px;">
                        </div>
                        <div class="info-post">
                            <h6>
                                代表
                                <br>
                                SAN YADANAR AUNG
                            </h6>
                            <span>
                                サン　ヤダナ　アウン
                            </span>
                        </div>
                    </a>
                </div>

                <div class="post-next">
                    <a href="javascript::void(0)">
                        <div class="">
                            <img src="{{ asset('data/md2.png') }}" alt="" style="width: 150px;">
                        </div>
                        <div class="info-post">
                            <h6>
                                CEO
                                <br>
                                WAI LIN MAUNG
                            </h6>
                            <span>ウェイ　リン　マウン</span>
                        </div>
                    </a>
                </div>
            </div>


            <div class="space-60 d-none d-md-block"></div>
            <div class="ot-heading text-center">
                <h3 class="main-head">G A S紹介 </h3>
            </div>
            <div class="space-50"></div>
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="ot-testimonials ot-testimonials-carousel-2" data-loop="true" data-time="7000"
                        data-auto="true" data-arrows="true" data-dots="false">
                        <div class="owl-carousel owl-theme">
                            <div class="testi-item">
                                <div class="ttext" style="font-size: 17px;">
                                    “
                                    G A Sは2015年1月16日に設立しました。
                                    設立後、国内人材事業とともに2022年6月にミャンマー連邦共和国政府から海外人材送り出し機関ライセンスを承認され日本への人材送り出しを開始しました。
                                    母国発展の為、日本の技術を身に付けたいミャンマーの若者達の想いを実現させるため弊社は日本とミャンマーの架け橋として努力したいと思います。 そのためミャンマーのヤンゴン州で
                                    HEIWA日本語教育センターを開いており、日本企業で働く為に必ず必要な日本語講習、日本のマナー、5ｓ、日本の文化、ゴミ分別や交通ルールなどを教育しています。
                                    <br><br>
                                    弊社としてはHEIWA日本語教育センターだけではなく、日本の上場企業である株式会社グッドスピードと提携し日本で活躍できる自動車整備士を育てる為、GSJM BRIDGE
                                    自動車整備研修センターを2023年に設立しました。日本入国後の実習生サポート体制も充実しています。名古屋に弊社のサポート事務所を設置しており、実習生とも定期的に連絡を取り日本での実習や生活をフォローしています。日本で所定期間の実習後は、ミャンマー国内での勤務先を紹介し日本で学んだ技術・知識・経験を十分に発揮出来るようサポートしています。
                                    <br><br>
                                    弊社は日本のみの送り出し機関であり、他の国への送り出しをしてない為、他の国での人材問題リスクは無く、ライセンスの維持も安定しています。メールでのお問い合わせ又はお電話にて視察・見学希望や送り出しに関する詳細などをお問い合わせ下さい。御社様からのご連絡をお待ちしております。
                                    ”
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



    <section class="content-tab" id="our-philo" style="background-color: white;">
        <div class="container">
            <div class="space-50"></div>
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5>
                        G A Sの実績
                    </h5>
                    <p>
                        2022年10月20日～2023年11月30日までの
                    </p>
                    <img src="{{ asset('data/3.png') }}" alt="image_not_found"
                        style="width: 100%; height: auto; background-size: center;">
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h5 style="text-align: right">
                        職種別採用者グラフ
                    </h5>
                    <img src="{{ asset('data/4.png') }}" alt="image_not_found"
                        style="width: 100%; height: auto; background-size: center;">
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
                                G A Sの募集方法
                            </h3>
                        </div>
                    </center>
                    <br>
                    <center>
                        <img src="{{ asset('data/school.png') }}" alt="" style="width: 80%;">
                    </center>
                </div>
            </div>
        </div>
        <br>
    </section>


    <section>
        <div class="container">
            <div class="space-60"></div>
            <div class="team-member-info">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-center text-lg-left mb-5 mb-lg-0">
                        <img src="{{ asset('data/building.jpg') }}" alt="">
                    </div>

                    <div class="col-lg-8">
                        <h3 style="font-size: 19px;">
                            G A Sから設立したHEIWA日本語教育センター紹介
                        </h3>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ asset('data/md3.jpg') }}" alt="" style="width: 100%;">
                                <br>
                                <img src="{{ asset('data/8.jpg') }}" alt="" style="width: 100%;">
                                <br>
                                <img src="{{ asset('data/9.jpg') }}" alt="" style="width: 100%;">
                            </div>
                            <div class="col-md-9">
                                
                                <h6 style="color: black;">
                                    校長
                                    <br>
                                    WAI LIN MAUNG
                                    <br>
                                    ウェイ　リン　マウン
                                    <br>
                                    在日歴
                                </h6>

                                <ul>
                                    <li>
                                        2009年3月　～　現在（永住者として在日）
                                    </li>
                                    <li>
                                        2009年3月～2014年9月（留学生）
                                    </li>
                                    <li>
                                        2014年10月～2019年6月（正社員・自動車関係）
                                    </li>
                                    <li>
                                        2019年7月～2020年9月（正社員・建設関系）
                                    </li>
                                    <li>
                                        2020年10月～2021年11月（組合員・技能実習生管理責任者）
                                    </li>
                                    <li>
                                        2021年12月～現在（送り出し機関の事業を開始）
                                    </li>
                                </ul>

                                <p>
                                    HEIWA日本語教育センターは2021年11月に開校し、現在生徒450人が日本語の教育を受けています。並行して日本語だけではなく、日本の生活・文化・5Sなどもトレーニングをしています。
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="space-50 d-none d-md-block"></div>
        </div>
    </section>
@endsection
