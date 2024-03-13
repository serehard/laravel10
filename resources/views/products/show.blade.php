@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
<h1 class="mb-0">Detail Product</h1>
<hr />
<div class="row">
    <div class="col mb-3">
        <label class="form-lable">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Title" value="{{$product->title}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-lable">Price</label>
        <input type="text" name="price" class="form-control" placeholder="Title" value="{{$product->price}}" readonly>
    </div>
</div>
<div class="row">
    <div class="col mb-3">
        <label class="form-lable">Product_Code</label>
        <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{$product->product_code}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-lable">Description</label>
        <textarea name="description" class="form-control" placeholder="Description" readonly>{{$product->description}}</textarea>
    </div>
</div>   
<div class="row">
    <div class="col mb-3">
        <label class="form-lable">Create At</label>
        <input type="text" name="create_at" class="form-control" placeholder="Create At" value="{{$product->created_at}}" readonly>
    </div>
    <div class="col mb-3">
        <label class="form-lable">Update At</label>
        <input type="text" name="update_at" class="form-control" placeholder="Updated At" value="{{$product->updated_at}}" readonly>
    </div>
</div>     
@endsection