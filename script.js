const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInform=document.getElementById('signIp');
const signUpform=document.getElementById('signUp');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";

})
signInbutton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})