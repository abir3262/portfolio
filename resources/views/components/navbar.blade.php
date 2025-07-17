<style>
  .navbar {
    background-color: #486282ff;
    padding: 10px 0;
  }

  .navbar .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 80px; /* logo ar menu er moddhe gap */
  }

  /* Logo style */
  .navbar .logo {
    display: flex;
    align-items: center;
    color: #fff;
    font-size: 26px;
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 1px;
    flex-shrink: 0;
  }

  .logo-circle {
    width: 38px;
    height: 38px;
    background-color: #00bcd4;
    border-radius: 50%;
    color: #0c1a2b;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 1000;
    font-size: 30px;
    margin-right: 12px;
    user-select: none;
  }

  /* Navigation menu */
  .nav-links {
    list-style: none;
    display: flex;
    gap: 28px;
    margin: 0;
    padding: 0;
    margin-left: auto; /* nav-links ke right side e push korbe */
  }

  .nav-links li a {
    color: #fff;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
    padding: 6px 10px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }

  .nav-links li a:hover,
  .nav-links li a:focus {
    background-color: #00bcd4;
    color: #0c1a2b;
  }

  /* Responsive styles */
  @media (max-width: 768px) {
    .nav-links {
      flex-direction: column;
      align-items: flex-end;
      gap: 15px;
      background-color: #0c1a2b;
      position: absolute;
      top: 60px;
      right: 20px;
      padding: 15px 25px;
      border-radius: 8px;
      display: none; /* toggle korle show koro */
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      z-index: 999;
    }
  }
</style>

<nav class="navbar">
  <div class="container">
    <a href="{{ url('/') }}" class="logo">
      <div class="logo-circle">A</div>
      Abir3262
    </a>
    <ul class="nav-links">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/about') }}">About</a></li>
      <li><a href="{{ url('/education') }}">Education</a></li>
      <li><a href="{{ url('/skills') }}">Skills</a></li>
      <li><a href="{{ url('/projects') }}">Projects</a></li>
      <li><a href="{{ url('/resume') }}">Resume</a></li>
      <li><a href="{{ url('/contact') }}">Contact</a></li>
    </ul>
  </div>
</nav>
