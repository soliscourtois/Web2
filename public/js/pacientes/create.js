var validator = $("#PacienteForm").validate({
	ignore: [],
	onkeyup:false,
	rules: {
		nombres:{
			required: true
        },
        telefono: {
			required : true
        },
        edad: {
			required : true
        },
        precio: {
			required : true
		}
	},
	messages: {
		nombres: {
			required: "Por favor, ingrese el nombre de la bodega"
        },
        telefono: {
			required: "Por favor, ingrese el nombre de la bodega"
        },
        edad: {
			required: "Por favor, ingrese el nombre de la bodega"
        },
        precio: {
			required: "Por favor, ingrese la descripción"
		}
	}
});

$("#ButtonTipoModal1").click(function(event) {
	event.preventDefault();
	if ($("#PacienteForm").valid()) {
		saveModal();
	} else {
		validator.focusInvalid();
	}
});

$.validator.addMethod("nombreunico", function(value, element){
    var valid = false;
    var urlActual = $("input[name='urlActual']").val();
    $.ajax({
        type: "GET",
        async: false,
        url: "/bodegas/nombreDisponible/",
        data:"nombre_bodega=" + value,
        dataType: "json",
        success: function (msg) {
            valid=!msg;
        }
    });
    return valid;
	}, "La bodega ya está registrada en el sistema");
	

	function saveModal(button) {
		var formData = $("#BodegaForm").serialize();
		var urlActual =  $("input[name='urlActual']").val();
		$.ajax({
			type: "POST",
			headers: {'X-CSRF-TOKEN': $('#tokenBo').val()},
			url: "/bodegas/save",
			data: formData,
			dataType: "json",
			success: function(data) {
				$('.loader').fadeOut(225);
				$('#ingresoModal').modal("hide");
				bodegas_table.ajax.reload();
				alertify.set('notifier','position', 'top-center');
				alertify.success('Bodega creada con Éxito!!');
			},
			error: function(errors) {
				var errors = JSON.parse(errors.responseText);
				if (errors.codigo != null) {
					$("#BodegaForm input[name='codigo'] ").after("<label class='error' id='Errorcodigo'>"+errors.codigo+"</label>");
				}
			}
		});
	}
	

	//Mostrar y ocultar formulario
	if (window.location.hash === '#create') {
		$('#ingresoModal').modal('show');
	}
	$('#ingresoModal').on('hide.bs.modal', function () {
		$("#BodegaForm").validate().resetForm();
		document.getElementById("BodegaForm").reset();
		window.location.hash = '#';
	});
	$('#ingresoModal').on('shown.bs.modal', function () {
		window.location.hash = '#create';
	});
	