<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="<?php echo base_url('js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?php echo base_url('iziToast-master/dist/js/iziToast.min.js'); ?>"></script>
<script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="//cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

<script>
    // $(document).ready(function() {
    //     $('#datatable').DataTable({
    //         paging: false,
    //         ordering: false,
    //         info: false,
    //     })
    // });
    var value = document.getElementById("tableName").innerHTML;
    console.log(value);

    $(document).ready(function() {
    $('#datatable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 
            'csv',
            {
                extend: 'excel',
                title: value,
            },
            {
                extend: 'pdf',
                title: value,
            },
            {
                extend: 'print',
                title: value,
            }
            
        ]
    } );
} );
</script>

</body>

</html>