<footer>
    <div class="container">
        <div class="row">
            <div class="footer-menu">
                <div class="menu-bottom-container">
                    <ul id="menu-bottom" class="footer-menu-items d-flex align-center white--text">
                        <li id="menu-item-74" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-74">
                            <a href="{{ route('legal.terms') }}" target="_blank">Terms and Conditions</a>
                        </li>
                        <li id="menu-item-72" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-72">
                            <a rel="privacy-policy" href="{{ route('legal.privacy') }}" target="_blank">Privacy Policy</a>
                        </li>
                        <li id="menu-item-828" class="mx-5 menu-item menu-item-type-post_type menu-item-object-page menu-item-828">
                            <a href="{{ route('legal.cookie') }}" target="_blank">Cookies Policy</a>
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
                    <p>Risk Disclaimer: A1Trend Academy ( <a href="{{ route('home') }}" target="_blank">a1trend.com</a>) is operated by Education Era LTD, 14970274, registered at 124-128 City Road, London, England, EC1V 2NX is not an investment advisor. Any information and data contained and provided through our website are for educational and general marketing purposes only and do not constitute an offer or solicitation to invest and/or trade in any financial instrument.Trading and investing involves a high degree of risk and may result in a substantial or complete loss of funds and therefore should only be undertaken with risk capital. Please seek independent financial advice and educate yourself on the risks associated with trading before you proceed with any financial matter.Education Era LTD provides educational services, references and links to third party information and services and other sources of economic and market information as an educational service and does not endorse any of these services. Education Era LTD will not be held liable for any loss or damage resulting from the services and reliance on provided. No warranty is given as to the accuracy or completeness of the information. For more information read our
                        <a href="{{ route('legal.terms') }}" target="_blank">Terms and Conditions</a>. </p>
                    <p>Copyright © 2024. All rights reserved. </p>
                </div>
                <div class="cards">
                    <div class="cards__wrapper desktop">
                        <div>
                            <img src="{{ Storage::url('images/mastercard.svg') }}" alt="Mastercard">
                            <img src="{{ Storage::url('images/visa.svg') }}" alt="Visa">
                        </div>
                        <div>
                            <img src="{{ Storage::url('images/ae.svg') }}" alt="American Express">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
