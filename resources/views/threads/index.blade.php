@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Thread Test Page</div>

                    <div class="panel-body">
                        @foreach($threads as $thread)
                            <h4>{{$thread->tittle}}</h4>
                            <div>{{$thread->body}}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
