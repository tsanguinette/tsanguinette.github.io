$('#optimizeLegibility').click(function(){
    if($('#optimizeLegibility').is(':checked')) {
        $('#legibility').fadeIn('easeOutExpo, 700');
    } else {
        $('#legibility').fadeOut('easeOutExpo, 700');
    }
});

$('#optimizeSpeed').click(function(){
    if($('#optimizeSpeed').is(':checked')) {
        $('#speed').fadeIn('easeOutExpo, 700');
    } else {
        $('#speed').fadeOut('easeOutExpo, 700');   
    }
});

$('#optimizePrecision').click(function(){
    if($('#optimizePrecision').is(':checked')) {
        $('#precision').fadeIn('easeOutExpo, 700');
    } else {
        $('#precision').fadeOut('easeOutExpo, 700');   
    }
});