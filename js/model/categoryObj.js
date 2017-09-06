function categoryObj()
{
    //Attributes declaration
    this.id;
    this.ca_nom;
    this.es_nom;
   
 
    //methods declaration
    this.construct = function (id, ca_nom, es_nom)
    {
        this.setId(id);
        this.setCaNom(ca_nom);
        this.setEsNom(es_nom);
       
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setCaNom = function (ca_nom) {this.ca_nom=ca_nom;}
    this.setEsNom = function (es_nom) {this.es_nom=es_nom;}
  
            
    //getters
    this.getId = function () {return this.id;}
    this.getCaNom = function () {return this.ca_nom;}
    this.getEsNom = function () {return this.es_nom;}
  
        
    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
	var categoryString ="id="+this.getId()+" ca_nom="+this.getCaNom()+" es_nom="+this.getEsNom();
	
	return categoryString;		
    }
    
}
