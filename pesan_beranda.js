let welcome = ['Selamat Datang',
                '<br>Di',
                '<br><br><span>APOTEK SYUKUR</span>',
                'Selamat Datang<br>Di<br><span>APOTEK SYUKUR</span><hr>'
            ];

window.addEventListener('load', function(){
    let typed = new Typed('.display-4', {
        strings: welcome,
        startDelay: 1000,
        backSpeed:110,
        fadeOut: true,
        fadeOutDelay: false,
        typeSpeed: 50,
        loop: true,
        loopCount: 1,
        showCursor: false
    });
});