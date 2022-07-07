@push('css') crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #header .header-body {
        display: flex;
        flex-direction: column;
        background: #151b49 !important;
        transition: min-height 0.3s ease;
        width: 100%;
        border-top: 3px solid #ededed;
        border-bottom: 1px solid transparent;
        z-index: 1001;
    }
</style>

@endpush
<?php
$settings= App\Models\Backend\SystemSettings::first();

 ?>
<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 header-body-bottom-border" style="background-color: #0c254d">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ url('/') }}">
                                <img alt="Porto" width="100%" height="40" src="{{asset("storage/settings/$settings->frontend_logo")}}" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="
                                header-nav header-nav-links
                                order-2 order-lg-1
                            ">
                            <div class="
                                    header-nav-main
                                    header-nav-main-square
                                    header-nav-main-dropdown-no-borders
                                    header-nav-main-effect-2
                                    header-nav-main-sub-effect-1
                                ">
                                <nav class="collapse pt-3">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <a class="
                                                btn btn-rounded
                                                font-weight-semibold
                                                appear-animation
                                            " style="
                                                border: 2px solid white;
                                                color: white;
                                                height: 35px;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                            href="#"><small>USD
                                                <i class="
                                                        icon-arrow-down
                                                        icons
                                                        pl-2
                                                    "></i></small></a>

                                        <a class="btn appear-animation" style="
                                                color: white;
                                                font-size: 11px;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" href="">Contact us</a>

                                            <p class="btn appear-animation" style="
                                                    color: white;
                                                    font-size: 11px;
                                                " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"><i class="fa-solid fa-user"></i> Welcome {{Auth::user()->name}}</p>




                                        <a class="btn appear-animation" style="
                                                color: white;
                                                font-size: 11px;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                            href="">|</a>

                                        <!--<a class="btn appear-animation" style="
                                                color: white;
                                                font-size: 11px;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                            href="" data-toggle="modal" data-target="#signInModal">Sign In</a>-->

                                        <a class="
                                                btn btn-rounded
                                                font-weight-semibold
                                                ml-3
                                                appear-animation
                                                text-dark
                                            " style="
                                                background-color: #f6931d;
                                                height: 35px;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                            href="" data-toggle="modal" data-target="#companyModal">Register a Company</a>

                                        <a class="
                                                ml-2
                                                mt-1
                                                text-dark
                                                d-flex
                                                justify-content-center
                                                align-items-center
                                            " style="
                                                height: 28px;
                                                width: 28px;
                                                border-radius: 50%;
                                                background-color: #f6931d;
                                            " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}"
                                            href="tel:01234567890"><i class="fas fa-phone-alt"></i></a>
                                            <div class="">
                                              <a class="btn appear-animation" style="
                                                      color: white;
                                                      font-size: 11px;
                                                  " data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                              </a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                  @csrf
                                              </form>
                                            </div>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
