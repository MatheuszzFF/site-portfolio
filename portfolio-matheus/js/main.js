window.addEventListener('load' , () => {

    //header mobile btn 
    function mobileBtnListener() {
        let btn_el = document.querySelector('.header__mobileBtn');
        let nav_el = document.querySelector('.header__menu');
        console.log(btn_el);
        console.log(nav_el);
        
        btn_el.addEventListener('click', () => {
            btn_el.classList.toggle('active');
            nav_el.classList.toggle('active');
        })
    }
    
    mobileBtnListener();

    // home tabs

    
    function homeTabChange() {
        let tabNavs = document.querySelectorAll('li[tab-nav]');
        let tabContents = document.querySelectorAll('div[tab-content]');

        function desactivateAllTabs() {
            tabNavs.forEach(tab => {
                tab.classList.remove('active');
            })

            tabContents.forEach(content => {
                content.classList.remove('active');
            })
        }

        tabNavs.forEach(tab => {
            tab.addEventListener('click', () => {
                let referentContent = document.querySelector(`div[tab-content="${tab.getAttribute('tab-nav')}"]`);
                desactivateAllTabs();
                tab.classList.add('active');
                referentContent.classList.add('active');
            })
        })
    }

    homeTabChange();
})
