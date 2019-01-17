@extends('layouts.app')

@section('content')
    <div class="d-flex center-vertically">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card text-white bg-primary">
                        <div class="card-header">Welcome! Please provide a link to shorten:</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            @if (session('errors'))
                                <div class="alert alert-danger" role="alert">
                                    Please fix the following errors:
                                    <ul>
                                    @foreach (session('errors')->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if (session('link'))
                                <p>
                                    You created a short link for:
                                    <br>
                                    {{session('link')['destination']}}
                                </p>

                                <div class="form-row align-items-center">
                                    <div class="col-12">
                                        <div id="copy" class="input-group">
                                            <input readonly tabindex="1" type="text" id="shortlink" name="link" class="form-control" value="{{url(session('link')['slug'])}}">
                                            <div class="input-group-append">
                                                <button data-clipboard-target="#shortlink" type="button" class="copy-btn btn bg-warning" type="button" id="button-addon2">Copy</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <p class="float-right" id="copyAlert">&nbsp;</p>

                                <p class="mt-3">Share the short link:</p>
                                    <div class="row">
                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://pinterest.com/share?p="><i class="fa fa-envelope"></i>
                                            </a>
                                        </div>

                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://twitter.com/share?p="><i class="fa fa-twitter"></i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://facebook.com/share?p="><i class="fa fa-facebook"></i>
                                            </a>
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://linkedin.com/share?p="><i class="fa fa-linkedin-square"></i>
                                            </a>
                                        </div>

                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://pinterest.com/share?p="><i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>

                                        <div class="col-2">
                                            <a class="btn btn-info btn-block" href="http://pinterest.com/share?p="><i class="fa fa-mobile"></i>
                                            </a>
                                        </div>
                                    </div>
                                <hr>

                                <h2>Shorten another link?</h2>

                            @endif

                            <form method="post" action="{{ route('links.create') }}">
                                @csrf

                                <div class="form-row align-items-center">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input id="longlink" tabindex="2" type="url" name="link" class="form-control" placeholder="URL to shorten" aria-label="Type or paste link to shorten" aria-describedby="button-addon2">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn bg-success" type="button" id="button-addon2">Shorten</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </ul>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
