ready(function () {
  bulmaCalendar.attach('#datepickerDemoInline');
  bulmaCalendar.attach('#datepickerDemoInlineRange');

  calendars = bulmaCalendar.attach('#datepickerDemoDefault');

  [].forEach.call(calendars, function (calendar) {
    calendar.on('datepicker:date:selected', function (datePicker) {
      alert('Selected date: ' + datePicker.date);
    });
  });

  bulmaCalendar.attach('#datepickerDemoDialog', {
    displayMode: 'dialog',
    startDate: new Date()
  });

});