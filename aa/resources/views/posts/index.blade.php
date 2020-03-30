@extends('layouts.master')
@section('title', '公告系統')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>最新公告</h2>
            <a href="{{route('posts.create')}}" class="btn btn-success btn-small">新增公告</a>
        </div>
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>發表時間</th>
                        <th>標題</th>
                        <th>發表人</th>
                        <th>點閱數</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->created_at}}</td>
                            <td><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></td>
                            <td>
                                {{$post->user->name}}({{$post->user->username}})
                             </td>{{-- user資料表->名字 --}}
                            <td>{{$post->views}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{$posts->links() }}
            {{-- 製作分頁選單 --}}
        </div>
    </div>
</div>
@endsection


