$(document).ready(function(){  
      $('#submit').click(function(){  
           var email = $('#email').val();  
           var password = $('#password').val();  
           if(email == '' || password == '')  
           {  
                $('#error_message').html("Isi email dan password");  
           }  
           else  
           {  
                $('#error_message').html('');  
                $.ajax({  
                     url:"login.php",  
                     method:"POST",  
                     data:{email:email, password:password},  
                     success:function(data){  
                          $("form").trigger("reset");  
                          $('#success_message').fadeIn().html(data);  
                          setTimeout(function(){  
                               $('#success_message').fadeOut("Slow");  
                          }, 2000);  
                     }  
                });  
           }  
      });  
 });  