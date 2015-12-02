<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mbarwick83\Shorty\Facades\Shorty;
use App\Url;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $url = $request->input('url');

        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {

            $url_exists = Url::where('url', '=', $url)->first();

            if ($url_exists){
                \Session::flash('flash_message', 'The URL has already has a short URL');
                return redirect('urls/all');
            }
            else{
                // Calling the goo.gl url shortener
                $shorty = Shorty::shorten($url);
                // Shorty::stats($shorty);

                $db_insert = [];
                $db_insert['url'] = $url;
                $db_insert['short_url'] = $shorty; 

                $id = Url::create($db_insert)->id;

                \Session::flash('flash_message', 'The URL has been shortened');
                return redirect('urls/all');
            }
        } else {
            \Session::flash('flash_message', 'It is an invalid URL, Kindly try again');
            return redirect('urls/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $urlsList = Url::orderBy('id', 'ASC')->get();
        return view('urls.index')->with('urlsList', $urlsList);
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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('urls.create');
    }

    public function what()
    {      
        echo "I am here";
        die;
        // $urlsList = Url::orderBy('id', 'ASC')->get();
        // return view('urls.index')->with('urlsList', $urlsList);
    }
}
