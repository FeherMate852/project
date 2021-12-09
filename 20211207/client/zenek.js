fetch('../server/readZenek.php')
    .then(response=>response.json())
    .then(data=>renderZenek(data))

    function renderZenek(data){
        console.log(data)
        let str=''
        for(let obj of data)
            str+=`<tr><td>${obj.id}</td><td>${obj.cim}</td><td>${obj.ev}</td><td>${obj.kategoria_id}</td></tr>`
        
        document.querySelector('tbody').innerHTML=str
    }