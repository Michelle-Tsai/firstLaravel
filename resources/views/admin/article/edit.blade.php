@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Edit</h1>

    {{-- 用引用的方式 --}}
    {{--@include('errors')--}}

    {{-- 直接寫 --}}
    @if (count($errors) > 0)
        <!-- 表單錯誤清單 -->
        <div class="alert alert-danger">
            <strong>哎呀！出了些問題！</strong>
            <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-group">
        <!-- 新文章的表單 -->
        <form action="/admin/article" method="POST" class="form-horizontal">
            @csrf
            <!--token-->

            <div class="form-group">
                <label for="title">標題</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="image">圖片網址</label>
                <input type="text" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">內容</label>
                <textarea name="content" class="form-control" id="content" rows="20"></textarea>
            </div>

            <!-- 增加文章按鈕-->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">新增</button>
            </div>
        </form>
    </div>
  </div>
@endsection