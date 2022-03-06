@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css" rel="stylesheet" />
@endsection

@section('content')
    <div class="result page">
        <div class="result-message" v-if="!claim">
            <div class="intro-img-container">
                <img class="intro-img" src="{{ URL::asset($result_message['image']) }}" alt="">
            </div>
            <div class="title-container">
                <div class="title">{{ $result_message['title_' . app()->getLocale()] }}</div>
                <div class="title-description">{{ $result_message['description_' . app()->getLocale()] }}</div>
                <div class="title-description">@lang('strings.Imagine a world free of bias')</div>
            </div>

            <div class="form-container">
                <form action="{{ route('pages.claim') }}" method="POST" class="form needs-validation" novalidate v-on:submit.prevent="onFormSubmit" id="form">
                    @csrf
                    <div class="form-header collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span>@lang('strings.COFFEE VOUCHER')</span>
                        <img src="{{ URL::asset('assets/media/svg/arrow-down-solid.svg') }}" alt="" class="arrow">
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="form-body">
                                <div class="form-input-container">
                                    <label for="name" class="form-label">@lang('strings.Name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-input-text form-control" required>
                                </div>
                                <div class="form-input-container">
                                    <label for="email" class="form-label">@lang('strings.Email')<span class="text-danger">*</span></label>
                                    <input type="email" name="email" id="email" class="form-input-text form-control" required>
                                </div>
                                <div class="form-input-container">
                                    <label for="coffee_shop" class="form-label">@lang('strings.Choose the café to get your voucher')<span class="text-danger">*</span></label>
                                    <div class="option-container" v-for="(coffee_shop, index) in coffee_shops" v-on:click="onCoffeeShopClick(index)" :class="{'chosen': index == coffee_shop_chosen, 'invalid': coffee_shop_invalid}">
                                        <div class="option-logo-container">
                                            <img class="option-logo" :src='assets_path + coffee_shop.logo' :class="index == coffee_shop_chosen ? coffee_shop.logo_class_selected : coffee_shop.logo_class">
                                        </div>
                                        <div class="option-separator"></div>
                                        <span class="option-text">@{{ coffee_shop["title_" + locale] }}</span>
                                    </div>
                                </div>
                                <div class="form-submit-container">
                                    <button type="submit" class="form-submit">@lang('strings.GET YOUR COFFEE')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="claim fade-in" v-else>
            <div class="claim-container">
                <div class="intro-img-container">
                    <img class="intro-img" src="{{ URL::asset('assets/media/images/coffee-icon.png') }}" alt="">
                    <img class="coffee-shop-logo" :src='assets_path + coffee_shop_info.logo_white' alt="">
                </div>
                <div class="title">@lang('strings.FREE COFFEE!')</div>
                <div class="coupun">@lang('strings.Voucher Number') @{{ voucher_number }}</div>
                <div class="description-1">@lang('strings.Valid from March 8 - 10')</div>
                <div class="description-2">@lang('strings.Valid for one time use only')</div>
                <div class="description-2" v-if="coffee_shop_info['extra_description_' + locale]">@{{ coffee_shop_info["extra_description_" + locale] }}</div>
            </div>

            <div class="take-screenshot-container">
                <div class="screenshot-text">@lang('strings.Take a screenshot and share it with the barista')</div>
            </div>

            <div class="share-container">
                <div class="shareon">
                    <a class="facebook" data-url="{{ route('pages.welcome') }}" data-title="Custom Facebook title" data-text="Check this out!"></a>
                    <a class="telegram" data-url="{{ route('pages.welcome') }}" data-title="Custom Facebook title" data-text="Check this out!"></a>
                    <a class="whatsapp" data-url="{{ route('pages.welcome') }}" data-title="Custom Facebook title" data-text="Check this out!">@lang('strings.Send')</a>
                    <a class="twitter" data-url="{{ route('pages.welcome') }}" data-title="Custom Facebook title" data-text="Check this out!"></a>
                </div>
                <div class="share-text-container" v-on:click="toggleShare">
                    <img src="{{ URL::asset('assets/media/images/share-icon.png') }}" alt="" class="share-icon">
                    <div class="share-text">@lang('strings.Share the test with your friends')</div>
                </div>
            </div>
        </div>

        <div class="instagram-container">
            {!! collect(config('alnahda.embed_links'))->count() > 0 ? collect(config('alnahda.embed_links'))->shuffle()->values()->first() : '' !!}
        </div>

        <div class="footer-container">
            <div class="social-links-container">
                <a href="https://www.linkedin.com/company/nahda/ " target="_blank"><img class="social-img" src="{{ URL::asset('assets/media/images/linkedin-icon.png') }}" alt=""></a>
                <a href="​​https://www.instagram.com/alnahda_ksa/   " target="_blank"><img class="social-img" src="{{ URL::asset('assets/media/images/instagram-icon.png') }}" alt=""></a>
                <a href="https://twitter.com/alnahda_ksa" target="_blank"><img class="social-img" src="{{ URL::asset('assets/media/images/twitter-icon.png') }}" alt=""></a>
            </div>
            <a class="social-link" href="https://alnahda.org" target="_blank">alnahda.org</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const coffee_shops = @json(config('alnahda.coffee_shops'));
        const claim_url = @json(route('pages.claim'));
        const welcome_url = @json(route('pages.welcome'));
    </script>
    <script src="//www.instagram.com/embed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js" init></script>
    <script src="{{ URL::asset('assets/js/result.js') }}"></script>
    <script>
        $(function() {
            $('#coffee_shop').selectpicker();

            var loaded_option_separators = false;
            $('.form-header').on('click', function() {
                if (loaded_option_separators) {
                    return;
                }

                $('.option-separator').each(function() {
                    $(this).height($(this).parent().height());
                });

                loaded_option_separators = true;
            });
        });

        (function() {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
