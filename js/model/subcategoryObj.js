function subcategoryObj()
{
    //Attributes declaration
    this.id;
    this.ca_nom;
    this.es_nom;
    this.id_categoria;   
 
    //methods declaration
    this.construct = function (id, ca_nom, es_nom ,id_categoria)
    {
        this.setId(id);
        this.setCaNom(ca_nom);
        this.setEsNom(es_nom);
        this.setIdCategoria(id_categoria);	
       
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setCaNom = function (ca_nom) {this.ca_nom=ca_nom;}
    this.setEsNom = function (es_nom) {this.es_nom=es_nom;}
    this.setIdCategoria = function (id_categoria) {this.id_categoria=id_categoria;}
            
    //getters
    this.getId = function () {return this.id;}
    this.getCaNom = function () {return this.ca_nom;}
    this.getEsNom = function () {return this.es_nom;}
    this.getIdCategoria = function () {return this.id_categoria;}
        
    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
    	var subcategoryString ="id="+this.getId()+" ca_nom="+this.getCaNom()+" es_nom="+this.getEsNom()+" id_categoria="+this.getIdCategoria();
    	
    	return subcategoryString;
    }
    
}
