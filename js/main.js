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


// Fonction permettant de récupérer un GET de l'url

function $_GET(param) {
	var vars = {};
	window.location.href.replace( location.hash, '' ).replace( 
		/[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
		function( m, key, value ) { // callback
			vars[key] = value !== undefined ? value : '';
		}
	);

	if ( param ) {
		return vars[param] ? vars[param] : null;	
	}
	return vars;
}

let gite = $_GET('ind');
let picBox = document.querySelector('#diapoBox .picGalerie img')

    
// Fonction permettant d'ouvrir le diaporama au clic d'une photo et d'ouvrir la photo en question

function openPic(){

    let picId = event.currentTarget.id.replace('pic','');
    let diapoBox = document.getElementById('diapoBox');
    let body = document.querySelector('body');
    

  
    if (diapoBox.classList.contains('activeDia') == false) {
  
        diapoBox.style.display = "flex";
        diapoBox.classList.add("activeDia");
        body.style.overflow = "hidden";

    }

    picBox.setAttribute("src", `../img/${gite}/${picId}.JPEG`);
  
}

// Fonction permettant de fermer le diaporama

document.querySelector('#closer').addEventListener('click', event => {

    let diapoBox = document.getElementById('diapoBox');
    let body = document.querySelector('body');

    if (diapoBox.classList.contains('activeDia') == true) {

        diapoBox.style.display = "none";
        diapoBox.classList.remove("activeDia");
        body.style.overflow = "unset";
    }
    
  });




// Fonction permettant de changer la photo ( suivant ou précédent )

function swapPic(){
    let buttonClicked = event.currentTarget.id;
    let getIdPic = picBox.getAttribute('src').match(/(\d+)/);
    let idPic = getIdPic[0];

    if (buttonClicked == "next"){

        if(idPic == 25){
            idPic = 1;
        } else {
            idPic++;
        }

    } else if (buttonClicked == "previous") {

        if(idPic == 1){
            idPic = 25;
        } else {
            idPic--;
        }
    }

    picBox.setAttribute("src", `../img/${gite}/${idPic}.JPEG`);
}

document.querySelectorAll('.arrowPic').forEach(function(link){
    link.addEventListener('click', swapPic)
})





