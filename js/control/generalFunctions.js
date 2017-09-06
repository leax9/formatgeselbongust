
$(document).ready(function(){
/*
    $(".menu-inici").click(function(){
        $(".menu-inici").removeClass("active");
        $(this).addClass("active");

        var bloc = $(this).attr("id");

        $(".containers").css("display","none");

        $(".sections_elb").hide();

        $("#"+bloc+"_container").show();
        $("#"+bloc+"_container").load("html/"+bloc+".html");

      });*/
      $('#boto').css("display","none");
       $(window).scroll(function () {

        if ($(this).scrollTop() > 50) {
            $('#boto').fadeIn();
        } else {
            $('#boto').fadeOut();
        }
        });


        $('#boto').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 1000);
            return false;

        });


        /* Accordion versio movil Productes (llista categories cataleg.php) */
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
              this.addClass("active");
                //this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
          }
        }

});

 function changeActive(){
    $(".menu-admin").removeClass("active");
    $(this).addClass("active");
}


function getCookie(c_name){
      var c_value = document.cookie;
      var c_start = c_value.indexOf(" " + c_name + "=");
      if (c_start == -1){
          c_start = c_value.indexOf(c_name + "=");
      }
      if (c_start == -1){
          c_value = null;
      }else{
          c_start = c_value.indexOf("=", c_start) + 1;
          var c_end = c_value.indexOf(";", c_start);
          if (c_end == -1){
              c_end = c_value.length;
          }
          c_value = unescape(c_value.substring(c_start,c_end));
      }
      return c_value;
  }

  function setCookie(c_name,value,exdays){
      var exdate=new Date();
      exdate.setDate(exdate.getDate() + exdays);
      var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
      document.cookie=c_name + "=" + c_value;
  }

  /*if(getCookie('tiendaaviso')!="1"){
      document.getElementById("barraaceptacion").style.display="block";
  }*/


  function PonerCookie(){
      setCookie('tiendaaviso','1',365);
      document.getElementById("barraaceptacion").style.display="none";
  }


    var $formLogin = $('#login-form');
    var $divForms = $('#div-forms');
    var $modalAnimateTime = 300;
    var $msgAnimateTime = 150;
    var $msgShowTime = 2000;

    function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
    var $msgOld = $divTag.text();
    msgFade($textTag, $msgText);
    $divTag.addClass($divClass);
    $iconTag.removeClass("glyphicon-chevron-right");
    $iconTag.addClass($iconClass + " " + $divClass);
    setTimeout(function() {
        msgFade($textTag, $msgOld);
        $divTag.removeClass($divClass);
        $iconTag.addClass("glyphicon-chevron-right");
        $iconTag.removeClass($iconClass + " " + $divClass);
    }, $msgShowTime);
  }

  function msgFade ($msgId, $msgText) {
      $msgId.fadeOut($msgAnimateTime, function() {
          $(this).text($msgText).fadeIn($msgAnimateTime);
      });
  }

