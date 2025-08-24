<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Exception;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['create', 'store']);
    }

    public function index()
    {
        try {
            $skills = Skill::all();
            
            // Debug information
            if ($skills->isEmpty()) {
                Log::info('No skills found in database');
            } else {
                Log::info('Found ' . $skills->count() . ' skills');
            }
            
            return view('pages.skills', compact('skills'));
        } catch (Exception $e) {
            Log::error('Error in SkillController@index: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error loading skills: ' . $e->getMessage());
        }
    }

    public function create()
    {
        try {
            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Please login to add skills');
            }
            return view('pages.skills.create');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error accessing create form: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            if (!Auth::check()) {
                return redirect()->route('login')->with('error', 'Please login to add skills');
            }

            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'type' => 'required|in:technical,soft',
                'level' => 'required|in:beginner,intermediate,expert',
            ]);

            $skill = Skill::create([
                'name' => $validated['name'],
                'type' => $validated['type'],
                'level' => $validated['level'],
                'user_id' => Auth::id(),
            ]);

            if (!$skill) {
                throw new Exception('Failed to create skill');
            }

            return redirect()->route('skills.index')->with('success', 'Skill added successfully!');
            
        } catch (Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Error adding skill: ' . $e->getMessage())
                ->withErrors($e->getMessage());
        }
    }
}
