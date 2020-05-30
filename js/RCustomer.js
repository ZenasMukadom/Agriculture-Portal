function newcustomer() {
    var FirstName = document.getElementById("CustName").value;
    var Password = document.getElementById("password").value;
    var Confirm_Pass = document.getElementById("confirm_pass").value;
    var Email = document.getElementById("Email").value;
    var PhoneNo = document.getElementById("defaultRegisterPhonePassword").value;
    var Addr=document.getElementById("Address").value;
    var CITY=document.getElementById("City").value;
    var PC=document.getElementById("PinCode").value;
    var STATE=document.getElementById("State").value;
    var FirstNameRegex= new RegExp("^[a-zA-Z\\s]*$");
    var PasswordRegex = new RegExp("^([a-zA-Z0-9@*#%&!]{8,20})$");
    var EmailRegex = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$");
    var PhoneNoRegex= new RegExp("\\d{10}");
    var AddrRegex = new RegExp("\\w+");
    var CITYRegex = new RegExp("\\w+");
    var PCRegex = new RegExp("\\d{6}");
    var STATERegex = new RegExp("\\w+");
    var goAhead = true;
    var errorArr = new Array();
 
 
    if (!FirstNameRegex.test(FirstName)) {
        errorArr.push("\nEnter the correct customer name");
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
    if (!AddrRegex.test(Addr)) {
        errorArr.push("\nEnter correct Address");
        goAhead = false;
    }

    if (!CITYRegex.test(CITY)) {
        errorArr.push("\nEnter correct City Name");
        goAhead = false;
    }

    if (!STATERegex.test(STATE)) {
        errorArr.push("\nEnter correct State Name");
        goAhead = false;
    }

    if (!PCRegex.test(PC)) {
        errorArr.push("\nEnter correct PIN Code");
        goAhead = false;
    }
    
    if(!goAhead) {
        alert(errorArr);
    }

    

    return goAhead;

    
    



}