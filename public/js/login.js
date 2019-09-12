$(document).ready(function () {
    // Site.run();
    $("#signin_form").click(function (e) {
        // alert("signup working");
        e.preventDefault();
        // if($('#primary-contact').valid()){
        // $.blockUI({ message: '<h3><img src="../images/ajax-loader.gif" /> Just a moment...</h3>' });
        var data = $("#login_form").serialize();
        console.log(data);
        var url = "https://invoygo.test/api/login";
        var method = "POST";
        sendRequestWithData(url, data, method, apiLoginSuccess, apiLoginFailure);
        // }
    });

    $("#getdata").click(function (e) {
        // alert("signup working");
        e.preventDefault();
        // if($('#primary-contact').valid()){
        // $.blockUI({ message: '<h3><img src="../images/ajax-loader.gif" /> Just a moment...</h3>' });
        // var data = $("#api_login_form").serialize();
        // console.log(data);
        var url = "http://invoygo.test/api/tests";
        var method = "GET";
        getData(url, method, apiLoginSuccess, apiLoginFailure);
        // }
    });

    function apiLoginSuccess(data){
        console.log(data);
        localStorage.setItem('appname_token', data.success.token);
        localStorage.setItem('customer_details', JSON.stringify(data.contact_details));
        localStorage.setItem('user_details', JSON.stringify(data.user_details));
        localStorage.setItem('selected_tenant', data.contact_details[0].id);
        $('#tenants').val(data.contact_details[0].id);
        //all subsequent calls automatically have this header.
        $( document ).ajaxSend(function( event, jqxhr, settings ) {
          jqxhr.setRequestHeader('Authorization', "Bearer " + data.success.token); 
          jqxhr.setRequestHeader("Accept", "application/json"); 
        });
        //show message and redirect to dashboard
        swal({
            icon: "success",
            title: 'Login Successful',
            text: 'Successfully logged into Invoygo Customer Portal',
            timer: 1000,
            buttons: false,
          }).then(function() {
            window.location = "/dashboard";
          });      
      }
      function apiLoginFailure(data){
        console.log(data);
        swal({
            icon: "error",
            title: 'Login Failed - Please retry',
            text: data.error,
            showConfirmButton: true,
        });
      }
});