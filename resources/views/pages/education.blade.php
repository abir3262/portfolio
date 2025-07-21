@extends('layouts.app')
@section('title', 'Education')

@section('content')
<style>
  .education-section {
    padding: 40px 15px;
    background: #f9fafb;
    max-width: 100%;
    width: 95%;
    margin: 0 auto;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
  }

  .education-header {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 30px;
    color: #1a202c;
  }

  .education-card {
    background-color: #ffffff;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    border-left: 5px solid #4f46e5;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
  }

  .education-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(79, 70, 229, 0.1);
  }

  .education-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 4px;
    color: #2d3748;
  }

  .education-institute {
    font-size: 15px;
    color: #4a5568;
    margin-bottom: 8px;
    font-style: italic;
  }

  .education-desc {
    font-size: 14px;
    color: #2d3748;
    line-height: 1.5;
  }

  @media (max-width: 600px) {
    .education-header {
      font-size: 24px;
    }

    .education-title {
      font-size: 18px;
    }

    .education-desc {
      font-size: 13px;
    }
  }
</style>

<section class="education-section">
  <h2 class="education-header">My Education</h2>

  <div class="education-card">
    <div class="education-title">B.Sc in Computer Science & Engineering</div>
    <div class="education-institute">Daffodil International University</div>
    <div class="education-desc">Final year student. Focused on data analysis, machine learning, and web development.</div>
  </div>

  <div class="education-card">
    <div class="education-title">Higher Secondary Certificate (HSC)</div>
    <div class="education-institute">Dhaka City College</div>
    <div class="education-desc">Completed in 2020 (Science).<br>Result: GPA 5.00</div>
  </div>

  <div class="education-card">
    <div class="education-title">Secondary School Certificate (SSC)</div>
    <div class="education-institute">Aral G.L School & College</div>
    <div class="education-desc">Completed in 2018 (Science).<br>Result: GPA 5.00</div>
  </div>
</section>
@endsection
