@extends('wepsite-layout.layout')

@section('page-title','team')

@section('body-class','page-team')



@section('main-content')
 <!-- ======= Breadcrumbs ======= -->
 @include('wepsite-pages.website-share.Breadcrumbs', [
    'background_image' => 'assets/img/team-header.jpg',
    'title' => 'team',
    'links' => [['url' => '/', 'title' => 'Home'], ['title' => 'team']],
])
<!-- ======= Breadcrumbs ======= -->
@include('wepsite-pages.team.section.TeamMembers')

@endsection