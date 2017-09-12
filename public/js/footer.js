$(document).ready(function () {
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage'], .jumbotron a").on('click', function (event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function () {

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if
    });

    $(window).scroll(function () {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
})


// Tabbed Menu

//    var mass=["sport","standart","duo"];
//    var i;
//    for(i=0;i<mass.length;i++){
//        document.getElementById(mass[i]).click();
//    }


var i, j, x, z, tablinks;
x = document.getElementsByClassName("menu");

for (i = 0; i < x.length; i++) {

    x[i].style.display = "none";
}
z = document.getElementsByClassName("MyPrice");
//   alert(z.length);
for (j = 0; j < z.length; j++) {
    z[j].click();
}

function openMenu(evt, menuName, categoryName) {

//        var i, x, tablinks;
//    x = document.getElementsByClassName("menu");
//    for (i = 0; i < x.length; i++) {
//        x[i].style.display = "none";
//    }

    y = document.getElementsByClassName(categoryName);
    for (i = 0; i < y.length; i++) {
        y[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
    }
//        var mass1;
//        mass1 = document.getElementsByClassName('Eat');
//        var i;
//        for(i=0;i<mass1.length;i++){
//            mass1[i].style.display = "block";
////           evt.currentTarget.firstElementChild.className += " w3-dark-grey";
//        }

    //document.getElementById(categoryName).getElementById(menuName).style.display = "block";
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}


//document.getElementById("standart").click();


$('.responsive').slick({
    // infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true
                // dots: false
            }
        },

        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
});