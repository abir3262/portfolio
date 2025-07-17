@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<style>
  .contact-section {
    padding: 80px 20px;
    background-color: #f2f2f2;
    max-width: 600px;
    margin: auto;
  }

  .contact-section h2 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 20px;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  input, textarea {
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
  }

  button {
    padding: 10px;
    background-color: #0c1a2b;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s;
  }

  button:hover {
    background-color: #00bcd4;
    color: black;
  }
</style>

<section class="contact-section">
  <h2>Contact Me</h2>
  <form action="#" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required />
    <input type="email" name="email" placeholder="Your Email" required />
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send Message</button>
  </form>
</section>
@endsection
