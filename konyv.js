fetch('../server/readkonyvek.php')
    .then(response => response.json())
    .then(data => render(data))
  
    
function render(data){
    console.log(data)
    let tblStr = ''
    for(let obj of data) 
        tblStr += `<tr><td contenteditable >${obj.cim}</td><td class="bg-primary text-center " id='${obj.id}' onclick='updateitem(this)'>Mentés</td>    <td>${obj.szerzo}</td><td class=" text-center ">${obj.ev}</td><td class="bg-danger text-center " onclick='deleteitem(${obj.id})'>Törlés</td></tr>`
        document.querySelector('tbody').innerHTML = tblStr
} 
function deleteitem(id){
fetch('../server/delete.php?id='+id+'&table=konyvek')
    .then(response => response.text())
    .then(data => eredmeny(data))

}
function eredmeny(a){
    document.querySelector(".err_side").innerHTML=a
    setTimeout(function(){ location.reload(true); }, 2000);
} 
function updateitem(obj){
    let id=obj.id
      let cim=obj.previousElementSibling.textContent
    fetch('../server/update.php?id='+id+'&cim='+cim)
    .then(response => response.text())
    .then(data => eredmeny(data))
}
