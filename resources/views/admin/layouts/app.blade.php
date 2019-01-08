@extends('admin.layouts.base')

@section('body')
  <body class="hold-transition skin-red fixed">
    <div class="wrapper">

      @include('admin.partials.header')
      @include('admin.partials.sidebar')

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

          @yield('content')
          
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      @include('admin.partials.footer')
    </div>
    @include('admin.partials.js')
  </body>
@stop