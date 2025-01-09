<x-base-layout>
    @section('title')
        <title>Liên Hệ {{ $companyNameValue }}</title>
    @endsection
    {{-- @php
        $settings = \App\Models\Setting::getByType(config('constants.SETTING_TYPE_DASHBOARD'));
        $ABOUT_TITLE = $settings[config('constants.ABOUT_TITLE')]['value'];
        $ABOUT_DESC = $settings[config('constants.ABOUT_DESC')]['value'];
        $SLIDER_1 = $settings[config('constants.SLIDER_1')]['value'];
        $SLIDER_2 = $settings[config('constants.SLIDER_2')]['value'];
        $SLIDER_3 = $settings[config('constants.SLIDER_3')]['value'];
        $SOLUTION_TITLE = $settings[config('constants.SOLUTION_TITLE')]['value'];
        $SOLUTION_DESCRIPTION = $settings[config('constants.SOLUTION_DESCRIPTION')]['value'];

        $feedbacks = \App\Models\Feedback::orderBy('index', 'asc')->get();
        $solutions = \App\Models\Solution::orderBy('index', 'asc')->get();
    @endphp --}}

    <div class="hero">
        {{-- <h1 class="d-none">{{ $h1 }}</h1> --}}
        <div class="center-layout">
            <div class="design-banner-contain">
                <img width="1230" height="540"
                    src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201230%20540'%3E%3C/svg%3E"
                    alt="banner" data-lazy-src="{{ asset('image/COVER-LIEN-HE.webp') }}"><noscript><img width="1230"
                        height="540" src="{{ asset('image/COVER-LIEN-HE.webp') }}" alt="banner"></noscript>
                <div class="design-banner-info">
                    <h1 class="design-banner-title">Liên hệ</h1>
                    <h2 class="design-banner-description">HÃY ĐỂ CHÚNG TÔI <br> KẾT NỐI VÀ ĐỒNG HÀNH <br> CÙNG BẠN!
                    </h2>
                </div>
            </div>
        </div>
    </div>
    


    <div class="contact-group-2">
        <div class="center-layout-2">
            <div class="contact-group-2__content">
                {{-- <div class="contact-group-2__name">Email</div>
                <div class="contact-group-2__desc">
                    <span>{{ $EMAIL }}</span>
                </div> --}}
                <div class="contact-group-2__name">Hotline</div>
                <div class="contact-group-2__desc">0942 704 480 - 0857 357 276</div>
                <div class="contact-group-2__name">Trụ sở</div>
                <div class="contact-group-2__desc">{{ $ADDRESS }}
                </div>
            </div>
            <div class="contact-group-2__map">
                {{-- <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.549342791322!2d106.68165830000001!3d10.7691731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fc10c53d2cb%3A0x5d1b2e1dd64e4f2!2zVGhp4bq_dCBL4bq_IFdlYnNpdGUgQ2h1ecOqbiBOZ2hp4buHcCB8IEPDtG5nIFR5IE1pa28gVGVjaA!5e0!3m2!1svi!2s!4v1720620369176!5m2!1svi!2s" 
                width="600" height="450" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe> --}}
                {!! $GOOGLE_MAP !!}
                {{-- <iframe
                    src="{{$GOOGLE_MAP}}"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe> --}}
            </div>
        </div>
    </div>
    <div class="check_screen_height fixed left-0 top-0 w-[1px] z-[-1] h-[100vh]"></div>
    @section('scripts')
        <script type="text/javascript" src="{{ asset('assets/js/aos.js') }}"" id=" aos-js-js"></script>
        <script src="{{ asset('assets/js/lienhe.js') }}" data-minify="1" defer></script>
    @endsection
</x-base-layout>
