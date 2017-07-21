@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="/css/style.css">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">ORDER</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <p class="bg-success">{{$errors->first()}}</p>
                        @endif
                        <div class="col-md-6">
                            @foreach($products as $product)
                            <form role="form" method="POST" action="/order">
                                <div class="input-group">

                                    <input type="hidden" class="form-control" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                                    <input type="hidden" class="form-control" name="product_id" value="{{$product->id}}">
                                    <p class="addingFillable">{{$product->name}} - {{$product->price}}$</p>
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">Add</button>
                                    </span>
                                </div>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection