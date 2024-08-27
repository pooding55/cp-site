<div id="cookie-notice" role="dialog" class="  cn-position-bottom" aria-label="Cookie Notice" style="background-color: #010307a6;">
    <div class="cookie-notice-container" style="color: #fff">
    <span id="cn-notice-text" class="cn-text-container" style="text-align: start; color: #fff; ">{{ __('cookie.we_use') }} <br class="cookie-breake">
      <a href="{{ route('legal.cookie') }}" style="text-decoration: underline; color: #ff0a54; font-weight: 700;">{{ __('cookie.Read More') }}</a>
    </span>
        <span id="cn-notice-buttons" class="cn-buttons-container" onclick="closeCookies()">
      <span style="color: #ff0a54 ; cursor: pointer; font-size: 1.3em;" id="cn-accept-cookie" data-cookie-set="accept" class="cn-set-cookie cn-button cn-button-custom button" aria-label="Ok">{{ __('cookie.Accept') }}</span>
    </span>
        <span id="cn-close-notice" data-cookie-set="accept" class="cn-close-icon" title="No" onclick="closeCookies()"></span>
    </div>
</div>
