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
          due_date:{
              required:true
          },
          priority:{
              required:true      
          },
          status:{
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
          due_date:{
              required:"Please select duedate"
          },
          priority:{
              required:"Please enter prority"      
          },
          status:{
              required:"Please select a status"          
          }
    }
 
});
$('#due_date').change(function() {
    var validate = $('#new_tasks_form').validate();
    validate.element($(this));
});
$('#status').change(function() {
    var validate = $('#new_tasks_form').validate();
    validate.element($(this));
});

$("#phone").mask("0000-000-000");
$("#contactus_form").validate({
ignore:[],
errorElement:'span',
errorClass:'verror',
rules:{
    subject:{
        required:true
    },
    email:{
        required:true
    },
    phone:{
        required:true
        },
    content:{
        required:true
    }
},
messages:{
    subject:{
        required:"Please enter subject"
    },
    email:{
        required:"Please enter email address"
    },
    phone:{
        required:"Please enter phone",
    },
    content:{
        required:"Please enter content"
    }
}
});
