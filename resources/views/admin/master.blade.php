<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.includes.assets.css')

</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    @include('admin.includes.header')
    @include('admin.includes.menu')
    <!-- Left Sidebar End -->

    <div class="main-content">

        <div class="page-content">

           @yield('body')

        </div>


        @include('admin.includes.footer')
    </div>

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->

@include('admin.includes.assets.script')
</body>

</html>
