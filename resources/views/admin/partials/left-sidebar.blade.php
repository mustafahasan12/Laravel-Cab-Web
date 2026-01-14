   

        <div id="sidebar-left" class="enable-hover">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Search Form -->
                <form action="page_ready_search_results.html" method="post" class="sidebar-search">
                    <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
                </form>
                <!-- END Search Form -->

                <!-- Wrapper for scrolling functionality -->
                <div class="sidebar-left-scroll">
                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li>
                            <h2 class="sidebar-header">Welcome</h2>
                        </li>
                        <li>
                            <a href="index.html" class=" active"><i class="fa fa-coffee"></i>Dashboard</a>
                        </li>
                        <li>
                            <h2 class="sidebar-header">IMPORTANT</h2>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-rocket"></i>USER & MEMBERS</a>
                            <ul>
                                <li>
                                    <a href="{{route('driver_list')}}">DRIVERS</a>
                                </li>
                                <li>
                                    <a href="{{route('member.list')}}">MEMBERS</a>
                                </li>
                                <li>
                                    <a href="{{route('member.corp.list')}}">CORPORATION</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-rocket"></i>Schedule</a>
                            <ul>
                                <li>
                                    <a href="{{route('schedule.current.list')}}">Currents Schedule</a>
                                </li>
                                <li>
                                    <a href="{{route('schedule.list')}}">Master Schedule</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-th"></i>VEHICLES</a>
                            <ul>
                                <li>
                                    <a href="{{route('vehicle_list')}}">MANAGE VEHICLES</a>
                                </li>
                                <li>
                                    <a href="page_tables_datatables.html">DRIVER LOGS</a>
                                </li>
                                <li>
                                    <a href="{{route('medallion.list')}}">MEDALLION NUMBER</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-pencil-square-o"></i>DATA UTILITY</a>
                            <ul>
                                <li>
                                    <a href="{{route('pace_rides')}}">PACE RIDES</a>
                                </li>
                                <li>
                                    <a href="{{route('taxi_manifest_driver_count')}}">DRIVERS COUNT</a>
                                </li>
                                <li>
                                    <a href="page_forms_components.html">OPTIMIZED FILE</a>
                                </li>
                                <li>
                                    <a href="page_forms_validation.html">BATCH</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-rocket"></i>SCHEDULE</a>
                            <ul>
                                <li>
                                    <a href="{{route('schedule.list')}}">MASTER SCHEDULE</a>
                                </li>
                                <li>
                                    <a href="{{route('schedule.current.list')}}">CURRENT SCHEDULE</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-gift"></i>TOOLS</a>
                            <ul>
                                <li>
                                    <a href="{{route('tools.rates.list')}}">RATES</a>
                                </li>
                                <li>
                                    <a href="{{route('tools.charges.list')}}">CHARGES</a>
                                </li>
                                <li>
                                    <a href="{{route('tools.prices.list')}}">PRICE</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h2 class="sidebar-header">Extras</h2>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-gear"></i>SCHEDULE</a>
                            <ul>
                                <li>
                                    <a href="page_comp_animations.html">MASTER SCHEDULE</a>
                                </li>
                                <li>
                                    <a href="page_comp_carousel.html">CURRENT SCHEDULE</a>
                                </li>
                                <li>
                                    <a href="page_comp_gallery.html">PREVIOUS SCHEDULE</a>
                                </li>
                                
                            </ul>
                        </li>
                        <!--
                        <li>
                            <a href="#" class="menu-link"><i class="fa fa-file"></i>Pages</a>
                            <ul>
                                <li>
                                    <a href="page_ready_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="page_ready_404.html">404 Error</a>
                                </li>
                                <li>
                                    <a href="page_ready_search_results.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="page_ready_pricing_tables.html">Pricing Tables</a>
                                </li>
                                <li>
                                    <a href="page_ready_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="page_ready_invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="page_ready_article.html">Article</a>
                                </li>
                                <li>
                                    <a href="page_ready_forum.html">Forum</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-link"><i class="gi gi-tint"></i>3 Level Menu</a>
                            <ul>
                                <li>
                                    <a href="#">Link 1</a>
                                </li>
                                <li>
                                    <a href="#" class="submenu-link">Submenu 1</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Link 2</a>
                                </li>
                                <li>
                                    <a href="#" class="submenu-link">Submenu 2</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    -->
                        <li>
                            <h2 class="sidebar-header">Special</h2>
                        </li>
                        <li>
                            <a href="page_special_timeline.html"><i class="fa fa-clock-o"></i>Timeline</a>
                        </li>
                        <li>
                            <a href="page_special_user_profile.html"><i class="fa fa-pencil-square"></i>User Profile</a>
                        </li>
                        <li>
                            <a href="page_special_message_center.html"><i class="fa fa-envelope-o"></i>Message Center</a>
                        </li>
                        <li>
                            <a href="page_special_login.html"><i class="fa fa-power-off"></i>Login &amp; Register</a>
                        </li>
                        <li>
                            <a href="page_special_landing.html"><i class="fa fa-plane"></i>Landing Page</a>
                        </li>
                    </ul>
                    <!-- END Sidebar Navigation -->
                </div>
                <!-- END Wrapper for scrolling functionality -->
            </div>
            <!-- END Sidebar Content -->
        </div>