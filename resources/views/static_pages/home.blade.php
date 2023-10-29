@extends('layouts.default')

@section('content')
    <div class="bg-light p-3 p-sm-5 rounded">
        <h1>Hello</h1>
        <p class="lead">
            你现在看到的是主页
        </p>
        <p>
            一切将从这里开始。
        </p>
        <p>
            <a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
        </p>
    </div>
@stop
