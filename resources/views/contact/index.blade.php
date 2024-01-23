@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')


    <section class="contact-page">
        <div class="container">
            <div class="space-50"></div>
            <div class="row">

                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                    <div class="our-philo-content">
                        <div class="space-10"></div>
                        <div class="icon-list d-flex">
                            <div class="icon-main">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                    <path
                                        d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    ヤンゴン国際空港からアクセスが便利な所
                                </h6>
                                <p>
                                    G A S はヤンゴン国際空港から約19分・ダウンタウンエリアから約45分の場所にあり、北ダゴンエリアにあります。
                                </p>
                            </div>
                        </div>

                        <div class="space-10"></div>
                        <div class="icon-list d-flex">
                            <div class="icon-main">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                    <path
                                        d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    応募者の便利性
                                </h6>
                                <p>
                                    北ダゴン区はバスの路線も多く有り、来社するのに利便性が高いエリアです。
                                </p>
                            </div>
                        </div>


                        <div class="space-10"></div>
                        <div class="icon-list d-flex">
                            <div class="icon-main">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                    <path
                                        d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    応募者のコスト軽減
                                </h6>
                                <p>
                                    周辺の家賃が安く応募者の負担が軽減出来る。
                                    予定している寮の建設及び維持費用も軽減可能。
                                </p>
                            </div>
                        </div>


                        <div class="space-10"></div>
                        <div class="icon-list d-flex">
                            <div class="icon-main">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 515.556 515.556">
                                    <path
                                        d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    OWICスマートカード発行所の近い
                                </h6>
                                <p>
                                    技能実習生も含め、海外へ赴いた様々な労働者の為、労働法講習を受ける機関や、OWIC（スマート）カードを発行するミャンマー労働省に隣接した場所に弊社の事務所が有り、書類作成業務もスムーズに行えます。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/map.png') }}" alt="" style="width: 100%;">
                </div>

            </div>
        </div>
    </section>



    <section class="about-testi">
        <div class="container">
            <div class="space-60 d-none d-md-block"></div>

            <div class="row">
                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/jp-map.png') }}" alt="" style="width: 100%;">
                </div>

                <div class="col-md-6 col-sm-12 col-lg-6">
                    <img src="{{ asset('data/qr.png') }}" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </section>



    <section class="contact-page">
        <div class="container">
            <div class="space-50"></div>
            <div class="row">

                <div class="col-md-6 col-sm-12 col-lg-6 ">
                    <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form main-contact-form"
                        id="create-form">
                        @csrf
                        <div class="main-form">
                            <h4>
                                G A S は企業様からのお問い合わせをお待ちしております。
                            </h4>
                            <div class="row">
                                <p class="col-md-6">
                                    <input name="name" type="text" placeholder="Name">
                                </p>
                                <p class="col-md-6">
                                    <input name="email" type="text" placeholder="Email">
                                </p>

                                <div class="col-md-6">
                                    <p>
                                        <input name="phone" type="text" placeholder="Phone">
                                    </p>
                                </div>

                                <div class="col-md-6">
                                    <p>
                                        <input name="subject" type="text" placeholder="Subject">
                                    </p>
                                </div>
                            </div>

                            <p>
                                <textarea name="message" cols="40" rows="10" placeholder="Message..."></textarea>
                            </p>
                            <p><button type="submit" class="octf-btn">Send Message</button></p>
                        </div>
                    </form>
                </div>


                <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6">
                    <div class="ot-heading">
                        <span class="is_highlight">
                            G A Sの所在地
                        </span>
                    </div>

                    <div class="space-20"></div>
                    <div class="space-2"></div>

                    <p>
                        @if (session('key') == 'jp')
                            いつでもお電話いただくか、お立ち寄りください。営業日の 24 時間以内にすべてのお問い合わせにお答えするよう努めております。ご質問に喜んでお答えいたします。
                        @elseif (session('key') == 'mm')
                            ရုံးလိပ်စာ
                        @else
                            Give us a call or drop by anytime, we endeavour to answer all inquiries within 24 hours on
                            business days. We will be happy to answer your questions.
                        @endif
                    </p>
                    <div class="space-10"></div>

                    <div class="box-s1 icon-left">
                        <div class="icon-box icon-box-2 contact-iconb">
                            <div class="icon-main">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 512 512">
                                    <path
                                        d="M256,0C150.125,0,64,86.135,64,192c0,141.646,177.146,310,184.688,317.104C250.75,511.031,253.375,512,256,512    s5.25-0.969,7.313-2.896C270.854,502,448,333.646,448,192C448,86.135,361.875,0,256,0z M256,298.667    c-58.813,0-106.667-47.854-106.667-106.667S197.188,85.333,256,85.333S362.667,133.188,362.667,192S314.813,298.667,256,298.667z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    @if (session('key') == 'jp')
                                        所在地
                                    @elseif (session('key') == 'mm')
                                        ရုံးလိပ်စာ
                                    @else
                                        Office Address
                                    @endif
                                </h6>
                                <p>
                                    NO 19/130, YADANARBONE KYAUNG STREET, MAYANGONE TOWNSHIP, YANGON REGION, MYANMAR
                                </p>
                            </div>
                        </div>

                        <div class="space-30"></div>
                        <div class="icon-box icon-box-2 contact-iconb">
                            <div class="icon-main contact-icon-phone">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 384 384">
                                    <path
                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    <a href="tel:+95(9)445652455">
                                        @if (session('key') == 'jp')
                                            ミャンマー
                                        @elseif (session('key') == 'mm')
                                            မြန်မာနံပါတ်
                                        @else
                                            Myanmar Number
                                        @endif
                                    </a>
                                </h6>
                                <p>
                                    +95(9)445652455
                                </p>
                            </div>
                        </div>


                        <div class="space-30"></div>
                        <div class="icon-box icon-box-2 contact-iconb">
                            <div class="icon-main contact-icon-phone">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 384 384">
                                    <path
                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    <a href="tel:+819032316684">
                                        @if (session('key') == 'jp')
                                            日本：
                                        @elseif (session('key') == 'mm')
                                            Japan Number
                                        @else
                                            Japan Number
                                        @endif
                                    </a>
                                </h6>
                                <p>
                                    +819032316684
                                </p>
                            </div>
                        </div>


                        <div class="space-30"></div>
                        <div class="icon-box icon-box-2 contact-iconb">
                            <div class="icon-main contact-icon-mail">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="m8.75 17.612v4.638c0 .324.208.611.516.713.077.025.156.037.234.037.234 0 .46-.11.604-.306l2.713-3.692z">
                                    </path>
                                    <path
                                        d="m23.685.139c-.23-.163-.532-.185-.782-.054l-22.5 11.75c-.266.139-.423.423-.401.722.023.3.222.556.505.653l6.255 2.138 13.321-11.39-10.308 12.419 10.483 3.583c.078.026.16.04.242.04.136 0 .271-.037.39-.109.19-.116.319-.311.352-.53l2.75-18.5c.041-.28-.077-.558-.307-.722z">
                                    </path>
                                </svg>
                            </div>
                            <div class="content-box">
                                <h6 class="title-box">
                                    <a href="mailto:info@gas-mm.com">
                                        Mail Us
                                    </a>
                                </h6>
                                <p>
                                    info@gas-mm.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <br>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
