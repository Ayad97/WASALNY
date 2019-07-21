// function myFunction(){
      
//     var dots = document.getElementById("dots");
//     var moreText = document.getElementById("more");
//     var btnText = document.getElementById("myBtn");
  
//     if (dots.style.display === "none") {
//       dots.style.display = "inline";
//       btnText.innerHTML = " تفاصيل أكثر"; 
//       moreText.style.display = "none";
//     } else {
//       dots.style.display = "none";
//       btnText.innerHTML = "غلق التفاصيل"; 
//       moreText.style.display = "block";
//     }

// }
function search_buses(){
    var b_to = document.getElementById("b_to").value,
        b_from = document.getElementById("b_from").value,
        b_time = document.getElementById("b_time").value,
        b_period =document.getElementById("b_Period").value;

    var buses =document.getElementById("buses"),
        bus1 =document.getElementById("bus1"),
        bus2 =document.getElementById("bus2"),
        bus3 =document.getElementById("bus3"),
        bus4 =document.getElementById("bus4"),
        bus5 =document.getElementById("bus5"),
        bus6 =document.getElementById("bus6"),
        bus7 =document.getElementById("bus7"),
        bus8 =document.getElementById("bus8"),
        bus9 =document.getElementById("bus9"),
        bus10 =document.getElementById("bus10"),
        bus11 =document.getElementById("bus11"),
        bus12 =document.getElementById("bus12");
        bus13 =document.getElementById("bus13"),
        bus14 =document.getElementById("bus14"),
        bus15 =document.getElementById("bus15"),
        bus16 =document.getElementById("bus16"),
        bus17 =document.getElementById("bus17"),
        bus18 =document.getElementById("bus18"),
        bus19 =document.getElementById("bus19"),
        bus20 =document.getElementById("bus20"),
        bus21 =document.getElementById("bus21"),
        bus22 =document.getElementById("bus22"),
        bus23 =document.getElementById("bus23"),
        bus24 =document.getElementById("bus24");
    if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")||
    (b_to=="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from == "محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&        (b_time =="7")&&(b_period == "AM"))
    {
        buses.style.display="block";bus1.style.display="block";bus2.style.display="block";bus3.style.display="block";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
       
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="8")&&(b_period == "AM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="block";bus3.style.display="none";bus4.style.display="block";bus5.style.display="block";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="9")&&(b_period == "AM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="block";bus7.style.display="block";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="10")&&(b_period == "AM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="block";bus8.style.display="block";bus9.style.display="block";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="11")&&(b_period == "AM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="block";bus10.style.display="block";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="12")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="block";bus11.style.display="block";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="1")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none"; bus10.style.display="none";bus11.style.display="block";bus12.style.display="block";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
    }
    else if((  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي"))&& ((b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&(b_time =="12")||((b_time =="1")||(b_time =="2")||(b_time =="3")||(b_time =="4")||(b_time =="5")||(b_time =="6"))&&(b_period == "AM"))
    {
        alert("هذة الخدمة غير متاحة في هذة الأوقات  ");
    }
    // ----------------------------------------------------------------------------------
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="12")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="block";bus14.style.display="block";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
        
    }
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="1")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="block";bus16.style.display="block";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
        
    }
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="2")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="block";bus18.style.display="block";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
        
    }
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="3")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="block";bus20.style.display="block";bus21.style.display="none";bus22.style.display="none";bus23.style.display="none";bus24.style.display="none";
        
    }
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="4")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="block";bus22.style.display="block";bus23.style.display="none";bus24.style.display="none";
        
    }
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية"))&&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي"))&&(b_time =="5")&&(b_period == "PM"))
    {
        buses.style.display="block";bus1.style.display="none";bus2.style.display="none";bus3.style.display="none";bus4.style.display="none";bus5.style.display="none";bus6.style.display="none";bus7.style.display="none";bus8.style.display="none";bus9.style.display="none";bus10.style.display="none";bus11.style.display="none";bus12.style.display="none";bus13.style.display="none";bus14.style.display="none";bus15.style.display="none";bus16.style.display="none";bus17.style.display="none";bus18.style.display="none";bus19.style.display="none";bus20.style.display="none";bus21.style.display="none";bus22.style.display="none";bus23.style.display="block";bus24.style.display="block";
        
    }
    // -------------------------------------------------------------------------------
    else if(((b_to =="محطة مجمع الكليـات") || (b_to =="محطة كلية التربية")||(  b_to == ("محطة طنطا" ) || ( b_to =="محطة صناديد") || ( b_to =="محطة بابل")||( b_to =="محطة زنارة")|| 
    (b_to =="محطة بتبس")||( b_to =="محطة ميت_موسي")))
    &&(  b_from == ("محطة طنطا" ) || ( b_from =="محطة صناديد") || ( b_from =="محطة بابل")||( b_from =="محطة زنارة")|| 
    (b_from =="محطة بتبس")||( b_from =="محطة ميت_موسي")||(b_from =="محطة مجمع الكليـات") || (b_from =="محطة كلية التربية"))&&((b_time =="6") || (b_time =="7")|| (b_time =="8")|| (b_time =="9")|| (b_time =="10") || (b_time =="11") )&&(b_period == "PM"))
    {
        alert("هذة الخدمة غير متاحة في هذة الأوقات  ");
    }
    else{
        buses.style.display="none"
        alert("يجب عليك تحديد المكان و الوقت ");
    }
    
};

$(function () {
    
    $('html').niceScroll({
        cursorcolor:'#000',
        cursorwidth:4,
        cursorborder:'1px solid #000',
        
    });
});