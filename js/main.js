$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Previous',
            next : 'Next Step',
            finish : 'Submit',
            current : ''
        },
       onFinished: function (event, currentIndex) { 
            //var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
            //var email = $('#email').val();
            //var phone = $('#phone').val();
            var username = $('#Desired_date').val();
            //var gender = $('form input[type=radio]:checked').val();
            //var address = $('#address').val();

            //$('#fullname-val').text(fullname);
            //$('#email-val').text(email);
            //$('#phone-val').text(phone);
            $('#username-val').text(Desired_date);
            //$('#address-val').text(address);
            //$('#gender-val').text(gender);

        
               return true;
        }
   

       
    });
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
});
