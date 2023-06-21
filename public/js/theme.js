const toggle = document.getElementById('toggledark');
const body = document.getElementById('navbar');
const logo = document.getElementById('logo');

toggle.addEventListener('click', function(){
    this.classList.toggle('fa-moon');
    if(this.classList.toggle('fa-sun')){
        body.style.background = "gray";
        logo.style.image = "images/logo_darkmode.png";
        // body.style.backgroundImage = 'url(../images/light_background.png)';
        // body.style.transition = '2s';
        // toggle.style.color='yellow';
    }else{
        body.style.backgroundImage = 'url(../images/dark_background.png)';
        body.style.transition = '2s';
        toggle.style.color='white';
    }
})