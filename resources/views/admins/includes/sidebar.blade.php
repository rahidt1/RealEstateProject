<nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{ URL::to('/') }}"><img class="main-logo" src="{{ asset('/adminstyle/img/logo/logo.png') }}" alt="" /></a>
                <strong><img src="{{ asset('/adminstyle/img/logo/logosn.png') }}" alt="" /></strong>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="#"><img src="{{ asset('/adminstyle/img/notification/icon.png') }}" alt="" /></a>
                    <h2>Tanvir <span class="min-dtn">Ahmed</span></h2>
                </div>
                <div class="profile-social-dtl">
                    <ul class="dtl-social">
                        <li><a href="https://www.facebook.com/rahidt1/" target="_blank"><i class="icon nalika-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon nalika-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon nalika-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li> <!-- Add  class="active" for opened dropdown -->
                            <a class="has-arrow" href="index.html">
                                   <i class="icon nalika-home icon-wrap"></i>
                                   <span class="mini-click-non">Properties</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Dashboard v.1" href="index.html"><span class="mini-sub-pro">Dashboard v.1</span></a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="mailbox.html"><span class="mini-sub-pro">Inbox</span></a></li>
                                
                                <li><a title="Compose Mail" href="mailbox-compose.html"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{ URL::to('/admin/login') }}"><span class="mini-sub-pro">Login</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{ URL::to('/admin/register') }}"><span class="mini-sub-pro">Register</span></a></li>
                                
                            </ul>

                        </li>
                        
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="bar-charts.html"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="{{URL::to('/admin/table')}}"><span class="mini-sub-pro">Static Table</span></a></li>
                               
                            </ul>
                        </li>
                
                    </ul>
                </nav>
            </div>
        </nav>        