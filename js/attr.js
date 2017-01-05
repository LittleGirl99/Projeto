$(document).ready(function(){
  $('h1').click(function() {
    //$(this).text('TGPSI');
    //$('p , h3').text('TGPSI');
    $('#img').attr('src','imagens/programar.jpg');
  });
  $('h1').dblclick(function(){
    $('#img').attr('src','imagens/tgpsi.png');
  });
  $('h3').click(function(){
    $('.d').show();
  });
  /*
  $('#CS').click(function(){
    $('#Sociocultural').show();
  });
  $('#CC').click(function(){
    $('#Cientifica').toggle('slow');
  });
  $('#CT').dblclick(function(){
    $('#Tecnica').fadeIn(1000);
  });*/
 /* $("#a").click(function(){
    $('#ex').html('<b>Exemplos</b>');
  });
  $('#e').click(function(){
    $('#test').empty();
  });
  $('#aft').click(function(){
    $('#after').after('<b>Curso de Informática</b>');
  });
  $('#pre').click(function(){
    $('body').prepend('<img src=imagens/aemtg.png>');
  });
  $('#be').click(function(){
    $('#img').before('<img src=imagens/linguagens.png>');
  });
  $('#re').click(function(){
    $('#frase').replaceWith('<p>Curso que abrange de tudo um pouco sobre a tecnologia</p>');
  });*/
  $('#refresh').click(function(){
    location.reload();
  });
   $( function() {
    $( "#accordion" ).accordion();
  } );
});
