$( document ).ready(function() {
    $( "#cant1" ).change(function() {
		c1= $("#cant1").val();
		u1= $("#valu1").val();
        t1= (parseInt(c1)*parseInt(u1));
		if(isNaN(t1)){
		   $("#valt1").val(0);
		}else{
		   $("#valt1").val(t1);
		}
		c2= $("#cant2").val();
		u2= $("#valu2").val();
        t2= (parseInt(c2)*parseInt(u2));
		if(isNaN(t2)){
		   $("#valt2").val(0);
		}else{
		   $("#valt2").val(t2);
		}        
		c3= $("#cant3").val();
		u3= $("#valu3").val();
        t3= (parseInt(c3)*parseInt(u3));
		if(isNaN(t3)){
		   $("#valt3").val(0);
		}else{
		   $("#valt3").val(t3);
		}        
		c4= $("#cant4").val();
		u4= $("#valu4").val();
        t4= (parseInt(c4)*parseInt(u4));
        $("#valt4").val(t4);
		if(isNaN(t4)){
		   $("#valt4").val(0);
		}else{
		   $("#valt4").val(t4);
		}        
        tt1=$("#valt1").val();
        tt2=$("#valt2").val();
        tt3=$("#valt3").val();
        tt4=$("#valt4").val();

		tot=parseInt(tt1)+parseInt(tt2)+parseInt(tt3)+parseInt(tt4);
		$("#totalx").html(tot);
		
    });  
    $( "#cant2" ).change(function() {
		c1= $("#cant1").val();
		u1= $("#valu1").val();
        t1= (parseInt(c1)*parseInt(u1));
		if(isNaN(t1)){
		   $("#valt1").val(0);
		}else{
		   $("#valt1").val(t1);
		}
		c2= $("#cant2").val();
		u2= $("#valu2").val();
        t2= (parseInt(c2)*parseInt(u2));
		if(isNaN(t2)){
		   $("#valt2").val(0);
		}else{
		   $("#valt2").val(t2);
		}        
		c3= $("#cant3").val();
		u3= $("#valu3").val();
        t3= (parseInt(c3)*parseInt(u3));
		if(isNaN(t3)){
		   $("#valt3").val(0);
		}else{
		   $("#valt3").val(t3);
		}        
		c4= $("#cant4").val();
		u4= $("#valu4").val();
        t4= (parseInt(c4)*parseInt(u4));
        $("#valt4").val(t4);
		if(isNaN(t4)){
		   $("#valt4").val(0);
		}else{
		   $("#valt4").val(t4);
		}        
        tt1=$("#valt1").val();
        tt2=$("#valt2").val();
        tt3=$("#valt3").val();
        tt4=$("#valt4").val();
		tot=parseInt(tt1)+parseInt(tt2)+parseInt(tt3)+parseInt(tt4);
		$("#totalx").html(tot);

    });  
    $( "#cant3" ).change(function() {
		c1= $("#cant1").val();
		u1= $("#valu1").val();
        t1= (parseInt(c1)*parseInt(u1));
		if(isNaN(t1)){
		   $("#valt1").val(0);
		}else{
		   $("#valt1").val(t1);
		}
		c2= $("#cant2").val();
		u2= $("#valu2").val();
        t2= (parseInt(c2)*parseInt(u2));
		if(isNaN(t2)){
		   $("#valt2").val(0);
		}else{
		   $("#valt2").val(t2);
		}        
		c3= $("#cant3").val();
		u3= $("#valu3").val();
        t3= (parseInt(c3)*parseInt(u3));
		if(isNaN(t3)){
		   $("#valt3").val(0);
		}else{
		   $("#valt3").val(t3);
		}        
		c4= $("#cant4").val();
		u4= $("#valu4").val();
        t4= (parseInt(c4)*parseInt(u4));
        $("#valt4").val(t4);
		if(isNaN(t4)){
		   $("#valt4").val(0);
		}else{
		   $("#valt4").val(t4);
		}        
        tt1=$("#valt1").val();
        tt2=$("#valt2").val();
        tt3=$("#valt3").val();
        tt4=$("#valt4").val();
		tot=parseInt(tt1)+parseInt(tt2)+parseInt(tt3)+parseInt(tt4);
		$("#totalx").html(tot);

    });  
    $( "#cant4" ).change(function() {
		c1= $("#cant1").val();
		u1= $("#valu1").val();
        t1= (parseInt(c1)*parseInt(u1));
		if(isNaN(t1)){
		   $("#valt1").val(0);
		}else{
		   $("#valt1").val(t1);
		}
		c2= $("#cant2").val();
		u2= $("#valu2").val();
        t2= (parseInt(c2)*parseInt(u2));
		if(isNaN(t2)){
		   $("#valt2").val(0);
		}else{
		   $("#valt2").val(t2);
		}        
		c3= $("#cant3").val();
		u3= $("#valu3").val();
        t3= (parseInt(c3)*parseInt(u3));
		if(isNaN(t3)){
		   $("#valt3").val(0);
		}else{
		   $("#valt3").val(t3);
		}        
		c4= $("#cant4").val();
		u4= $("#valu4").val();
        t4= (parseInt(c4)*parseInt(u4));
        $("#valt4").val(t4);
		if(isNaN(t4)){
		   $("#valt4").val(0);
		}else{
		   $("#valt4").val(t4);
		}        
        tt1=$("#valt1").val();
        tt2=$("#valt2").val();
        tt3=$("#valt3").val();
        tt4=$("#valt4").val();
		tot=parseInt(tt1)+parseInt(tt2)+parseInt(tt3)+parseInt(tt4);
		$("#totalx").html(tot);

    });      

    $( "#select_pro1" ).change(function() {
        var str = "";
        str= $("#select_pro1 option:selected" ).text();
        str2= $("#select_pro1 option:selected" ).val();
	    var parametrosconsu = {
		    "textnompro" : str};        
    	$.ajax({
    		data:  parametrosconsu,
    		url:   'ajax_buscarproducto',
    		type:  'post',
    		dataType: 'html',
    		success: function (response) {
    	        datos=JSON.parse(response);
    			$('#' + str2).val(datos[0].pro_precio);
    			str4 = $("#cant1").val();
    			if(str4.length>0){
    			    subt=parseInt(str4)*datos[0].pro_precio;
    			    $('#valt1').val(subt);
    			}else{
    			    $("#valt1").val("0");
    			}
    			t1= $("#valt1").val();
    			t2= $("#valt2").val();
    			t3= $("#valt3").val();
    			t4= $("#valt4").val();
    			tot=parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4);
    			$("#totalx").html(tot);
    		}
    	});	
    });
    $( "#select_pro2" ).change(function() {
        var str = "";
        str= $("#select_pro2 option:selected" ).text();
        str2= $("#select_pro2 option:selected" ).val();
	    var parametrosconsu = {
		    "textnompro" : str};        
    	$.ajax({
    		data:  parametrosconsu,
    		url:   'ajax_buscarproducto',
    		type:  'post',
    		dataType: 'html',
    		success: function (response) {
    	        datos=JSON.parse(response);
    			$('#' + str2).val(datos[0].pro_precio);
			    str3=str2.replace('valu','cant');
    			str4 = $("#"+str3).val();
    			if(str4.length>0){
    			    subt=parseInt(str4)*datos[0].pro_precio;
    			    str5=str2.replace('valu','valt');
    			    $('#' + str5).val(subt);
    			}else{
    			    
    			}
    			t1= $("#valt1").val();
    			t2= $("#valt2").val();
    			t3= $("#valt3").val();
    			t4= $("#valt4").val();
    			tot=parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4);
    			$("#totalx").html(tot);
    		}
    	});	
    });    
    $( "#select_pro3" ).change(function() {
        var str = "";
        str= $("#select_pro3 option:selected" ).text();
        str2= $("#select_pro3 option:selected" ).val();
	    var parametrosconsu = {
		    "textnompro" : str};        
    	$.ajax({
    		data:  parametrosconsu,
    		url:   'ajax_buscarproducto',
    		type:  'post',
    		dataType: 'html',
    		success: function (response) {
    	        datos=JSON.parse(response);
    			$('#' + str2).val(datos[0].pro_precio);
			    str3=str2.replace('valu','cant');
    			str4 = $("#"+str3).val();
    			if(str4.length>0){
    			    subt=parseInt(str4)*datos[0].pro_precio;
    			    str5=str2.replace('valu','valt');
    			    $('#' + str5).val(subt);
    			}else{
    			    
    			}
    			t1= $("#valt1").val();
    			t2= $("#valt2").val();
    			t3= $("#valt3").val();
    			t4= $("#valt4").val();
    			tot=parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4);
    			$("#totalx").html(tot);
    		}
    	});	
    });
    $( "#select_pro4" ).change(function() {
        var str = "";
        str= $("#select_pro4 option:selected" ).text();
        str2= $("#select_pro4 option:selected" ).val();
	    var parametrosconsu = {
		    "textnompro" : str};        
    	$.ajax({
    		data:  parametrosconsu,
    		url:   'ajax_buscarproducto',
    		type:  'post',
    		dataType: 'html',
    		success: function (response) {
    	        datos=JSON.parse(response);
    			$('#' + str2).val(datos[0].pro_precio);
			    str3=str2.replace('valu','cant');
    			str4 = $("#"+str3).val();
    			if(str4.length>0){
    			    subt=parseInt(str4)*datos[0].pro_precio;
    			    str5=str2.replace('valu','valt');
    			    $('#' + str5).val(subt);
    			}else{
    			    
    			}
    			t1= $("#valt1").val();
    			t2= $("#valt2").val();
    			t3= $("#valt3").val();
    			t4= $("#valt4").val();
    			tot=parseInt(t1)+parseInt(t2)+parseInt(t3)+parseInt(t4);
    			$("#totalx").html(tot);
    		}
    	});	
    });    
});
function crearpedido(){
	var xnumeropedido = getRandomInt(100000,999999);
	ca1=$('#cant1').val();
	ca2=$('#cant2').val();
	ca3=$('#cant3').val();
	ca4=$('#cant4').val();
	pr1=$('#select_pro1').find(":selected").text();
	pr2=$('#select_pro2').find(":selected").text();
	pr3=$('#select_pro3').find(":selected").text();
	pr4=$('#select_pro4').find(":selected").text();
	va1=$('#valu1').val();
	va2=$('#valu2').val();
	va3=$('#valu3').val();
	va4=$('#valu4').val();
	vt1=$('#valt1').val();
	vt2=$('#valt2').val();
	vt3=$('#valt3').val();
	vt4=$('#valt4').val();	
	nom=$('#inputnombre').val();
	dir=$('#inputdireccion').val();	
	tel=$('#inputtelefono').val();	
	ced=$('#inputcedula').val();	
	
	
	var parametrosconsu = {
		"numeropedido" : xnumeropedido,
		"ca1":ca1,
		"ca2":ca2,		
		"ca3":ca3,
		"ca4":ca4,
		"pr1":pr1,			
		"pr2":pr2,			
		"pr3":pr3,			
		"pr4":pr4,
		"va1":va1,		
		"va2":va2,		
		"va3":va3,		
		"va4":va4,				
		"vt1":vt1,		
		"vt2":vt2,		
		"vt3":vt3,		
		"vt4":vt4,
		"nom":nom,
		"dir":dir,
		"tel":tel,
		"ced":ced
	};

	$('#rinterna5').hide();
	$('#dinterna4').hide();
	$('#resultado').html("<br><br><div class='alert alert-success' style='font-size:30px;font-weight: bold;' role='alert'>SU NUMERO DE PEDIDO PARA SEGUIMIENTO ES : &nbsp;&nbsp;&nbsp;"+xnumeropedido+"</div><br><br>");		
	$.ajax({
		data:  parametrosconsu,
		url:   'ajax_crearpedido',
		type:  'post',
		dataType: 'html',
		success: function (response) {
			datos=JSON.parse(response);
		}
	});		
}

