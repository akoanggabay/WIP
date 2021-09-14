// Call the dataTables jQuery plugin

  $('#dataTable').DataTable({
    dom: 'Bfrtip',
    "pageLength": 25,
    lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
    buttons: [
        'pageLength',
        {
            extend: 'excelHtml5',
            text: 'Export to Excel',
            exportOptions: {
                modifier: {
                
                }
            }
        },
        'print'
    ],
    "order": [[ 0, "desc" ]]
});


