<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    public function index()
    {
        try {
            $projects = Project::all();
            Log::info('Projects retrieved:', ['count' => $projects->count()]);
            
            return view('pages.projects', compact('projects'));
        } catch (\Exception $e) {
            Log::error('Error in ProjectController@index: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString()
            ]);
            return view('pages.projects', [
                'projects' => collect([]),
                'error' => 'Error loading projects: ' . $e->getMessage()
            ]);
        }
    }
}
