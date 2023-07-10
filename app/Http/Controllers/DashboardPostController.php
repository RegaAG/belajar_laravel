<?php

namespace App\Http\Controllers;

use App\Models\db_project;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' => db_project::where('user_id', auth()->user()->id)->get()
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\db_project  $db_project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = db_project::where('id',$id)->first();
        return view('dashboard/posts/show',[
            'nama_project' => $data->nama_project,
            'kategori' => $data->kategori->nama_kategori,
            'body' => $data->body
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\db_project  $db_project
     * @return \Illuminate\Http\Response
     */
    public function edit(db_project $db_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\db_project  $db_project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, db_project $db_project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\db_project  $db_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(db_project $db_project)
    {
        //
    }
}
