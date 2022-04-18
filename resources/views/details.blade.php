@extends('layouts.app')

@section('content')
<div>
    <ul class="list-unstyled">
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Duration:</span> <span class="fw-light">
            @if ($membership->membership_duration !== NULL || $membership->membership_duration !== "")
                {{$membership->membership_duration}}
            @else
                {{NULL}}
            @endif
        </span></li>
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Price:</span> <span class="fw-light">&#8377; 
            @if ($membership->membership_price !== NULL || $membership->membership_price !== "")
                {{$membership->membership_price}}
            @else
                {{NULL}}
            @endif
        </span></li>
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Classes:</span> <span class="fw-light">
            @if ($membership->membership_classes !== NULL || $membership->membership_classes !== "")
                {{$membership->membership_classes}}
            @else
                {{NULL}}
            @endif
        </span></li>
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Discount Percentage:</span> <span class="fw-light">
            @if ($membership->membership_discount_percentage !== NULL || $membership->membership_discount_percentage !== "")
                {{$membership->membership_discount_percentage}}%
            @else
                {{NULL}}
            @endif
        </span></li>
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Offer Name:</span> <span class="fw-light">
            @if ($membership->membership_offer_name !== NULL || $membership->membership_offer_name !== "")
                {{$membership->membership_offer_name}}
            @else
                {{NULL}}
            @endif
        </span></li>
        <li class="text-secondary mb-3"><span class="fw-bold me-1">Status:</span> <span class="fw-light">
            @if ($membership->membership_status !== NULL || $membership->membership_status !== "")
                {{$membership->membership_status}}
            @else
                {{NULL}}
            @endif
        </span></li>
    </ul>
    <div class="mt-5">
        <a href="{{ url('/details/edit/' . $membership->id) }}" class="btn btn-primary rounded-0 me-1"><i class="fa-solid fa-circle-info me-2"></i>Edit</a>
        <a href="{{ url('/details/delete/' . $membership->id) }}" class="btn btn-danger rounded-0"><i class="fa-solid fa-trash-can me-2"></i>Delete</a>
    </div>
</div>
@endsection