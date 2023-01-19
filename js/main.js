
/* Affichage du bouton pour remonter en haut de page seulement en dessous de 100px de scroll */

window.addEventListener('scroll', () => {
    const{scrollTop} = document.documentElement;

    if (scrollTop >= 100) {

        document.getElementById('arrowUpContain').style.opacity = "1";
        
    } else {

        document.getElementById('arrowUpContain').style.opacity = "0";

    }
})

/* Fonction qui permets de remonter */

document.getElementById('arrowUpContain').addEventListener("click", function scrollLent()
{
    var scrollTop = document.body.scrollTop || document.documentElement.scrollTop;
    if(scrollTop > 0)
    {
        scrollBy(0, -5);
        setTimeout(scrollLent, 0.1);
    }
})

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
let page = $_GET('pg');
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
        document.getElementById("arrowUpContain").style.display = "none";

    }

    picBox.setAttribute("src", `../img/${gite}/${picId}.JPEG`);
  
}

// Fonction permettant de fermer le diaporama
    

let closer = document.querySelector('#closer');

if(closer){
    
    closer.addEventListener('click', event => {

    let diapoBox = document.getElementById('diapoBox');
    let body = document.querySelector('body');

    if (diapoBox.classList.contains('activeDia') == true) {

        diapoBox.style.display = "none";
        diapoBox.classList.remove("activeDia");
        body.style.overflow = "unset";
        document.getElementById("arrowUpContain").style.display = "flex";
    }
    
  });

}


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

