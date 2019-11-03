
    function sendRequestWithData(url, data, method, success_callback, failure_callback) {
      //var token = $('input[name="_token"]').val();
      var token = $('meta[name="csrf-token"]').attr('content');
      $.ajax({
        url: url,
        data: data,
        type: method,
        headers: {
          //'Authorization':'Basic xxxxxxxxxxxxx',
          'X-CSRF-TOKEN': token
          //'Content-Type':'application/json'
        },
        success: success_callback,
        error: failure_callback
      });
    }
    
 
  
  