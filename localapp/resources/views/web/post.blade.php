@extends('layouts.app')
@section('content')  
@include('layouts.nav')
  @if(!empty($cat->slug_sub))
  <?php $slug = $cat->slug_sub; ?>
  @else
  <?php  $slug = $cat->slug; ?>
  @endif
  @if($slug=='event')
    @include('web.news')
  @elseif($slug=='shop')
    @include('web.shop')
  @elseif($slug=='galleries')
    @include('web.gallery')
  @elseif($slug=='about-us')
    @include('web.about')
  @elseif($slug=='contact-us')
    @include('web.contact')
  @else
    @include('web.news')
  @endif
@endsection
@section('script')
@endsection
