<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    *{
        font-family: 'Times New Roman', Times, serif;
        margin: 0;
        padding: 0;
    }
    body{
        background: #070B2D;
    }
    .container{
        position: relative;
        dislay: flex;
    }
    .bar{
        position: absolute;
        left: 0%;
        display: flex;
        flex-direction: column;
        gap: 2rem;
    }
    .bar h1{
        color: white;
        margin-top: 100px;
    }
    .box{  
        display: flex;
        margin: 45px 0px 45px 0px;
        border-radius: 20px;
        position: absolute;
        right: 0%;
        background: white;
        width: 1080px;
        height: 716px;
    }
    .searchSec{
        display: flex;
        left: 0%;
        position: absolute;
    }
    .search{
        gap: 3rem;
        border-radius: 20px;
        width: 650px;
        height: 60px;
        background: white;
        box-shadow: 20px 20px 80px 0px rgba(99, 99, 99, 0.10);
    }
    .search i{
        font-size: 22px;
    }
    .search input{
        font-size: 20px;
        border: none;
        outline: none;
    }
    .home{
        width: 58px; 
        height: 50px;
        border-radius: 10px;
        background: white;
        box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.28);
    }
    .home i{
        background: white;
    }
    .recommendation{
        right: 0%;
        position: absolute;
        width: 340px;
height: 716px;
flex-shrink: 0;
border-radius: 0px 20px 20px 0px;
background: #D9D9D9;
    }
    .recommendation h1{
        color: #000;
font-size: 25px;
font-style: normal;
font-weight: 700;
line-height: nor
    }
    .img{
        border-radius: 20px;
    }
    .box-home{
        border-radius: none;
        background-color: white;
        width: 60px;
        height: 55px;
        box-shadow: 0px 4px 20px 0px rgba(0, 0, 0, 0.28);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .fa-arrow-left {
        font-family: 'Font Awesome 5 Free'; /* Adjust the font family as needed */
        font-weight: 900; /* Adjust the font weight as needed */
        font-size: 24px; /* Adjust the font size as needed */
    }
    .public-date{
        position: relative;
        border: none;
        background: white;
        width: 260px; 
        height: 180px; 
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 4px 4px 20px 0px rgba(0, 0, 0, 0.28);
    }
    .details{  
        position: absolute;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .details .low-op {
        color: #6F6F6F;
    }
    .details .high-op{
        color: black;
    }
    .details.top-left{
        padding: 10px;
        top: 0;
        left: 0;
    }
    .details.top-right{
        padding: 10px;
        top: 0;
        right: 0;
    }

    .details.bot-left{
        padding: 10px;
        bottom: 0;
        left: 0;
    }
    .details.bot-right{ 
        padding: 10px;
        bottom: 0;
        right: 0;
    }


    </style>
    
<body>
    <div class="container">
        <div class="bar">
            <h1>BookClick</h1>
            @include('components.button-yellow-outlined', ['buttonText' => 'All'])
            @include('components.button-yellow-outlined', ['buttonText' => 'Discover'])
            @include('components.button-yellow-outlined', ['buttonText' => 'Favorites'])
            @include('components.button-yellow-outlined', ['buttonText' => 'Categories'])
            @include('components.button-yellow-outlined', ['buttonText' => 'Alerts'])
            @include('components.button-yellow-outlined', ['buttonText' => 'Settings'])
        </div>

        <div class="box">
            <section class="searchSec mt-2 d-inline">
                <div class="search d-flex align-items-center pl-4">
                    <div class="home d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-arrow-left"></i>
                      </div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Search a book...">
                </div>
                <div class="book-info ml-4">
                    <div class="book">
                       <div class="col-1">
                        <img class="img" width="200px" height="330px" src="{{ asset('images/books/' . $book->imgSrc) }}">
                        <button class="public-date ">
                        <div class="details top-left">
                            <p class="low-op">Print Length</p>
                            <p class="high-op">256 Pages</p>
                        </div>
                        <div class="details top-right">
                            <p class="low-op">Language</p>
                            <p class="high-op">English</p>
                        </div>
                        <div class="details bot-left">
                            <p class="low-op">Publisher</p>
                            <p class="high-op">Mark Manson</p>
                        </div>
                        <div class="details bot-right"> 
                            <p class="low-op">Publication date</p>
                            <p class="high-op">1 Aug 2020</p>
                        </div>
                        </button>
                       </div>
                     
                     
                    </div>
                </div>
            </section>
            <section class="recommendation">
                <h1 class="mt-1 ml-2">Recommended</h1>
            </section>
        </div>
    </div>
</body>



</html>