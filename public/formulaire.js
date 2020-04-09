$("document").ready(main);

function main() {


    function validateContact() {
        $("#contact-form").validate(
            {
                rules: {
                    firstName: {
                        required: true
                    },
                    lastName: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        mail: true
                    },
                    reason: {
                        required: true
                    },
                    message: {
                        required: true,
                        minlength: 30,
                        maxlength: 1000
                    }
                },
                messages: {
                    firstName: "Veuillez fournir un prénom",
                    lastName: "Veuillez fournir un nom d'au moins trois lettres",
                    login: "L'email est incorrect",
                    reason: "Veuillez indiquer la raison du contact",
                    message: "Veuillez compléter ce champ"
                }
            });

    }

    function checkInputs() {
        let inputs = $('#contact-form input, textarea, #reason');
        inputs.on('keyup click', function () {
            let isValid = true;
            for (let i = 0; i < inputs.length; i++) {
                if ($(inputs[i]).val().length < 3) {
                    isValid = false;
                }
            }
            if (isValid) {

                $('.CEnvoyer')
                    .prop('disabled', false)
                    .css('background-color', '#f4ae58');
            } else {
                $('.CEnvoyer')
                    .prop('disabled', true)
                    .css('background-color', '#d6d6d6');
            }
        });
    }

   checkInputs();




    // $(".form > :input").change(function() {
    //     let emptyFields = $('.form :input').filter(function() {
    //         return $.trim(this.value) === "";
    //     });
    //
    //     if (!emptyFields.length) {
    //         console.log("form has been filled");
    //     }
    // });


}
