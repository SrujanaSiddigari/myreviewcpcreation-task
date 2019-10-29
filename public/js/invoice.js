
$(document).ready(function () {
    checkLoggedIn();
    var tenant_selected = localStorage.getItem('selected_tenant');
    $("#tenants").val(tenant_selected);
    var customer_details = localStorage.getItem('customer_details');
    var token = localStorage.getItem('appname_token');
    customer_details = JSON.parse(customer_details);
    console.log(customer_details[0].id);
    var invoices_table = $("#ivoices_table").DataTable({
        "bServerSide": true,
        "processing": true,
        "autoWidth": false,
        "responsive": true,
        "language": {
            "processing": "<span class='fa fa-refresh fa-spin fa-5x'></span>"
        },
        header: {
            "Accept": "application/json"
        },
        destroy: true,

        "ajax": {
            url: "https://invoygo.test/api/allInvoices/" + tenant_selected,
            beforeSend: function (xhr) {
                console.log("requesting....");
                xhr.setRequestHeader("Authorization", "Bearer " + token);
            },
            "type": "get",
            "data": "data",
            complete: function () {
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "full_name" },
            { "data": "invoice_id" },
            { "data": "invoice_type" },
            { "data": "invoice_date" },
            { "data": "payment_amount" },
            { "data": "balance" },
            { "data": "payment_amount_per_cycle" },
            { "data": "status" },
            { defaultContent: "", render: function () { return "<button class='btn btn-default btn-xs' style='background-color:#fff;'type='button'>Pay Now</button>"; } }
        ],
        "columnDefs": [
            { 'visible': false, 'targets': 0 },
            { orderable: false, targets: -1 }
        ]
    });
    var invoices_table = $('#payments-details').DataTable( { 
            "bServerSide": true,
            "processing": true,
            "autoWidth": false,       
            "responsive": true,
            "language": {
                "processing": "<span class='fa fa-refresh fa-spin fa-5x'></span>"
            },
            header: {
                "Accept": "application/json"
            },
            destroy: true,
            
            "ajax":{
                url: "https://invoygo.test/api/allInvoices/"+ customer_details[0].id,
                beforeSend: function(xhr) {
                console.log("requesting....");
                xhr.setRequestHeader("Authorization", "Bearer "+ token);
                },
                "type": "get",
                "data":"data",
                complete: function() {
                }
            },
        "columns":[
          {"data":"id"},
          {"data":"created_at"},
          {"data":"invoice_type"},
          {"data":"invoice_id"},          
          {"data":"payment_amount"},  
          {"data":"status"},
          ],
        "columnDefs": [
           {'visible': false, 'targets': 0},
           { orderable: false, targets: -1 }
        ],
        buttons: [
            {
                extend:    'copyHtml5',
                text:      '<i class="fa fa-files-o"></i>',
                titleAttr: 'Copy'
            },
            {
                extend:    'excelHtml5',
                text:      '<i class="fa fa-file-excel-o"></i>',
                titleAttr: 'Excel'
            },
            {
                extend:    'csvHtml5',
                text:      '<i class="fa fa-file-text-o"></i>',
                titleAttr: 'CSV'
            },
            {
                extend:    'pdfHtml5',
                text:      '<i class="fa fa-file-pdf-o"></i>',
                titleAttr: 'PDF'
            }
        ]
    });
    $('.tenant_selectbox').change(function(){
        console.log($(this).val());
        var contact_id = $(this).val();
        var url ="https://invoygo.test/api/allInvoices/"+ contact_id;
        invoices_table.ajax.url( url ).load();
        localStorage.setItem('selected_tenant', contact_id);
      });
});