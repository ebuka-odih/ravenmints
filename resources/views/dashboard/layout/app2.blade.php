
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Investment | NFTPrimearts</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets2/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets2/css/theme.css?ver=2.4.0') }}">
    <style>
        #google_translate_element {

            color: transparent;
        }

        #google_translate_element a {

            display: none;
        }

        select.google_translate_element {

            color: black;
        }

        div.goog-te-gadget {

            color: transparent;
        }

        div.goog-te-gadget {

            color: transparent !important;
        }


    </style>
</head>

<body class="nk-body npc-invest bg-lighter ">
<div class="nk-app-root">
    <!-- wrap @s -->
    <div class="nk-wrap ">
        <!-- main header @s -->
        <div class="nk-header nk-header-fluid nk-header-fixed is-dark">
            <div class="container-xl wide-lg">
                <div class="nk-header-wrap ">
                    <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-header-brand">
                        <a href="{{ route('user.dashboard') }}" class="logo-link">
                            <h4 class="text-white">NFTPremiumarts</h4>
                            <span class="nio-version">Invest</span>
                        </a>
                    </div><!-- .nk-header-brand -->
                    <div style="background-color: #15202f" class="nk-header-menu " data-content="headerNav">
                        <div class="nk-header-mobile">
                            <div class="nk-header-brand">
                                <a href="{{ route('user.dashboard') }}" class="logo-link">
                                    <h4 class="text-white">NFTPremiumarts</h4>
                                    <span class="nio-version">Invest</span>
                                </a>
                            </div>
                            <div class="nk-menu-trigger mr-n2">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div  class="nk-sidebar-menu ">
                            <!-- Menu -->
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.deposit') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
                                        <span class="nk-menu-text">Deposit</span>
                                    </a>
                                </li>

                                <li class="nk-menu-item">
                                    <a href="{{ route('user.plans') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                                        <span class="nk-menu-text">Invest</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.transactions') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class=" icon ni ni-repeat"></em></span>
                                        <span class="nk-menu-text">Investments</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <div id="google_translate_element"></div>
                                    <script>
                                        function googleTranslateElementInit() {
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en'
                                            }, 'google_translate_element');
                                        }
                                    </script>
                                </li>

                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-header-menu -->
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="hide-mb-sm">
                                <a class="dropdown-item nk-quick-nav-icon" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <em class="icon ni ni-signout"></em>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
{{--                                <a href="#" class="nk-quick-nav-icon"></a>--}}
                            </li>
                            <li class="dropdown user-dropdown order-sm-first">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm">
                                            <em class="icon ni ni-user-alt"></em>
                                        </div>
                                        <div class="user-info d-none d-xl-block">
                                            <div >{!! auth()->user()->status() !!}</div>
                                            <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                                    <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                        <div class="user-card">
                                            <div class="user-avatar">
                                                <span>{{ auth()->user()->avatar }}</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text">{{ auth()->user()->name }}</span>
                                                <span class="sub-text">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-inner user-account-info">
                                        <h6 class="overline-title-alt">Account Balance</h6>
                                        <div class="user-balance">@convert(auth()->user()->balance) <small class="currency currency-btc">USD</small></div>
                                        <div class="user-balance-alt">{{ auth()->user()->showRate() }} <span class="currency currency-btc">BTC</span></div>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="{{ route('user.profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            <li><a href="{{ route('user.account') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                            <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <em class="icon ni ni-signout"></em><span>Sign out</span>
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </li><!-- .dropdown -->
                        </ul><!-- .nk-quick-nav -->
                    </div><!-- .nk-header-tools -->
                </div><!-- .nk-header-wrap -->
            </div><!-- .container-fliud -->
        </div>
        <!-- main header @e -->
        <!-- content @s -->
        @yield('content')
        <!-- content @e -->
        <!-- footer @s -->
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl wide-lg">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2023 NFTPremiumarts
                    </div>
                    <div class="nk-footer-links">
                        <ul class="nav nav-sm">
{{--                            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>--}}
{{--                            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>--}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer @e -->
    </div>
    <!-- wrap @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '5f634aa75266b606d398d56a6c6dab7e03fb282a';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>

<script src="{{ asset('assets2/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets2/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets2/js/charts/chart-invest.js?ver=2.4.0') }}"></script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>

</html>
