@extends('wepsite-layout.layout')

@section('page-title','about us')

@section('body-class','page-abuot')



@section('main-content')

<!-- ======= Breadcrumbs ======= -->
@include('wepsite-pages.website-share.Breadcrumbs', [
  'background_image' => 'assets/img/about-header.jpg',
  'title' => 'About',
  'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'About']],
])  <!-- ======= About Section ======= -->
 @include('wepsite-pages.about.section.about')

  <!-- ======= Why Choose Us Section ======= -->
  @include('wepsite-pages.home.section.Why Choose0-Us-Section')

  <!-- ======= Call To Action Section ======= -->
  @include('wepsite-pages.home.section.Call To-Action-Section')
  <!-- ======= Team Section ======= -->
  @include('wepsite-pages.about.section.teams')

@endsection