<!DOCTYPE html>
<html lang="en">

<head>
@include('user.includes.head')
</head>

<body id="page-top">

  @include('user.includes.nav')

  <div id="wrapper">

    <!-- Sidebar -->
    @include('user.includes.sidebar')

    <div id="content-wrapper">

     @yield('content')
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @include('user.includes.footer')

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  @include('user.includes.scripts')

</body>

</html>
