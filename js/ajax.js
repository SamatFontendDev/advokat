jQuery(document).ready(function($){
    $("#form-ajax").submit(function(e) {
        e.preventDefault();
        var form_data = $(this).serialize();
        console.log(form_data);
        
        $.ajax({
        type: "POST",
        url: "/mail.php",
        data: form_data,
        success: function() {
               $('.form-modal').html('Ваша заявка отправлена!')
        } // забыли закрыть success
      });
    });
});