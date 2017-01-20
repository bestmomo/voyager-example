@extends('layout')

@section('css')
    <link rel="stylesheet" href="/assets/css/simple-modal.min.css" />
    <style>
        .simple-modal-buttons button { padding: 0; }   
        .simple-modal .simple-modal-buttons button { border: none; }  
        .simple-modal { background-color: #aa2f2f; opacity: .97; }   
    </style>
@endsection

@section('header')
    Products
@endsection

@section('content')
    <div class="posts">
        @foreach($products as $product)
            <article>
                <a href="#" class="image"><img src="/storage/{{ $product->image }}" alt="" /></a>
                <h3>{{ $product->name }}</h3>
                <p>{!! $product->body !!}</p>
                <ul class="actions">
                    <li><a href="#" class="button">Add to cart</a></li>
                </ul>
            </article>
        @endforeach
    </div>
@endsection

@section('scripts')
    <script src="/assets/js/simple-modal.min.js"></script>
    <script>
        $('a.button').click(function(e) {
            new SimpleModal({
                size: 'small',
                title: 'Cart',
                body: '<p>Product added to cart !</p>',
                buttons: [{ value: 'OK' }]
            }).show();
        });       
    </script>
@endsection
