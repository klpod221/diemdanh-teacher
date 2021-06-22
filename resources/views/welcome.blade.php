@extends('layout')

@section('main')
    <div class="card card-login card-hidden">
        <div class="card-header text-center" data-background-color="rose">
            <p><h4 class="card-title">Welcome</h4><p>
        </div>
        <p class="category text-center">
            Login as
        </p>
        <p class="category text-center">
            <a href="ministry" class="btn btn-rose btn-round">Giáo vụ</a>
        </p>
        <p class="category text-center">
            <a class="btn btn-rose btn-round">Giảng viên</a>
        </p>
    </div>
@endsection
