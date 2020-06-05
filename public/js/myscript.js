$("#example1").DataTable({
    "autoWidth": false,
});

//Initialize Select2 Elements
$('.categoria').select2({
    theme: 'bootstrap4',
    tags: true
});

$('.subcategoria').select2({
    theme: 'bootstrap4',
    tags: true
});

$('.subcategoria1').select2({
    theme: 'bootstrap4',
    tags: true

});
$('.marca').select2({
    theme: 'bootstrap4',
    tags: true
});

$("#input-id").fileinput({
    'browseOnZoneClick': true,
    'theme': 'fas',
    browseClass: "btn btn-dark btn-block",
    showCaption: false,
    showRemove: false,
    showUpload: false,
    allowedFileTypes: ["image"],
    browseLabel: 'Selecione las imágenes',
    dragTitle: 'Mueva o seleccione',
    dropZoneTitle: 'Arrastre y suelte aquí los archivos &hellip;',
    dropZoneClickTitle: '<br>(o haga clic para seleccionar {files})',
    msgZoomModalHeading: 'Vista previa detallada',
    msgInvalidFileType: 'Tipo de archivo no válido para "{name}". Sólpermiten archivos de tipo "{types}".',
    msgInvalidFileExtension: 'Extensión de archivo no válida para "{name}". se permiten archivos "{extensions}".',
    previewZoomButtonTitles: {
        prev: 'Anterior',
        next: 'Siguiente',
        toggleheader: 'Mostrar encabezado',
        fullscreen: 'Pantalla completa',
        borderless: 'Modo sin bordes',
        close: 'Cerrar vista detallada'
    }
});

$(document).ready(function() {
    $('#categoria').on('change',function(e) {
        e.preventDefault();
        var marcas=$("#marca");
        var cod=$('#categoria').val();
        var url='/es/'+cod;
        if(cod!='') {
            $.ajax({
                type: 'GET',
                url: url,
                cache: false,
                data: cod,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function(r) {
                    marcas.empty();
                    marcas.append('<option value="">Seleccione una opción</option>');
                    $.each(r.data,function(_i,item) {
                        marcas.append("<option value='"+item.id+"'{{ old('subcategoria') == +"+ item.id +" ? 'selected' : ''}}>"+item.nombre_marca+"</option>");
                        calculo();
                    });
                }
            });
        }
    });

    $('#marca').on('change',function(e) {
        e.preventDefault();
        calculo();
    });
});

function calculo() {
    var submarcas=$("#submarca");
    var cod=$('#marca').val();
    var url='/obtener/'+cod;
    if(cod!='') {
        $.ajax({
            type: 'GET',
            url: url,
            cache: false,
            data: cod,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function(r) {
                submarcas.empty();
                submarcas.append('<option value="">Seleccione una opción</option>');
                $.each(r.data,function(_i,item) {
                    submarcas.append("<option value='"+item.id+"'{{ old('subcategoria1') == +"+ item.id +" ? 'selected' : ''}}>"+item.nombre_submarca+"</option>");
                });
            }
        });
    }
}


