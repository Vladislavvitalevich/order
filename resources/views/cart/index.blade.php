@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CART</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <p class="bg-success">{{$errors->first()}}</p>
                        @endif
                        <div class="col-md-6">
                            <form role="form" method="POST" action="/cart">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {{dd($carts->products()->all())}}
                                        @foreach($carts as $cart)
                                        <tr>
                                            <td>Name </td>
                                        </tr>

                                        @endforeach
                                        </tbody>
                                    </table>

                                <button class="btn btn-default" type="submit">Checkout</button>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection