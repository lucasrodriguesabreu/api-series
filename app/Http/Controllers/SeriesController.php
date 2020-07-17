<?php


namespace App\Http\Controllers;


use App\Serie;
use http\Env\Request;

class SeriesController
{
    public function index()
    {
        return Serie::all();
    }
}
