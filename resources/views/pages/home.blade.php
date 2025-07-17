@extends('layouts.app')
@section('title', 'Home')

@section('content')
<style>
  .home-section {
    text-align: center;
    padding: 100px 20px;
    background: linear-gradient(to right, #00bcd4, #2196f3);
    color: #fff;
  }

  .home-section h1 {
    font-size: 48px;
    margin-bottom: 10px;
  }

  .home-section h1 span {
    color: #000;
  }

  .home-section p {
    font-size: 20px;
    margin-bottom: 20px;
  }

  .home-section .btn {
    display: inline-block;
    padding: 10px 25px;
    background-color: #0c1a2b;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
  }

  .home-section .btn:hover {
    background-color: #00bcd4;
    color: #000;
  }
</style>

<section class="home-section">
  <div class="container">
    <h1>Hello, I'm <span>Md.Abir Hasan</span></h1>
    <p>A passionate developer specializing in Data Analysis, Machine Learning and Web Development.</p>
    <p>Take a look at my projects and skills to see what I can do!</p>
    <p><b>Feel free to connect with me for collaborations or opportunities.</b></p>
    <a href="{{ url('/projects') }}" class="btn">See My Work</a>
  </div>
</section>
@endsection
