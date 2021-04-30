if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
}

setTimeout(function(){
    $('.alert-success ,.alert-error').addClass("hide");
    $('.alert-success ,.alert-error').removeClass("show");
},5000)

$('.close-btn').click(function(){
    $('.alert-success ,.alert-error').addClass("hide");
    $('.alert-success ,.alert-error').removeClass("show");
})