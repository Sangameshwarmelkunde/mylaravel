<!doctype html>
<html lang="en" class="no-focus">
@include('layouts.include.headerWithDataTable')
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
            @include('superadmin.include.side_header')
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Profile -->
                  @include('superadmin.include.profile')
                    <!-- END Profile -->

                    <!-- Settings -->
                 @include('superadmin.include.settings')
                    <!-- END Settings -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
        @include('superadmin.include.sidebar')

            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                @include('superadmin.include.left_section')
                    <!-- END Left Section -->

                    <!-- Right Section -->
                @include('superadmin.include.right_section')
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
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Clients</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Rejected</h2>
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
                                <th>Requested At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                            <tr>
                                <td>{{$client->id}}</td>
                                <td>{{$client->fname." ".$client->mname." ".$client->lname}}</td>
                                <td>{{$client->dob}}</td>
                                <td>{{$client->mob_no}}</td>
                                <td>{{$client->email}}</td>
                                <td>{{$client->address}}</td>
                                <td>{{$client->status}}</td>
                                <td>{{$dSign->created_at}}</td>
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

            @include('superadmin.include.footer')
    </body>
</html>
