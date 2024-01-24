<header id="site-header" class="site-header header-static sticky-header finance-header">
    <div class="header-desktop">

        <div class="finance-top-news">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <p>
                            ジーエーエス　カンパニーリミテッド（G A S COMPANY LIMITED ）
                        </p>
                    </div>
                    <div class="col-lg-3 text-right">
                        <div class="ot-button">
                            <a href="{{ route('contact.index') }}" class="octf-btn octf-btn-main">
                                @if (session('key') == 'jp')
                                    お問い合わせ
                                @else
                                    Contact Us
                                @endif
                            </a>

                            {{-- <a href="https://gsjmbridge-mm.com/en" class="text-white">
                                <img src="https://gsjmbridge-mm.com/data/us.png" alt=""
                                    style="width: 43px; height: auto; padding: 2px;">
                            </a>

                            <a href="https://gsjmbridge-mm.com/jp" class="text-white">
                                <img src="https://gsjmbridge-mm.com/data/japan.png" alt=""
                                    style="width: 43px; height: auto; padding: 2px;">
                            </a> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-topbar">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 align-self-center">
                        <div class="site-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('data/company/logo.png') }}" alt="" style="width: 100%;">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="topbar-right justify-content-end">

                            <div class="topbar-right-info phone-info">
                                <div class="topbar-right-icon phone-info-icon align-self-center">
                                    <a href="tel:1-800-456-478-23">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 384 384">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="topbar-right-desc phone-info-desc">
                                    <h6>
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



                            <div class="topbar-right-info phone-info">
                                <div class="topbar-right-icon phone-info-icon align-self-center">
                                    <a href="tel:1-800-456-478-23">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 384 384">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </a>
                                </div>
                                <div class="topbar-right-desc phone-info-desc">
                                    <h6>
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


                            <div class="topbar-right-info open-time">
                                <div class="topbar-right-icon align-self-center">
                                    <a href="tel:1-800-456-478-23">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
                                            <path
                                                d="m343.59375 101.039062c-7.953125 3.847657-11.28125 13.417969-7.433594 21.367188 10.511719 21.714844 15.839844 45.121094 15.839844 69.59375 0 88.222656-71.777344 160-160 160s-160-71.777344-160-160 71.777344-160 160-160c36.558594 0 70.902344 11.9375 99.328125 34.519531 6.894531 5.503907 16.976563 4.351563 22.480469-2.566406 5.503906-6.914063 4.351562-16.984375-2.570313-22.480469-33.652343-26.746094-76-41.472656-119.238281-41.472656-105.863281 0-192 86.136719-192 192s86.136719 192 192 192 192-86.136719 192-192c0-29.335938-6.40625-57.449219-19.039062-83.527344-3.839844-7.96875-13.441407-11.289062-21.367188-7.433594zm0 0">
                                            </path>
                                            <path
                                                d="m192 64c-8.832031 0-16 7.167969-16 16v112c0 8.832031 7.167969 16 16 16h80c8.832031 0 16-7.167969 16-16s-7.167969-16-16-16h-64v-96c0-8.832031-7.167969-16-16-16zm0 0">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                                <div class="topbar-right-desc">
                                    <h6>Our Working Hours</h6>
                                    <p>Mon - Fir: 9.00 - 5.00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="octf-main-header main-style main-header">
            <div class="octf-area-wrap">
                <div class="container">
                    <div class="octf-mainbar">
                        <div class="octf-mainbar-row octf-row">
                            <div class="octf-col menu-col">
                                <nav id="site-navigation" class="main-navigation">
                                    <ul class="menu">

                                        <li>
                                            <a href="{{ route('home') }}">
                                                @if (session('key') == 'jp')
                                                    ホーム
                                                @elseif (session('key') == 'mm')
                                                    ပင်မစာမျက်နှာ
                                                @else
                                                    Home
                                                @endif
                                            </a>
                                        </li>


                                        <li>
                                            <a href="{{ route('about.index') }}">
                                                @if (session('key') == 'jp')
                                                    会社概要
                                                @elseif (session('key') == 'mm')
                                                    ကုမ္ပဏီအကြောင်း
                                                @else
                                                    About Us
                                                @endif
                                            </a>
                                        </li>

                                        <li class="menu-item-has-children">
                                            <a href="javascript::void(0)">
                                                @if (session('key') == 'jp')
                                                    パートナー
                                                @elseif (session('key') == 'mm')
                                                    Partners
                                                @else
                                                    Partners
                                                @endif
                                            </a>
                                            <ul class="sub-menu" style="min-width: 300px;">
                                                <li>
                                                    <a href="https://goodspeed-group.co.jp/" target="_blank">
                                                        <img src="{{ asset('data/gs_logo.png') }}" alt=""
                                                            style="width: 80px;">
                                                        Good Speed Group
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="https://gsjmbridge-mm.com/" target="_blank">
                                                        <img src="{{ asset('data/gsjm.jpg') }}" alt=""
                                                            style="width: 50px;">
                                                        GSJM自動車整備研修センター
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="{{ route('myanmar.index') }}">
                                                @if (session('key') == 'jp')
                                                    ミャンマーとは？
                                                @elseif (session('key') == 'mm')
                                                    ミャンマーとは？
                                                @else
                                                    What is Myanmar?
                                                @endif
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('recruitment_flow.index') }}">
                                                @if (session('key') == 'jp')
                                                    求人の流れ
                                                @elseif (session('key') == 'mm')
                                                    Recruitment flow
                                                @else
                                                    Recruitment flow
                                                @endif
                                            </a>
                                        </li>

                                        <li>
                                            <a href="{{ route('activities.index') }}">
                                                @if (session('key') == 'jp')
                                                    ギャラリー
                                                @elseif (session('key') == 'mm')
                                                    ဓာတ်ပုံများ
                                                @else
                                                    Gallery
                                                @endif
                                            </a>
                                        </li>


                                        <li>
                                            <a href="{{ route('contact.index') }}">
                                                @if (session('key') == 'jp')
                                                    お問い合わせ
                                                @elseif (session('key') == 'mm')
                                                    ဆက်သွယ်ရန်
                                                @else
                                                    Contact Us
                                                @endif
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>


                            <div class="octf-col cta-col text-right">
                                <div class="octf-btn-cta">

                                    <div class="octf-sidepanel octf-cta-header">
                                        <div class="site-overlay panel-overlay"></div>
                                        <div id="panel-btn" class="panel-btn octf-cta-icons">
                                            <a href="mailto:info@gas-mm.com ">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="header_mobile">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="mobile_logo">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('data/company/logo.png') }}" alt="" style="width: 100%;">
                        </a>
                    </div>
                </div>
                <div class="col-7 align-self-center text-right">
                    <div class="octf-btn-cta">
                        <div class="octf-menu-mobile octf-cta-header text-left">
                            <div id="mmenu-toggle" class="mmenu-toggle">
                                <button><i class="ot-flaticon-menu"></i></button>
                            </div>
                            <div class="site-overlay mmenu-overlay"></div>
                            <div id="mmenu-wrapper" class="mmenu-wrapper on-right">
                                <div class="mmenu-inner">
                                    <a class="mmenu-close" href="#"><i
                                            class="ot-flaticon-arrowsoutline"></i></a>
                                    <div class="mobile-nav">

                                        <ul id="menu-mobile-main-menu" class="mobile_mainmenu none-style">

                                            <li>
                                                <a href="{{ route('home') }}">
                                                    @if (session('key') == 'jp')
                                                        ホーム
                                                    @elseif (session('key') == 'mm')
                                                        ပင်မစာမျက်နှာ
                                                    @else
                                                        Home
                                                    @endif
                                                </a>
                                            </li>


                                            <li>
                                                <a href="{{ route('about.index') }}">
                                                    @if (session('key') == 'jp')
                                                        会社概要
                                                    @elseif (session('key') == 'mm')
                                                        ကုမ္ပဏီအကြောင်း
                                                    @else
                                                        About Us
                                                    @endif
                                                </a>
                                            </li>

                                            <li class="menu-item-has-children">
                                                <a href="javascript::void(0)">
                                                    @if (session('key') == 'jp')
                                                        パートナー
                                                    @elseif (session('key') == 'mm')
                                                        Partners
                                                    @else
                                                        Partners
                                                    @endif
                                                </a>
                                                <ul class="sub-menu" style="min-width: 300px;">
                                                    <li>
                                                        <a href="https://goodspeed-group.co.jp/" target="_blank">
                                                            <img src="{{ asset('data/gs_logo.png') }}" alt=""
                                                                style="width: 80px;">
                                                            Good Speed Group
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="https://gsjmbridge-mm.com/" target="_blank">
                                                            <img src="{{ asset('data/gsjm.jpg') }}" alt=""
                                                                style="width: 50px;">
                                                            GSJM自動車整備研修センター
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="{{ route('myanmar.index') }}">
                                                    @if (session('key') == 'jp')
                                                        ミャンマーとは？
                                                    @elseif (session('key') == 'mm')
                                                        ミャンマーとは？
                                                    @else
                                                        What is Myanmar?
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('recruitment_flow.index') }}">
                                                    @if (session('key') == 'jp')
                                                        求人の流れ
                                                    @elseif (session('key') == 'mm')
                                                        Recruitment flow
                                                    @else
                                                        Recruitment flow
                                                    @endif
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ route('activities.index') }}">
                                                    @if (session('key') == 'jp')
                                                        ギャラリー
                                                    @elseif (session('key') == 'mm')
                                                        ဓာတ်ပုံများ
                                                    @else
                                                        Gallery
                                                    @endif
                                                </a>
                                            </li>


                                            <li>
                                                <a href="{{ route('contact.index') }}">
                                                    @if (session('key') == 'jp')
                                                        お問い合わせ
                                                    @elseif (session('key') == 'mm')
                                                        ဆက်သွယ်ရန်
                                                    @else
                                                        Contact Us
                                                    @endif
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
