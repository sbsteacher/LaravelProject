@extends('boardLayout')

@section('title', '보드 리스트')
@section('body')

    <h1>보드 리스트</h1>
    <table id="boardTable">
        <tr>
            <th>no</th>
            <th>title</th>
            <th>hits</th>
            <th>writer</th>
            <th>reg-dt</th>
        </tr>
        @foreach($list as $item)
            <tr class="record" data-id="{{ $item->id }}">
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->hits }}</td>
                <td>{{ $item->user_id }} {{ $item->user->name }} </td>
                <td>{{ $item->created_at }}</td>
            </tr>
        @endforeach
    </table>

@endsection


@push('css')
    <link rel="stylesheet" href="{{ asset('res/css/board/index.css') }}">
@endpush
@push('js')
    <script src="{{ asset('res/js/board/index.js') }}"></script>
@endpush


