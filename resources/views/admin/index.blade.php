@include('layouts.admin')

<!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <!--logo start-->
      <a href="#" class="logo">Adapt Aqua - <span class="lite">Administration</span></a>
      <!--logo end-->
    </header>
    <!--header end-->

    @include('admin.menu')

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          </div>
        </div>

        @include('admin.resume')
        <!--/.row-->
    <!--main content end-->
  </section>
  <!-- container section start -->

  

</body>

</html>