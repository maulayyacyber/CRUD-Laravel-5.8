@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">
                            <img src="{{ Storage::url('public/posts/').$post->image }}"style="width: 50%">
                        </div>
                        <hr>
                        {!! $post->content !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
