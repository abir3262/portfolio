@extends('layouts.app')
@section('title', 'Resume')

@section('content')
<style>
  body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  .resume-wrapper {
    background: linear-gradient(to right, #e2e4e7, #f8f9fa);
    color: #1e293b;
    padding: 40px 15px;
    font-family: 'Segoe UI', sans-serif;
    min-height: 100vh;
  }

  .resume-container {
    max-width: 700px;
    margin: auto;
    background-color: #ffffff;
    padding: 25px 20px;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.07);
    box-sizing: border-box;
  }

  .resume-title {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #2563eb;
  }

  .resume-section h3 {
    font-size: 18px;
    color: #2563eb;
    margin-top: 25px;
    border-left: 4px solid #2563eb;
    padding-left: 10px;
  }

  .resume-section ul {
    list-style: none;
    padding: 0;
    margin-top: 12px;
  }

  .resume-section ul li {
    background-color: #e0e7ff;
    color: #1e293b;
    padding: 10px 12px;
    margin-bottom: 10px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    word-wrap: break-word;
    transition: background-color 0.3s ease;
  }

  .resume-section ul li:hover {
    background-color: #c7d2fe;
    cursor: default;
  }

  .btn-download {
    display: inline-block;
    margin: 20px auto 0 auto;
    padding: 10px 25px;
    background-color: #2563eb;
    color: #fff;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    font-size: 14px;
    transition: background-color 0.3s ease;
    text-align: center;
  }

  .btn-download:hover {
    background-color: #1e40af;
    color: #fff;
  }

  .download-wrapper {
    text-align: center;
  }

  @media (max-width: 768px) {
    .resume-container {
      padding: 20px 15px;
      max-width: 95%;
    }

    .resume-title {
      font-size: 24px;
    }

    .resume-section h3 {
      font-size: 16px;
    }

    .btn-download {
      font-size: 13px;
      padding: 9px 20px;
    }
  }
</style>

<section class="resume-wrapper">
  <div class="resume-container">
    <h2 class="resume-title">My Resume</h2>

    <div class="download-wrapper">
      <a href="{{ asset('resume.pdf') }}" download class="btn-download">Download CV</a>
    </div>

    <div class="resume-section">
      <h3>🎓 Education</h3>
      <ul>
        <li>BSc in CSE - Daffodil International University</li>
        <li>HSC - Dhaka City College</li>
        <li>SSC - Aral G.L School & College</li>
      </ul>

      <h3>💼 Work Experience</h3>
      <ul>
        <li>Data Analyst at ABIR HUB</li>
        <li>Web Developer at ABIR HUB</li>
        <li>Sales Executive at ABIR HUB</li>
      </ul>
    </div>
  </div>
</section>
@endsection
