$(".clickButton_form").click(function(){
    $(".wrap_form").toggleClass("clickButton_formJS_anim");
    $(".wrapperForm_registrationTwo ").toggleClass("wrapper_formSteps_twoAnim");
});

$(".buutonReady").click(function(){
    $(".wrapperForm_registrationThree ").toggleClass("wrapperForm_registrationThreeAnim");
    $(".wrapperForm_registrationTwo ").toggleClass("wrapper_formSteps_twoAnimHide");
});

