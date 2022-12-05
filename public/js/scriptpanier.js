liste = recupCookie("panier") //recupere le cookie  sous forme de chaine de caractere
if (liste!="")montab = JSON.parse(liste) // transforme la chaine  en tableau JSON
else montab =Array() // si il n'y a pas de tableau dans le cookie alors créer le tableau
console.log(montab)
document.getElementById('liste').value="panier="+JSON.stringify(montab)+"; path=/";


var totalgeneral=0
montab.forEach(uneinfo => {

    // html = `<tr id="${uneinfo.id}">
    //         <td>${uneinfo.article}</td>
    //         <td><button class="moins">-</button><span>${uneinfo.quantite}</span><button class="plus">+</button></td>
    //         <td ><span class="unitaire">${uneinfo.prix}</span>€</td>
    //         <td><span class="prix">${uneinfo.prix * uneinfo.quantite}</span>€</td>
    //         </tr>`;
    const link_img = "../images/affiche/"+ uneinfo.article.trim().toLowerCase().replace(/ /g,'')+".jpg";
    html = `
        <div class="panier-card">
        <div class="panier-img">
            <img src=${link_img} width="388px" height="245px" alt="Affiche">
        </div>
        <div class="panier-event-info">
            <h2>${uneinfo.article}</h2>
            <p>${uneinfo.date}</p>
            <p>Stade de l'Aube</p>
            <p>${uneinfo.heure}</p>
        </div>
        <div class="panier_place">
            <div class="panier_quantite">
                <div class="nbp">
                    <label for="nbp">Nombre de place : </label>
                    <input type="number" id="value_modif" min="1" value="${uneinfo.quantite}" style="background-color: white; width: 50px;">
                </div>
                <div class="prix">
                    <label for="#">Prix à l'unité : ${uneinfo.prix} €</label>
                </div>
                <a href="#"><img src="../images/ico/poubelle.png" alt="Affiche" width="20px"></a>
            </div>
            <div class="prixTotal">
                <p>Prix total : ${uneinfo.prix * uneinfo.quantite} €</p>
            </div>
        </div>
    </div>`;


    document.getElementById('zone').innerHTML += html
    totalgeneral += uneinfo.prix * uneinfo.quantite
})
document.getElementById('total').innerHTML = totalgeneral

$("#value_modif").bind(function(event){
    console.log(event);
});

document.querySelectorAll('.plus').forEach(clickplus)
function clickplus(tag){
    tag.addEventListener('click',function() {
        qte=this.parentNode.querySelector('span').innerHTML;
        qte++;
        this.parentNode.querySelector('span').innerHTML=qte;
        prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML;
        total= prix*qte;
        this.parentNode.parentNode.querySelector('.prix').innerHTML=total;

        id = this.parentNode.parentNode.id;
        index = montab.findIndex(element => element.id ==id);
        montab[index].quantite	= parseInt(montab[index].quantite) +1;
        document.cookie = "panier="+JSON.stringify(montab)+"; path=/";
        document.getElementById('liste').value="panier="+JSON.stringify(montab)+"; path=/";
        console.log(montab)
        totalgeneral += 1*prix
        document.querySelector('#total').innerHTML=totalgeneral
    })
}


document.querySelectorAll('.moins').forEach(clickmoins)
function clickmoins(tag){
    tag.addEventListener('click',function() {
        qte=this.parentNode.querySelector('span').innerHTML;
        if (qte>0){qte--};
        this.parentNode.querySelector('span').innerHTML=qte;
        prix=this.parentNode.parentNode.querySelector('.unitaire').innerHTML;
        total= prix*qte;
        this.parentNode.parentNode.querySelector('.prix').innerHTML=total;

        id = this.parentNode.parentNode.id;
        index = montab.findIndex(element => element.id ==id);
        montab[index].quantite	= parseInt(montab[index].quantite) -1;
        document.cookie = "panier="+JSON.stringify(montab)+"; path=/";
        document.getElementById('liste').value="panier="+JSON.stringify(montab)+"; path=/";
        console.log(montab)
        totalgeneral -= parsInt(prix)
        document.querySelector('#total').innerHTML=totalgeneral
    })
}

function recupCookie(nom){

    if(document.cookie.length == 0)return "";

    var cookies = document.cookie.split("; "); //separe chaque parametre contenu dans le cookie
    cookies.forEach(element => {
        ligne=element.split("=");
        if(ligne[0]===nom) sortie =ligne[1]
        else sortie="";
    })
    return sortie
}