function buscarpedido(){
	textfa=$('#numerodelpedi').val();
	var parametros = {
		"numped" : textfa};
	$.ajax({
		data:  parametros,
		url:   'ajax_buscarpedido',
		type:  'post',
		dataType: 'html',
		success: function (response) {
			datos=JSON.parse(response);
			if(datos[0].ped_codigo=="falsofactura"){
				$('#dinterna6').hide();
				$('#resultado').html("<div class='alert alert-danger' style='font-size:20px;font-weight: bold;' role='alert'>Pedido No Encontrado!</div>");
			}else{
				$('#dinterna6').hide();
				$('#resultado').html("<br><br><div class='alert alert-success' style='font-size:30px;font-weight: bold;' role='alert'>ESTADO DEL PEDIDO : &nbsp;&nbsp;&nbsp;"+datos[0].ped_estado+"</div><br><br><div class='alert alert-success' style='font-size:20px;' role='alert'># de Pedido : "+datos[0].ped_codigo+"<br><br>"+"CLIENTE :  "+datos[0].ped_clinom+"<br>DIRECCION : "+datos[0].ped_clidir+"<br>TELEFONO : "+datos[0].ped_clicel+"<br>CEDULA : "+datos[0].ped_cliced+"<br><br><input type='button' class='btn btn-success' onclick='actualizaCliente("+datos[0].ped_codigo+")' value='Actualizar Datos del Cliente'>&nbsp;&nbsp;<input type='button' class='btn btn-warning' onclick='cancelarPedido("+datos[0].ped_codigo+")' value='Cancelar Pedido'>"+"</div>");
				$('#inputdireccion').val(datos[0].ped_clidir);
				$('#inputtelefono').val(datos[0].ped_clicel);
				$('#inputhidepedido').val(datos[0].ped_codigo);
			}
		}
	});	
}
function actualizadatos(){
	    vlcod= $('#inputhidepedido').val();
		vldir= $('#inputdireccion').val();
		vltel= $('#inputtelefono').val();
		
		var parametros = {
			"numped" : vlcod,"numdir" : vldir,"numtel" : vltel};
		$.ajax({
			data:  parametros,
			url:   'ajax_actualdataclie',
			type:  'post',
			dataType: 'html',
			success: function (response) {
				datos=JSON.parse(response);
				if(datos[0].actual=="true"){
					$('#xinterna7').hide();
					$('#resultado2').html("<div class='alert alert-success' style='font-size:20px;font-weight: bold;' role='alert'>DATOS ACTUALIZADOS CON EXITO!!</div>");					
				}else{
					alert("error al actualizar datos");
				}
			}
		});	
}
function actualizaCliente(codipe) {
	$('#resultado').hide();
	$('#xinterna7').show();
}
function cancelarPedido(codipe) {
	var r = confirm("Pulse OK si esta seguro de Eliminar el Pedido #"+codipe);
	x=$('#resultado').html();;
	y=x.indexOf('ALISTAMIENTO');
	if(y==-1){
		alert("No es Posible Cancelar el Pedido!! , por que se encuentra en proceso de Envio.");
		return;
	}
	if (r == true) {
		var parametros = {
			"numped" : codipe};
		$.ajax({
			data:  parametros,
			url:   'ajax_cancelarpedido',
			type:  'post',
			dataType: 'html',
			success: function (response) {
				datos=JSON.parse(response);
				if(datos[0].eliminacion=="true"){
					$('#dinterna6').hide();
					$('#resultado').html("<div class='alert alert-danger' style='font-size:20px;font-weight: bold;' role='alert'>Pedido CANCELADO con exito!!</div>");					
				}else{
					alert("error al eliminar pedido");
				}
			}
		});				
	}
}
function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min) + min); //The maximum is exclusive and the minimum is inclusive
}
