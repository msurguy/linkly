@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <input id="foo" value="blablabla.git">
                    <!-- Trigger -->
                    <button class="btn btn-outline-info" data-clipboard-target="#foo">
                        Copy link to clipboard
                    </button>
                        <span id="success">Copied to clipboard!</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
