
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Investment | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets2/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets2/css/theme.css?ver=2.4.0') }}">
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
                            <h4 class="text-white">Primecapitaltraders</h4>
                            <span class="nio-version">Invest</span>
                        </a>
                    </div><!-- .nk-header-brand -->
                    <div style="background-color: #15202f" class="nk-header-menu " data-content="headerNav">
                        <div class="nk-header-mobile">
                            <div class="nk-header-brand">
                                <a href="{{ route('user.dashboard') }}" class="logo-link">
                                    <h4 class="text-white">Primecapitaltraders</h4>
                                    <span class="nio-version">Invest</span>
                                </a>
                            </div>
                            <div class="nk-menu-trigger mr-n2">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                        <!-- Menu -->
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('user.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>

                                <li class="nk-menu-item">
                                    <a href="{{ route('user.plans') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-wallet-alt"></em></span>
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
                                    <a href="html/crypto/profile.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                        <span class="nk-menu-text">My Profile</span>
                                    </a>
                                </li>

                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-header-menu -->
                    <div class="nk-header-tools">
                        <ul class="nk-quick-nav">
                            <li class="hide-mb-sm"><a href="#" class="nk-quick-nav-icon"><em class="icon ni ni-signout"></em></a></li>
                            <li class="dropdown user-dropdown order-sm-first">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <div class="user-toggle">
                                        <div class="user-avatar sm">
                                            <em class="icon ni ni-user-alt"></em>
                                        </div>
                                        <div class="user-info d-none d-xl-block">
                                            <div >{!! auth()->user()->status() !!}</div>
                                            <div class="user-name dropdown-indicator">{{ auth()->user()->fullname() }}</div>
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
                                                <span class="lead-text">{{ auth()->user()->fullname() }}</span>
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
                                            <li><a href="html/invest/profile.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                            <li><a href="html/invest/profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                            <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown-inner">
                                        <ul class="link-list">
                                            <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
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
        <div class="nk-content nk-content-lg nk-content-fluid">
            <div class="container-xl wide-lg">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head text-center">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                                    <div class="nk-block-des">
                                        <p>Choose your investment plan and start earning.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- nk-block -->
                        <div class="nk-block">
                            <form action="html/invest/invest-form.html" class="plan-iv">

                                <div class="plan-iv-list nk-slider nk-slider-s2">
                                    <ul class="plan-list slider-init" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
						{"breakpoint": 992,"settings":{"slidesToShow": 2}},
						{"breakpoint": 768,"settings":{"slidesToShow": 1}}
					]}'>
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-1" name="plan-iv" class="plan-control">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Starter</h4>
                                                        <p class="sub-text">Enjoy entry level of invest & earn money.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">1.67%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">30</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$250</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$1,999</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">125%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-1" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-2" name="plan-iv" class="plan-control">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Silver</h4>
                                                        <p class="sub-text">Best plan for user to invest & earn money.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">4.76%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">21</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$2000</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$4,999</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">200%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-2" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-3" name="plan-iv" class="plan-control">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Dimond</h4>
                                                        <p class="sub-text">Advance level of invest & earn to quickly.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">14.29%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">14</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$5000</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$20,000</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">300%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-3" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-4" name="plan-iv" class="plan-control">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Starter</h4>
                                                        <p class="sub-text">Enjoy entry level of invest & earn money.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">1.67%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">30</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$250</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$1,999</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">125%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-4" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-5" name="plan-iv" class="plan-control">
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Silver</h4>
                                                        <p class="sub-text">Best plan for user to invest & earn money.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">4.76%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">21</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$2000</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$4,999</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">200%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-5" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                        <li class="plan-item">
                                            <input type="radio" id="plan-iv-6" name="plan-iv" class="plan-control" checked>
                                            <div class="plan-item-card">
                                                <div class="plan-item-head">
                                                    <div class="plan-item-heading">
                                                        <h4 class="plan-item-title card-title title">Dimond</h4>
                                                        <p class="sub-text">Advance level of invest & earn to quickly.</p>
                                                    </div>
                                                    <div class="plan-item-summary card-text">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="lead-text">14.29%</span>
                                                                <span class="sub-text">Daily Interest</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="lead-text">14</span>
                                                                <span class="sub-text">Term Days</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-item-body">
                                                    <div class="plan-item-desc card-text">
                                                        <ul class="plan-item-desc-list">
                                                            <li><span class="desc-label">Min Deposit</span> - <span class="desc-data">$5000</span></li>
                                                            <li><span class="desc-label">Max Deposit</span> - <span class="desc-data">$20,000</span></li>
                                                            <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">Yes</span></li>
                                                            <li><span class="desc-label">Total Return</span> - <span class="desc-data">300%</span></li>
                                                        </ul>
                                                        <div class="plan-item-action">
                                                            <label for="plan-iv-6" class="plan-label">
                                                                <span class="plan-label-base">Choose this plan</span>
                                                                <span class="plan-label-selected">Plan Selected</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li><!-- .plan-item -->
                                    </ul><!-- .plan-list -->
                                </div>
                                <div class="plan-iv-actions text-center">
                                    <button class="btn btn-primary btn-lg"> <span>Continue to Invest</span> <em class="icon ni ni-arrow-right"></em></button>
                                </div>
                            </form>
                        </div><!-- nk-block -->
                    </div>
                </div>
            </div>
        </div>
        <!-- content @e -->
        <!-- footer @s -->
        <div class="nk-footer nk-footer-fluid bg-lighter">
            <div class="container-xl wide-lg">
                <div class="nk-footer-wrap">
                    <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="#">Softnio</a>
                    </div>
                    <div class="nk-footer-links">
                        <ul class="nav nav-sm">
                            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
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
<script src="{{ asset('assets2/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets2/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets2/js/charts/chart-invest.js?ver=2.4.0') }}"></script>
</body>

</html>
