@extends('layouts.app')
@section('content')
@include('partials.heroServices')
@include('partials.'.$service->slug)
@include('partials.footer')
@endsection