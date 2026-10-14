    //  function onSubmit(token) {
    //     var form = document.getElementById("oaf");
    //     if (form.checkValidity()) {
    //         form.submit();
    //     } else {
    //         grecaptcha.reset();
    //         form.reportValidity();
    //     }
    //     document.getElementById("oaf").reset();
    // }


    
       function onSubmit(token) {

        var form = document.getElementById("contact-form");

        if (form.checkValidity()) {

            form.submit();

        }else{

            grecaptcha.reset();

            form.reportValidity();

        }

        document.getElementById('contact-form').reset();



    };
