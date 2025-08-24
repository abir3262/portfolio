@extends('layouts.app')

@section('title', 'Projects')

@section('content')
  <style>
    .projects-section {
      padding: 50px 20px;
      text-align: center;
    }

    .projects-section h1 {
      font-size: 36px;
      margin-bottom: 40px;
    }

    .projects-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .project-card {
      background-color: #ffffff;
      border-radius: 15px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 300px;
      transition: transform 0.3s;
    }

    .project-card:hover {
      transform: translateY(-5px);
    }

    .project-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .project-content {
      padding: 20px;
    }

    .project-title {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .project-description {
      font-size: 15px;
      color: #555;
    }

    .project-buttons {
      margin-top: 15px;
    }

    .project-buttons a {
      text-decoration: none;
      padding: 8px 16px;
      border-radius: 8px;
      background-color: #007bff;
      color: #fff;
      font-size: 14px;
      margin: 5px;
      display: inline-block;
    }

    .project-buttons a:hover {
      background-color: #0056b3;
    }

    .tool-badge {
      display: inline-block;
      padding: 4px 8px;
      margin: 2px;
      background-color: #f0f0f0;
      border-radius: 4px;
      font-size: 12px;
      color: #333;
    }

    .project-tools {
      margin: 10px 0;
    }

    .no-projects {
      text-align: center;
      padding: 40px;
      color: #666;
      font-size: 18px;
    }
  </style>

  <section class="projects-section">
    <h1>My Projects</h1>

    @if(isset($error))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endif

    <div class="projects-container">
      @forelse ($projects as $project)
        <div class="project-card">
          <img 
            src="{{ !empty($project->images) ? $project->images[0] : asset('images/default-project.jpg') }}" 
            alt="{{ $project->name }}"
            onerror="this.src='{{ asset('images/default-project.jpg') }}'"
          >
          <div class="project-content">
            <div class="project-title">{{ $project->name }}</div>
            <div class="project-description">{{ Str::limit($project->description, 150) }}</div>
            <div class="project-tools">
              @if(is_array($project->tools))
                @foreach($project->tools as $tool)
                  <span class="tool-badge">{{ $tool }}</span>
                @endforeach
              @endif
            </div>
            <div class="project-buttons">
              @if($project->github_url)
                <a href="{{ $project->github_url }}" target="_blank" rel="noopener noreferrer">View Code</a>
              @endif
              @if($project->demo_url)
                <a href="{{ $project->demo_url }}" target="_blank" rel="noopener noreferrer">Live Demo</a>
              @endif
            </div>
          </div>
        </div>
      @empty
        <div class="no-projects">
          <p>No projects found.</p>
        </div>
      @endforelse
    </div>
  </section>
@endsection
