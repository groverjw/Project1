



    function myFunction() {
         a = $('input[name=radios-1]:checked').val();
         b = $('input[name=radios-2]:checked').val();
         c = $('input[name=radios-3]:checked').val();
         d = $('input[name=radios-4]:checked').val();
         e = $('input[name=radios-5]:checked').val();
         f = $('input[name=radios-6]:checked').val();
         g = $('input[name=radios-7]:checked').val();
         k = parseInt(a)+ parseInt(b) + parseInt(c) + parseInt(d) + parseInt(e) + parseInt(f)+ parseInt(g);

   
         m = "If you are satisfied with your score then please click save results.";
        

      document.getElementById("score").innerHTML = k;
      document.getElementById("msg").innerHTML = m;




    }