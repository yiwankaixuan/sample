@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Fucking guys！</h1>
    <p class="lead">
      你现在所看到的是 <a href="http://weibo.com/lanjiangyue?is_all=1">伊万凯旋PHP自学之路</a>主页。
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">使劲戳</a>
    </p>
  </div>
@stop