window.mostrarVistaPrevia = function mostrarVistaPrevia() {

  var imgSliderMod, imgSliderNew, Lector;

  //Para navegadores antiguos
  if (typeof FileReader !== "function") {
    jQuery('#infoNombre').text('[Vista previa no disponible]');
    jQuery('#infoTamany').text('(su navegador no soporta vista previa!)');
    return;
  }

  imgSliderMod = jQuery('#img_slider')[0].files;
  imgSliderNew = jQuery('#img_slider2')[0].files;
  if (imgSliderMod.length > 0) {

    LectorMod = new FileReader();

    LectorMod.onloadend = function(e) {
      var origen, tipo;

      //Envia la imagen a la pantalla
      origen = e.target; //objeto FileReader
      //Prepara la información sobre la imagen
      tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

      jQuery('#infoNombre').text(imgSliderMod[0].name + ' (Tipo: ' + tipo + ')');
      jQuery('#infoTamany').text('tamany: ' + e.total + ' bytes');
      //Si el tipo de archivo es válido lo muestra,
      //sino muestra un mensaje
      if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
      } else {
        jQuery('#vistaPrevia').attr('src', origen.result);

        window.obtenerMedidas();
      }

    };

    LectorMod.onerror = function(e) {
      console.log(e)
    }

    LectorMod.readAsDataURL(imgSliderMod[0]);



  } else {
    var objeto = jQuery('#img_slider');

    objeto.replaceWith(objeto.val('').clone());
    jQuery('#vistaPrevia').attr('src', window.imagenVacia);

    jQuery('#infoNombre').text('[Seleccione una imagen]');
    jQuery('#infoTamany').text('');
  };


  if (imgSliderNew.length > 0) {

    LectorNew = new FileReader();

    LectorNew.onloadend = function(e) {
      var origen, tipo;

      //Envia la imagen a la pantalla
      origen = e.target; //objeto FileReader
      //Prepara la información sobre la imagen
      tipo = window.obtenerTipoMIME(origen.result.substring(0, 30));

      jQuery('#infoNombre').text(imgSliderNew[0].name + ' (Tipo: ' + tipo + ')');
      jQuery('#infoTamany').text('tamany: ' + e.total + ' bytes');
      //Si el tipo de archivo es válido lo muestra,
      //sino muestra un mensaje
      if (tipo !== 'image/jpeg' && tipo !== 'image/png' && tipo !== 'image/gif') {
        jQuery('#vistaPrevia2').attr('src', window.imagenVacia);
        alert('El formato de imagen no es válido: debe seleccionar una imagen JPG, PNG o GIF.');
      } else {

        jQuery('#vistaPrevia2').attr('src', origen.result);
        window.obtenerMedidas();
      }

    };

    LectorNew.onerror = function(e) {
      console.log(e)
    }

    LectorNew.readAsDataURL(imgSliderNew[0]);



  } else {

    var objeto = jQuery('#img_slider2');
    objeto.replaceWith(objeto.val('').clone());

    jQuery('#vistaPrevia2').attr('src', window.imagenVacia);
    jQuery('#infoNombre').text('[Seleccione una imagen]');
    jQuery('#infoTamany').text('');
  };

  if (typeof FileReader !== "function") {
    jQuery('#infoNombre').text('[Vista previa no disponible]');
    jQuery('#infoTamany').text('(su navegador no soporta vista previa!)');
    return;
  }
};


//Este string contiene una imagen de 1px*1px color blanco
window.imagenVacia = 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==';

//Lee el tipo MIME de la cabecera de la imagen
window.obtenerTipoMIME = function obtenerTipoMIME(cabecera) {
    return cabecera.replace(/data:([^;]+).*/, '\$1');
}

/*function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#vistaPrevia2')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }*/

//Obtiene las medidas de la imagen y las agrega a la
//etiqueta infoTamany
window.obtenerMedidas = function obtenerMedidas() {
    jQuery('<img/>').bind('load', function(e) {

        var tamany = jQuery('#infoTamany').text() + '; Medidas: ' + this.width + 'x' + this.height;

        jQuery('#infoTamany').text(tamany);

    }).attr('src', jQuery('#vistaPrevia').attr('src'));
}



$(document).ready(function(){

  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    }, 300);
  });

  $(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
      $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);
    }
  });



  //Cargamos la imagen "vacía" que actuará como Placeholder
    //jQuery('#vistaPrevia').attr('src', window.imagenVacia);

    //El input del archivo lo vigilamos con un "delegado"
   jQuery('#imgSlider').on('change', '#img_slider', function(e) {
        window.mostrarVistaPrevia();
    });

    jQuery('#imgSlider2').on('change', '#img_slider2', function(e) {
        window.mostrarVistaPrevia();
    });

    //El botón Cancelar lo vigilamos normalmente
    /*jQuery('#cancelar').on('click', function(e) {
        var objeto = jQuery('#archivo');
        objeto.replaceWith(objeto.val('').clone());

        jQuery('#vistaPrevia').attr('src', window.imagenVacia);
        jQuery('#infoNombre').text('[Seleccione una imagen]');
        jQuery('#infoTamany').text('');
    });*/

});

/*$('#button').click(function () {
    $("input[type='file']").trigger('click');
})

$("input[type='file']").change(function () {
    $('#val').text(this.value.replace(/C:\\fakepath\\/i, ''))
})*/
