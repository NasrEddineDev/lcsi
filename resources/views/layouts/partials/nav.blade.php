    <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
 <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="___class_+?2___">
            <div class="sidebar-header">
                <a href="{{ route('home') }}"><img class="main-logo" src="{{ URL::asset('') }}img/logo/caci-logo.png"
                        alt="" /></a>
                <strong><a href="{{ route('home') }}"><img src="{{ URL::asset('') }}img/logo/caci-logosn.png"
                            alt="" /></a></strong>
            </div>
            <br />
            <br />
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro navbar-collapse">
                    {{-- <div class="navbar-default sidebar" role="navigation"> --}}


                    @if (Auth::check() && Auth::user()->Role->name != 'admin')
                     <ul class="metismenu" id="menu1">
                        @can('view', App\Models\Dashboard::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'dashboard' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('home') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-dashboard" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Dashboard') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Certificate::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'certificates' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('certificates.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-wpforms" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Certificates') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Product::class)
                            <li
                                class='{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'products' ? 'active' : '' }}'>
                                <a title="Landing Page" href="{{ route('products.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Products') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Importer::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'importers' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('importers.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-download" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Importers') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Producer::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'producers' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('producers.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-inbox" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Producers') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Payment::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'payments' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('payments.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-money" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Payments') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Enterprise::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'enterprises' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('enterprises.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-building" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Enterprises') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Manager::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'managers' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('managers.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-user" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Managers') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Message::class)
                            <li
                                class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'mailbox' ? 'active' : '' }}">
                                <a title="Landing Page" href="{{ route('mailbox.index') }}" aria-expanded="false">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-envelope" style="font-size:19px;"></i></span>
                                    <span class="mini-click-non">{{ __('Messages') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('view-list', App\Models\Conversation::class)
                        <li class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'mailbox' ? 'active' : '' }}">
                            <a title="{{ __('Conversations') }}" href="{{ route('conversations.index') }}" aria-expanded="false">
                            <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                class="fa fa-comments-o" style="font-size:19px;"></i></span>
                            <span class="mini-sub-pro">{{ __('Conversations') }}</span></a></li>
                        @endcan

                    </ul>
                    @else

                    <ul class="nav in metismenu" id="menu1">

                        <li>
                            <a class="has-arrow" href="{{ route('dashboards.exports') }}">
                                <span class="fa fa-building fa-lg"></span>
                                <span class="mini-click-non">{{ __('Dashboards') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{ route('dashboards.exports') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-wpforms" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Exports') }}</span></a></li>
                                <li><a title="Dashboard v.1" href="{{ route('dashboards.caci') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-wpforms" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('CACI') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="{{ route('dashboards.exporters') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Exporters') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="{{ route('dashboards.chambers') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Chambers') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="{{ route('dashboards.exports') }}">
                                <span class="fa fa-building fa-lg"></span>
                                <span class="mini-click-non">{{ __('Reporting') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-wpforms" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Exports') }}</span></a></li>
                                <li><a title="Dashboard v.1" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Products') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Exporters') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Chambers') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="{{ route('enterprises.index') }}">
                                <span class="fa fa-building fa-lg"></span>
                                <span class="mini-click-non">{{ __('Exporters') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{ route('certificates.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-wpforms" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Certificates') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="{{ route('products.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Products') }}</span></a></li>
                                <li><a title="Dashboard v.3" href="{{ route('importers.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-download" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Importers') }}</span></a></li>
                                <li><a title="Analytics" href="{{ route('producers.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-inbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Producers') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('payments.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-money" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Payments') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('enterprises.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-building" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Enterprises') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('managers.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-user" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Managers') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="{{ route('users.index') }}">
                                <span class="fa fa-users fa-lg"></span>
                                <span class="mini-click-non">{{ __('Users') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Analytics" href="{{ route('users.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-user-circle" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Users') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('roles.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-check-square" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Roles') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('permissions.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-lock" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Permissions') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="{{ route('settings.index') }}">
                                <span class="fa fa-cogs fa-lg"></span>
                                <span class="mini-click-non">{{ __('Settings') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{ route('settings.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-cog" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('General Settings') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="{{ route('settings.stamps-signatures') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-puzzle-piece" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Stamps and Signatures') }}</span></a></li>
                                <li><a title="Dashboard v.3" href="{{ route('settings.images') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-image" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Images') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="{{ route('logger.settings') }}">
                                <span class="fa fa-history fa-lg"></span>
                                <span class="mini-click-non">{{ __('Logger') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="{{ route('logger.settings') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-cog" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Settings') }}</span></a></li>
                                <li><a title="Dashboard v.2" href="{{ route('logger.users-activities') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-user-secret" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Users Activities') }}</span></a></li>
                                <li><a title="Dashboard v.3" href="/log-viewer">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-file-text" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('System Log') }}</span></a></li>
                                <li><a title="Analytics" href="/logs">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-files-o" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Advanced System Log') }}</span></a></li>
                            </ul>
                        </li>
                        {{-- <li
                            class="{{ preg_replace("/\.[^.]+$/", '', Route::currentRouteName()) == 'mailbox' ? 'active' : '' }}">
                            <a title="Landing Page" href="{{ route('mailbox.index') }}" aria-expanded="false">
                                <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-envelope" style="font-size:19px;"></i></span>
                                <span class="mini-click-non">{{ __('Messages') }}</span>
                            </a>
                        </li> --}}
                        <li>
                            <a class="has-arrow" href="#">
                                <span class="fa fa-wechat fa-lg"></span>
                                <span class="mini-click-non">{{ __('Communication') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="{{ __('Email') }}" href="{{ route('mailbox.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Email') }}</span></a></li>
                                <li><a title="{{ __('Messages') }}" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-envelope" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Messages') }}</span></a></li>
                                <li><a title="{{ __('Notifications') }}" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-bell" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Notifications') }}</span></a></li>
                                <li><a title="{{ __('Conversations') }}" href="{{ route('conversations.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-comments-o" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Conversations') }}</span></a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="#">
                                <span class="fa fa-database fa-lg"></span>
                                <span class="mini-click-non">{{ __('Reference Data') }}</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.2" href="#">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-dropbox" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Products Of Customs') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('categories.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-list-alt" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Categories') }}</span></a></li>
                                <li><a title="Widgets" href="{{ route('subcategories.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                        class="fa fa-braille" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Subcategories') }}</span></a></li>
                                <li><a title="{{ __('Countries') }}" href="{{ route('countries.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-globe" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Countries') }}</span></a></li>
                                <li><a title="{{ __('States') }}" href="{{ route('states.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-map" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('States') }}</span></a></li>
                                <li><a title="{{ __('Cities') }}" href="{{ route('cities.index') }}">
                                    <span class="educate-icon icon-wrap sub-icon-mg" aria-hidden="true"><i
                                            class="fa fa-map-marker" style="font-size:19px;"></i></span>
                                    <span class="mini-sub-pro">{{ __('Cities') }}</span></a></li>
                            </ul>
                        </li>
                    </ul>
                    @endif
                </nav>
            </div>
        </nav>
    </div>
