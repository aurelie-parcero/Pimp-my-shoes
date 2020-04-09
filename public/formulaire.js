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

        if($('#contact-form').validate()) {
            $('.CEnvoyer')
                .prop('disabled', false)
                .css('background-color', '#f4ae58');
        }

    }


}
