<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('super.admin.home')}}"><span class="brand-logo">
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
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-house-user"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('system-settings')}}"><i class="fa-solid fa-gears"></i><span class="menu-item text-truncate" data-i18n="System Settings">System Settings</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('great-deals')}}"><i class="fa-solid fa-dollar"></i><span class="menu-item text-truncate" data-i18n="SEO Settings">Great Deals</span></a>
                    </li>
                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-file"></i><span class="menu-title text-truncate" data-i18n="Invoice">Page</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="/admin/edit-about"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">About Us</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="/admin/terms"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">Terms and Conditions</span></a>
                    </li>
                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-newspaper"></i><span class="menu-title text-truncate" data-i18n="Invoice">News,Events,Notices</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="/admin/notices"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Notice</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">All News</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href=""><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">All Event</span></a>
                    </li>
                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/admin/features"><i class="fas fa-shopping-bag"></i><span class="menu-title text-truncate" data-i18n="File Manager">Featured Contents</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/admin/edit-app-banner"><i class="fa-solid fa-download"></i><span class="menu-title text-truncate" data-i18n="File Manager">Download App Banner</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-compass"></i><span class="menu-title text-truncate" data-i18n="Invoice">Menu & Pages</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">New Menue</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">All Menue</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Pages</span></a>
                    </li>
                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-building"></i><span class="menu-title text-truncate" data-i18n="Invoice">B2B Company</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="{{route('companies')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All B2B Companies</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('active-companies')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Active B2B Companies</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('inactive-companies')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Inactive B2B Companies</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('pending-companies')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Pending B2B Companies</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('new-company')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Create New B2B Company</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('company-types')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Company Types</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('company-document-types')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Company Document Types</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="{{route('countries')}}"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Country List</span></a>
                    </li>
                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-plane"></i><span class="menu-title text-truncate" data-i18n="Invoice">Flight Schedules</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Flight Schedule</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Add Flight Schedule</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-plane-departure"></i><span class="menu-title text-truncate" data-i18n="Invoice">Airports</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Airports</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Create New Airports</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-fighter-jet"></i><span class="menu-title text-truncate" data-i18n="Invoice">Air lines Companies</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Airlines Company</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Create New Company</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-map-marker-alt"></i><span class="menu-title text-truncate" data-i18n="Invoice">All Destination</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Destination</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Create New Destination</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-address-book"></i><span class="menu-title text-truncate" data-i18n="Invoice">Contact Request</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">All Contact Request</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">New Contact Destination</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-shopping-bag"></i><span class="menu-title text-truncate" data-i18n="File Manager">Orders</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-store"></i><span class="menu-title text-truncate" data-i18n="File Manager">Agent Orders</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-people-carry"></i><span class="menu-title text-truncate" data-i18n="File Manager">Customer Orders</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-photo-video"></i><span class="menu-title text-truncate" data-i18n="File Manager">Media</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-camera"></i><span class="menu-title text-truncate" data-i18n="File Manager">Image Gallery</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-user-circle"></i><span class="menu-title text-truncate" data-i18n="File Manager">User</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i class="fas fa-user-alt-slash"></i><span class="menu-title text-truncate" data-i18n="File Manager">Role</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fas fa-flag"></i><span class="menu-title text-truncate" data-i18n="Invoice">Report</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i class="fas fa-flag"></i><span class="menu-item text-truncate" data-i18n="List">Company Report</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i class="fas fa-flag"></i><span class="menu-item text-truncate" data-i18n="Preview">Customer Report</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i class="fa-solid fa-money-bill"></i><span class="menu-title text-truncate" data-i18n="Invoice">Transaction</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i class="fa-solid fa-hand-holding-dollar"></i><span class="menu-item text-truncate" data-i18n="List">Agent Transaction History</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i class="fa-solid fa-hand-holding-dollar"></i><span class="menu-item text-truncate" data-i18n="Preview">Customer Transaction History</span></a>
                    </li>

                    <!-- <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li> -->
                </ul>
            </li>

            <!-- <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>
            </li> -->
            <!-- <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="Email">Email</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i data-feather="message-square"></i><span class="menu-title text-truncate" data-i18n="Chat">Chat</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-todo.html"><i data-feather="check-square"></i><span class="menu-title text-truncate" data-i18n="Todo">Todo</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-calendar.html"><i data-feather="calendar"></i><span class="menu-title text-truncate" data-i18n="Calendar">Calendar</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-kanban.html"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Kanban">Kanban</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-invoice-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-preview.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Preview">Preview</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-invoice-add.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Add">Add</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-file-manager.html"><i data-feather="save"></i><span class="menu-title text-truncate" data-i18n="File Manager">File Manager</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">eCommerce</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-ecommerce-shop.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Shop">Shop</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-details.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Details">Details</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-wishlist.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Wish List">Wish List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-ecommerce-checkout.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkout">Checkout</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="app-user-list.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-view.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="View">View</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="app-user-edit.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Pages">Pages</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Authentication">Authentication</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="page-auth-login-v1.html" target="_blank"><span class="menu-item text-truncate" data-i18n="LoginV1">Login v1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-login-v2.html" target="_blank"><span class="menu-item text-truncate" data-i18n="LoginV2">Login v2</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-register-v1.html" target="_blank"><span class="menu-item text-truncate" data-i18n="RegisterV1">Register v1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-register-v2.html" target="_blank"><span class="menu-item text-truncate" data-i18n="RegisterV2">Register v2</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v1.html" target="_blank"><span class="menu-item text-truncate" data-i18n="ForgotPasswordV1">Forgot Password v1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-forgot-password-v2.html" target="_blank"><span class="menu-item text-truncate" data-i18n="ForgotPasswordV2">Forgot Password v2</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-reset-password-v1.html" target="_blank"><span class="menu-item text-truncate" data-i18n="ResetPasswordV1">Reset Password v1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-auth-reset-password-v2.html" target="_blank"><span class="menu-item text-truncate" data-i18n="ResetPasswordV2">Reset Password v2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="d-flex align-items-center" href="page-account-settings.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Account Settings">Account Settings</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="page-profile.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Profile">Profile</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="page-faq.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="FAQ">FAQ</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="page-knowledge-base.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Knowledge Base">Knowledge Base</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="page-pricing.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pricing">Pricing</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Blog">Blog</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="page-blog-list.html"><span class="menu-item text-truncate" data-i18n="List">List</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-blog-detail.html"><span class="menu-item text-truncate" data-i18n="Detail">Detail</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-blog-edit.html"><span class="menu-item text-truncate" data-i18n="Edit">Edit</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Mail Template">Mail Template</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-welcome.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Welcome">Welcome</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-reset-password.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Reset Password">Reset Password</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-verify-email.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Verify Email">Verify Email</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-deactivate-account.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Deactivate Account">Deactivate Account</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-invoice.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Invoice">Invoice</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-mail-template/mail-promotional.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Promotional">Promotional</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Miscellaneous">Miscellaneous</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="page-misc-coming-soon.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Coming Soon">Coming Soon</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-misc-not-authorized.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Not Authorized">Not Authorized</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-misc-under-maintenance.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Maintenance">Maintenance</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="page-misc-error.html" target="_blank"><span class="menu-item text-truncate" data-i18n="Error">Error</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="User Interface">User Interface</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="ui-typography.html"><i data-feather="type"></i><span class="menu-title text-truncate" data-i18n="Typography">Typography</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="ui-colors.html"><i data-feather="droplet"></i><span class="menu-title text-truncate" data-i18n="Colors">Colors</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="ui-feather.html"><i data-feather="eye"></i><span class="menu-title text-truncate" data-i18n="Feather">Feather</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="credit-card"></i><span class="menu-title text-truncate" data-i18n="Card">Card</span><span class="badge badge-light-success badge-pill ml-auto mr-1">New</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="card-basic.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="card-advance.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Advance">Advance</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="card-statistics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Statistics">Statistics</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="card-analytics.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Analytics</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="card-actions.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Card Actions">Card Actions</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="briefcase"></i><span class="menu-title text-truncate" data-i18n="Components">Components</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="component-alerts.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Alerts">Alerts</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-avatar.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Avatar">Avatar</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-badges.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Badges">Badges</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-breadcrumbs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Breadcrumbs">Breadcrumbs</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-buttons.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Buttons">Buttons</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-carousel.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Carousel">Carousel</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-collapse.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Collapse">Collapse</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-divider.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Divider">Divider</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-dropdowns.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Dropdowns">Dropdowns</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-list-group.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="List Group">List Group</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-media-objects.html"><i data-feather="circle"></i><span class="menu-item">Media Objects</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-modals.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Modals">Modals</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-navs-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Navs Component">Navs Component</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-pagination.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pagination">Pagination</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-pill-badges.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pill Badges">Pill Badges</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-pills-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Pills Component">Pills Component</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-popovers.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Popovers">Popovers</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-progress.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Progress">Progress</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-spinner.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Spinner">Spinner</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-tabs-component.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tabs Component">Tabs Component</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-timeline.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Timeline">Timeline</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-bs-toast.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Toasts">Toasts</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="component-tooltips.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tooltips">Tooltips</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Extensions">Extensions</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="ext-component-sweet-alerts.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Sweet Alert">Sweet Alert</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-blockui.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Block UI">BlockUI</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-toastr.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Toastr">Toastr</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-sliders.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Sliders">Sliders</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-drag-drop.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Drag &amp; Drop">Drag &amp; Drop</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-tour.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tour">Tour</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-clipboard.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Clipboard">Clipboard</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-media-player.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Media player">Media Player</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-context-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Context Menu">Context Menu</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-swiper.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="swiper">Swiper</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-tree.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Tree">Tree</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-ratings.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Ratings">Ratings</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="ext-component-i18n.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="l18n">l18n</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="layout"></i><span class="menu-title text-truncate" data-i18n="Page Layouts">Page Layouts</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="layout-collapsed-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Collapsed Menu">Collapsed Menu</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="layout-boxed.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Boxed">Layout Boxed</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="layout-without-menu.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Without Menu">Without Menu</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="layout-empty.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Empty">Layout Empty</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="layout-blank.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Layout Blank">Layout Blank</span></a>
                    </li>
                </ul>
            </li>
            <li class=" navigation-header"><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="copy"></i><span class="menu-title text-truncate" data-i18n="Form Elements">Form Elements</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="form-input.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input">Input</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-input-groups.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input Groups">Input Groups</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-input-mask.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Input Mask">Input Mask</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-textarea.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Textarea">Textarea</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-checkbox.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Checkbox">Checkbox</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-radio.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Radio">Radio</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-switch.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Switch">Switch</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-select.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Select">Select</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-number-input.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Number Input">Number Input</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-file-uploader.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="File Uploader">File Uploader</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-quill-editor.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Quill Editor">Quill Editor</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="form-date-time-picker.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Date &amp; Time Picker">Date &amp; Time Picker</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="form-layout.html"><i data-feather="box"></i><span class="menu-title text-truncate" data-i18n="Form Layout">Form Layout</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="form-wizard.html"><i data-feather="package"></i><span class="menu-title text-truncate" data-i18n="Form Wizard">Form Wizard</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="form-validation.html"><i data-feather="check-circle"></i><span class="menu-title text-truncate" data-i18n="Form Validation">Form Validation</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="form-repeater.html"><i data-feather="rotate-cw"></i><span class="menu-title text-truncate" data-i18n="Form Repeater">Form Repeater</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="table-bootstrap.html"><i data-feather="server"></i><span class="menu-title text-truncate" data-i18n="Table">Table</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="Datatable">Datatable</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="table-datatable-basic.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Basic">Basic</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="table-datatable-advanced.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Advanced">Advanced</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="table-ag-grid.html"><i data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="ag-grid">agGrid Table</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Charts">Charts</span><span class="badge badge-light-danger badge-pill ml-auto mr-2">2</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="chart-apex.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Apex">Apex</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="chart-chartjs.html"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Chartjs">Chartjs</span></a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="maps-leaflet.html"><i data-feather="map"></i><span class="menu-title text-truncate" data-i18n="Leaflet Maps">Leaflet Maps</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Misc">Misc</span><i data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="menu"></i><span class="menu-title text-truncate" data-i18n="Menu Levels">Menu Levels</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.1</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Second Level">Second Level 2.2</span></a>
                        <ul class="menu-content">
                            <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.1</span></a>
                            </li>
                            <li><a class="d-flex align-items-center" href="#"><span class="menu-item text-truncate" data-i18n="Third Level">Third Level 3.2</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="disabled nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="eye-off"></i><span class="menu-title text-truncate" data-i18n="Disabled Menu">Disabled Menu</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" target="_blank"><i data-feather="folder"></i><span class="menu-title text-truncate" data-i18n="Documentation">Documentation</span></a>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="https://pixinvent.ticksy.com/" target="_blank"><i data-feather="life-buoy"></i><span class="menu-title text-truncate" data-i18n="Raise Support">Raise Support</span></a>
            </li> -->
        </ul>
    </div>
</div>
