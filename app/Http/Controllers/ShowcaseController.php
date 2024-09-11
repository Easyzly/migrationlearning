<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Monolog\Formatter\JsonFormatter;

class ShowcaseController extends Controller
{
    public function index()
    {
        $users = User::with('projects', 'projects.to_do_lists')->get();
        return response()->json($users);
    }
}
