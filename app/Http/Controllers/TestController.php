<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TestPostRequest;

class TestController extends Controller
{
    /**
     * トップページ を表示する
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('test.index');
    }
    
    /**
     * 入力を受け取る
     * 
     * @return \Illuminate\View\View
     */
    public function input(Request $request)
    {
        // validate済
        
        //データの取得
        $validateData = $request->validate();
        
        // 
        var_dump($email,$pass); exit;
        
        // return view('test.input');
    }
}
