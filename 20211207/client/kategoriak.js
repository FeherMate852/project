fetch('../server/readKategoriak.php')
    .then(response=>response.json())
    .then(data=>renderKategoriak(data))

    function renderKategoriak(data){
        console.log(data)
        let str=''
        for(let obj1 of data)
            str+=`<tr><td>${obj1.id}</td><td>${obj1.nev}</td></tr>`
        
        document.querySelector('#tableKategoriak').innerHTML=str
    }
