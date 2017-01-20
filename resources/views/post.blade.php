@extends('layout')

@section('css')
    <style>
        img {
            width: 100%;
            height: auto;
        }
    </style>
@endsection

@section('header')
    {{ $post->title }}
@endsection

@section('content')
    {!! $post->body !!}
@endsection
