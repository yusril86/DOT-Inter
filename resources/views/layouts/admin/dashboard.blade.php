<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  {{-- ! === Style ===  --}}
  @include('includes.admin.style')
  {{-- ! === End Style ===  --}}

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
    @include('includes.admin.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('includes.admin.sidebar')
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      @yield('title')
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        @yield('content')
      </div>
    </section>

  </main><!-- End #main --> 

  <!-- ======= Footer ======= -->
  {{-- @include('includes.admin.footer') --}}
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Script Files -->
  @include('includes.admin.script')
  <!-- Script Files -->

</body>

</html>