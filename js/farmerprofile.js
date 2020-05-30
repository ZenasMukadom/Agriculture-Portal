function profile() {
    // var AadharId = document.getElementById("Aadhar").value;
     var FirstName = document.getElementById("F_first_name").value;
     /*var UserName = document.getElementById("Username").value;
     var Password = document.getElementById("Password").value;
     var Confirm_Pass = document.getElementById("confirm_pass").value;
     var Email = document.getElementById("Email").value;
     var PhoneNo = document.getElementById("defaultRegisterPhonePassword").value;*/
    // var AadharIdRegex = new RegExp("\\d{12}");
     var FirstNameRegex= new RegExp("\\w+");
    /* var UserNameRegex= new RegExp("^([a-zA-Z0-9]{4,15})$");
     var PasswordRegex = new RegExp("^([a-zA-Z0-9@*#%&!]{8,20})$");
     var EmailRegex = new RegExp("^[a-zA-Z0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$");
     var PhoneNoRegex= new RegExp("\\d{10}");
     var goAhead = true;
     var errorArr = new Array();*/
 
 
     if (!FirstNameRegex.test(FirstName)) {
         errorArr.push("\nEnter correct full name");
         goAhead = false;
     }
     /*
     if (!UserNameRegex.test(UserName)) {
         errorArr.push("\nEnter correct user name");
         goAhead = false;
     }    
     if (!PasswordRegex.test(Password)) {
         errorArr.push("\nEnter correct Password");
         goAhead = false;
     }    
     if (Confirm_Pass.localeCompare(Password)) {
         errorArr.push("\nPlease enter the same password as above");
         goAhead = false;
     } 
     if (!EmailRegex.test(Email)) {
         errorArr.push("\nEnter correct Email ID");
         goAhead = false;
     } 
     
     if (!PhoneNoRegex.test(PhoneNo)) {
         errorArr.push("\nEnter correct Phone Number");
         goAhead = false;
     }
 
     if(!goAhead) {
         alert(errorArr);
     }
 
     return goAhead;
 
     if (!AadharIdRegex.test(AadharId)) {
         errorArr.push("\nInvalid Aadhar Id (make sure its exactly 12 digits)");
         goAhead = false;
     }
     */
 
    return goAhead;
 
 }
 