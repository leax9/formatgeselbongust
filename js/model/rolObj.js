function rolObj()
{
    //Attributes declaration
    this.id;
    this.rol;
 
    //methods declaration
    this.construct = function (id, rol)
    {
        this.setId(id);
        this.setRol(rol);	
       
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setRol = function (rol) {this.rol=rol;}
            
    //getters
    this.getId = function () {return this.id;}
    this.getRol = function () {return this.rol;}
        
    /*
    * @name: toString()
    * @author: Sales Fabregat Alejandro
    * @version: 3.1
    * @description: convert object to string
    * @date: 17/03/2016
   */
    this.toString = function ()
    {
	var rolString ="id="+this.getId()+" rol="+this.getRol();
	
	return rolString;		
    }
    
}
