
$('.comments-content').hide();
$(document).on('click','.comments-title', function(e){
    e.preventDefault();
    $(this).next('.comments-content').toggle();
});



