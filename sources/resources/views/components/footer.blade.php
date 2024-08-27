<footer>
    <div class="container">
        <div class="row">
            <div class="footer-menu">
                <div class="menu-bottom-container">
                    <ul id="menu-bottom" class="footer-menu-items d-flex align-center white--text">
                        <li id="menu-item-74" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-74">
                            <a href="{{ route('legal.terms') }}" target="_blank">{{ __('footer.terms') }}</a>
                        </li>
                        <li id="menu-item-72" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-72">
                            <a rel="privacy-policy" href="{{ route('legal.privacy') }}" target="_blank"{{ __('footer.privacy') }}></a>
                        </li>
                        <li id="menu-item-828" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-828">
                            <a href="{{ route('legal.cookie') }}" target="_blank">{{ __('footer.Cookies Policy') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="cards__wrapper mobile">
                    <img src="{{ Storage::url('images/mastercard.svg') }}" alt="Mastercard">
                    <img src="{{ Storage::url('images/visa.svg') }}" alt="Visa">
                    <img src="{{ Storage::url('images/ae.svg') }}" alt="American Express">
                </div>
            </div>
            <div class="footerText">
                <div class="disclaimer" style="font-size: 14px;">
                    <p>
                        {!! __('footer.Disclaimer', [
                            'home_link' => route('home'),
                            'terms_link' => route('legal.terms')
                        ]) !!}

                    </p>
                    <p>{{ __('footer.Copyright', ['year' => \Carbon\Carbon::now()->year]) }} </p>
                </div>
                <div class="cards">
                    <div class="cards__wrapper desktop">
                        <a href="{{ route('home') }}" class="custom-logo-link" rel="home" aria-current="page">
                            <img src="{{ Storage::url('images/l6c.png') }}" class="" alt="Edutrading" decoding="async">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
