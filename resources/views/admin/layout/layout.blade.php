<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  @include('admin.layout.styles')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('admin.layout.header')
@include('admin.layout.left_sidebar')
 

  <!-- Content Wrapper. Contains page content -->
 @section('content')
 @show
  <!-- /.content-wrapper -->

  @include('admin.layout.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.layout.script')
</body>
</html>
