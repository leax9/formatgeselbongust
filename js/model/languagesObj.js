function languagesObj()
{
    //Attributes declaration
    this.id;
    this.idioma;
    this.ref;
 
    //methods declaration
    this.construct = function (id, seccio,ref)
    {
        this.setId(id);
        this.setIdioma(seccio);
        this.setRef(ref);	
       
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setIdioma = function (idioma) {this.idioma=idioma;}
    this.setRef = function (ref) {this.ref=ref;}
            
    //getters
    this.getId = function () {return this.id;}
    this.getIdioma = function () {return this.idioma;}
    this.getRef = function () {return this.ref;}
        
    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
	var languagesString ="id="+this.getId()+" idioma="+this.getIdioma()+" ref="+this.getRef();
	
	return languagesString;		
    }
    
}
