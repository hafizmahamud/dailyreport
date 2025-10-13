<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Report;

class ReportsController extends Controller
{
   public function list()
   {
        $reports = Report::all();
       return view('reports.report-list', compact('reports'));
   }

   public function create()
   {
       return view('reports.report-new');
   }

   public function store()
   {
       $report = Report::create([
           'task_name' => request('task_name'),
           'project_name' => request('project_name'),
           'description' => request('description'),
           'time_spent' => request('time_spent'),
           'status' => request('status'),
       ]);

       return redirect('/report-list');
   }

   public function show($id)
   {
       $report = Report::findOrFail($id);
       return view('reports.report-show', compact('report'));
   }    
}