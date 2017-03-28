 function validation() {
	var note = document.forms["noteForm"]["note"].value;
	var todayDate = document.forms["noteForm"]["todaydate"].value;

 	if (note == null || note == '' || todayDate == null || todayDate == ''){
		document.querySelector('.notify').textContent = 'Please fill out the required fields!';
		return false;
	} else if (/[^a-zA-Z0-9/]/.test(note)) {
		document.querySelector('.notify').textContent = 'No Special Characters!';
		return false;
	} else if (/[^a-zA-Z0-9/]/.test(todayDate)) {
		document.querySelector('.notify').textContent = 'No Special Characters!';
		return false;
	}
 }

 // function validation() {
 // 	if(form.todaydate.value == " ") {
 // 		alert("Please Fill in date!");
	// 	form.todaydate.focus();
	// 	return false;
	// }

// function validation() {
// 	if(document.getElementById("currentDate").value==null || document.getElementById("currentDate").value=="")
// 		alert("Please Fill in all required fields!")
// }

// function validation() {
// 	var currentDate = document.getElementById('currentDate').value;
// 	var note = document.getElementById('note').value;

// 	if (currentDate == null || currentDate == '' || note == null || note
// }