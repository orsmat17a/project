<body>
    <script src="ujkonyv.js"></script>
<h1 class="d-flex justify-content-center">Új könyv felvétele</h1>
<div class="err_side"></div>
<table class="table table-stripped bg-dark table-dark table-hover">
    <thead>
        <th>Cím</th>
        <th>Szerző</th>
        <th>Megjelenés ideje:</th>
        <th>Kiadó</th>
        <th>Oldal szám</th>
        <th>Könyv témája</th>
    </thead>
    <tbody id="lista">
    <tr>
    <td  class="bg-secondary border border-light border border-light" ><input type="text" id="cim" ></td>
    <td class="bg-secondary border border-light"  ><input type="text" id="szerzo" ></td>
    <td  class="bg-secondary border border-light"  ><input type="number" id="ido" ></td>
    <td class="bg-secondary border border-light" ><select name="kiadok" id="kiadoselect"></select></td>
    <td  class="bg-secondary border border-light" ><input type="number" id="oldalszam"></td>
    <td class="bg-secondary border border-light"  ><select name="temak" id="temaselect"></select></td>
    </tr>
    <tr>
        <td colspan="3"> Az adatok feltöltéséhez nyomd meg a Feltöltés gombot!</td>
        <td colspan="3" class="text-center border border-light"><input type="button" onclick="feltoltes();" value="Feltöltés" class="bg-success"></td>
    </tr>
    </tbody>
</table>
</body>