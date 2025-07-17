@extends('layouts.app')
@section('title', 'Skills')

@section('content')
<style>
  .skills-section {
    padding: 80px 20px;
    background-color: #ffffff;
    text-align: center;
  }

  .skills-section h2 {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .skill-list {
    list-style: none;
    padding: 0;
    max-width: 600px;
    margin: auto;
  }

  .skill-list li {
    padding: 10px;
    background-color: #e0f7fa;
    margin-bottom: 10px;
    border-left: 5px solid #00bcd4;
    text-align: left;
  }
</style>

<section class="skills-section">
  <h2>Skills</h2>
  <ul class="skill-list">
    <li>HTML / CSS / JavaScript</li>
    <li>PHP / Laravel</li>
    <li>MySQL / Database Design</li>
    <li>Flutter (Mobile App)</li>
    <li>Machine Learning (Python)</li>
    <li>Programming Language (C,C++)</li>
  </ul>
</section>
@endsection
