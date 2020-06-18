@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <form action="/payments" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                    @if(session('message'))
                    <p>{{ session('message') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection