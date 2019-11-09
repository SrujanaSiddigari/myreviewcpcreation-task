$(document).ready(function () {
    $("#save_new_task").click(function(){
      // alert("hi");
      if($("#new_tasks_form").valid()){
        var data = $("#new_tasks_form").serialize();
        console.log(data);
        var method = "POST";
        var url = '/SaveCreatedTask';
        console.log(url);
      } else {
        return false;
      }
      sendRequestWithData(url, data,method,taskSavedSuccess,taskSaveFailed);
  });
  function taskSavedSuccess(data){
    console.log("success saved"+ data);
      swal({
      icon: "success",
      title: 'Task Saved',
      text: 'Task saved successfully',
      timer: 1000,
      buttons: false,
    }).then(function() {
    });    
    // $("#created_tasks_table").DataTable().ajax.reload();
    $("#new_tasks_form").trigger('reset');
  }
  function taskSaveFailed(data){
    console.log("task failed"+ data);
  }
  $("#priority").mask('000');
});