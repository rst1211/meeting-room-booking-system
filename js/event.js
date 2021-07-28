	function toggleSidebar(ref){
  		document.getElementById("sidebar").classList.toggle('active');
}
	var formOK = false;	
	function validatePDF(objFileControl){
	 var file = objFileControl.value;
	 var len = file.length;
	 var ext = file.slice(len - 4, len);
	 if(ext.toUpperCase() == ".PDF"){
	   formOK = true;
	 }
	 else{
	   formOK = false;
	   alert("Only PDF files allowed.");
	 }
	}



    // PAST DATES RESTRICTED IN CALENDER
	$(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var maxDate = year + '-' + month + '-' + day;
    $('#datecontrol').attr('min', maxDate);
});
$("#to").change(function () {
            var startTimeValue = document.getElementById("from");
            var endTimeValue = document.getElementById("to");
 
            if( startTimeValue> endTimeValue) {
                alert("End Time should be greater than Start Time");
                return false;
            }
 
            return true;
 
        });