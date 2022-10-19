<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Review;
use App\Models\Sweet;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $prefectureId = $request->prefecture_id;
        $gender = $request->gender;
        $stringage = $request->age;
        $age = intval($stringage);
        $age2 = $age + 9;
        if($prefectureId !== 'noprefecture'){
            if($gender !== 'nogender'){
                if($stringage !== 'noage'){
                    $user = User::query()
                        ->where('prefecture_id',$prefectureId)
                        ->where('gender',$gender)
                        ->where('age','>=',$age)
                        ->where('age','<=',$age2)
                        ->pluck('id')
                        ->all();
                }
                else{
                    $user = User::query()
                        ->where('prefecture_id',$prefectureId)
                        ->where('gender',$gender)
                        ->pluck('id')
                        ->all();
                }
            }
            if($gender === 'nogender'){
                if($stringage !== 'noage'){
                    $user = User::query()
                        ->where('prefecture_id',$prefectureId)
                        ->where('age','>=',$age)
                        ->where('age','<=',$age2)
                        ->pluck('id')
                        ->all();
                }
                else{
                    $user = User::query()
                        ->where('prefecture_id',$prefectureId)
                        ->pluck('id')
                        ->all();                  
                }
            }
        }
        if($prefectureId === 'noprefecture'){
            if($gender !== 'nogender'){
                if($stringage !== 'noage'){
                    $user = User::query()
                        ->where('gender',$gender)
                        ->where('age','>=',$age)
                        ->where('age','<=',$age2)
                        ->pluck('id')
                        ->all();
                }
                else{
                    $user = User::query()
                        ->where('gender',$gender)
                        ->pluck('id')
                        ->all();
                }
            }
            if($gender === 'nogender'){
                if($stringage !== 'noage'){
                    $user = User::query()
                        ->where('age','>=',$age)
                        ->where('age','<=',$age2)
                        ->pluck('id')
                        ->all();
                }
                else{
                    $user = User::pluck('id');
                }
            }
        }
        $sweetsId = Review::query()
            ->whereIn('user_id',$user)
            ->pluck('sweet_id')
            ->all();
        $sweets = Sweet::query()
            ->whereIn('id',$sweetsId)
            ->get();
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
        $prefectures = DB::table('prefectures')->get();
        return view('search.input',compact('prefectures'));
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
