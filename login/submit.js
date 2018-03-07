$(document).ready(function(){
    $(".btn").click(function(){
            var uname = $('input:text').val();
            var pwd = $('input:password').val();
            console.log(uname);
            
            $.post("url",
            {
                name: uname,
                password: pwd
            },
            function(data,status){

            });
        });
    });