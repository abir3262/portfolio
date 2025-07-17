@extends('layouts.app')
@section('title', 'Resume')

@section('content')
<style>
  .resume-section {
    padding: 80px 20px;
    background-color: #fff;
    max-width: 700px;
    margin: auto;
  }

  .resume-section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
  }

  .resume-section ul {
    list-style-type: square;
    padding-left: 20px;
    margin-bottom: 20px;
  }

  .btn-download {
    display: block;
    width: max-content;
    margin: 20px auto;
    padding: 10px 25px;
    background-color: #0c1a2b;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
  }

  .btn-download:hover {
    background-color: #00bcd4;
    color: black;
  }
</style>

<section class="resume-section">
  <h2>My Resume</h2>
  <a href="{{ asset('resume.pdf') }}" download class="btn-download">Download CV</a>

  <h3>Education</h3>
  <ul>
    <li>BSc in CSE - Daffodil International University</li>
    <li>HSC - Dhaka City College</li>
    <li>SSC - Aral G.L School & College</li>
  </ul>

  <h3>Work Experience</h3>
  <ul>
    <li>Data Analysist at ABIR HUB</li>
    <li>Web Developer at ABIR HUB</li>
    <li>Sales Executive at ABIR HUB</li>
  </ul>
</section>
@endsection
