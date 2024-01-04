const searchBtn = document.getElementById('search-btn');
const inputSearch = document.getElementById('input-search')
const fadeIn = () => {
    // Add the 'active' class to apply the styles
    inputSearch.classList.add('active');

    // Hide the search button
    anime({
        targets: searchBtn,
        opacity: 1,
        duration: 500,
        easing: 'easeInOutQuad',
        complete: () => {
            searchBtn.style.display = 'inline-block';
        },
    });
};
const fadeOut = () => {
    // Remove the 'active' class to reset the styles
    inputSearch.classList.remove('active');

    // Show and animate the search button
    anime({
        targets: searchBtn,
        opacity: 1,
        display: 'inline-block',
        duration: 500,
        easing: 'easeInOutQuad',
    });
};
searchBtn.addEventListener('mouseover', fadeIn);
inputSearch.addEventListener('mouseleave', fadeOut);

