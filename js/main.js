const slidingHeader = document.querySelector('header');

window.addEventListener('scroll', () => {
    const{scrollTop, clientHeight} = document.documentElement;

    console.log(scrollTop, clientHeight);

    if (scrollTop >= 50){
        slidingHeader.classList.add('active')
    } else if (scrollTop <= 50) {
        slidingHeader.classList.remove('active')
    }

})

