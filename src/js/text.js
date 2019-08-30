$(document).ready(function () {
    const presentsContainer = $('.presents');
    const interval = presentsContainer.attr('data-interval');
    const speed = presentsContainer.attr('data-speed');
    let count = 0;

    function changeKeyword(word) {
        const keyword = $('.keyword');
        keyword.animate({
            opacity: 0
        }, speed / 2);
        setTimeout(() => {
            document.getElementById('keyword-city').innerHTML = word.city;
            document.getElementById('keyword-price').innerHTML = word.price;
            keyword.animate({
                opacity: 1
            }, speed / 2);
        }, speed);
        changeKeywords();
    }

    function changeKeywords() {
        setTimeout(() => {
            count = (count + 1) % keywords.length;
            changeKeyword(keywords[count]);
        }, interval);
    }

    changeKeywords();
});
