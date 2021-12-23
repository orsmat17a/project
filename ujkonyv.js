fetch('../server/group_by_kiado.php')
    .then(response => response.json())
    .then(data => render(data))

    function render(data){
        console.log(data)
        let select = '<option value="0">Válasszon ki egy kiadót</option>'
        for(let obj of data)
            select += `<option value="${obj.kod}">${obj.nev}</option>`
            document.getElementById('kiadoselect').innerHTML = select
}
fetch('../server/group_by_tema.php')
    .then(response => response.json())
    .then(data => rendertema(data))

    function rendertema(data){
        console.log(data)
        let select = '<option value="0">Válasszon ki egy témát</option>'
        for(let obj of data)
            select += `<option value="${obj.tema}">${obj.tema}</option>`
            document.getElementById('temaselect').innerHTML = select
}
function feltoltes(){
let cim=document.getElementById("cim").value
let szerzo=document.getElementById("szerzo").value
let oldal=document.getElementById("oldalszam").value
let ido=document.getElementById("ido").value
let kiadoarr= document.getElementById("kiadoselect").options
let kiadoindex= document.getElementById("kiadoselect").selectedIndex
let kivalasztottkiado= kiadoarr[kiadoindex].value
let temaarr= document.getElementById("temaselect").options
let temaindex= document.getElementById("temaselect").selectedIndex
let kivalasztotttema= temaarr[temaindex].value
console.log(kivalasztottkiado,kivalasztotttema)
fetch(`../server/insert.php?cim=${cim}&szerzo=${szerzo}&oldal=${oldal}&ido=${ido}&kiadoindex=${kivalasztottkiado}&tema=${kivalasztotttema}`)
.then((response) => response.text())
.then((data) => vissza(data));


}
function vissza(data){
    document.querySelector(".err_side").innerHTML=data;
}