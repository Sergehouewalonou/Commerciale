<?php

namespace App\Http\Controllers;

use App\Models\v;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin/layouts.base');

    }

    public function dashbor ()
    {
        return view('admin/dashbor.dash');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(v $v)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(v $v)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, v $v)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(v $v)
    {
        //
    }
}
