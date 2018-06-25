var isOpen = false;

function openNav(x) {

    if(!isOpen) {
        x.classList.toggle("change");
        document.getElementById("myNav").style.width = "100%";
        document.body.style.overflow = 'hidden';
        isOpen = !isOpen;
    } else {
        document.getElementById("hamburger").classList.remove("change");
        document.getElementById("myNav").style.width = "0%";
        document.body.style.overflow = null;
        isOpen = !isOpen;
    }


    
}