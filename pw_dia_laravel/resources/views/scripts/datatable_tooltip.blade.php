<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "language": {
                "search":"Buscar",
                "lengthMenu": "Mostar _MENU_ registros por página",
                "zeroRecords": "Lo sentimos, no encontramos lo que estas buscando",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Registros no encontrados",
                "infoFiltered": "(Filtrado en _MAX_ registros totales)"
            }
        } );
    } );
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>