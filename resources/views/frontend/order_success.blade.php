@extends('frontend.layouts.app')
@section('content')
<div class="page-content mt-3">
        <div class="col-lg-6 m-auto mt-5">
            <div class="summary summary-cart text-center">
                <img style="display: inline-block" src="{{ asset('frontend/assets/check_mark.png') }}" alt="">
                <h3 class="pt-2">ধন্যবাদ</h3>
                <p>আপনার অর্ডার টি সফল ভাবে সাবমিট হয়েছে।</p>
                {{-- <a class="btn btn-success mt-2 border-0" href="{{ url('/') }}">প্রোডাক্ট বাছাই করুন</a> --}}
            </div><!-- End .summary -->
        </div>
</div>
@endsection



