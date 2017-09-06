function newsObj()
{
    //Attributes declaration
    this.id;
    this.seccio;
    this.titol;
    this.subtitol;
    this.descripcio;
    this.noticia;
    this.img_slider;
    this.img_noticia;
    this.data_creacio;
    this.data_noticia;
    this.actiu;
    this.usuari;


 
    //methods declaration
    this.construct = function (id, seccio, titol, subtitol, descripcio, noticia, img_slider, img_noticia, data_creacio, data_noticia, actiu, usuari)
    {
        this.setId(id);
        this.setSeccio(seccio);
        this.setTitol(titol);
        this.setSubtitol(subtitol);
        this.setDescripcio(descripcio);
        this.setNoticia(noticia);
        this.setImgSlider(img_slider);
        this.setImgNoticia(img_noticia);
        this.setDataCreacio(data_creacio);
        this.setDataNoticia(data_noticia);
        this.setActiu(actiu);
        this.setUsuari(usuari);	
        
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setSeccio = function (seccio) {this.seccio=seccio;}
    this.setTitol = function (titol) {this.titol=titol;}
    this.setSubtitol = function (subtitol) {this.subtitol=subtitol;}
    this.setDescripcio = function (descripcio) {this.descripcio=descripcio;}
    this.setNoticia = function (noticia) {this.noticia=noticia;}
    this.setImgSlider = function (img_slider) {this.img_slider=img_slider;}
    this.setImgNoticia = function (img_noticia) {this.img_noticia=img_noticia;}
    this.setDataCreacio = function (data_creacio) {this.data_creacio=data_creacio;}
    this.setDataNoticia = function (data_noticia) {this.data_noticia=data_noticia;}
    this.setActiu = function (actiu) {this.actiu=actiu;}
    this.setUsuari = function (usuari) {this.usuari=usuari;}
    
        
    //getters
    this.getId = function () {return this.id;}
    this.getSeccio = function () {return this.seccio;}
    this.getTitol = function () {return this.titol;}
    this.getSubtitol = function () {return this.subtitol;}
    this.getDescripcio = function () {return this.descripcio;}
    this.getNoticia = function () {return this.noticia;}
    this.getImgSlider = function () {return this.img_slider;}
    this.getImgNoticia = function () {return this.img_noticia;}
    this.getDataCreacio = function () {return this.data_creacio;}
    this.getDataNoticia = function () {return this.data_noticia;}
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
	var newsString ="id="+this.getId()+" seccio="+this.getSeccio()+" titol="+this.getTitol()+" subtitol="+this.getSubtitol()+" descripcio="+this.getDescripcio()+" noticia="+this.getNoticia()+" data_creacio="+this.getDataCreacio()+" data_noticia="+this.getDataCreacio()+" actiu="+this.getActiu()+" usuari="+this.getUsuari();
	
	return newsString;		
    }
    
}
