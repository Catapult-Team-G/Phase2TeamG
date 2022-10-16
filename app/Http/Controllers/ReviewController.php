<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Sweet;
use App\Models\Review;
use Auth;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sweets = DB::table('sweets')->get();
        return view('review.create', compact('sweets'));
    }

    public function confirm(Request $request)
    {
      $inputs = $request->all();

      return view('review.confirm', [
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
        $validator = Validator::make($request->all(), [
            'review' => 'required | max:191',
        ]);
        if ($validator->fails()) {
            return redirect()
            ->route('review.create')
            ->withInput()
            ->withErrors($validator);
        }

        $action = $request->input('action');

        $inputs = $request->except('action');

        if($action !== 'submit'){
          return redirect()
            ->route('review.create')
            ->withInput($inputs);
        } else {
          $request->merge(['user_id' => Auth::user()->id]);
          $result = Review::create($request->all());
          //test
          return redirect()->route('review.create');
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
