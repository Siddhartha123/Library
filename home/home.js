$(document).ready(function(){
    $("#sub1").click(function(){

        var title = $('#s_title').val();
        var subj = $('#s_subject').val();
        

        $.ajax({url: "", success: function(result){
            result.forEach(element => {
                
            });
        }});
    });


    $("#sub2").click(function(){

        var title = $('#s_title').val();
        var subj = $('#s_subject').val();
        

        $.ajax({url: "", success: function(result){
            
        }});
    });






});