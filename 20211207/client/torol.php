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
            <th>Kategória</th>
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
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.id}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kategoria_id}</td>
                  <td class="btn btn-danger" id="${obj.id}" onclick="del(this)">Torles</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }

    function del(obj){
        fetch(`../server/delZenek.php?id=${obj.id}`)
            .then(response=>response.text())
            .then(data=>console.log(data))
            
    }
    
</script>
