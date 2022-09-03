
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('manager.home')}}"><span class="brand-logo">
              <?php
              $settings= App\Models\Backend\SystemSettings::first();

               ?>
               @if($settings->favicon != null )
               <img src="{{asset("storage/settings/$settings->favicon")}}" alt="">

               @else
              <img src="{{asset('images/icon.png')}}" alt="">
              @endif
                    </span>
                     @if($settings->backend_logo != null )
                       <h2 class="brand-text">  <img src="{{asset("storage/settings/$settings->backend_logo")}}" alt=""> </h2>

                     @else
                    <h2 class="brand-text">  <img src="{{asset('images/logo.png')}}" alt=""> </h2>
                    @endif
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <li class=" nav-item"><a class="d-flex align-items-center" href=""><i class="fa-solid fa-house-user"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Operations</span><i data-feather="more-horizontal"></i>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href=""><i class="fa-solid fa-magnifying-glass"></i><span class="menu-title text-truncate" data-i18n="Search">Search</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i class="fa-solid fa-clock-rotate-left"></i><span class="menu-title text-truncate" data-i18n="Booking History">Booking History</span></a>
              <ul class="menu-content">
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-plane-circle-check"></i><span class="menu-item text-truncate" data-i18n="Flight">Flight</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-hotel"></i><span class="menu-item text-truncate" data-i18n="Hotel">Hotel</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-gifts"></i><span class="menu-item text-truncate" data-i18n="Holiday">Holiday</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-people-group"></i><span class="menu-item text-truncate" data-i18n="Group Tour">Group Tour</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-file"></i><span class="menu-item text-truncate" data-i18n="Proposal History">Proposal History</span></a>
                </li>
              </ul>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i class="fa-solid fa-plane"></i><span class="menu-title text-truncate" data-i18n="Void/Refund/Change">Void/Refund/Change</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i class="fa-solid fa-coins"></i><span class="menu-title text-truncate" data-i18n="Partial Payment">Partial Payment</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Accounts</span><i data-feather="more-horizontal"></i>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i class="fa-solid fa-money-bill-transfer"></i><span class="menu-title text-truncate" data-i18n="Transactions">Transactions</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i class="fa-solid fa-sack-dollar"></i><span class="menu-title text-truncate" data-i18n="Payment">Payment</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i class="fa-solid fa-building-columns"></i><span class="menu-title text-truncate" data-i18n="Bank List">Bank List</span></a>
          </li>
          <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Manage</span><i data-feather="more-horizontal"></i>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i class="fa-solid fa-user"></i><span class="menu-title text-truncate" data-i18n="Profile">Profile</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i class="fa-solid fa-users"></i><span class="menu-title text-truncate" data-i18n="Quick Passengers">Quick Passengers</span></a>
          </li>
          <li class=" nav-item"><a class="d-flex align-items-center" href="index.html"><i class="fa-solid fa-building"></i><span class="menu-title text-truncate" data-i18n="Company">Company</span></a>
              <ul class="menu-content">
                <li><a class="d-flex align-items-center" href="/manager/company-detail/{{Auth::user()->id}}"><i class="fa-solid fa-file"></i><span class="menu-item text-truncate" data-i18n="Company Details">Company Details</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-file"></i><span class="menu-item text-truncate" data-i18n="Edit Details">Edit Details</span></a>
                </li>
                <li><a class="d-flex align-items-center" href=""><i class="fa-solid fa-file"></i><span class="menu-item text-truncate" data-i18n="Company Documents">Company Documents</span></a>
                </li>
              </ul>
          </li>
        </ul>
    </div>
</div>
