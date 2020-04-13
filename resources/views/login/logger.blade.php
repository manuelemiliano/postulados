<script>
$("#breadcrumb-title").html('<?=env('APP_NAME')?>');
$("#breadcrumb-title").append(' / Registro de accesos');
</script>
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__body">
				<table id="logger" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
								<th>ID</th>
								<th>Activa</th>
								<th>F Logueo</th>
								<th>Verificación</th>
                <th>F Logout</th>
                <th>Duración</th>
                <th>ipv4</th>
                <th>Usuario</th>
                <th>Rol</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
<script>
    $(document).ready(function() {
        $('#logger').dataTable( {
            "fnDrawCallback": function( oSettings ) {
              /**/
            },
            "language": {
                "url": "<?=env('APP_URL')?>assets/plugins/datatables/Spanish.json"
            },
						"searching": true,
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "processing": true,
            "serverSide": true,
    		    "ajax": {
								"headers": {
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
                "url": "login/loginlogger_get",
                "type": "POST"
            }
        } );

    } );
		var pusher = new Pusher('<?=env('PUSHER_APP_KEY')?>', {
			encrypted: true
		});

		var updChannel = pusher.subscribe('logger');

		pusher.connection.bind('connected', function() {
			console.log('✓ Servicio de actualización de logger activo');
		})
		updChannel.bind('evento', function(data) {
			$('#logger').DataTable().ajax.reload();
		});
</script>
