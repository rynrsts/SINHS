
function login() {
	var user = document.getElementById("username").value;
	var pass = document.getElementById("password").value;

	if (user == "" || pass == "") {
		alert("Please fill up username and/ or password.");
	}
}

function userlogin() {
	var user1 = document.getElementById("username").value;

	if (!isNaN(user1)) {
		document.getElementById("username").value = "";
		document.getElementById("password").value = "";
	}
}

/* ==== */

function text1() {
	var first = document.getElementById("firstname").value;
	var last = document.getElementById("lastname").value;

	if (!isNaN(first)) {
		document.getElementById("firstname").value = "";
	}
	if (!isNaN(last)) {
		document.getElementById("lastname").value = "";
	}
}

function num1() {
	var ag = document.getElementById("age").value;

	if (isNaN(ag)) {
		document.getElementById("age").value = "";
	}
}

function validation1() {
	var age = document.getElementById("age").value;
	var user1 = document.getElementById("username1").value;
	var pass1 = document.getElementById("password1").value;
	var pass2 = document.getElementById("password2").value;

	if (age > 10 && user1.length >= 8 && pass1.length >= 7 && pass1 == pass2 || pass2 == pass1) {
		 document.getElementById("myTarget").target = "";
	}
	else {
		document.getElementById("myTarget").target = "storage";
	}
}

function username() {
	var user1 = document.getElementById("username1").value;

	if (!isNaN(user1)) {
		document.getElementById("username1").value = "";
		document.getElementById("usercheck").innerHTML = "";
	}
	else {
		if (user1.length >= 8) {
			document.getElementById("usercheck").innerHTML = "<b>Good</b>";
			document.getElementById("usercheck").style.color = "green";
		}
		else if (user1 == "") {
			document.getElementById("usercheck").innerHTML = "";
		}
		else if (user1.length < 8 && user1.length > 0) {
			document.getElementById("usercheck").innerHTML = "<b>Bad</b>";
			document.getElementById("usercheck").style.color = "red";
		}
		else {
			document.getElementById("usercheck").innerHTML = "";
		}
	}
}

function password() {
	var pass1 = document.getElementById("password1").value;
	var pass2 = document.getElementById("password2").value;

	if (pass1.length >= 10) {
		document.getElementById("passcheck").innerHTML = "<b>Strong</b>";
		document.getElementById("passcheck").style.color = "blue";
	}
	else if (pass1.length >= 7 && pass1.length <= 9) {
		document.getElementById("passcheck").innerHTML = "<b>Good</b>";
		document.getElementById("passcheck").style.color = "green";
	}
	else if (pass1 == "") {
		document.getElementById("passcheck").innerHTML = "";
	}
	else {
		document.getElementById("passcheck").innerHTML = "<b>Bad</b>";
		document.getElementById("passcheck").style.color = "red";
	}

	if (pass2 == pass1 && pass1 != "") {
		document.getElementById("passconfirm").innerHTML = "<b>&check;</b>";
		document.getElementById("passconfirm").style.color = "green";
	}
	else if (pass1 == "" || pass2 == "") {
		document.getElementById("passconfirm").innerHTML = "";
	}
	else {
		document.getElementById("passconfirm").innerHTML = "<b>&cross;</b>";
		document.getElementById("passconfirm").style.color = "red";
	}
}

/* ==== */

function text3() {
	var name = document.getElementById("yourname").value;

	if (!isNaN(name)) {
		document.getElementById("yourname").value = "";
	}
}

function num2() {
	var number = document.getElementById("yournumber").value;

	if (isNaN(number)) {
		document.getElementById("yournumber").value = "";
	}
}

function validation2() {
	var num = document.getElementById("yournumber").value;

	if (num.length >= 7) {
		document.getElementById("myTarget").target = "";
	}
	else {
		document.getElementById("myTarget").target = "storage";
	}
}

function message() {
	var name = document.getElementById("yourname").value;
	var email = document.getElementById("youremail").value;
	var number = document.getElementById("yournumber").value;
	var message = document.getElementById("yourmessage").value;

	if (name != "" && email != "" && number != "" && message != "") {
		// None;
	}
	else {
		alert("Please fill up the missing field/s.");
	}
}

/* ==== */

function date() {
	var nMonths = document.getElementById("numMonths");
	var nDays = document.getElementById("numDays");
	var nYears = document.getElementById("numYears");
	var years = new Date();
	var months = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");

	for (var x = 0; x < months.length; x++) {
		var optM = document.createElement("option");
		optM.value = optM.text = months[x];
		nMonths.append(optM);
	}
	for (var y = 1; y <= 31; y++) {
		var optD = document.createElement("option");
		optD.value = optD.text = y;
		nDays.append(optD);
	}
	for (var z = years.getFullYear(); z >= 1990; z--) {
		var optY = document.createElement("option");
		optY.value = optY.text = z;
		nYears.append(optY);
	}
}

function text2() {
	var middle = document.getElementById("middlename").value;
	var mt = document.getElementById("mother").value;
	var ft = document.getElementById("father").value;

	if (!isNaN(mt)) {
		document.getElementById("mother").value="";
	}
	if (!isNaN(middle)) {
		document.getElementById("middlename").value = "";
	}
	if (!isNaN(ft)) {
		document.getElementById("father").value="";
	}
}

function num3 () {
	var num = document.getElementById("number").value;

	if (isNaN(num)) {
		document.getElementById("number").value = "";
	}
}

function validation3() {
	var bmo = document.getElementById("numMonths").value;
	var bda = document.getElementById("numDays").value;
	var age = document.getElementById("age").value;
	var num = document.getElementById("number").value;
	var ct = document.getElementById("certify");

	if ((bmo == "February" && bda > 28) || (bmo == "April" && bda > 30) || (bmo == "June" && bda > 30) || 
		(bmo == "September" && bda > 30) || (bmo == "November" && bda > 30)) {
		document.getElementById("myTarget").target = "storage";
	}
	else {
		document.getElementById("myTarget").target = "";

		if (age > 10) {
			document.getElementById("myTarget").target = "";

			if (num.length >= 7) {
				document.getElementById("myTarget").target = "";

				if (ct.checked == true) {
					document.getElementById("myTarget").target = "";
				}
				else {
					document.getElementById("myTarget").target = "storage";
				}
			}
			else {
				document.getElementById("myTarget").target = "storage";
			}
		}
		else {
			document.getElementById("myTarget").target = "storage";
		}
	}
}

/* ==== */

function logout() {
	var lo = confirm("Are you sure you want to log out?");

	if (lo == true) {
		location.href = "Login.php";
	}
}