<style>
    table{
        max-width: 500px;
    }
</style>
    
    <div class="row justify-content-center">
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <th>ID</th>
            <th>Cím</th>
            <th>Év</th>
            <th>KategóriaID</th>
            <th>Leírás</th>
            <th>&nbsp;</th>
        </thead>
        <tbody></tbody>

    </table>

</div>
<script>
fetch('../server/readZenek.php')
    .then(response=>response.json())
    .then(data=>renderZenek(data))

    function renderZenek(data){
        console.log(data)
        let tblString=''
        for(let obj of data)
            tblString+=`<tr><td>${obj.id}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kategoria_id}</td><td class="border border-danger" contenteditable>${obj.leiras}</td>
                  <td class="btn btn-success" id="${obj.id}" onclick="update(this)">Modositas</td></tr>`
        
        document.querySelector('tbody').innerHTML=tblString
    }

    function update(obj){
        console.log(obj.id)
        let id = obj.id
        let leiras = obj.previousElementSibling.textContent
        console.log(leiras)
        fetch(`../server/updateZenek.php?id=${id}&leiras=${leiras}`)
            .then(response=>response.text())
            .then(data=>console.log(data))
            
    }
    
</script>
