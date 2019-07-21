
$(document).ready(function()
{
    
    
    $('span').click(function(){
        $(this).css("background-color","#F00");
        $(this).css("color","#fff");
        neww =$(this).text();
        
        
       /* $.ajax({
            url:'index.php',
            type: 'POST',
            async: false,
            data: {
                "ss":textt
            },
            success: function (d) {
                alert(d);
            }
        });*/
        
       
        
       // alert($(this).text());
      //  $('span').css("background-color","#F00")
     });
     $('span').dblclick(function(){
       $(this).css("background-color","#13334c");
        $(this).css("color","#fff")  ;
        
     });
});