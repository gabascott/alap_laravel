class Bejegyzes{
    constructor(elem, adat){
        this.elem = elem;

        this.osztaly_id = this.elem.children('#osztaly');
        this.allapot = this.elem.children('#allapot');

        this.adat = adat;

        this.setAdat(this.adat);
    }

    setAdat(ertekek){
        this.osztaly_id.html(ertekek.osztaly_id);
        this.allapot.html(ertekek.allapot);
    }
}