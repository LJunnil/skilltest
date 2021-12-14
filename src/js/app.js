document.addEventListener("DOMContentLoaded", function () {
    // start here
    let btn = document.querySelector('#button_burger');
    console.log(btn);
    btn.addEventListener('click', (e) => {
        btn.classList.toggle('isOpened');
        btn.parentElement.classList.toggle('isOpened');
    });

});