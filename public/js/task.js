$(document).ready(function () {

    // $("#personal_tasks_table").DataTable();
    checkLoggedIn();
    var customer_details = localStorage.getItem('customer_details');
    var token = localStorage.getItem('appname_token');
    customer_details = JSON.parse(customer_details);
    var user_details = localStorage.getItem('user_details');
    user_details = JSON.parse(user_details);
    console.log("usrdetails" + user_details.id);
    $("#assigned_to_user_id").val(user_details.id);
    var contactId = localStorage.getItem('selected_tenant');
    $("#tenants").val(contactId);
    var tenant_selected = $("#tenants :selected").val();
    console.log("usrselected value " + tenant_selected);
    $("#contact_id").val(tenant_selected);
    var tasks_table = $("#tasks_table").DataTable({
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
            url: "https://invoygo.test/api/gkblabs/tododata/" + contactId,
            beforeSend: function (xhr) {
                console.log("requesting....");
                xhr.setRequestHeader("Authorization", "Bearer " + token);
            },
            "type": "post",
            "data": "data",
            complete: function () {
            }
        },
        "columns": [
            { "data": "id", "name": "id" },
            { "data": "subject", "name": "subject" },
            // {"data":"visibility","name":"visibility"},
            { "data": "description", "name": "description" },
            { "data": "contact_full_name", "name": "contact_full_name" },
            { "data": "name", "name": "name" },
            { "data": "due_date", "name": "due_date" }
            // {defaultContent:"" , render: function (){ 
            //     return "<button class='btn btn-default btn-xs edit' style='border:none; background-color:#fff;' type='button'><i class='icon md-edit' style='font-size:20px;'aria-hidden='true'></i></button>";
            //     }
            // }
        ],
        "columnDefs": [
            { 'visible': false, 'targets': 0 }
        ],
    });
    $('.tenant_selectbox').change(function () {
        console.log($(this).val());
        var contact_id = $(this).val();
        var url = "https://invoygo.test/api/gkblabs/tododata/" + contact_id;
        tasks_table.ajax.url(url).load();
        localStorage.setItem('selected_tenant', contact_id);
    });
});