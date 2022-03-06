<header class="header">
    <a href="{{ route('pages.welcome') }}">
        <img src="{{ URL::asset('assets/media/images/logo.png') }}" alt="" class="logo">
    </a>
    <img src="{{ URL::asset('assets/media/images/logo-separator.png') }}" alt="" class="logo-separator">
    <div class="title">@lang("strings.Internation Women's Day 2022")</div>
    @if (app()->getLocale() !== 'ar')
        <a class="locale" href="{{ route('pages.language', 'ar') }}">@lang('strings.Arabic')</a>
    @endif
    @if (app()->getLocale() !== 'en')
        <a class="locale" href="{{ route('pages.language', 'en') }}">@lang('strings.English')</a>
    @endif
</header>
