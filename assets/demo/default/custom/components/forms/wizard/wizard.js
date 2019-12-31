//== Class definition
var WizardDemo = function () {
    //== Base elements
    var wizardEl = $('#m_wizard');
    var formEl = $('#m_form');
    var validator;
    var wizard;
    
    //== Private functions
    var initWizard = function () {
        //== Initialize form wizard
        wizard = wizardEl.mWizard({
            startStep: 1
        });

        //== Validation before going to next page
        wizard.on('beforeNext', function(wizard) {
            if (validator.form() !== true) {
                return false;  // don't go to the next step
            }
        })

        //== Change event
        wizard.on('change', function(wizard) {
            mApp.scrollTop();
        });
    }

    var initValidation = function() {
        validator = formEl.validate({
            //== Validate only visible fields
            ignore: ":hidden",

            //== Validation rules
            rules: {
                //=== Information sur Projet
                //== Detail projet
                titre_projet: {
                    required: true 
                },
                date_debut: {
                    required: true
                },     
                date_fin: {
                    required: true 
                },
                niveau: {
                    required: true 
                },
                semestre: {
                    required: true 
                },
                encadrant: {
                    required: true 
                },

                //=== Confirmation
                accept: {
                    required: true
                }
            },

            //== Validation messages
          /*  messages: {
                'semsetre[]': {
                    required: 'You must select at least one communication option'
                }/*,
                accept: {
                    required: "You must accept the Terms and Conditions agreement!"
                } *
        },*/
            
            //== Display error  
            invalidHandler: function(event, validator) {     
                mApp.scrollTop();

                swal({
                    "title": "", 
                    "text": "Il y a quelques erreurs dans votre soumission. Veuillez les corriger.", 
                    "type": "error",
                    "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                });
            },

            //== Submit valid form
            submitHandler: function (form) {
                
            }
        });   
    }

    var initSubmit = function() {
        var btn = formEl.find('[data-wizard-action="submit"]');

        btn.on('click', function(e) {
            e.preventDefault();

            if (validator.form()) {
                //== See: src\js\framework\base\app.js
                mApp.progress(btn);
                //mApp.block(formEl); 

                //== See: http://malsup.com/jquery/form/#ajaxSubmit
                formEl.ajaxSubmit({
                    type: 'POST',
                    url: "<?php  $_SERVER['PHP_SELF']; ?>",
                    
                    success: function() {
                        mApp.unprogress(btn);
                        //mApp.unblock(formEl);
                          
                        swal({
                            "title": "", 
                            "text": "L'application a été soumise avec succès!", 
                            "type": "success",
                            "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                        });
                    }
                });
            }
        });
    }

    return {
        // public functions
        init: function() {
            wizardEl = $('#m_wizard');
            formEl = $('#m_form');

            initWizard(); 
            initValidation();
            initSubmit();
        }
    };
}();

jQuery(document).ready(function() {    
    WizardDemo.init();
});