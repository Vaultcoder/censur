var a = '1';
var b = '2';
var c = '3';
var d = '4';
$(document).keydown(function(e) {
    switch(e.which) {
        case 90: // z    37 left
            var selected = a;
            troll(selected);
        break;
        case 88: //         38 up
            var selected = b;
            troll(selected);
        break;
        case 67: //       39 right
            var selected = c;
            troll(selected);
        break;
        case 86: //      40 down
            var selected = d;
            troll(selected);
        break;
        default: return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
});
function troll(selected){

    console.log('troll');
    console.log(selected);

setTimeout(function(e){
    var home = '<?php echo URL::to('home'); ?>';
    $.ajax(
    {
        url: home,
        type: 'GET',
        dataType: 'html',
        data: {id: selected}, 
    }).done( 
        function(data) 
        {
            $('body').html(data);
        });       
  },0);}