<header>
    <div class="container">
        <a href="{{ route('home') }}" class="custom-logo-link" rel="home" aria-current="page">
            <img src="{{ Storage::url('images/l6c.png') }}" class="" alt="Edutrading" decoding="async">
        </a>
        <div class="topmenu__wrapper">
            <button id="close" class="menu close">
                <img src="{{ Storage::url('images/close.svg') }}" alt="Menu button">
            </button>
            <ul id="menu-header" class="topmenu">
                <li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-60">
                    <a href="{{ route('about') }}" aria-current="page">About Us</a>
                </li>
                <li id="menu-item-61" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-61">
                    <a href="{{ route('courses') }}" aria-current="page">Courses</a>
                </li>
                <li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-62">
                    <a href="{{ route('packages') }}" aria-current="page">Packages</a>
                </li>
                <li id="menu-item-63" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-63">
                    <a href="{{ route('home') }}/#testimonials" aria-current="page">Testimonials</a>
                </li>

                <li id="menu-item-62" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-62">
                    <a href="{{ route('news.index') }}" aria-current="page">Financial news</a>
                </li>
            </ul>
        </div>
        <div class="left__header">
            <button id="closelang" class="menu">
                <img src="{{ Storage::url('images/close.svg') }}" alt="Menu button">
            </button>
            <ul id="menu-um-nav" class="students">
                <li id="menu-item-2200" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2200">
                    <a class="scrolll" href="{{ route('home') }}/#">Student Login</a>
                </li>
                <li id="menu-item-783" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-783">
                    <a href="{{ route('packages') }}" aria-current="page">Buy Package</a>
                </li>
            </ul>
        </div>
        <button id="menu" class="menu">
            <img src="{{ Storage::url('images/menu.svg') }}" alt="Menu button">
        </button>
    </div>
</header>
