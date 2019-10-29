$(document).ready(function () {
    //all subsequent calls automatically have this header.
    var token = localStorage.getItem('appname_token');
    console.log(token);
    //all subsequent calls automatically have this header.
    $(document).ajaxSend(function (event, jqxhr, settings) {
      jqxhr.setRequestHeader('Authorization', "Bearer " + token);
      jqxhr.setRequestHeader('Accept', 'application/json');
    });
    $("#basicDate").flatpickr({
      enableTime: true
    });
  
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      defaultDate: '2019-09-12',
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      // your event source
      eventSources: [
  
        // your event source
        {
          url: "http://invoygo.test/api/gkblabs/event/feed/1?e1=true" // use the `url` property
          //   url:  "/gkblabs/upload/s3List/tenant/" + tenantId,
  
        }
  
        // any other sources...
  
      ],
      eventRender: function (event, element) {
        element.find('.fc-title').after('<span>' + event.description + '</span>');
        element.click(function () {
          $('#startTime').html(moment(event.start).format('MMM Do'));
          $('#eventInfo').html(event.description);
          $('#endTime').html(moment(event.start).format('MMM Do'));
          $('#eventLink').attr('href', '#');
          $('#eventContent').dialog({ modal: true, title: event.title, width: 350 });
        });
        element.popover({
          title: event.subject ? event.subject : "",
          content: '' + 'Start:' + event.start.format('MM/DD/YYYY HH:mm a') + ' ' + 'End:' + event.end.format('MM/DD/YYYY HH:mm a')  + '  '+'Emails:' +  event.participants + '  '+'Description:' + event.description,
          trigger: 'hover',
          placement: 'top',
          container: 'body'
        });
      }
  
    });
  });