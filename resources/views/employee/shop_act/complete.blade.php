<!doctype html>
<html lang="en" class="no-focus">
@include('layouts.include.headerWithDataTable')
    <body>
        <div id="page-container" class="sidebar-mini sidebar-o sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
            @include('employee.include.side_header')
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
                                <h1 class="font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp">Shop Act</h1>
                                <h2 class="h4 font-w400 text-white-op invisible" data-toggle="appear" data-class="animated fadeInUp">Completed</h2>
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
                            @foreach($shopActs as $shopAct)
                            <tr>
                                <td>{{$shopAct->id}}</td>
                                <td>{{$shopAct->fname." ".$shopAct->mname." ".$shopAct->lname}}</td>
                                <td>{{$shopAct->dob}}</td>
                                <td>{{$shopAct->mob_no}}</td>
                                <td>{{$shopAct->email}}</td>
                                <td>{{$shopAct->address_one}}</td>
                                <td>{{$shopAct->status}}</td>
                                <td><a href="{{'/storage/'.$shopAct->pan_card}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td><a href="{{'/storage/'.$shopAct->bank_statement}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td><a href="{{'/storage/'.$shopAct->aadhar}}" class="btn btn-alt-primary"><i class="fa fa-download"></i></a></td>
                                <td>{{$shopAct->created_at}}</td>
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

            @include('employee.include.footer')
    </body>
</html>