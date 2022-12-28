//const slidingHeader = document.querySelector('header img');
//const slidingFooter = document.querySelector('footer');
//const delFoot = document.querySelector('.del');
//
//window.addEventListener('scroll', () => {
//    const{scrollTop, clientHeight} = document.documentElement;
//
//    console.log(scrollTop, clientHeight);
//    
//
//    if (scrollTop >= 50){
//        slidingHeader.style.width = "0px";
//    } else if (scrollTop <= 50) {
//        slidingHeader.style.width = "250px";
//    }
//
    //var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
    //console.log(scrollBottom);

    /*if (scrollBottom >= 50){
        slidingFooter.classList.add('activeF')
        delFoot.classList.add('none')
    } else if (scrollBottom <= 50) {
        slidingFooter.classList.remove('activeF')
    }*/

//})


function openPic(){

    let PicId = document.getElementById(event.currentTarget.id);

    console.log(PicId);


  
    if (PicId.classList.contains('activePic') == false) {
  
        PicId.classList.add("activePic");
  
    } else {
  
        PicId.classList.remove("activePic");
  
    }
  
  }



