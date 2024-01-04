<nav class="nav">
  <div class="nav-logo">
    <a href="{{route('home')}}">
        <div class="rounded-circle rounded-circle_blue"></div>
        <div class=" rounded-circle rounded-circle_red"></div>
        <div class="text"><h2>BookClick</h2></div>
    </a>
  </div>
  <ul class="nav-links">
    <li class="links"><a href="{{route('books')}}">Books</a></li>
    <li class="links"><a href="{{route('shop')}}">Shop</a></li>
    <li class="links"><a href="{{route('wishlist')}}">Wishlist</a></li>
    <li class="links"><a href="{{route('favorites')}}">Favorites</a></li>
    <li class="links"><a href="{{route('about')}}">About Us</a></li>
    <li class="links"><a href="{{route('contact')}}">Contact Us</a></li>
   <li class="input">
    <input type="text" placeholder="Search for book" id="input-search">
    <button id="search-btn">
      <i class="fa-solid fa-magnifying-glass"></i>
   </button>
   </li>
  </ul>
  <div class="buttons">
    <button class="login">
      <a style="text-decoration: none;
      color: white;" href="{{ route('login')}}">Log In</a>
    </button>
    <button class="signup"><a style="text-decoration: none; 
      color: black;" href="{{ route('signup')}}">Sign Up</a> </button>
  </div>
</nav>
<script>
  @yield('custom.js')
</script>