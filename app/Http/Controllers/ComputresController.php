<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputresController extends Controller
{
    private static function getData(){
        return [
            ['id'=> 1, 'name' => 'Samsung', 'origin' => 'chine' ],
            ['id'=> 2, 'name' => 'LG', 'origin'=> 'korea' ],
            ['id'=> 3, 'name' => 'HP', 'origin'=> 'usa' ],
        ];
    }
 
    public function index()
    {
        return view('computres.index', [
            'computres' => self::getData()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($computre)
    {
        $computres = self::getData();
        $index = array_search($computre, array_column($computres, 'id'));
        if($index === false){
            abort(404);
        }
        return view('computres.show',[

    'computer' => $computres[$index]]);
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
