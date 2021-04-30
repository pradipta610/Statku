if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
}

setTimeout(function(){
    $('.success ,.error').addClass("hide");
    $('.success ,.error').removeClass("show");
},5000)

$('.close-btn').click(function(){
    $('.success ,.error').addClass("hide");
    $('.success ,.error').removeClass("show");
})