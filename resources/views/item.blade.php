
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Wallet</h5>
                    <p class="card-text"><span>Balance:</span> {{$user->balance;}}</p>
                    <p class="card-text"><span>Balance:</span> {{$user->balance;}}</p>
                    <p class="card-text"><span>Balance:</span> {{$user->balance;}}</p>

                  </div>

            </div>
        </div>
    </div>
</div>
@endsection
