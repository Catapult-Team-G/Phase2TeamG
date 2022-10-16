<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Sweet;

class SweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sweets = Sweet::getAllOrderByUpdated_at();
        return view('sweet.index',compact('sweets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sweet.create');
    }

    public function confirm(Request $request){
      $inputs = $request->all();

      return view('sweet.confirm', [
        'inputs' => $inputs,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
          'sweet_name' => 'required',
        ]);
        if ($validator->fails()) {
          return redirect()
            ->route('sweet.create')
            ->withInput()
            ->withErrors($validator);
        }

        // フォームから押したボタンの情報をactionで取得
        $action = $request->input('action');

        // フォームからactionを除くインプットされた情報を取得
        $inputs = $request->except('action');

        // actionの値で分岐
        if($action !== 'submit'){
          return redirect()
            ->route('sweet.create')
            ->withInput($inputs);
        } else {
          $result = Sweet::create($request->all());
          return redirect()->route('sweet.index');
        }

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
      $sweet = Sweet::find($id);
      return view('sweet.show',compact('sweet'));
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
