$(document).ready(function(){ 
var counter = 0,
$items = $('.Slideshow figure'),
Items = $items.length;
 
var showCurrent = function(){
var itemToShow = Math.abs(counter%Items);
$items.removeClass('show');
$items.eq(itemToShow).addClass('show');
};

var myVar = setInterval(function(){Forward()}, 10000);

function myStopFunction() {
    clearInterval(myVar);
}
    
function Forward() {
clearInterval(myVar);
counter++;
showCurrent();
myVar = setInterval(function(){Forward()}, 10000);
}

$('.next').on('click', function(){
Forward();
});
 
$('.prev').on('click', function(){
clearInterval(myVar);
counter--;
showCurrent();
myVar = setInterval(function(){Forward()}, 10000);
});  
    

    



 
});