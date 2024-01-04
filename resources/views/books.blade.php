<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{asset('assets/clients/css/books.css')}}">
<body>
    
<div id="book-slider">
    @foreach ($books as $book)
    <div class="book-link" data-book-id="{{$book->id}}" data-book-title="{{$book->title}}">
        <div class="book">
            <img class="img" width="120px" height="180px" src="{{ asset('images/books/' . $book->imgSrc) }}">
            <h2 class="title">{{ $book->title }}</h2>
            <p class="author">by: {{ $book->author }}</p>
            <p class="rating" data-numeric-rating="{{ $book->rating }}"></p>
            <div class="buttons">
                <button class="add">Add++</button>
                <button class="favorite" onclick="toggleFavorite(this)" data-book-id="{{ $book->id }}">
                    <div class="ripple-container"></div>
                    <span class="star">&#9734;</span>
                </button>
            </div>
            <p class="price">${{ $book->price }}</p>
        </div>
    </div>
    @endforeach
</div>

</body>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const ratingElements = document.querySelectorAll('.rating')
        ratingElements.forEach(function(ratingElement){
            const numericRating = parseFloat(ratingElement.dataset.numericRating)
            const starRating = convertToStars(numericRating)
            ratingElement.textContent = starRating;
        });
        function convertToStars(rating){
            let stars = '';
            for(let i=1; i<=5; i++){
                stars += i <= rating ? '★' : '☆';
            }
            return stars;
        }
    });
    function toggleFavorite(btn){
        btn.classList.toggle('active');
        const bookId = btn.getAttribute('data-book-id')
        const star = btn.querySelector('.star')
        let favoritedBooks = JSON.parse(localStorage.getItem('favoritedBooks')) || [];
        if(btn.classList.contains('active')){
                favoritedBooks.push(bookId)
        }else{
            favoritedBooks = favoritedBooks.filter(id => id !== bookId);
        }
        //save the updated
        localStorage.setItem('favoritedBooks', JSON.stringify(favoritedBooks))
        star.innerHTML = btn.classList.contains('active') ? '&#9733;' : '&#9734;';
    }
    //for loading page
    document.addEventListener('DOMContentLoaded', function() {
        const favoritedBooks = JSON.parse(localStorage.getItem('favoritedBooks'))
        favoritedBooks.forEach(bookId =>{
            const btn = document.querySelector(`button[data-book-id="${bookId}"]`);
            if(btn){
                btn.classList.add('active');
                btn.querySelector('.star').innerHTML = '&#9733;';
            }
        });
    });
    const bookLinks = document.querySelectorAll('.book-link')
    bookLinks.forEach(function(link){
        link.addEventListener('click', function(){
            bookId = link.getAttribute('data-book-id')
            const bookTitle = link.getAttribute('data-book-title')
            const urlSegment = encodeURIComponent(bookTitle.toLowerCase().replace(/ /g, '-'));
            window.location.href = '{{ route("books.details", ["bookTitle" => "__BOOK_TITLE__", "id" => "__BOOK_ID__"]) }}'
    .replace('__BOOK_TITLE__', urlSegment)
    .replace('__BOOK_ID__', bookId);

        });
    });
    </script>

