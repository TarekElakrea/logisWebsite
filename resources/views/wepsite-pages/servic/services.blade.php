@extends('wepsite-layout.layout')

@section('page-title','service')

@section('body-class','page-service')



@section('main-content')

    <!-- ======= Breadcrumbs ======= -->
    @include('wepsite-pages.website-share.Breadcrumbs', [
        'background_image' => 'assets/img/services-header.jpg',
        'title' => 'Services',
        'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'Services']],
    ])
  
      <!-- ======= Our Services Section ======= -->
       @include('wepsite-pages.home.section.Our-Services-Section')
  
      <!-- ======= Services Cards Section ======= -->
     @include('wepsite-pages.servic.section.ServicesCards')
  
      <!-- ======= Testimonials Section ======= -->
      @include('wepsite-pages.servic.section.Testimonials')
    </main><!-- End #main -->
  
@endsection