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
  </style>

  <section class="projects-section">
    <h1>My Projects</h1>

    <div class="projects-container">

      <!-- Project 1 -->
      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1518458028785-8fbcd101ebb9?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fG1vbmV5fGVufDB8fDB8fHww" alt="Currency Converter">
        <div class="project-content">
          <div class="project-title">Currency Converter</div>
          <div class="project-description">A simple converter app using C language for converting currency units easily.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNhbHxlbnwwfHwwfHx8MA%3D%3D" alt="Hospital Management System">
        <div class="project-content">
          <div class="project-title">Hospital Management System</div>
          <div class="project-description">Built using C, HTML, and MySQL for managing hospital patients and staff data.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="project-card">
        <img src="https://plus.unsplash.com/premium_photo-1668487826871-2f2cac23ad56?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8bWVkaWNpbmV8ZW58MHx8MHx8fDA%3D" alt="Medicine Center">
        <div class="project-content">
          <div class="project-title">Medicine Center</div>
          <div class="project-description">Developed using Ubuntu terminal commands for managing medicines efficiently.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="project-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXthKGaFFJK5AksLPERbtFSWyk0tfUsgejqA&s" alt="MadeEasy">
        <div class="project-content">
          <div class="project-title">MadeEasy</div>
          <div class="project-description">A doctor appointment Flutter app with urgent booking and user profile system.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
            <a href="#">Live Demo</a>
          </div>
        </div>
      </div>

      <!-- Project 5 -->
      <div class="project-card">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStZUsIV_r7blGghXXdQpkATiIQzxEgLQ160A&s" alt="Explore Bangladesh">
        <div class="project-content">
          <div class="project-title">Let's Explore Bangladesh</div>
          <div class="project-description">Tourism-based Laravel website built with HTML, CSS, PHP for exploring Bangladesh.</div>
          <div class="project-buttons">
            <a href="#">View Code</a>
            <a href="#">Live Site</a>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
