$('body').scrollspy({target: ".navbar", offset: 80});
$("#navbar a").on('click', function(event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){
      window.location.hash = hash;
    });

  } // End if

});

//Contact Form

 $( "#submitBtn" ).click(function( event ) {
        //values
        var name=document.getElementById('name').value;
        var email=document.getElementById('email').value;
        var message=document.getElementById('message').value;
        var dataString = {"name": name, "email":email, "message":message};
        $.ajax({
            type:"post",
            url:"php/mail.php",
            data: dataString,
            success: function(html) {
                $('#feedback').html(html);
            }
        });
      event.preventDefault();
    });