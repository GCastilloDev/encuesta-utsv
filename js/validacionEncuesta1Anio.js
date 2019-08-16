

	function seleccionarTipoUniversidad(){
        //GENERAL, VALIDACION DE UNIVERIDAD EN EL EXTRANGERO
        /* Para obtener el valor */
        var value = document.getElementById("tipoUniversidad").value;
        

        if (value == 8) {
        	$("#txtNombreUniversidad").show();
        }else{
        	$("#txtNombreUniversidad").hide();
        	$("#txtNombreUniversidad").val('N/D');
        }  
    }    

    function seleccionarPregunta7(){
        //GENERAL, VALIDACION DE UNIVERIDAD EN EL EXTRANGERO
        /* Para obtener el valor */
        var value = document.getElementById("8").value;
        
       // if (value !7)	{
        //	$("#9").hide();
        //}
        if (value == 7) {
        	$("#9").show();

        }else{
        	$("#9").hide();
        	$("#9").val('N/D');
        }  

        if (value == 7) {
        	$('#nt').hide();
        }else{
        	$('#nt').show();
        }
    }    

    //CONTACTO, TELEFONO FIJO
	    //validar 10 digtos de telefono fijo delimitando
	    var input=  document.getElementById('fijo');
	    input.addEventListener('input',function(){
	      if (this.value.length > 10) {
	         this.value = this.value.slice(0,10); 
	      }
	    });

	    var movil = document.getElementById('movil');
	    movil.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var recados = document.getElementById('recados');
	    recados.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var familiar1 = document.getElementById('familiar1');
	    familiar1.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var familiar2 = document.getElementById('familiar2');
	    familiar2.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var laboral1 = document.getElementById('laboral1');
	    laboral1.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var laboral2 = document.getElementById('laboral2');
	    laboral2.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var escolar1 = document.getElementById('escolar1');
	    escolar1.addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });

	    var escolar2  = document.getElementById('escolar2 ');
	    escolar2 .addEventListener('input', function(){
	    	if (this.value.length > 10) {
	    		this.value = this.value.slice(0,10);
	    	}
	    });
	    
    

    //$("#danger1").hide();
    function validacionTelefonos(tipo, btn){
    	

    	var input = document.getElementById(tipo);
    	var tamanio = input.value.length;
    	if (tamanio < 10) {
    		
    		//bloquear botones7
    		new Noty({
    			theme: 'metroui',
			    type: 'warning',
			    layout: 'topCenter',
			    timeout: 10000,
			    text: 'Hacen falta digitos en su teléfono "'+ tipo +'", deben ser 10 digitos por lo tanto no podras continuar hasta que corrijas el número telefónico'
			}).show();
			$( btn ).prop( "disabled", true );

			alert('Hacen falta digitos en su teléfono "'+ tipo +'", deben ser 10 digitos por lo tanto no podras continuar hasta que corrijas el número telefónico')

    	}else if (tamanio > 10) {
    		
    		//bloquear botones7
    		new Noty({
    			theme: 'metroui',
			    type: 'warning',
			    layout: 'topCenter',
			    timeout: 10000,
			    text: 'En Su telefono: "'+ tipo +'", deben ser 10 digitos por lo tanto no podras continuar hasta que corrijas el número telefónico'
			}).show();
			$( btn ).prop( "disabled", true );
    	}else{
    		new Noty({
    			theme: 'metroui',
			    type: 'success',
			    layout: 'topCenter',
			    timeout: 5000,
			    text: 'Puedes continuar'
			}).show();
    		 $( btn ).prop( "disabled", false );
    	}
    }