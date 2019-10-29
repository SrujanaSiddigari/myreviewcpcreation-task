$(document).ready(function () {
    //check if user is logged in
    checkLoggedIn();
    // get items from localstorage and defining in variables
    var token = localStorage.getItem('appname_token');
    var tenant_selected = localStorage.getItem('selected_tenant');
    $("#tenants").val(tenant_selected);
    var token = localStorage.getItem('appname_token');
    var dashboard_tasks = $("#dashboard_tasks_table").DataTable({
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
            url: "https://invoygo.test/api/gkblabs/tododata/" + tenant_selected,
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
        dashboard_tasks.ajax.url(url).load();
        localStorage.setItem('selected_tenant', contact_id);
    });
});
