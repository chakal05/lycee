$(document).ready(function(){
    showUp();
    blo();
    $(".pmb").fadeOut(3000);
 //       //get new message every 3 second

   NewMess();

 //   //Is creating to many connection to the port; You'll have to increase the number of port  
setTimeout(NewMess(), 3000);
})



    function NewMess(){
        $user = $.trim($("#user_from").val());

        $.ajax({
         url: "get_message_ajax.php?user_id="+$user,
         type: 'get',
         success: function(data){
          // Perform operation on return value
          $(".badge").html(data);
         },
         complete:function(data){
          setTimeout(NewMess(),3000);
         }
        });
       }
       
   
    
function showUp(){
    
   
    $('.navbar-toggler').click(function(){
        $(".collapse").hide();
        $(".bleu").show(hidden());
          $(".container-fluid .gauche").show(hidden());
        
})
}

function blo(){
    
    $('.bleu').click(function(){
        $('.collapse').show(blos());
        $('.bleu').html("Cacher le menu");
        $(".container-fluid .gauche").hide(blos());
        })
}

function blos(){
    $('.bleu').click(function(){
        $('.collapse').hide(blo());
        $('.bleu').html("Montrer le menu");
        $(".container-fluid .gauche").show(blo());
        })
}
function hidden(){
    
    $('.navbar-toggler').click(function(){
        $(".bleu").hide(showUp());
          $(".container-fluid .gauche").hide(showUp());
         });      
}