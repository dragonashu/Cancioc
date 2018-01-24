
$(document).ready(function() {
    $("#datepicker").datepicker({
      beforeShowDay: $.datepicker.noWeekends,
      dateFormat: "mm/dd/yy",
      yearRange: "-2:+2",
      numberOfMonths: 2,
      onClose: alertUser
    });

   
});

/** 
 * Function to alert user to drink water
 */
function alertUser(date, instance) {
  alert('bea apa');
}
