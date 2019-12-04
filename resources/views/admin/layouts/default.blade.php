<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.includes.head')
</head>

<body id="page-top">

  @include('admin.includes.nav')

  <div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.sidebar')

    <div id="content-wrapper">

     @yield('content')
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @include('admin.includes.footer')

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  @include('admin.includes.scripts')

</body>

</html>
