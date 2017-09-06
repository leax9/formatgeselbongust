function seccioObj()
{
    //Attributes declaration
    this.id;
    this.seccio;
 
    //methods declaration
    this.construct = function (id, seccio)
    {
        this.setId(id);
        this.setSeccio(seccio);	
       
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setSeccio = function (seccio) {this.seccio=seccio;}
            
    //getters
    this.getId = function () {return this.id;}
    this.getSeccio = function () {return this.seccio;}
        
    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
	var seccioString ="id="+this.getId()+" seccio="+this.getSeccio();
	
	return seccioString;		
    }
    
}
