//Header
window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});
//Audio in Homepage

let mySong = document.getElementById('mySong');
let icon = document.getElementById('icon');

icon.onclick = function(){
    if(mySong.paused){
        mySong.play();
        icon.src = "img/pause.png";
    } else{
        mySong.pause();
        icon.src = "img/play.png";
    }
}