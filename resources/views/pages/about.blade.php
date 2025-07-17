@extends('layouts.app')
@section('title', 'About')

@section('content')
<style>
  .about-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    padding: 80px 20px;
    background-color: #f2f2f2;
  }

  .about-image {
    flex: 1 1 300px;
    text-align: center;
    padding: 20px;
  }

  .about-image img {
  width: 100%;
  max-width: 400px;
  aspect-ratio: 1 / 1; /* Force square */
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}



  .about-text {
    flex: 2 1 400px;
    max-width: 700px;
    padding: 20px;
  }

  .about-text h2 {
    font-size: 32px;
    margin-bottom: 20px;
  }

  .about-text p {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 15px;
    text-align: justify;
  }

  @media (max-width: 768px) {
    .about-section {
      flex-direction: column;
    }

    .about-image, .about-text {
      text-align: center;
    }

    .about-text p {
      text-align: center;
    }
  }
</style>

<section class="about-section">
  <div class="about-image">
    <img src="{{ asset('images/profile.jpg') }}" alt="My Photo">
  </div>

  <div class="about-text">
    <h2>About Me</h2>
    <p>I am a final year Computer Science and Engineering (CSE) student at Daffodil International University with a strong passion for data analysis, machine learning, and web development. Over the years, I have developed expertise in these fields through academic projects and practical experience.</p>
    <p>I enjoy transforming raw data into meaningful insights using advanced data analysis techniques and building intelligent solutions with machine learning algorithms. Alongside, I create responsive and user-friendly websites, focusing on clean design and smooth user experience.</p>
    <p>I am constantly eager to learn and grow as a developer and researcher, aiming to contribute effectively in the tech industry.</p>
  </div>
</section>
@endsection
