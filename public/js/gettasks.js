$(document).ready(function () {
     $('#tasks_retreive_table').DataTable({
        responsive: true,
        language: {
            processing: "<span class='fa fa-refresh fa-spin fa-5x'></span>"
        },
        destroy: true,
        serverSide: true, 
        processing: true,   
        ajax: {
            url: '/getTasks',
            beforeSend: function () {
                console.log('requesting....');
            },
            type: 'get',
            data: 'data',
        },
        columns: [
            { data: 'id', name: 'id',
                searchable :false
           },
            { data: 'subject', name: 'subject' },
            { data: 'description', name: 'description' },
            { data: 'task_creation_date', name: 'task_creation_date' },
            { data: 'priority', name: 'priority' },
            {
                defaultContent: '',
                render: function () {
                    return "<button class='btn btn-default btn-xs edit' style='background-color:#fff;' type='button'><i class='icon wb-edit editR' style='font-size:15px;'aria-hidden='true'></i></button>";
                }
            }
        ]
    });

     $("#tasks_retreive_table tbody").on('click', '.edit', function () {
        var tr = $(this).closest("tr");
        var data = $("#tasks_retreive_table").DataTable().row(tr).data();
        console.log(data);
        window.location.href = "/alltasks/" + data.id;
    });
    $("#update_btn").click(function () {
        //  alert("update btn");
        var updateid = $("#update_recId").val();
        console.log(updateid);
        if ($("#view_tasks_form").valid()) {
            var data = $("#view_tasks_form").serialize();
            console.log(data);
            var url = "/updateTask/" + updateid;
            console.log(url);
            var method = "POST";
            sendRequestWithData(url, data, method, taskupdateSuccess, taskupdateFailed);
        }
        else {
            return false;
        }
    });
    function taskupdateSuccess(data) {
        console.log("task updated" + data);
        swal({
            icon: "success",
            title: 'Task Updated',
            text: 'Task updated successfully',
            timer: 1000,
            buttons: false,
        }).then(function () {
        });
    }
    function taskupdateFailed(data) {
        console.log("task failed" + data);
    }

});