const slidingHeader = document.querySelector('header');
const slidingFooter = document.querySelector('footer');

window.addEventListener('scroll', () => {
    const{scrollTop, clientHeight} = document.documentElement;

    console.log(scrollTop, clientHeight);
    

    if (scrollTop >= 50){
        slidingHeader.classList.add('active')
    } else if (scrollTop <= 50) {
        slidingHeader.classList.remove('active')
    }

    /*var scrollBottom = $(window).height() - $(window).scrollTop() - 221 ;
    console.log(scrollBottom);

    if (scrollBottom <= 50){
        slidingFooter.classList.add('activeF')
    } else if (scrollBottom >= 50) {
        slidingFooter.classList.remove('activeF')
    }*/

})



