$(function(){
    const ajaxhivas = new MyAjax();
    const bejegyzesek = [];
    const szuloModell = $('#tevekenyseg_lista');
    const sablonModell = $('#sablon_tevekenyseg');
    let apivegpont = "/api/";

    ajaxhivas.getAdat(apivegpont+"bejegyzesek", bejegyzesek, bejegyzesFeltolt);

    function bejegyzesFeltolt(){
        bejegyzesek.forEach(function(elem){
            let node = sablonModell.clone().appendTo(szuloModell);
            const obj = new Bejegyzes(node, elem);
        });
        sablonModell.remove();
    }
});