<!doctype html>
<html lang="en" class="no-focus">
@include('layouts.include.headerWithDataTable')
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="{{asset('media/avatars/avatar15.jpg')}}" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="#">{{$user->name}}</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">

      

            
                    <!-- Profile -->
                @include('employee.include.profile')
                    <!-- END Profile -->

                    <!-- Settings -->
                   @include('employee.include.settings')
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

            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-image bg-image-bottom" style="background-image: url('{{asset('media/photos/photo34@2x.jpg')}}');">
                    <div class="bg-primary-dark-op">
                        <div class="content content-top text-center overflow-hidden">
                            <div class="pt-50 pb-20">
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">ITRS</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Pending At Admin</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                <div class="bg-white">
                <!-- Content -->
                <div class="content table-responsive">


                    <table id="dataTable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>DOB</th>
                                <th>Mob No.</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>status</th>
                                <th>pan</th>
                                <th>Bank Statement</th>
                                <th>Aadhar</th>
                                <th>Date Of Filling</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($itrs as $itr)
                            <tr>
                                <td>{{$itr->id}}</td>
                                <td>{{$itr->fname." ".$itr->mname." ".$itr->lname}}</td>
                                <td>{{$itr->dob}}</td>
                                <td>{{$itr->mob_no}}</td>
                                <td>{{$itr->email}}</td>
                                <td>{{$itr->address_one}}</td>
                                <td>{{$itr->status}}</td>
                                <td><a href="{{'/storage/'.$itr->pan_card}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td><a href="{{'/storage/'.$itr->bank_statement}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td><a href="{{'/storage/'.$itr->aadhar}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td>{{$itr->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                </div>
                <!-- END Content -->


            </div>
            

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            @include('employee.include.footer')
    </body>
</html>