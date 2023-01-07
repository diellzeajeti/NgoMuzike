//Header
window.addEventListener('scroll', function(){
    const header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
});
//Register Modal
const modal = document.querySelector('.modal');
const closeModalBtn = document.querySelector('.close-modal');

const showModalBtns = document.querySelectorAll('.show-modal');
const closeModal = function () {
    modal.classList.add('hidden');
   
}
const openModal = function () {
    modal.classList.remove('hidden');
   
}
// Open modal
for (let i = 0; i < showModalBtns.length; i++)
    showModalBtns[i].addEventListener('click', openModal);

closeModalBtn.addEventListener('click', closeModal);


// Close modal
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
        closeModal();
    }
});

//Form Validation
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passwordRepeat = document.getElementById('passwordRepeat');

form.addEventListener('submit', e =>{
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const passwordRepeatValue = passwordRepeat.value.trim();

    if(emailValue === ''){
        setError(email, 'Email is required!');
    } else if(!isValidEmail(emailValue)){
        setError(email, 'Provide a valid email address!');
    } else{
        setSuccess(email);
    }

    if(passwordValue === ''){
        setError(password, 'Password is required!');
    } else if(passwordValue.length < 8 ){
        setError(password, 'Password must be at least 8 character.')
    } else{
        setSuccess(password);
    }

    if(passwordRepeatValue === ''){
        setError(passwordRepeat, 'Please confirm your password!');
    } else if(passwordRepeatValue !== passwordValue){
        setError(passwordRepeat, "Passwords doesn't match!");
    } else{
        setSuccess(passwordRepeat);
    }
}
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

/* Kenge te reja*/
let song7 = document.getElementById('song7');
let song8 = document.getElementById('song8');
let song9 = document.getElementById('song9');
let song10 = document.getElementById('song10');
let song11 = document.getElementById('song11');
let song12 = document.getElementById('song12');
let song13 = document.getElementById('song13');

let icon7 = document.getElementById('7');
let icon8 = document.getElementById('8');
let icon9 = document.getElementById('9');
let icon10 = document.getElementById('10');
let icon11 = document.getElementById('11');
let icon12 = document.getElementById('12');
let icon13 = document.getElementById('13');

icon7.onclick = function(){
    if(song7.paused){
        song7.play();
        icon7.src = "img/pause-icon.png";
    } else{
        song7.pause();
        icon7.src = "img/play-icon.png";
    }
}

icon8.onclick = function(){
    if(song8.paused){
        song8.play();
        icon8.src = "img/pause-icon.png";
    } else{
        song8.pause();
        icon8.src = "img/play-icon.png";
    }
}
icon9.onclick = function(){
    if(song9.paused){
        song9.play();
        icon9.src = "img/pause-icon.png";
    } else{
        song9.pause();
        icon9.src = "img/play-icon.png";
    }
}
icon10.onclick = function(){
    if(song10.paused){
        song10.play();
        icon10.src = "img/pause-icon.png";
    } else{
        song10.pause();
        icon10.src = "img/play-icon.png";
    }
}
icon11.onclick = function(){
    if(song11.paused){
        song11.play();
        icon11.src = "img/pause-icon.png";
    } else{
        song11.pause();
        icon11.src = "img/play-icon.png";
    }
}
icon12.onclick = function(){
    if(song12.paused){
        song12.play();
        icon12.src = "img/pause-icon.png";
    } else{
        song12.pause();
        icon12.src = "img/play-icon.png";
    }
}
icon13.onclick = function(){
    if(song13.paused){
        song13.play();
        icon13.src = "img/pause-icon.png";
    } else{
        song13.pause();
        icon13.src = "img/play-icon.png";
    }
}

//kenge te vjetra
let song14 = document.getElementById('song14');
let song15 = document.getElementById('song15');
let song16 = document.getElementById('song16');
let song17 = document.getElementById('song17');
let song18 = document.getElementById('song18');
let song19 = document.getElementById('song19');

let icon14 = document.getElementById('14');
let icon15 = document.getElementById('15');
let icon16 = document.getElementById('16');
let icon17 = document.getElementById('17');
let icon18 = document.getElementById('18');
let icon19 = document.getElementById('19');

icon14.onclick = function(){
    if(song14.paused){
        song14.play();
        icon14.src = "img/pause-icon.png";
    } else{
        song14.pause();
        icon14.src = "img/play-icon.png";
    }
}
icon15.onclick = function(){
    if(song15.paused){
        song15.play();
        icon15.src = "img/pause-icon.png";
    } else{
        song15.pause();
        icon15.src = "img/play-icon.png";
    }
}
icon16.onclick = function(){
    if(song16.paused){
        song16.play();
        icon16.src = "img/pause-icon.png";
    } else{
        song16.pause();
        icon16.src = "img/play-icon.png";
    }
}
icon17.onclick = function(){
    if(song17.paused){
        song17.play();
        icon17.src = "img/pause-icon.png";
    } else{
        song17.pause();
        icon17.src = "img/play-icon.png";
    }
}
icon18.onclick = function(){
    if(song18.paused){
        song18.play();
        icon18.src = "img/pause-icon.png";
    } else{
        song18.pause();
        icon18.src = "img/play-icon.png";
    }
}
icon19.onclick = function(){
    if(song19.paused){
        song19.play();
        icon19.src = "img/pause-icon.png";
    } else{
        song19.pause();
        icon19.src = "img/play-icon.png";
    }
}

