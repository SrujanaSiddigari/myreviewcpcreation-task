$(document).ready(function () {
    var Site = window.Site;
  
    Site.run();
  
  });
  
  function sendRequestWithData(url, data, method, success_callback, failure_callback) {
    $.ajax({
      type: method,
      url: url,
      dataType: 'json',
      headers: {
        'Authorization': 'Bearer ' + localStorage.getItem('appname_token')
      },
      data: data,
      success: success_callback,
      error: failure_callback
    });
  }
  
  function getData(url, method, success_callback, failure_callback) {
    $.ajax({
      type: method,
      url: url,
      dataType: 'json',
      headers: {
        // 'Content-Type':'application/json',
        'Accept': 'application/json',
        'Authorization': 'Bearer ' + localStorage.getItem('appname_token')
  
      },
      //    data: data,
      success: success_callback,
      error: failure_callback
    });
  }
  
  function checkLoggedIn() {
    //check if user is authorized 
    var url = "https://invoygo.test/api/validate-token";
    var method = "GET";
    var data = {};
    sendRequestWithData(url, data, method, apiCheckSuccess, apiCheckFailure);
  }
  
  function apiCheckSuccess() {
  }
  
  function apiCheckFailure() {
    window.location = '/login';
  }
  
  $("#apiLogout").click(function (e) {
    e.preventDefault();
    var url = "https://invoygo.test/api/logout";
    var method = "POST";
    var data = {};
    sendRequestWithData(url, data, method, apiLogoutSuccess, apiLogoutFailure);
  });
  
  function apiLogoutSuccess(data) {
    localStorage.removeItem('appname_token');
    localStorage.removeItem('customer_details');
    localStorage.removeItem('user_details');
    localStorage.removeItem('selected_tenant');
    swal({
      icon: "success",
      title: 'Logout Successful',
      text: 'You have successfully logged out of Invoygo portal',
      timer: 3000,
      buttons: false,
    }).then(function () {
      window.location = '/login';
    });
  }
  
  function apiLogoutFailure(data) {
    swal({
      icon: "error",
      title: 'Could Not Logout',
      text: 'Please close your browser window to delete your existing session.',
      button: "Ok",
      showConfirmButton: true,
    });
  }
  
  /**
   *  Show tenant name in the selectbox on the top of the menu
   * 
   */
  
  var customer_details = localStorage.getItem('customer_details');
  customer_details = JSON.parse(customer_details);
  console.log(customer_details);
  var options = "";
  $.each(customer_details, function (key, value) {
    console.log(value.tenant.tenant_name);
    console.log(value.id);
    // $('#tenants')
    //     .append($("<option></option>")
    //                .attr("value",value.tenant.tenant_id)
    //                .attr("data-customerId", value.id)
    //                .text(value.tenant.tenant_name)); 
    var $option = '<option value="' + value.id + '" data-tenantId="' + value.tenant.id + '" >' + value.tenant.tenant_name + '</option>'
    $('#tenants').append($option);
  });
  var user_details = JSON.parse(localStorage.getItem('user_details'));
  $('#contact-Name').html(user_details.first_name +" "+user_details.last_name);
  $('#contact-Phone').html(user_details.phone);
  $('#contact-Email').html(user_details.email);
  $('#contact-Address').html(user_details.address);
  $('#contact-City').html(user_details.city);
  $('#contact-State').html(user_details.state);
  $('#contact-Zip').html(user_details.zip);
  