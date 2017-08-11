//Small caps
$(".smcpbutton").click(function (e) {
    e.stopPropagation();
    $(".smcpon").toggleClass('smcpoff');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.smcpon').length){
        $(".smcpon").removeClass('smcpoff');
    }
});

//Numbers
$(".numbutton").click(function (e) {
    e.stopPropagation();
    $(".onumon").toggleClass('lnumon');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.onumon').length){
        $(".onumon").removeClass('lnumon');
    }
});

//Fractions
$(".fracbutton").click(function (e) {
    e.stopPropagation();
    $(".fracon").toggleClass('fracoff');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.fracon').length){
        $(".fracon").removeClass('fracoff');
    }
});

//Swash
$(".swshbutton").click(function (e) {
    e.stopPropagation();
    $(".swshon").toggleClass('swshoff');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.swshon').length){
        $(".swshon").removeClass('swshoff');
    }
});

//Subscript
$(".subsbutton").click(function (e) {
    e.stopPropagation();
    $(".subson").toggleClass('subsoff');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.subson').length){
        $(".subson").removeClass('subsoff');
    }
});

//Superscript
$(".supsbutton").click(function (e) {
    e.stopPropagation();
    $(".supson").toggleClass('supsoff');
});

$(document).click(function (e) {
    if(!$(e.target).closest('.supson').length){
        $(".supson").removeClass('supsoff');
    }
});