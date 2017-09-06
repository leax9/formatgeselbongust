function companyObj()
{
    //$id, $titol, $descripcio, $imatge, $data_creacio, $actiu, $usuari
    //Attributes declaration
    this.id;
    this.ca_titol;
    this.es_titol;
    this.ca_descripcio;
    this.es_descripcio;
    this.imatge;
    this.data_creacio;
    this.actiu;
    this.usuari;
 
    //methods declaration
    this.construct = function (id, ca_titol, es_titol, ca_descripcio, es_descripcio, imatge, data_creacio, actiu, usuari)
    {
        this.setId(id);
        this.setCaTitol(ca_titol);
        this.setEsTitol(es_titol);	
        this.setCaDescripcio(ca_descripcio);
        this.setEsDescripcio(es_descripcio);
        this.setImatge(imatge);
        this.setDataCreacio(data_creacio);
        this.setActiu(actiu);
        this.setUsuari(usuari);
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setCaTitol = function (ca_titol) {this.ca_titol=ca_titol;}
    this.setEsTitol = function (es_titol) {this.es_titol=es_titol;}
    this.setCaDescripcio = function (ca_descripcio) {this.ca_descripcio=ca_descripcio;}
    this.setEsDescripcio = function (es_descripcio) {this.es_descripcio=es_descripcio;}
    this.setImatge = function (imatge) {this.imatge=imatge;}
    this.setDataCreacio = function (data_creacio) {this.data_creacio=data_creacio;}
    this.setActiu = function (actiu) {this.actiu=actiu;}
    this.setUsuari = function (usuari) {this.usuari=usuari;}
    
    //getters
    this.getId = function () {return this.id;}
    this.getCaTitol = function () {return this.ca_titol;}
    this.getEsTitol = function () {return this.es_titol;}
    this.getCaDescripcio = function () {return this.ca_descripcio;}
    this.getEsDescripcio = function () {return this.es_descripcio;}
    this.getImatge = function () {return this.imatge;}
    this.getDataCreacio = function () {return this.data_creacio;}
    this.getActiu = function () {return this.actiu;}
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
	var companyString ="id="+this.getId()+" ca_titol="+this.getCaTitol()+" es_titol="+this.getEsTitol()+" ca_descripcio="+this.getCaDescripcio()+" es_descripcio="+this.getEsDescripcio()+" imatge="+this.getImatge()+" data_creacio="+this.getDataCreacio()+" actiu="+this.getActiu()+" usuari="+this.getUsuari();
	
	return companyString;		
    }
    
}
