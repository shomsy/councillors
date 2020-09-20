<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class CouncillorRESTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return string
     */
    public function index(Request $request)
    {
       $response = Http::get('http://ws-old.parlament.ch/councillors?entryDateFilter=2018/12/31&format=xml&pageNumber=1');
        return $response->body();
    }
}
