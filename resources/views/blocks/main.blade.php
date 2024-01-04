<div class="container-main">
    <div class="row">
        <div class="col1 col-5 mt-5 ml-5">
            <div class="find-your-next-book">
                <h1>Find Your Next Book</h1>
                <p>Our most popular and trending BookClick perfect
                    </p>
                    <p>  Not sure what to read now next reading mood Perfectly</p>
                <button class="explore-more">
                    Explore More</button>     
                <p class="kinds">What kind of books do you want to read?</p>
                <div class="books">
                    <button>Business</button>
                    <button>Computer & Tech</button>
                    <button>Romance</button>
                    <button>Sports</button>
                    <button>Kids</button>
                    <button>Literature and Fiction</button>
                    <button>Medical</button>
                    <button>Travel</button>
                    <button>Horror</button>
                    <button>Self-help</button>
                    <button>Health</button>
                    <button>History</button>
                    <button>Crime</button>
                </div>
            </div>
        </div>
        <div class="col2 col-4">
          <div class="book book1">
            <img src="{{ asset('assets/clients/img/books/1.jpeg') }}" width="132px" height="220px">
            <p class="title">The Two Trillion Dollar Metldown</p>
            <p class="author">Charles R.Morris</p>
          </div>
          <div class="book book2">
            <img src="{{ asset('assets/clients/img/books/2.jpeg') }}" width="132px" height="220px">
            <p class="title">The Problem of 12</p>
            <p class="author">John Coates</p>
          </div>
          <div class="book book3">
            <img src="{{ asset('assets/clients/img/books/3.jpeg') }}" width="132px" height="220px">
            <p class="title">The Millionare Fastlane</p>
            <p class="author">MJ. DeMarco</p>
          </div>
          <div class="book book4">
            <img src="{{ asset('assets/clients/img/books/4.jpeg') }}" width="132px" height="220px">
            <p class="title">Let's Talk Money</p>
            <p class="author">Monika Halan</p>
          </div>
          <div class="book book5">
            <img src="{{ asset('assets/clients/img/books/5.jpeg') }}" width="132px" height="220px">
            <p class="title">Money Master The Game</p>
            <p class="author">Tony Robbins</p>
          </div>
        </div>
    </div>
</div>

<div class="book-container">
  <div class="category-bar-container">
    <div class="category-bar">
      <h4>Categories</h4>
    <button onclick="showBooks('bestsellers')">Bestsellers</button>
    <div class="category-dropdown">
      <button onclick="showBooks('business')">Business</button>
      <button onclick="showBooks('business')">Computer & Tech</button>
      <button onclick="showBooks('business')">Romance</button>
      <button onclick="showBooks('business')">Sports</button>
      <button onclick="showBooks('business')">Kids</button>
      <button onclick="showBooks('business')">Literature</button>
      <button onclick="showBooks('business')">Medical</button>
      <button onclick="showBooks('business')">Travel</button>
      <button onclick="showBooks('business')">Horror</button>
      <button onclick="showBooks('business')">Self-help</button>
      <button onclick="showBooks('business')">Health</button>
      <button onclick="showBooks('business')">History</button>
      <button onclick="showBooks('business')">Crime</button>
    </div>
  </div>
</div>
  <div class="book-shown">

  </div>
</div>
<script>

</script>