@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<style>
  .skills-section {
    padding: 60px 20px;
    background: linear-gradient(to right, #e0f7fa, #ffffff);
    text-align: center;
  }

  .skills-section h2 {
    font-size: 32px;
    margin-bottom: 40px;
    color: #0f172a;
    font-weight: bold;
  }

  .skill-container {
    max-width: 700px;
    margin: auto;
    text-align: left;
  }

  .skill {
    margin-bottom: 25px;
  }

  .skill-name {
    font-size: 16px;
    font-weight: 600;
    color: #1e293b;
    margin-bottom: 5px;
  }

  .progress-bar {
    background-color: #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    height: 16px;
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
</style>

<section class="skills-section">
  <h2>My Skills</h2>

  <div class="skill-container">
    <div class="skill" data-skill="90%">
      <div class="skill-name">HTML / CSS / JavaScript </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 90%;"></div>
      </div>
    </div>

    <div class="skill" data-skill="85%">
      <div class="skill-name">PHP / Laravel </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 85%;"></div>
      </div>
    </div>

    <div class="skill" data-skill="80%">
      <div class="skill-name">MySQL / Database Design </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 80%;"></div>
      </div>
    </div>

    <div class="skill" data-skill="75%">
      <div class="skill-name">Flutter (Mobile App) </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 75%;"></div>
      </div>
    </div>

    <div class="skill" data-skill="70%">
      <div class="skill-name">Machine Learning (Python) </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 70%;"></div>
      </div>
    </div>

    <div class="skill" data-skill="85%">
      <div class="skill-name">Programming Language (C, C++) </div>
      <div class="progress-bar">
        <div class="progress-fill" style="--skill-level: 85%;"></div>
      </div>
    </div>
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
