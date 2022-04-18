@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="/details/update">
    @csrf
    <input class="d-none" type="number" name="id" id="id" value="{{$membership->id}}" required />
    <div class="mb-4 row">
        <label for="name" class="col-sm-1 col-form-label text-secondary fw-bold">Name:</label>
        <div class="col-sm-6">
            <input type="text" name="name" class="form-control" id="name" value="{{$membership->membership_name}}" required />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="duration" class="col-sm-1 col-form-label text-secondary fw-bold">Duration:</label>
        <div class="col-sm-6">
            <input type="number" name="duration" class="form-control" id="duration" value="{{$membership->membership_duration}}" required />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="classes" class="col-sm-1 col-form-label text-secondary fw-bold">Classes:</label>
        <div class="col-sm-6">
            <input type="text" name="classes" class="form-control" id="classes" value="{{$membership->membership_classes}}" required />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="price" class="col-sm-1 col-form-label text-secondary fw-bold">Price: (&#8377;)</label>
        <div class="col-sm-6">
            <input type="number" name="price" class="form-control" id="price" value="{{$membership->membership_price}}" required />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="discount" class="col-sm-1 col-form-label text-secondary fw-bold">Discount:</label>
        <div class="col-sm-6">
            <input type="number" name="discount" class="form-control" id="discount" value="{{$membership->membership_discount_percentage}}" required />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="offer" class="col-sm-1 col-form-label text-secondary fw-bold">Offer:</label>
        <div class="col-sm-6">
            <input type="text" name="offer" class="form-control" id="offer" value="{{$membership->membership_offer_name}}" />
        </div>
    </div>
    <div class="mb-4 row">
        <label for="status" class="col-sm-1 col-form-label text-secondary fw-bold">Status:</label>
        <div class="col-sm-6">
            <input type="text" list="datalistOptions" name="status" class="form-control" id="status" value="{{$membership->membership_status}}" required />
            <datalist id="datalistOptions">
                <option value='0'>
                <option value='1'>
            </datalist>
        </div>
    </div>
    <div class="mt-5">
        <input type="submit" value="Update" class="btn btn-success rounded-0 me-1" />
    </div>
    </form>
</div>
@endsection