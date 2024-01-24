@extends('layouts.main')
@section('content')
    <section>
        <div class="container">
            <div class="space-60 d-none d-md-block"></div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="ot-heading">
                        <span class="">
                            ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED) 
                        </span>
                        <h3 class="main-head">
                            @if (session('key') == 'jp')
                                求人の流れ
                            @elseif (session('key') == 'mm')
                                Recruitment flow
                            @else
                                Recruitment flow
                            @endif
                        </h3>
                    </div>
                    <div class="space-20"></div>
                </div>
            </div>

            <style>
                .icon-main {
                    background: #303A9C !important;
                    width: 100px !important;
                    height: 100px !important;
                    line-height: 100px;
                }
            </style>
            <div class="row">

                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r1.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        求人受け
                                    </a>
                                </h5>
                                <p>
                                    受け入れ企業様からの求人票を受け、担当者が内容確認をしてから応募者募集が始まります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>

                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r2.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        募集
                                    </a>
                                </h5>
                                <p>
                                    基本募集条件を公開し、ミャンマー各地から応募者を募ります。
                                    弊社はブローカーを通さず応募者への直接的な募集活動を行う為、応募者のコストを軽減しています。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>

                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r_3_4.png') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: contain; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        事前選考会
                                    </a>
                                </h5>
                                <p>
                                    事前選考会を実施し、学力・体力・人柄を評価。
                                    高評価の人のみ、採用面接の対象者になります。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>


                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r4.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        採用
                                    </a>
                                </h5>
                                <p>
                                    面接は、対面またはオンラインでの実施となります。
                                    面接後、採用された技能実習生の家族と弊社担当者が面接を行い、
                                    両親の合意を取ってから選考者を確定致します。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>



                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r6.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        5ヶ月間入国前研修
                                    </a>
                                </h5>
                                <p>
                                    採用された後、日本語教育・日本での生活や文化を学び・体力づくりの指導を行います。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>


                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r7.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        日本語教育
                                    </a>
                                </h5>
                                <p>
                                    日本語能力N4レベル研修（介護は、N3レベル）。日本語教師が会話
                                    の課内授業と課外授業を行い、会話能力を伸ばします。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>

                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r8.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        生活教育
                                    </a>
                                </h5>
                                <p>
                                    ゴミの分別・掃除等の生活教育をしっかり行っています。また、
                                    日本でのマナー・日本の文化・在日外国人マニュアルの教育をしっかり
                                    と教えています。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>


                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r8.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        体力作り
                                    </a>
                                </h5>
                                <p>
                                    ジムで体力作りをしっかり指導します
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>


                <div class="col-md-12">
                    <div class="box-s2 icon-left business-icon-box">
                        <div class="icon-box icon-box-2">
                            <div class="icon-main">
                                <img src="{{ asset('data/r9.jpg') }}" alt=""
                                    style="width: 100%; height: 100px; background-size: center; object-fit: cover; border-radius: 10%;">
                            </div>
                            <div class="content-box">
                                <h5 class="title-box">
                                    <a href="javascript::void(0)">
                                        入国後フォロー
                                    </a>
                                </h5>
                                <p>
                                    名古屋に事務所が有り、日本にミャンマー人スタッフが常駐している為、迅速な対応が可能です。
                                    また、現地からミャンマーの教師・スタッフが定期的にヒアリングを行い、悩み相談を受けます。
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="space-50"></div>
                </div>

            </div>

            <div class="space-60 d-none d-md-block"></div>
            <div class="space-60"></div>
        </div>
    </section>
@endsection
