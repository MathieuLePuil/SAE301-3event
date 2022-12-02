$( document ).ready(function() {
    $('#search').keyup(function (){
        var val = $(this).val();
        console.log(val);
    })
});