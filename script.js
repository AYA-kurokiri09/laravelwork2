$(function() {
    $('#loginName').click(function(){
        if ($('#logoutBtn').is(':hidden')) {
            $('#logoutBtn').slideDown();
        } else {
            $('#logoutBtn').slideUp();
          }
    })
    
});