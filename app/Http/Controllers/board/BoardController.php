<?php

namespace App\Http\Controllers\board;

use App\Http\Controllers\Controller;
use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //all메소드는 모델의 테이블에서 모든 결과를 반환한다.
        //$list = Board::all();

        //orderby 방법 2가지
        $list = Board::all()->sortByDesc('id');
        //$list = Board::orderBy('id', 'desc')->get();


        //return View('board.index', ['list'=>$list]);
        //return View('board.index')->with('list', $list);
        return View('board.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('board.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //쿼리빌더
        /*
        DB::table('boards')->insert([
            'title' => $request->title,
            'ctnt' => $request->ctnt,
            'user_id' => $request->user_id,
        ]);
        */
        /*
        //엘로퀀트
        //방법(1)
        $board = new Board;
        $board->title = $request->input('title');
        $board->ctnt = $request->ctnt;
        $board->user_id = $request->user_id;
        $board->save();
        */

        /*
        //방법(2)
        // Board.php에서 protected $fillable = ['title', 'ctnt', 'user_id']; 을 해줘야 쓸 수 있음
        $board = new Board([
            'title' => $request->title,
            'ctnt' => $request->ctnt,
            'user_id' => $request->user_id,
        ]);
        $board->save();
        */

        //방법(3)
        // Board.php에서 protected $fillable = ['title', 'ctnt', 'user_id']; 을 해줘야 쓸 수 있음
        Board::create([
            'title' => $request->input('title'),
            'ctnt' => $request->ctnt,
            'user_id' => $request->user_id,
        ]);

        return redirect('/board');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
