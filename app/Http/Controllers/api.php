<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class api extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){

        $data = $this->info();
        return view('data.index', compact('data'));
    }

    public function info()
    {
            $summname='sirchesz';
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://la1.api.riotgames.com',
            'timeout'  => 2.0,
        ]);
    
        $response = $client->request('GET', 'https://la1.api.riotgames.com/lol/summoner/v3/summoners/by-name/'.$summname, 
        ['query'=> ['api_key'=>'RGAPI-a6a8dc6f-f14a-409b-af93-c0f1d2e612b8']
        ]);
    
        return json_decode((string) $response->getBody(), true);
        return response()->json(['data:' => $response->getbody()]);
       
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
