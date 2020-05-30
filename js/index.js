function validateFarmer() {

    var username = document.getElementById("EmailId").value;
    //var password = document.getElementById("rtoPassword").value;
    var usernameRegex = new RegExp("^[a-zA-Z0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$");
    //var passwordRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
    var goAhead = true;

    if(!usernameRegex.test(username)) {
        alert("Invalid Email ID");
        goAhead = false;
    }
   /* if(!passwordRegex.test(password)) {
        alert("Invalid Password");
        goAhead = false;
    }
    */
    
    return goAhead;
}

function validateCustomer() {

    var username = document.getElementById("defaultLoginFormEmail").value;
   // var password = document.getElementById("civilianPassword").value;
    var usernameRegex = new RegExp("^[a-zA-Z0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$");
    //var passwordRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");
    var proceedAhead = true;

    if(!usernameRegex.test(username)) {
        alert("Invalid Email ID");
        proceedAhead = false;
    }

  /*  if(!passwordRegex.test(password)) {
        alert("Invalid Password");
        proceedAhead = false;
    }
    */

    return proceedAhead;
}