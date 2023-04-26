
// Elements
let userEmail = document.getElementById('emailormob')
let password = document.getElementById('password')
let emailError = document.getElementById('emailError')
let passwordError = document.getElementById('passwordError')
let loginSubmit = document.getElementById('login')
let loginForm = document.getElementById('loginForm')

let loginUsername = "";
let loginPassword = "";

let validateUserName = (event) => {
 //Check the user name is empty or not from event
//  if (event.target.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/)) {
//     // if (event.target.value.match(/^\S+@\S+\.\S+$/)) {
//         // Clear the userError div
//         emailError.innerHTML = '';
//     } else
     if (event.target.value.length == 0) {
        // if user name is empty
        emailError.innerHTML = 'Email is required';
    }
    else {
        // Put message in userError div
        emailError.innerHTML = '';
    }
}

let validatePassword = (event) => {
    if (event.target.value === '') {
        // Put message in passwordError div
        passwordError.innerHTML = 'Please enter your password';
    } else {
        // Clear the passwordError div
        passwordError.innerHTML = '';
    }
}

userEmail.addEventListener('focusout', (event) => {
    loginUsername = event.target.value;
    emailError.innerHTML = '';
    validateUserName(event);
    validatePassword(event);
});

// Add evnetlistner to password field
password.addEventListener('focusout', (event) => {
    loginPassword = event.target.value;
    emailError.innerHTML = '';
    validateUserName(event);
    validatePassword(event);
    
});

// Add form submit event addEventListener
loginForm.addEventListener('click', (event) => {
    console.log('insideee')
    // Prevent the form from submitting
    emailError.innerHTML = ''; 
    validateUserName(event);
    validatePassword(event);
    event.preventDefault();
    // Check if the user name is empty
    if (loginUsername === '') {
        // Put message in userError div
        emailError.innerHTML = 'Email is required';
    }
    // Check if the password is empty
    if (loginPassword === '') {
        // Put message in passwordError div
        passwordError.innerHTML = 'Please enter your password';
    }

})


