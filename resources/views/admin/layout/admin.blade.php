<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Card Offer | Admin">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="Card Offer">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Book Store | Admin</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    <!-- Ckeditor Styles -->
    <script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>

    <!-- data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.6/css/rowReorder.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" />

    <!-- Theme Styles -->
    <link href="{{ asset('adminStyle/assets/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('adminStyle/assets/css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div>
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <div class="logo-box">
                <a href="#" class="logo-text">
                    <img src="{{ asset('assests/img/logo.png') }}" alt="" width="115px">
                </a>
                <a href="#" id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i
                        class="material-icons">adjust</i><i
                        class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
            <div class="page-sidebar-inner slimscroll">
                @include("admin.partials.sidebar")
            </div>
        </div>
        <div class="page-container">
            <div class="page-header">
                @include('admin.partials.navbar')
            </div>
            <div class="page-content" style="min-height:570px">
                <div class="page-info">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @yield("breadcrumb")
                        </ol>
                    </nav>
                </div>
                <div class="main-wrapper">
                    @yield("content")
                </div>
            </div>
            <div class="page-footer">
                <div class="row">
                    <div class="col-md-12">
                        <span class="footer-text">2021 ©</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('adminStyle/assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/blockui/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/js/connect.min.js') }}"></script>
    <script src="{{ asset('adminStyle/assets/js/pages/dashboard.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/rowreorder/1.2.6/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>


    <script>
        // Ckeditor
        CKEDITOR.replace( 'editor1' );
        // Delete Alert
        $(".deleteAlert").click(function(){
            if (!confirm("Do you want to Delete")){
            return false;
            }
        });
        // Ckeditor
        CKEDITOR.replace( '.editor' );
        // Data Table
        $('#myTable').DataTable({
            responsive: true
        });
        // Data Table
        $('#myTable1').DataTable({
            responsive: true
        });
    </script>
    @yield('scripts')
</body>

</html>
