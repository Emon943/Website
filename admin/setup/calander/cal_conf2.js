
//Define calendar(s): addCalendar ("Unique Calendar Name", "Window title", "Form element's name", Form name")
addCalendar("Calendar1", "Select Date", "voucherdate", "paymentfrom");
addCalendar("Calendar2", "Select Date", "durationfrom", "paymentfrom");
addCalendar("Calendar3", "Select Date", "durationto", "paymentfrom");
addCalendar("Calendar4", "Select Date", "probappointdate", "personal");
addCalendar("Calendar5", "Select Date", "tsdate1", "trainingform");
addCalendar("Calendar6", "Select Date", "tedate1", "trainingform");
addCalendar("Calendar7", "Select Date", "tsdate2", "trainingform");
addCalendar("Calendar8", "Select Date", "tedate2", "trainingform");
addCalendar("Calendar9", "Select Date", "tsdate3", "trainingform");
addCalendar("Calendar10", "Select Date", "tedate3", "trainingform");
addCalendar("Calendar11", "Select Date", "tsdate4", "trainingform");
addCalendar("Calendar12", "Select Date", "tedate4", "trainingform");
addCalendar("Calendar13", "Select Date", "tsdate5", "trainingform");
addCalendar("Calendar14", "Select Date", "tedate5", "trainingform");
addCalendar("Calendar15", "Select Date", "tsdate15", "trainingform");



// default settings for English
// Uncomment desired lines and modify its values
// setFont("verdana", 9);
 setWidth(90, 1, 15, 1);
 setColor("#cccccc", "#cccccc", "#ffffff", "#ffffff", "#333333", "#cccccc", "#333333");
 setFontColor("#333333", "#333333", "#333333", "#ffffff", "#333333");
 setFormat("yyyy-mm-dd");
 setSize(200, 200, -200, 16);

 setWeekDay(0);
 setMonthNames("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
 setDayNames("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
 setLinkNames("[Close]", "[Clear]");
