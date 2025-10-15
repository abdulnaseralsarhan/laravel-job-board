<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use View;

class JobController extends Controller
{
  function index() {
    $jobs = Job::all();
    return view('job/index',['jobs'=>$jobs,'name'=>'naser']); 
  }  
}
