<nav id="sidebar" class="">

            
            <div class="sidebar-header">
                <a href="{{ route('home') }}"><img class="main-logo" src="{{ asset('/adminstyle/img/logo/logo.png') }}" alt="" /></a>
                <strong><img src="{{ asset('/adminstyle/img/logo/logosn.png') }}" alt="" /></strong>
            </div>
            <div class="nalika-profile">
                <div class="profile-dtl">
                    <a href="{{ route('admin',$userdata->id) }}"><img src="{{ asset('/adminstyle/img/notification/icon.png') }}" alt="" /></a>
                    <h2>{{ $userdata->name }}<span class="min-dtn"></span></h2>
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

                   
                    
                    @if(Session::get('userrole')=='admin')
                        <li> <!-- Add  class="active" for opened dropdown -->
                            <a class="has-arrow" href="#">
                                   <i class="icon nalika-home icon-wrap"></i>
                                   <span class="mini-click-non">Properties</span>
                                </a>
                    
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Property List" href="{{ route('tableproperty',$userdata->id) }}"><span class="mini-sub-pro">Property List</span></a></li>
                                
                            </ul>
                    @endif
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Property Detail" href="{{ route('propertydetail',$userdata->id) }}"><span class="mini-sub-pro">Property Detail</span></a></li>
                                
                            </ul>
                     @if(Session::get('userrole')=='admin')   
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="User List" href="{{ route('tableuser',$userdata->id) }}"><span class="mini-sub-pro">User List</span></a></li>
                                
                            </ul>
                        </li>
                    @endif
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-mail icon-wrap"></i> <span class="mini-click-non">Mailbox</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="#"><span class="mini-sub-pro">Inbox</span></a></li>
                                
                                <li><a title="Compose Mail" href="#"><span class="mini-sub-pro">Compose Mail</span></a></li>
                            </ul>
                        </li>
                        <li>
                    @if(Session::get('userrole')=='admin')
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-diamond icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{ route('login') }}"><span class="mini-sub-pro">Login</span></a></li>
                                
                            </ul>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{ route('addproperty',$userdata->id) }}"><span class="mini-sub-pro">Register Property</span></a></li>
                                
                            </ul>
                                <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="{{ route('registeruser') }}"><span class="mini-sub-pro">User Registration</span></a></li>
                                
                            </ul>

                        </li>
                        @endif
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Charts</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Bar Charts" href="#"><span class="mini-sub-pro">Bar Charts</span></a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Data Tables</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Peity Charts" href="#"><span class="mini-sub-pro">Static Table</span></a></li>
                               
                            </ul>
                        </li>
                
                    </ul>
                </nav>
            </div>
        </nav>        