const signUpButton = document.getElementById('signUp');
const signInButton2 = document.getElementById('signIn1');
const signInButton1 = document.getElementById('signIn2');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton1.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

signInButton2.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});