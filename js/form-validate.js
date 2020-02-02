$(document).ready(function(){
    getContador();
    
    $('#btnEnviar').on('click',function(){
            $('.jsColumn').children('div').removeClass('has-error');
            var empresa = $('#empresa').val();
            var nombre = $('#nombre').val();
            var telefono = $('#telefono').val();
            var correo = $('#correo').val();
            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
            var producto = $('#selectProducto option:selected').val();
            var estado = $('#selectEstado option:selected').val();
            var productoName = $('#selectProducto option:selected').attr('name');
            var estadoName = $('#selectEstado option:selected').attr('name');
            var comentarios = $('#comentarios').val();
            var error = 0;
            var ids = '';
            
            if(empresa == ''){
                error += 1;
                ids += '#empresa,';
            }
            if(nombre == ''){
                error += 1;
                ids += '#nombre,';
            }
            if(telefono == ''){
                error += 1;
                ids += '#telefono,';
            }
            if(!regex.test(correo.trim())){
                error += 1;
                ids += '#correo,';
            }
            if(producto == 0){
                error += 1;
                ids += '#selectProducto,';
            }
            if(estado == 0){
                error += 1;
                ids += '#selectEstado,';
            }
            if(comentarios == ''){
                error += 1;
                ids += '#comentarios,';
            }
            if(error == 0){
                $.post('mail_send.php',{
                    empresa:empresa,
                    nombre:nombre,
                    telefono:telefono,
                    correo:correo,
                    producto:producto,
                    productoName:productoName,
                    estado:estado,
                    estadoName:estadoName,
                    comentarios:comentarios
                },function(response){
                    if(response.success){
                        $('#mensajeCorrecto').slideDown(800).delay(2300).slideUp(500);
                        $('#formContacto')[0].reset();
                        getContador();
                    }else{
                        $('#mensajeError').slideDown(800).delay(2300).slideUp(500);
                    }
                },'json');
            }else{
                ids = ids .slice(0,-1);
                $(ids).closest('div').addClass('has-error');
                $('#mensajeError').slideDown(800).delay(2300).slideUp(500);
            }
    });
});

function getContador(){
    $.post('contador.php',{
    },function(response){
        var consecutivo = response.consecutivo;
        $('#contador').html(consecutivo);
    },'json');
}