$( window ).load(function() {
    $('#cargando').fadeOut(300);

    $('html, body').animate({
        scrollTop: $("#sectionServicios").offset().top
    }, 2000);
    
});

$("#ContactForm").on('submit', function() {
    
    var $form = $(this);
    var formData = new FormData($form[0]);

    $('#buttonContacto').addClass('disabled');
    $('#spinnerContacto').show();

    $.ajax({
        url: $form.attr('action'),
        type: 'POST',
        data: formData,
        dataType: 'html',
        
        success:function(view) {
            $("#respuestaContacto").html(view);
            $("#respuestaContacto").fadeIn('slow');
            
            if ($('#DivFlashMessage').hasClass('alert-success')) {
                $("#nombre").val('');
                $("#correo").val('');
                $("#mensaje").val('');
            }
            
            
        },
        error:function(view){
            $("#nombre").attr('value', 'CULOOOO');
        },
        cache: false,
        contentType: false,
        processData: false
    }).always(function(){
        $('#spinnerContacto').hide();
        $('#buttonContacto').removeClass('disabled');
    });

    return false;    
});