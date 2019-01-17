@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Your links: <span class="float-right" id="copyAlert"></span></div>
                <div class="card-body">
                    <a href="{{url('/')}}" class="btn btn-primary mb-3">Create New</a>

                    <ul class="list-group">
                        @foreach ($links as $link)
                            <li class="list-group-item">
                                Full link: <a href="{{ $link->destination }}">{{ $link->destination }}</a><span class="float-right">{{ $link->views }} Views</span>
                                <br>
                                Short link: <a id="copy-text-{{$loop->index}}" target="_blank" href="{{ url($link->slug) }}">{{ url($link->slug) }}</a>
                                <button data-clipboard-target="#copy-text-{{$loop->index}}" class="copy-btn btn btn-sm float-right">Copy short link</button>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
