// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
    dom: 'Bfrtip',
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
                    page: 'current'
                }
            }
        },
        'print'
    ],
    "order": [[ 0, "desc" ]]
});
});
