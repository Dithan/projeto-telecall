const dark = document.getElementById('dark');

const dark2 = document.getElementById('dark2');


dark.addEventListener('click', () => {
    document.body.classList.add('darkmode');

    if(document.body.classList.contains('light')){

        document.body.classList.remove('light');
        
        localStorage.setItem('Theme', 'darkmode');

    }
    else{
        
        document.body.classList.remove('darkmode');

        document.body.classList.add('light');

        localStorage.setItem('Theme', 'light')
    };
    
});

document.body.classList.add(localStorage.getItem('Theme'));


dark2.addEventListener('click', () => {
    document.body.classList.add('darkmode');
    if(document.body.classList.contains('light')){
        document.body.classList.remove('light');

        localStorage.setItem('Theme', 'darkmode');

    }
    else{
        
        document.body.classList.remove('darkmode');

        document.body.classList.add('light');

        localStorage.setItem('Theme', 'light')
    };
    
});



