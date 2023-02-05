function mobileBtnListener() {
    let btn_el = document.querySelector('.header__mobileBtn');
    let nav_el = document.querySelector('.header__menu');
    
    btn_el.addEventListener('click', () => {
        btn_el.classList.toggle('active');
        nav_el.classList.toggle('active');
    })
}

mobileBtnListener();