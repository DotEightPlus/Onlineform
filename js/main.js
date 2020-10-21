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
       onFinishing: function (event, currentIndex) {
        var renter_add           = $("#add_rent").val();
        var rentee_add           = $("#ren_add").val();
        var occ_len              = $("#Desired_Length").val();
        var occ_date             = $("#Desired_date").val();
        var occ_length           = $("#Desired_Len").val();
        var bed_num              = $("#bed_num").val();
        var reason_move          = $("#moving").val();
        var secure_depo          = $("#secure").val();
        var pet_depo             = $("#pet").val();

        //section 2

        var full_name            = $("#first_name").val();
        var adult                = $("#Population_adults").val();
        var children             = $("#Population_children").val();
        var pet                  = $("#Population_pets").val();
        var gender               = $("#gender").val();
        var smoke                = $("#smoke").val();
        var add_now              = $("#Present_Address").val();
        var add_length           = $("#time_address").val();
        var phone                = $("#personal_phone").val();
        var social               = $("#Social").val();
        var license              = $("#License").val();
        var model                = $("#Vehicle_model").val();
        var year                 = $("#Vehicle_year").val();
        var landlord_name        = $("#landlord_name").val();
        var landlord_phone       = $("#landlord_phone").val();
        var rent_pay             = $("#rentpay").val();
        var estate               = $("#estate").val();
        var estate_explain       = $("#estate_explain").val();
        var evict                = $("#evict").val();
        var evict_explain        = $("#evict_ex").val();
        var refused              = $("#refused").val();
        var refuse_ex            = $("#refal").val();
        var interrupt            = $("#interrupt").val();
        var interrupt_ex         = $("#interrupt_explain").val();
        var convict              = $("#convict").val();
        var felony_explain       = $("#convict_ex").val();

        //section 3

        var income_source        = $("#income_source").val();
        var company              = $("#company_name").val();
        var office_add           = $("#office_address").val();
        var position             = $("#position").val();
        var supervisor           = $("#Employer_Name").val();
        var supervisory          = $("#Employment_lenght").val();
        var tenant_wage          = $("#wages").val();
        var tenant_per           = $("#perser").val();

        //section 4

        var relate_name          = $("#relative_Name").val();
        var relate_add           = $("#relative_Address").val();
        var relate_phone         = $("#relative_Phone").val();
        var relate_relation      = $("#relative_relationship").val();
        var per_name_1           = $("#relative_Name2").val();
        var per_add_1            = $("#relative_Address2").val();
        var per_phone_1          = $("#relative_Phone2").val();
        var per_relation_1       = $("#relative_relationship2").val();
        var tenant_name          = $("#t_name").val();
        var app_date             = $("#date_filled").val();


        $.ajax
    (
    {
        type        :  'post',
        url         :  '../functions/init.php',
        data        :  {renter_add:renter_add,rentee_add:rentee_add,occ_len:occ_len,occ_date:occ_date,occ_length:occ_length,bed_num:bed_num,reason_move:reason_move,secure_depo:secure_depo,pet_depo:pet_depo,full_name:full_name,adult:adult,children:children,pet:pet,gender:gender,smoke:smoke,add_now:add_now,add_length:add_length,phone:phone,social:social,license:license,model:model,year:year,landlord_name:landlord_name,landlord_phone:landlord_phone,rent_pay:rent_pay,estate:estate,estate_explain:estate_explain,evict:evict,evict_explain:evict_explain,refused:refused,refuse_ex:refuse_ex,interrupt:interrupt,interrupt_ex:interrupt_ex,convict:convict,felony_explain:felony_explain,income_source:income_source,company:company,office_add:office_add,position:position,supervisor:supervisor,supervisory:supervisory,tenant_wage:tenant_wage,tenant_per:tenant_per,relate_name:relate_name,relate_add:relate_add,relate_phone:relate_phone,relate_relation:relate_relation,per_name_1:per_name_1,per_add_1:per_add_1,per_phone_1:per_phone_1,per_relation_1:per_relation_1,tenant_name:tenant_name,app_date:app_date},
        success     :  function(data)
        {
            $("#msg").html(data); 
        }
    }
        )       

        

               return true;

               
        }
   

       
    });
    $("#date").datepicker({
        dateFormat: "MM - DD - yy",
        showOn: "both",
        buttonText : '<i class="zmdi zmdi-chevron-down"></i>',
    });
});
