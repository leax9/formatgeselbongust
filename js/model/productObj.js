function productObj()
{
    //Attributes declaration
    //id, codi, categoria, subcategoria, nom, descripcio, imatge, informacio, preu, actiu, data_creacio, usuari
    this.id;
    this.codi;
    this.categoria;
    this.subcategoria;
    this.nom;
    this.info;
    this.imatge;
    this.descripcio;
    this.preu;
    this.tipus;
    this.actiu;
    this.data_creacio;
    this.usuari;

    //methods declaration
    this.construct = function (id, codi, categoria, subcategoria, nom, info, imatge, descripcio, preu, tipus, actiu, data_creacio, usuari)
    {
        this.setId(id);
        this.setCodi(codi);
        this.setCategoria(categoria);
        this.setSubcategoria(subcategoria);
        this.setNom(nom);
        this.setInfo(info);
        this.setImatge(imatge);
        this.setDescripcio(descripcio);
        this.setPreu(preu);
        this.setTipus(tipus);
        this.setActiu(actiu);
        this.setDataCreacio(data_creacio);
        this.setUsuari(usuari);
    }

    //setters
    this.setId = function (id) {this.id=id;}
    this.setCodi = function (codi) {this.codi=codi;}
    this.setCategoria = function (categoria) {this.categoria=categoria;}
    this.setSubcategoria = function (subcategoria) {this.subcategoria=subcategoria;}
    this.setNom = function (nom) {this.nom=nom;}
    this.setInfo = function (info) {this.info=info;}
    this.setImatge = function (imatge) {this.imatge=imatge;}
    this.setDescripcio = function (descripcio) {this.descripcio=descripcio;}
    this.setPreu = function (preu) {this.preu=preu;}
    this.setTipus = function (tipus) {this.tipus=tipus;}
    this.setActiu = function (actiu) {this.actiu=actiu;}
    this.setDataCreacio = function (data_creacio) {this.data_creacio=data_creacio;}
    this.setUsuari = function (usuari) {this.usuari=usuari;}


    //getters
    this.getId = function () {return this.id;}
    this.getCodi = function () {return this.codi;}
    this.getCategoria = function () {return this.categoria;}
    this.getSubcategoria = function () {return this.subcategoria;}
    this.getNom = function () {return this.nom;}
    this.getInfo = function () {return this.info;}
    this.getImatge = function () {return this.imatge;}
    this.getDescripcio = function () {return this.descripcio;}
    this.getPreu = function () {return this.preu;}
    this.getTipus = function () {return this.tipus;}
    this.getActiu = function () {return this.actiu;}
    this.getDataCreacio = function () {return this.data_creacio;}
    this.getUsuari = function () {return this.usuari;}



    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
	var newsString ="id="+this.getId()+" codi="+this.getCodi()+" categoria="+this.getCategoria()+" subcategoria="+this.getSubcategoria()+" nom="+this.getNom()+" info="+this.getInfo()+" imatge="+this.getImatge()+" descripcio="+this.getDescripcio()+" preu="+this.getPreu()+" tipus="+this.getTipus()+" actiu="+this.getActiu()+" data_creacio="+this.getDataCreacio()+" usuari="+this.getUsuari();

	return newsString;
    }

}
