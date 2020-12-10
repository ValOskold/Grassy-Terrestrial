// js-login.js for login.php
// input fields reading
var userName = document.querySelectorAll("#userName")[0];
var password = document.querySelectorAll("#password")[0];

// create error message for toggle
var errorP = document.querySelectorAll("#logError")[0];
errorP.innerHTML = "Username or Password is incorrect! Please try again.";
errorP.setAttribute("style", "display:none;");

// process submit button to redirection and display error message
var processSubmit = document.querySelectorAll("#btn-submit")[0];
processSubmit.addEventListener("click", logCheck, false);

function logCheck(event) {
    event.preventDefault();
    //console.log(userName.value);
    //console.log(password.value);
    
    //alert("listener on click is working");
    var newLocationD = "dashboard_doctor.php";
    var newLocationP = "dashboard_patient.php";
    //window.location = newLocation;
    //window.location.replace("http://www.google.com");
   
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(e) {
        //console.log(xhr.readyState);
        if(xhr.readyState === 4) {
            //console.log(xhr.responseText);
            var response = JSON.parse(xhr.responseText);
            console.log(response.success);

            //DOM Manipulation
            if(response.success == "true") {
                window.location.replace(newLocationD);
            }else if(response.success == "true2"){
                window.location.replace(newLocationP);
            }else{
                errorP.setAttribute("style", "display:block;");
            }
        }
    };

    const checkbox = document.querySelectorAll('input[name="cb"]');
    //console.log(checkbox);

    const cbArray = [];
    checkbox.forEach((cb) => {
        if(cb.checked) {
            cb.value = "cb";
            //console.log(cb.value);
            cbArray.push(cb.value);
            //console.log(cbArray[0]);

            xhr.open("POST", "processing-Login.php", true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	        xhr.send(
            "userName=" + userName.value +
             "&password=" + password.value +
             "&cb=" + cbArray[0]
            ); 

        }else{
            xhr.open("POST", "processing-Login.php", true);
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	        xhr.send(
            "userName=" + userName.value +
            "&password=" + password.value
            ); 
        }
    });

    // xhr.open("POST", "processing-Login.php", true);
    // xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded"); 
	// xhr.send(
    //     "userName=" + userName.value +
    //     "&password=" + password.value +
    //     "&cb=" + cbArray[0]
    //     ); 
}