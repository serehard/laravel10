@extends('layouts.app')

@section('title', 'Home Product')

@section('contents')
<h1 class="mb-0">Add Products</h1>
<hr />
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col">
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <input type="text" name="product_code" class="form-control" placeholder="Product Code">
        </div>
        <div class="col">
            <textarea type="text" name="description" class="form-control" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection