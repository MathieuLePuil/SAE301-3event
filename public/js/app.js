$( document ).ready(function() {
    $('#search').focus().keyup(function (event){
        var input = $(this);
        var val = input.val();
        if(val == ''){
            $('#filter .prog_card').show();
            $('#filter span').removeClass('highlighted');
            return true;
        }
        var regexp = '\\b(.*)';
            for(var i in val){
                regexp += '('+val[i]+')(.*)';
            }
            regexp += '\\b';
            $('#filter .prog_card').show();
        $('#filter').find('p>span').each(function (){
            var span = $(this);
            var resultat = span.text().match(new RegExp(regexp,'i'));
            if(resultat){
                var string = '';
                for (var i in resultat){
                    if(i > 0){
                        if (i%2 == 0){
                            string += '<span class="highlighted">'+ resultat[i]+'</span>';
                        }else{
                            string += resultat[i];
                        }
                    }
                }
                span.empty().append(string);
            }else {
                span.parent().parent().hide();
            }
        })
    })
});