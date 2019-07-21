var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};

$(function () {
    'use strict';  

          
    
        $('html').niceScroll({
            cursorcolor:'#000',
            cursorwidth:4,
            cursorborder:'1px solid #000',
            
        });
        $('#id01').niceScroll({
            cursorcolor:'#000',
            cursorwidth:4,
            cursorborder:'1px solid #000'
        });
        $('#id02').niceScroll({
            cursorcolor:'#000',
            cursorwidth:4,
            cursorborder:'1px solid #000'
        });
        $(window).scroll(function(){
            if ($(this).scrollTop() < 4800){
                $('.hm').addClass('active').siblings().removeClass('active')
            }
            if ($(this).scrollTop() >= 480){
                $('.bt').addClass('active').siblings().removeClass('active')
            }
            if ($(this).scrollTop() >= 1000){
                $('.serv').addClass('active').siblings().removeClass('active')
            }
            if ($(this).scrollTop() >= 1600){
                $('.mr').addClass('active').siblings().removeClass('active')
            }
            if ($(this).scrollTop() >= 2900){
                $('.tm').addClass('active').siblings().removeClass('active')
            }
            if ($(this).scrollTop() >=2100){
                $('.ct').addClass('active').siblings().removeClass('active')
            }
            
        });
    });
    function rep_word(){
        
        var str = document.getElementById("rep").innerHTML; 
        var res = str.replace("الدخول", "الخروج");
        document.getElementById("rep").innerHTML = res;
    };