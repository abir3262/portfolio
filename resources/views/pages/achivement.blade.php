@extends('layouts.app')
@section('title', 'Achievements')

@section('content')
<style>
  .achievements-section {
    padding: 80px 20px;
    background-color: #f9f9f9;
    text-align: center;
  }

  .achievements-section h2 {
    font-size: 36px;
    margin-bottom: 40px;
  }

  .achievements-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: auto;
  }

  .achievement-card {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    text-align: left;
    transition: transform 0.3s;
  }

  .achievement-card:hover {
    transform: translateY(-5px);
  }

  .achievement-card h4 {
    margin-bottom: 10px;
    font-size: 20px;
    color: #0c1a2b;
  }

  .achievement-card p, .achievement-card li {
    font-size: 16px;
    color: #333;
    line-height: 1.6;
  }
</style>

<section class="achievements-section">
  <h2>My Achievements</h2>

  <div class="achievements-container">
    
    <div class="achievement-card">
      <img src="{{ asset('images/CSE_Hackathon_2024.jpg') }}" alt="CSE_Hackathon_2024">
      <h4>Perticipated - CSE Hackathon 2024</h4>
      <p>Successfully Perticipated in the inter-university hackathon held at DIU with a Smart Health App solution.</p>
    </div>

    <div class="achievement-card">
      <img src="{{ asset('images/National_Innovation_Contest.jpg') }}" alt="National_Innovation_Contest">
      <h4>Top 5 Finalist - National Innovation Contest</h4>
      <p>Recognized for innovative project 'MadeEasy' — a Doctor Appointment App using Flutter.</p>
    </div>

    <div class="achievement-card">
      <img src="{{ asset('images/Research_Paper.jpg') }}" alt="Research_Paper">
      <h4>Research Paper Published</h4>
      <p>Published a paper on Deep Learning (CNN) at the International Conference on AI and Data Science 2024.</p>
    </div>

    <div class="achievement-card">
      <img src="{{ asset('images/GoEdu.jpg') }}" alt="GoEdu">
      <h4>Completed Courses with Distinction - GoEdu</h4>
      <ul style="margin-top: 10px; padding-left: 20px;">
        <li>ChatGPT Basics, Usage and Prospects</li>
        <li>Debits and Credits: What, Why, How?</li>
        <li>Soft Skill and Hard Skill</li>
        <li>How to Say No and How to Propose</li>
      </ul>
    </div>

  </div>
</section>
@endsection
