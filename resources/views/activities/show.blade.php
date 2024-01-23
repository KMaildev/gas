@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="cta-main" style="background-image: url({{ asset('assets/images/background/bg2-home1.jpg') }})">
        <div class="container">
            <div class="space-80"></div>
            <div class="row align-items-center">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <h2>
                        HEIWAギャラリー
                    </h2>
                    <p class="text-white">
                        @if (session('key') == 'jp')
                            フォトギャラリーをチェックしてください
                        @elseif (session('key') == 'mm')
                            ဓာတ်ပုံများ
                        @else
                            Checkout our photo gallery
                        @endif
                    </p>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <div class="ot-button">
                        <a href="{{ route('contact.index') }}" class="octf-btn octf-btn-light">
                            @if (session('key') == 'jp')
                                お問い合わせ
                            @elseif (session('key') == 'mm')
                                ဆက်သွယ်ရန်
                            @else
                                Contact Us
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <div class="space-80"></div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="space-60 d-none d-md-block"></div>

            @foreach ($activities as $activity)
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="ot-heading">
                            <span class="is_highlight">
                                ジーエーエス　カンパニーリミテッド (G A S COMPANY LIMITED)
                            </span>
                        </div>
                        <div class="space-6"></div>
                        <p class="px-xl-5" style="color: black">
                            @if (session('key') == 'jp')
                                {{ $activity->description_jp ?? $activity->description }}
                            @elseif (session('key') == 'mm')
                            @else
                                {{ $activity->description ?? '' }}
                            @endif
                        </p>
                        <div class="space-20"></div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-3" style="">
                            <article class="post-box post-box-main"
                                style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;">
                                <div class="post-inner">
                                    <div class="entry-media">
                                        <img src="{{ $image }}" alt="image_not_found"
                                            style="box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                    </div>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endforeach

            <div class="space-60 d-none d-md-block"></div>
            <div class="space-60"></div>
        </div>
    </section>

@endsection
