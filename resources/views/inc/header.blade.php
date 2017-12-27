<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Laravel-Demo</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('/about') ? 'active' : '' }}"><a href="/about">About Us</a></li>
      <li class="{{ Request::is('/product') ? 'active' : '' }}"><a href="product">Products</a></li>
      <li class="{{ Request::is('/contact') ? 'active' : '' }}"><a href="contact">Contact</a></li>
    </ul>
  </div>
</nav>