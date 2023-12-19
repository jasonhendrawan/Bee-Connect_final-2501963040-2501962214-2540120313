// Upload Profile Picture
const imgDiv = document.querySelector('profile');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const button = document.querySelector('#button')

file.addEventListener('change', function(){
    const choosedFile = this.files[0];

    if (choosedFile){
        const reader = new FileReader();

        reader.addEventListener('load', function
        (){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);
    }
});

function alertFunction() {
    alert("Your profile has been saved successfully.");
  }

// Reject Friend
// const ul = document.querySelector('.card-container');

// ul.addEventListener('click', (event) => {
//     if (event.target.tagName === 'BUTTON') {
//         const button = event.target;
//         const li = button.parentNode.parentNode;
//         if (button.textContent === 'remove') {
//             ul.removeChild(li);
//         }
//     }
// });