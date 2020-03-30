@extends('layouts.master')
@section('title', '首頁')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>歡迎光臨 {{ env('APP_NAME') }}</h2>
        </div>
    </div>
</div>
@endsection


