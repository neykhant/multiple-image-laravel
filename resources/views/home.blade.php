@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
        @endif

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image[]" multiple class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-5">
        @foreach( $galleries as $gallery )
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body p-0">
                    <img src="{{ asset('/images/'. $gallery->name ) }}" width="345px; " height="200px; " alt="">
                </div>

                <div class="card-footer">
                    <a href="{{ asset('/images/'. $gallery->name )  }}" target="_blank"  class="btn btn-info">View</a>
                    <a href="{{ route('image.download', $gallery->id ) }}" class="btn btn-success">Download</a>

                    
                    @if($gallery->Admin == 1 )

                    <a href="{{ route('image.destroy', $gallery->id ) }}" class="btn btn-danger float-right">Delete</a>
                    @endif
                   
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>


</div>
@endsection