
window.addEventListener('scroll', () => {
    const{scrollTop} = document.documentElement;

    console.log(scrollTop);

    if (scrollTop >= 100) {

        document.getElementById('arrowUpContain').style.opacity = "1";
        
    } else {

        document.getElementById('arrowUpContain').style.opacity = "0";

    }
})

/* Apparition des options au hover du header */

document.querySelector('header').addEventListener("mouseenter", function( event ) {
    event.target.querySelectorAll(".navbarre a").forEach(element => {
        setTimeout(() => {
            element.style.opacity = "1";
            }, 150)         
    });
})

document.querySelector('header').addEventListener("mouseleave", function( event ) {
    event.target.querySelectorAll(".navbarre a").forEach(element => {
        element.style.opacity = "0";
    });
})



//function activeOpacity(x) {
//    x.querySelectorAll(".navbarre a").forEach(element => {
//        setTimeout(() => {
//            element.style.opacity = "1";
//          }, 150)
//    })
//}
//
//function inviOpacity(x) {
//    x.querySelectorAll(".navbarre a").forEach(element => {
//        element.style.opacity = "0";
//    })
//}

/* Apparition fluide au scroll */

const ratio = .1;
const options = {
    root: null,
    rootMargin: '0px',
    threshold: ratio
  }

  const handleIntersect = function (entries, observer) {
    entries.forEach(function (entry){
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('reveal-visible');
            observer.unobserve(entry.target)
        }
    })
  }
  
  let observer = new IntersectionObserver(handleIntersect, options);
  document.querySelectorAll('.reveal').forEach(function (r) {
    observer.observe(r)
  });



// On vérifie si le menu burger est activé pour appliquer quelques paramètres


var checkbox = document.querySelector("#burgerInput");

checkbox.addEventListener('change', function() {
  if (this.checked) {
    document.querySelector("body").style.overflow = "hidden";
    document.querySelector("nav a").style.pointerEvents = "none";
    setTimeout(() => {
        document.querySelector("#burgerContain ul").style.display = "block";;
      }, 250)
    
  } else {
    document.querySelector("body").style.overflow = "visible";
    document.querySelector("nav a").style.pointerEvents = "auto";
    document.querySelector("#burgerContain ul").style.display = "none";
  }
});


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

        if(idPic == 24){
            idPic = 1;
        } else {
            idPic++;
        }

    } else if (buttonClicked == "previous") {

        if(idPic == 1){
            idPic = 24;
        } else {
            idPic--;
        }
    }

    picBox.setAttribute("src", `../img/${gite}/${idPic}.JPEG`);
}

document.querySelectorAll('.arrowPic').forEach(function(link){
    link.addEventListener('click', swapPic)
})

