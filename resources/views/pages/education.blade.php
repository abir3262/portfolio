@extends('layouts.app')
@section('title', 'Education')

@section('content')
<style>
  .education-section {
    padding: 80px 20px;
    background-color: #fff;
    max-width: 700px;
    margin: auto;
  }

  .education-section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 30px;
  }

  .education-item {
    margin-bottom: 25px;
    border-left: 5px solid #2196f3;
    padding-left: 15px;
  }

  .education-item h3 {
    margin-bottom: 5px;
    font-size: 22px;
  }

  .education-item span {
    font-style: italic;
    color: #666;
  }

  .education-item p {
    margin-top: 5px;
    line-height: 1.5;
  }
</style>

<section class="education-section">
  <h2>My Education</h2>

  <div class="education-item">
    <h3>B.Sc in Computer Science & Engineering</h3>
    <span>Daffodil International University</span>
    <p>Final year Student.Focused on Data Analysis, machine learning, and web development.</p>
  </div>

  <div class="education-item">
    <h3>Higher Secondary Certificate (HSC)</h3>
    <span>Dhaka City College</span>
    <p>Completed in 2020 in Science.</br>Result: GPA 5.00</p>
  </div>

  <div class="education-item">
    <h3>Secondary School Certificate (SSC)</h3>
    <span>Aral G.L School & College</span>
    <p>Completed in 2018 in Science.</br>Result: GPA 5.00</p>
  </div>

</section>
@endsection
