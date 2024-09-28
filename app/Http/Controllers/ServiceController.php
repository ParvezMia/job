<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function emergency()
    {
        return view('services.emergency-tree-service-denver');
    }

    public function stumpRemoval()
    {
        return view('services.stump-removal-denver');
    }

    public function treePruning()
    {
        return view('services.tree-pruning-denver');
    }

    public function treeRemoval()
    {
        return view('services.tree-removal-denver');
    }
}
