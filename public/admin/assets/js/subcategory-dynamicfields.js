// dynamic fields

$(document).ready(function () {
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapperip = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="d-flex mb-3"><input type="text" class="form-control form-control-sm" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button mx-1"><span class="material-icons text-danger">remove_circle_outline</span></a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function () {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapperip).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperip).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});