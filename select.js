fetch('../server/group_by_kiado.php')
.then(response => response.json())
.then(data => renderkiado(data))

function renderkiado(data){
    console.log(data)
    let select = '<option value="0">Válasszon ki egy kiadót</option>'
    for(let obj of data)
        select += `<option value="${obj.kod}">${obj.nev}</option>`
        document.getElementById('kiadoselect').innerHTML = select
}  
document.getElementById('kiadoselect').addEventListener('change',myFilter)
  function myFilter(e){
        
            fetch(`../server/readkiado.php?id=${e.target.value}`)
            .then(response => response.json())
            .then(data => render(data))
    }
fetch('../server/readkiado.php')
    .then(response => response.json())
    .then(data => render(data))

    function render(data){
        console.log(data)
        let tblStr = ''
        for(let obj of data)
            tblStr += `<tr><td>${obj.cim}</td><td class="text-center">${obj.ev}</td><td class="text-center">${obj.oldal}</td><td class="text-center">${obj.tema}</td></tr>`
            document.querySelector('tbody').innerHTML = tblStr
    } 