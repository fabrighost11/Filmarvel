window.onload = function() {
    // Desplazarse a la sección específica al cargar la página
    window.location.hash = 'main-info-section';
};


/* console.log('script.js cargado');
$(document).ready(function() {
    $(document).on('click', 'a.ajax-link', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var anchor = this.hash; // Obtener el ancla de la URL
        console.log('Solicitud AJAX enviada a: ' + url);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                console.log('Respuesta recibida con éxito');
                $('#content-container').html(data);
                if (anchor) {
                    $('html, body').animate({
                        scrollTop: $(anchor).offset().top
                    }, 500);
                }  */
                // Reaplicamos la clase navbar-nav
                /* $('.nav').addClass('nav navbar-nav'); */
/*             },
            error: function() {
                console.log('Error al cargar el contenido');
            }
        });
    });
}); */


 document.addEventListener('DOMContentLoaded', function() {
    console.log('script.js cargado');

    // Añadir clase ajax-link dinámicamente
    $('ul.navbar-nav > li > a').each(function() {
        $(this).addClass('ajax-link');
    });

    $(document).on('click', 'a.ajax-link', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        var anchor = this.hash; // Obtener el ancla de la URL
        console.log('Solicitud AJAX enviada a: ' + url);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                console.log('Respuesta recibida con éxito');
                $('#content-container').html(data);

                // Actualizar la clase activa
                $('ul.navbar-nav > li').removeClass('active');
                $('a[href="' + url + '"]').parent().addClass('active');

                if (anchor) {
                    $('html, body').animate({
                        scrollTop: $(anchor).offset().top
                    }, 500);
                }
            },
            error: function() {
                console.log('Error al cargar el contenido');
            }
        });
    });
}); 




