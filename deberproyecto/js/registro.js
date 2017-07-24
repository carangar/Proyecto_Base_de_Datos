$('#tipo_cuenta').on('change',function(){
	if(this.value == 'usuario'){
		$('#campos_empresa').css('display','none');
		$('#campos_usuario').css('display','block');
		$('#campos_proveedor').css('display','none');
	}
	if(this.value == 'proveedor'){
		$('#campos_empresa').css('display','none');
		$('#campos_usuario').css('display','none');
		$('#campos_proveedor').css('display','block');
	}
	if(this.value == 'empresa'){
		$('#campos_empresa').css('display','block');
		$('#campos_usuario').css('display','none');
		$('#campos_proveedor').css('display','none');
	}
});