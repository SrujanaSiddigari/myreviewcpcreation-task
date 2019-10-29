$(document).ready(function () {
    checkLoggedIn();
    var customer_details = localStorage.getItem('customer_details');
    var token = localStorage.getItem('appname_token');
    customer_details = JSON.parse(customer_details);
    var tenant_selected = localStorage.getItem('selected_tenant');
    $("#tenants").val(tenant_selected);
    var payments = $("#payments_table").DataTable({

        "bServerSide": true,
        "processing": true,
        "autoWidth": false,
        
        "responsive": true,
        header: {
            "Accept": "application/json"
        },
        "language": {
            "processing": "<span class='fa fa-refresh fa-spin fa-5x'></span>"
        }, 
        destroy: true,
        
        "ajax":{
            url: "https://invoygo.test/api/reports/payments/"+ tenant_selected,
            beforeSend: function(xhr) {
            console.log("requesting....");
            xhr.setRequestHeader("Authorization", "Bearer "+ token);
            },
            "type": "get",
            "data":"data",
            complete: function() {
            }
        },
        "order": [[ 0, "desc" ]],
        "columns":[
          {"data":"id","name":"id"},
          {"data":"payment_date", "name":"payment_date"},
          {"data":"invoice_number","name":"invoice_number"},
          {"data":"transaction_id", "name":"transaction_id"}, 
          {"data":"transaction_status", "name":"transaction_status"},   
          {"data":"customername", "name":"customername"},     
          {"data":"tenant_name", "name":"tenant_name"}, 
          {"data":"due_date", "name":"due_date"},                            
          {"data":"auth_amount", "name":"auth_amount"},   
          {"data":"auth_amount", "name":"auth_amount"},
          ]
    });
    $('.tenant_selectbox').change(function(){
        console.log($(this).val());
        var contact_id = $(this).val();
        var url ="https://invoygo.test/api/reports/payments"+ contact_id;
        payments.ajax.url( url ).load();
        localStorage.setItem('selected_tenant', contact_id);
      });
});

