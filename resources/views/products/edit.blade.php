@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>

            <div class="pull-right">
                <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if ($errors -> all())
        <div class="alert alert-danger">
            <strong>Whoops! </strong>
            There were some probleems with your input.
            <br><br>
        </div>
        @foreach ($errors -> all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="from-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <strong>Details:</strong>
                    <textarea name="detail" class="form-control" style="height: 150px" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection