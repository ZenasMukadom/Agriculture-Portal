$().ready(function() {




    $(#signupForm").validate({


        rules: {

            F_first_name :"required",
            F_last_name : "required",
            Email_id : {
                required : true,
                email : true
            },

        },
        
        messages : {
            F_first_name : "Plz",
            F_last_name : "plz",
            Email_id :{
                required :"plz @"
            },
        }
    });

    
} )