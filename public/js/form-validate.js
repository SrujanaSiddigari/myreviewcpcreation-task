$("#new_tasks_form").validate({
    errorElement: 'span',
    errorClass: 'verror',
    rules: {
        subject:{
            required:true
          },
          description:{
              required:true
          },
          task_date:{
              required:true
          },
          priority:{
              required:true      
          }
    },
    messages: {
        subject:{
            required:"Please enter subject"
          },
          description:{
              required:"Please enter the description"
          },
          task_date:{
              required:"Please select a date"
          },
          priority:{
              required:"Please enter prority"      
          }
    }
 
});
$('#task_date').change(function() {
    var validate = $('#new_tasks_form').validate();
    validate.element($(this));
});

$("#view_tasks_form").validate({
    errorElement: 'span',
    errorClass: 'verror',
    rules: {
        subject:{
            required:true
          },
          description:{
              required:true
          },
          task_date:{
              required:true
          },
          priority:{
              required:true      
          }
    },
    messages: {
        subject:{
            required:"Please enter subject"
          },
          description:{
              required:"Please enter the description"
          },
          task_date:{
              required:"Please select a date"
          },
          priority:{
              required:"Please enter prority"      
          }
    }
 
});
$('#task_date').change(function() {
    var validate = $('#new_tasks_form').validate();
    validate.element($(this));
});

