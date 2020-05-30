function newfarmer() {
     var AadharId = document.getElementById("Aadhar").value;
     var FirstName = document.getElementById("FirstName").value;
     var Password = document.getElementById("Password").value;
     var Confirm_Pass = document.getElementById("confirm_pass").value;
     var Email = document.getElementById("Email").value;
     var PhoneNo = document.getElementById("defaultRegisterPhonePassword").value;
    var AadharIdRegex = new RegExp("\\d{12}");
     var FirstNameRegex= new RegExp("^[a-zA-Z\\s]*$");
     var PasswordRegex = new RegExp("^([a-zA-Z0-9@*#%&!]{8,20})$");
     var EmailRegex = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$");
     var PhoneNoRegex= new RegExp("\\d{10}");
     var goAhead = true;
     var errorArr = new Array();
 
 
     if (!FirstNameRegex.test(FirstName)) {
         errorArr.push("\nEnter the correct farmer name");
         goAhead = false;
     }    
     if (!PasswordRegex.test(Password)) {
         errorArr.push("\nEnter the correct Password");
         goAhead = false;
     }    
     if (Confirm_Pass.localeCompare(Password)) {
         errorArr.push("\nPlease enter the same password as above");
         goAhead = false;
     } 
     if (!EmailRegex.test(Email)) {
         errorArr.push("\nEnter the correct Email ID");
         goAhead = false;
     } 
     
     if (!PhoneNoRegex.test(PhoneNo)) {
         errorArr.push("\nEnter correct Phone Number");
         goAhead = false;
     }

     if (!AadharIdRegex.test(AadharId)) {
        errorArr.push("\nInvalid Aadhar Id (make sure its exactly 12 digits)");
        goAhead = false;
    }
 
     if(!goAhead) {
         alert(errorArr);
     }

     
 
     return goAhead;
 
     
     
 
 
 
 }