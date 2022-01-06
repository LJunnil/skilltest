document.addEventListener("DOMContentLoaded", function () {
    // start here test
    let btn = document.querySelector('#button_burger');
    btn.addEventListener('click', (e) => {
        document.querySelector('.l-sidebar').classList.toggle('isOpened');
        btn.parentElement.classList.toggle('isOpened');
        console.log(document.querySelector('.l-sidebar'));  
    });
   

});