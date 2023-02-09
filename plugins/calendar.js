document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
  
    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      themeSystem: 'lux',
      selectable:true,
      dragScroll:true,
      
      
      headerToolbar: {
        left: 'prev,next today',

        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      weekNumbers: true,
      dateClick:function(info){

        
        // change the day's background color just for fun
        info.dayEl.style.backgroundColor = '#2c3e50';
        info.dayEl.style.transition = '.5s';
      },
      dayMaxEvents: true, // allow "more" link when too many events
      events: 'https://fullcalendar.io/api/demo-feeds/events.json'
    });
  
    calendar.render();
  });

  