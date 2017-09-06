function userObj()
{
    //Attributes declaration
    this.id;
    this.usuari;
    this.passwd;
    this.passwd_confirm;
    this.nom;
    this.cognoms;
    this.email;
    this.rol;


 
    //methods declaration
    this.construct = function (id, usuari, passwd, passwd_confirm, nom, cognoms, email, rol)
    {
        this.setId(id);
        this.setUsuari(usuari);	
        this.setPassword(passwd);
        this.setPasswordConf(passwd_confirm);
        this.setNom(nom);
        this.setCognoms(cognoms);
        this.setEmail(email);
        this.setRol(rol);
    }
    
    //setters
    this.setId = function (id) {this.id=id;}
    this.setUsuari = function (usuari) {this.usuari=usuari;}
    this.setPassword = function (passwd) {this.passwd=passwd;}
    this.setPasswordConf = function (passwd_confirm) {this.passwd_confirm=passwd_confirm;}
    this.setNom = function (nom) {this.nom=nom;}
    this.setCognoms = function (cognoms) {this.cognoms=cognoms;}
    this.setEmail = function (email) {this.email=email;}
    this.setRol = function (rol) {this.rol=rol;}
        
    //getters
    this.getId = function () {return this.id;}
    this.getUsuari = function () {return this.usuari;}
    this.getPassword = function () {return this.passwd;}
    this.getPasswordConf = function () {return this.passwd_confirm;}
    this.getNom = function () {return this.nom;}
    this.getCognoms = function () {return this.cognoms;}
    this.getEmail = function () {return this.email;}
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
	var userString ="id="+this.getId()+" usuari="+this.getUsuari()+" passwd="+this.getPassword()+" passwd_confirm="+this.getPasswordConf()+" nom="+this.getNom()+" cognoms="+this.getCognoms()+" email="+this.getEmail()+" rol="+this.getRol();
	
	return userString;		
    }
    
}
