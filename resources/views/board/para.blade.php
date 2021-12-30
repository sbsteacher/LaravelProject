@extends('/basicLayout')
@section('title', '파라')

@section('main')
    @parent
    <h1>Para</h1>
    <div>{{ $id }}</div>
    <div>{{ $slug }}</div>
    @if($id == 1)
        <div>ID는 1이다.</div>
    @elseif($id == 2)
        <div>ID는 2이다.</div>
    @else
        <div>ID는 1,2가 아니다.</div>
    @endif

    @for($i = 0; $i < 10; $i++)
        <div>{{ $i }}</div>
    @endfor
    <hr>
    @foreach($arr as $item => $value)
        @if($loop->first)
            <div>시작!!!</div>
        @endif
        <div>{{$loop->iteration}} - {{ $item }} | {{ $value }}</div>

        @if($loop->last)
            <div>종료!!!</div>
        @endif
    @endforeach
    <hr>
    <ul>
    @foreach($arr as $item => $value)
        <li>{{ $item }} == {{ $loop->iteration }}</li>
    @endforeach
    </ul>
@endsection
