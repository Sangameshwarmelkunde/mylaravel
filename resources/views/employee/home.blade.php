<!doctype html>
<html lang="en" class="no-focus">
@include('layouts.include.header')
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                       @include('employee.include.side_header')

                        <!-- END User Info -->
                   
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Search -->
             @include('employee.include.right_sidebar_search_mini')

                    
                    <!-- END Mini Stats -->

                    <!-- Friends -->
        @include('employee.include.right_sidebar_friend_activity')
                  
                    <!-- END Activity -->

                    <!-- Profile -->
                            @include('employee.include.profile')

                    <!-- END Profile -->

                    <!-- Settings -->

             @include('employee.include.right_sidebar_settings')
           

                    <!-- END Settings -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
        @include('employee.include.sidebar')
          
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                @include('employee.include.left_section')
                    <!-- END Left Section -->

                    <!-- Right Section -->
                @include('employee.include.right_section')
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image bg-image-bottom" style="background-image: url('{{asset('media/photos/photo34@2x.jpg')}}');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Employee</h1>
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Dashboard</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Welcome to your custom panel!</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-earth" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-trophy fa-3x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="{{$userCount}}">{{$userCount}}</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Clients</div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-primary" href="/employee/itrs">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bar-chart fa-3x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="{{$itrCount}}">{{$itrCount}}</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">ITR</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                        <!--  Row #2 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-primary" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bar-chart fa-3x text-primary-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="{{$gstCount}}">{{$gstCount}}</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">GST Registration</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-earth" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-trophy fa-3x text-earth-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white"><span data-toggle="countTo" data-speed="1000" data-to="{{$gstFillCount}}">{{$gstFillCount}}</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Gst Filling</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-elegance" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-envelope-letter fa-3x text-elegance-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="{{$digitalSignsCount}}">{{$digitalSignsCount}}</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Digital Signature</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-pop text-right bg-corporate" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix border-black-op-b border-3x">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-fire fa-3x text-corporate-light"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600 text-white" data-toggle="countTo" data-speed="1000" data-to="{{$shopActsCount}}">{{$shopActsCount}}</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-white-op">Shop Acts</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #2 -->

                    </div>
                    @include('employee.stat.week')
                   
               @include('employee.stat.other')
                @include('employee.stat.library')
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->
            
            <!-- Footer Start -->

                   @include('employee.include.footer')

            <!-- END Footer -->
        </div>
        <!-- END Page Container -->
        <script src="assets/js/codebase.core.min.js"></script>

        <script src="assets/js/codebase.app.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
    </body>
</html>