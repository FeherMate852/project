fetch('../server/readKategoriak.php')
    .then(response=>response.json())
    .then(data=>renderKategoriak(data))

    function renderKategoriak(data){
        //console.log(data)
        let optn = '<option value="0">Válassz egy kategóriát</option>'
        for(let obj of data)
                optn+=`<option value="${obj.id}">${obj.nev}</option>`
        
        document.querySelector('select').innerHTML=optn

        document.querySelector('select').addEventListener('change',myFilter)

    }

    function myFilter(e){
        //console.log(e.target.value)
        fetch(`../server/readZenek.php?id=${e.target.value}`)
            .then(response=>response.json())
            .then(data=>renderTable(data))
    }

    function renderTable(data){
        //console.log(data)
        let str=''
        for(let obj1 of data)
            str+=`<tr><td>${obj1.id}</td><td>${obj1.cim}</td><td>${obj1.ev}</td><td>${obj1.kategoria_id}</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }