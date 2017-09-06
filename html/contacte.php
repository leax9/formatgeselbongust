<?php
	require("../idiomes/ca.php");
?>

<div class="row" ng-init="posicionarTop()">
	<div class="col-md-12"> 
		
		<!--<div class="quisomdes titol text-center">
			<h1> <?php echo $title_item3; ?> </h1>
		</div>-->

		<div class="title-one-new text-center majus title-page">
			<h1> {{constant.onTrobarnos}} </h1>
		</div>

	</div>

	<div class="col-md-12"> 
		<div id="breadcrumb-general" class="btn-group btn-breadcrumb">
            <a href="#" class="btn item-breadcrumb"><i class="fa fa-home"></i></a>
            <a href="" class="btn item-breadcrumb"><div> {{constant.onTrobarnos}} </div></a>
	    </div>
	</div>

</div>

<div class="row container_page">
	<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1 text-center "> 
		<h3 class="text-center titol_seccio">
			{{constant.localitzacio}}
		</h3>

		<hr>

		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2992.4161245552104!2d2.173695415819228!3d41.40848477926226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2dae120bd6b%3A0xca2f54304846939e!2sEl+Bon+Gust!5e0!3m2!1sca!2ses!4v1469364437919" 
					width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
			</iframe>
		</div>
	</div>

	<div class="row"></div>


	<div class="col-lg-6 col-lg-offset-3 col-md-10 col-md-offset-1">
		
		

		<div>
			<article class="contact-email">
				{{constant.dubte}} <a class="email-empresa email-hv" href="mailto:<?php echo $email_empresa; ?>?Subject=Contacte" target="_top"> <?php echo $email_empresa; ?> </a>
			</article>
		</div>

		<!-- Start Formulari -->
		<!--
		<h3 class="text-center titol_seccio">
			<?php echo $title_div1; ?>
		</h3>

		<form class="contact-form" id="contact-form" name="contactForm" ng-submit="contactForm.$valid && bonGustMainCtrl.sendEmail()">
			
			  <div class="form-group">
				  <md-input-container class="md-block">
                      <label class="label_formContact margintop20"> <?php echo $camp1_form; ?> </label>
                      <input type="text"  id="contactNameAndSurnames" name="contactNameAndSurnames" ng-model="bonGustMainCtrl.contact.nom_cognoms" ng-pattern="/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u" required/>
                    
                      <div ng-messages="contactForm.contactNameAndSurnames.$error">
                      <div ng-message="required">Este campo es requerido.</div>
                      <div ng-message="pattern">El nombre y los apellidos no pueden contener valores numericos o carácteres especiales</div>
                    </div>
                  </md-input-container>
              </div>
				  
			  <div class="form-group">
				  <md-input-container class="md-block">
                      <label class="label_formContact margintop20"> <?php echo $camp2_form; ?> </label>
                      <input type="text"  id="contactEmail" name="contactEmail" ng-model="bonGustMainCtrl.contact.email" ng-pattern="/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/" required/>
                    
                      <div ng-messages="contactForm.contactEmail.$error">
                      		<div ng-message="required">Este campo es requerido.</div> 
                      		<div ng-message="pattern">El correo electrónico no está bien formatado, ejemplo: usuario@gmail.com.</div>
                      </div>

                  </md-input-container>
              </div>

			  <div class="form-group">
				  <md-input-container class="md-block">
                      <label class="label_formContact margintop20"> <?php echo $camp3_form; ?> </label> 
                      <input type="text"  id="contactPhone" name="contactPhone" ng-model="bonGustMainCtrl.contact.phone" ng-pattern="/\d{9}/" ng-minlength="9" ng-maxlength="9" required/>
                    
                      <div ng-messages="contactForm.contactPhone.$error">
                      <div ng-message="required">Este campo es requerido.</div>
                      <div ng-message="pattern">El numero de teléfono tiene que contener 9 dígitos.</div>
                      
                      </div>
                  </md-input-container>
              </div>

               <div class="form-group">
				  <md-input-container class="md-block">
                      <label class="label_formContact margintop20"> <?php echo $camp4_form; ?> </label> 
                      <textarea type="text"  md-maxlength="350" rows="5" md-select-on-focus="" id="contact.description" name="contactDescription" ng-model="bonGustMainCtrl.contact.description" required></textarea>
                    
                      <div ng-messages="contactForm.contactDescription.$error">
                      <div ng-message="required">Este campo es requerido.</div>
                      <div ng-message="md-maxlength">La descripción solo puede contener como máximo 350 carácteres.</div>
                      
                    </div>
                  </md-input-container>
              </div>			  

			  <hr>			  
			  <input class="input_formContact" type="submit" id="lname" name="lname" value="<?php echo $enviar_form; ?>" ng-disabled="contactForm.$invalid">

		</form>
		-->

		<div class="alert alert-success" id="msg_email_success">
			<a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Missatge enviat amb exit!</strong>
		</div>
	</div> 
	<!-- End Formulari -->

</div>