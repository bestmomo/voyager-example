@extends('layout')

@section('header')
    {{ $page->title }}
@endsection

@section('content')
    {!! $page->body !!}
@endsection
