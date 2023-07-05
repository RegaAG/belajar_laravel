<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_kategori;
use App\Models\db_project;
use App\Models\User;

class PostController extends Controller
{
    public function home()
    {
        return view('home', ['title' => 'Home']);
    }

    public function project()
    {
        return view('project', [
            'title' => 'All Project',
            'posts' => db_project::with(['kategori','user'])->latest()->Filter(request(['search']))->get()
        ]);
    }


    public function halaman_project(db_project $db_project)
    {
        return view('body', [
            'title' => $db_project->nama_project,
            'post' => $db_project,
            'link' => $db_project->kategori_id
        ]);
    }

    public function kategori()
    {
        return view('kategori', [
            'title' => 'Kategori-Kategori MyProject',
            'posts' => db_kategori::all()
        ]);
    }

    public function project_kategori(db_kategori $db_kategori)
    {
        return view('project', [
            'title' => "Kategori : $db_kategori->nama_kategori",
            'posts' => $db_kategori->project
        ]);
    }

    public function username(user $user)
    {
        return view('project', [
            'title' => "Author : $user->name",
            'posts' => $user->db_project
        ]);
    }
}
