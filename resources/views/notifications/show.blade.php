@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                <ul>
                    <label for="">Unread Notifications</label>
                    @forelse($unreadNotifications as $notification)
                    <li>
                        @if($notification->type === 'App\Notifications\PaymentReceived')
                        We have received a payment of £{{ $notification->data['amount'] / 100}} from you
                        @endif
                    </li>
                    @empty

                    <li>You have no unread notifications at this time.</li>

                    @endforelse
                </ul>
            </div>
            <div class="card-body">
                <ul>
                    <label for="">Read Notifications</label>
                    @foreach($readNotifications as $notification)
                    <li>
                        @if($notification->type === 'App\Notifications\PaymentReceived')
                        We have received a payment of £{{ $notification->data['amount'] / 100}} from you
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection