const slidingHeader = document.querySelector('header');
const slidingFooter = document.querySelector('footer');
//const delFoot = document.getElementsByClass('.del');

console.log(delFoot);

window.addEventListener('scroll', () => {
    const{scrollTop, clientHeight} = document.documentElement;

    console.log(scrollTop, clientHeight);
    

    if (scrollTop >= 50){
        slidingHeader.classList.add('active')
    } else if (scrollTop <= 50) {
        slidingHeader.classList.remove('active')
    }

    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    console.log(scrollBottom);

    /*if (scrollBottom >= 50){
        slidingFooter.classList.add('activeF')
        delFoot.classList.add('none')
    } else if (scrollBottom <= 50) {
        slidingFooter.classList.remove('activeF')
    }*/

})



