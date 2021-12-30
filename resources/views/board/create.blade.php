@extends('boardLayout')

@section('title', '글쓰기')
@section('body')
    <form action="/board/store" method="POST">
        @csrf
        <div><input type="text" name="title" placeholder="제목"></div>
        <div><textarea name="ctnt" placeholder="내용"></textarea></div>
        <div><input type="number" name="user_id" placeholder="작성자id"></div>
        <div>
            <input type="submit" value="글쓰기">
            <input type="reset" value="초기화">
        </div>
    </form>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('res/css/board/create.css') }}">
@endpush
@push('js')
    <script src="{{ asset('res/js/board/create.js') }}"></script>
@endpush
