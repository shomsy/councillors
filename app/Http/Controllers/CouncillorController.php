<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class CouncillorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Factory|View
     */
    public function index(Request $request)
    {
       $sort = $request->get('sortBy');
       $response = Http::get('https://politik.ch/dl/councillors.json');
       $data = $response->json();
       if ($sort) {
           $data =  collect($data)->sortBy($sort);
       }

       return view('councillors.list', ['councillors' => $data]);
    }
}
