/*
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
} */
//Login and Signup form functions
const loginBtn = document.getElementById('login-btn');
const signupBtn = document.getElementById('signup-btn');
const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');

signupBtn.addEventListener('click', function () {
    if (!loginForm.classList.contains('hidden')) loginForm.classList.add('hidden');

    if (signupForm.classList.contains('hidden')) signupForm.classList.remove('hidden');
})
loginBtn.addEventListener('click', function () {
    if (loginForm.classList.contains('hidden')) loginForm.classList.remove('hidden');

    if (!signupForm.classList.contains('hidden')) signupForm.classList.add('hidden');
})
