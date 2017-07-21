@extends('layouts.admin')
@section('css')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">PRODUCT CREATE</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <p class="bg-success">{{$errors->first()}}</p>
                        @endif
                            <form role="form" action="/admin/product" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" name="name" class="form-control" id="nameProduct"
                                           placeholder="Enter name product">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <textarea class="form-control" name="description"
                                              placeholder="Enter description product" rows="4"></textarea>
                                </div>
                                <label for="exampleInputPassword1">Price</label>
                                <div class="input-group">
                                    <input type="number" name="price" step="any" class="form-control">
                                    <span class="input-group-addon">$</span>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="">Choose category:</label>
                                    <select class="form-control" name="category_name">
                                        @foreach($categories as $category)
                                            <option>
                                                {{$category->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-default">Send</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection

