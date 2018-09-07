<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.layout.head')
</head>
<body class="sidebar-dark">
  <!-- partial -->
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('admin.layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.layout.sideber')
        
        @section('main-content')
        @show

        @include('admin.layout.footer')
</body>
</html>