<form class="form-inline">
    <input type="text" name="" id="kategoria" class="form-control" placeholder="Írd be az új kategória nevét!">
    <input class="btn btn-primary" type="button" onclick="uj()" value="mentés">
</form>
<div class="msg"></div>

<script>
    function uj(){
        document.querySelector('.msg').innerHTML="";
        
        let ujnev=document.getElementById("kategoria").value;
        console.log(ujnev);
        if(ujnev.length>0){
            fetch(`../server/insertKategoria.php?nev=${ujnev}`)
                .then(response=>response.text())
                .then(data=>document.querySelector('.msg').innerHTML=data ? "sikeres adatbeírás!" : "Hiba!")
        }
    }
</script>