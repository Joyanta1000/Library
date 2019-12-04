



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Image Upload</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{ asset('admin/css/sb-admin.css')}}" rel="stylesheet">

</head>



<body class="bg-dark">



  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Image Upload</div>
      <div class="card-body">
        <form action="{{URL::to('/storeim')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" id="inputEmail" class="form-control"   name="id" autofocus="autofocus">
              <label for="inputEmail"></label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="hidden" id="inputEmail" class="form-control"   name="name" autofocus="autofocus">
              <label for="inputEmail"></label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="file" id="inputPassword" name="image" class="form-control" required="required" >
              <label for="inputPassword">Image</label>
            </div>
          </div>
         
          <button class="btn btn-primary" type="submit">Upload</button>
        </form>
       
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>
