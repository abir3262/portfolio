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

  .success-message {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 15px;
  }

  .error-message {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 15px;
  }

  .error-list {
    background-color: #fff3cd;
    color: #856404;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 15px;
  }
</style>

<section class="contact-section">
  <h2>Contact Me</h2>
  @if(session('success'))
    <p style="color:green">{{ session('success') }}</p>
  @endif
  @if(session('error'))
    <p style="color:red">{{ session('error') }}</p>
  @endif
  @if($errors->any())
    <div style="color: red; margin-bottom: 15px;">
      <ul style="list-style: none; padding: 0;">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route('contact.store') }}" method="POST">
    @csrf
    <input type="text" 
           name="name" 
           placeholder="Your Name" 
           required 
           value="{{ old('name') }}">
    <input type="email" 
           name="email" 
           placeholder="Your Email" 
           required 
           value="{{ old('email') }}">
    <input type="text" 
           name="subject" 
           placeholder="Subject" 
           value="{{ old('subject') }}">
    <textarea name="message" 
              placeholder="Your Message" 
              required>{{ old('message') }}</textarea>
    <button type="submit">Send Message</button>
  </form>

</section>
@endsection
