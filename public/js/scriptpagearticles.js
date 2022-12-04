document.getElementById('ajout').addEventListener('click',function() {
    var id = document.getElementById('id').value
    var article = document.getElementById('article').innerHTML
    var prix = document.getElementById('prix').innerHTML
    var heure = document.getElementById('heure').innerHTML
    var date = document.getElementById('date').innerHTML
    var desc = document.getElementById('desc').innerHTML
    alert('Votre article '+article+ 'a été ajouté au panier');
    // console.log( id + " " + article + " " + prix )

    index = montab.findIndex(element => element.id ==id); //trouver l'article dans la liste du panier
    if(index>-1){
        montab[index].quantite	= parseInt(montab[index].quantite) + parseInt(document.getElementById('qte').value)
        console.log(montab)
    }
    else        {
        montab.push({'id': id, 'article': article, 'quantite': document.getElementById('qte').value, 'prix': prix, 'heure':heure, 'date': date, 'desc': desc })
        console.log(montab)
    }

    panier+=parseInt(document.getElementById('qte').value); // incrementation de la valeur du panier
    document.getElementById('panier').innerHTML=panier;
    document.cookie = "panier="+JSON.stringify(montab)+"; path=/";
})