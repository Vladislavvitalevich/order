@extends('layouts.admin')
@section('css')

@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">CATEGORY CREATE</div>

                    <div class="panel-body">
                        @if($errors->any())
                            <p class="bg-success">{{$errors->first()}}</p>
                        @endif
                        <form role="form" method="POST" action="/admin/category">
                            <div class="form-group">
                                <label for="nameInput">Name</label>
                                <input type="text" class="form-control" id="nameCategory" name="name" placeholder="Enter name category">
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

