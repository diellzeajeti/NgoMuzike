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

//Audio in Main
let song1 = document.getElementById('song1');
let song2 = document.getElementById('song2');
let song3 = document.getElementById('song3');
let song4 = document.getElementById('song4');
let song5 = document.getElementById('song5');
let song6 = document.getElementById('song6');

let icon1 = document.getElementById('1');
let icon2 = document.getElementById('2');
let icon3 = document.getElementById('3');
let icon4 = document.getElementById('4');
let icon5 = document.getElementById('5');
let icon6 = document.getElementById('6');

icon1.onclick = function(){
    if(song1.paused){
        song1.play();
        icon1.src = "img/pause-icon.png";
    } else{
        song1.pause();
        icon1.src = "img/play-icon.png";
    }
}

icon2.onclick = function(){
    if(song2.paused){
        song2.play();
        icon2.src = "img/pause-icon.png";
    } else{
        song2.pause();
        icon2.src = "img/play-icon.png";
    }
}
icon3.onclick = function(){
    if(song3.paused){
        song3.play();
        icon3.src = "img/pause-icon.png";
    } else{
        song3.pause();
        icon3.src = "img/play-icon.png";
    }
}
icon4.onclick = function(){
    if(song4.paused){
        song4.play();
        icon4.src = "img/pause-icon.png";
    } else{
        song4.pause();
        icon4.src = "img/play-icon.png";
    }
}
icon5.onclick = function(){
    if(song5.paused){
        song5.play();
        icon5.src = "img/pause-icon.png";
    } else{
        song5.pause();
        icon5.src = "img/play-icon.png";
    }
}
icon6.onclick = function(){
    if(song6.paused){
        song6.play();
        icon6.src = "img/pause-icon.png";
    } else{
        song6.pause();
        icon6.src = "img/play-icon.png";
    }
}
