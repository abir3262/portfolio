@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<style>
  .skills-section {
    padding: 60px 20px;
    background: linear-gradient(to right, #e0f7fa, #ffffff);
    text-align: center;
    min-height: 100vh;
  }

  .skills-section h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #0f172a;
    font-weight: bold;
  }

  .skills-section h3 {
    font-size: 24px;
    margin: 30px 0 20px;
    color: #1e293b;
    font-weight: 600;
  }

  .skill-container {
    max-width: 800px;
    margin: auto;
    text-align: left;
    background: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .skill {
    margin-bottom: 25px;
    padding: 15px;
    border-radius: 10px;
    background: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    transition: transform 0.2s;
  }

  .skill:hover {
    transform: translateY(-2px);
  }

  .skill-name {
    font-size: 16px;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 8px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .skill-level-badge {
    font-size: 12px;
    padding: 3px 8px;
    border-radius: 12px;
    background: #e2e8f0;
    color: #475569;
  }

  .level-expert {
    background: #dcfce7;
    color: #166534;
  }

  .level-intermediate {
    background: #fef9c3;
    color: #854d0e;
  }

  .level-beginner {
    background: #fee2e2;
    color: #991b1b;
  }

  .progress-bar {
    background-color: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    height: 12px;
  }

  .progress-fill {
    height: 100%;
    background: linear-gradient(to right, #06b6d4, #3b82f6);
    width: 0;
    border-radius: 10px;
    transition: width 1.2s ease-in-out;
  }

  /* Animation trigger */
  .skill.visible .progress-fill {
    width: var(--skill-level);
  }

  .add-skill-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background: #3b82f6;
    color: white;
    border-radius: 8px;
    font-weight: 600;
    transition: background 0.2s;
  }

  .add-skill-btn:hover {
    background: #2563eb;
  }
</style>

<section class="skills-section">
  <h2>My Skills</h2>

  @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 max-w-2xl mx-auto" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
  @endif

  @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 max-w-2xl mx-auto" role="alert">
        <span class="block sm:inline">{{ session('error') }}</span>
    </div>
  @endif

  <div class="skill-container">
    @php
        $technicalSkills = $skills->where('type', 'technical');
        $softSkills = $skills->where('type', 'soft');
    @endphp

    @if($technicalSkills->count() > 0)
        <h3>Technical Skills</h3>
        @foreach($technicalSkills as $skill)
        <div class="skill" data-skill="{{ $skill->getLevelPercentage() }}%">
            <div class="skill-name">
                {{ $skill->name }}
                <span class="skill-level-badge level-{{ $skill->level }}">
                    {{ ucfirst($skill->level) }}
                </span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="--skill-level: {{ $skill->getLevelPercentage() }}%;"></div>
            </div>
        </div>
        @endforeach
    @endif

    @if($softSkills->count() > 0)
        <h3>Soft Skills</h3>
        @foreach($softSkills as $skill)
        <div class="skill" data-skill="{{ $skill->getLevelPercentage() }}%">
            <div class="skill-name">
                {{ $skill->name }}
                <span class="skill-level-badge level-{{ $skill->level }}">
                    {{ ucfirst($skill->level) }}
                </span>
            </div>
            <div class="progress-bar">
                <div class="progress-fill" style="--skill-level: {{ $skill->getLevelPercentage() }}%;"></div>
            </div>
        </div>
        @endforeach
    @endif

    @auth
    <div class="text-center mt-8">
        <a href="{{ route('skills.create') }}" class="add-skill-btn">
            Add New Skill
        </a>
    </div>
    @endauth
  </div>
</section>

<script>
  // Intersection observer for animation trigger
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  });

  document.querySelectorAll('.skill').forEach(skill => {
    observer.observe(skill);
  });
</script>
@endsection
