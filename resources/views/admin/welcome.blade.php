@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You are not Admin log in!
                    <a href="{{ route('image.index') }}" class="btn btn-primary float-right">Back</a>
                </div>

            </div>
        </div>
    </div>
<!-- </div> -->
@endsection
