$( document ).ready(function() {
    $('#search').keyup(function (event){
        var input = $(this);
        var val = input.val();
        var regexp = '\\b(.*)';
            for(var i in val){
                regexp += '('+val[i]+')(.*)';
            }
            regexp += '\\b';
        $('#filter').find('span').each(function (){
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