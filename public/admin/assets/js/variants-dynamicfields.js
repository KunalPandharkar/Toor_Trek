// dynamic fields
$(document).ready(function () {
    var maxField = 100; //Input fields increment limitation
    var addButton = $('.add_button1'); //Add button selector
    var wrapperip1 = $('.field_wrapper1'); //Input field wrapper


    var fieldHTML = '<div class="mt-4 mb-2"><input type="text" class="form-control form-control-sm d-inline m-1 mb-2" name="field_name1[]" value="" placeholder="Variant Name"/><div class="d-flex variantmorevalues"><input type="text" class="form-control form-control-sm m-1" placeholder="MRP" name="field_name2[]"><input type="text" class="form-control form-control-sm m-1" placeholder="Discount" name="field_name3[]"><input type="text" class="form-control form-control-sm m-1" placeholder="GST" name="field_name4[]"><input type="text" class="form-control form-control-sm m-1" placeholder="Price" name="field_name5[]"><select class="form-select form-select-sm m-1" aria-label=".form-select-sm example" name="field_name6[]"><option selected>In Stock</option><option value="1">Out Of Stock</option></select></div></div>';

    var fieldHTML2 = '<div><div class="prodvariants  mt-2 d-flex"> <input type="text" class="form-control form-control-sm w-50 d-inline m-1" placeholder="Property Name" name="field_namep1[]" value="Weight"><input type="text" class="form-control form-control-sm w-50 d-inline m-1" placeholder="Property Value" name="field_namep2[]"></div><div class="prodvariants  mt-2 d-flex"> <input type="text" class="form-control form-control-sm w-50 d-inline m-1" placeholder="Property Name" name="field_namep1[]" value="Country"><input type="text" class="form-control form-control-sm w-50 d-inline m-1" placeholder="Property Value" name="field_namep2[]"></div></div>';



    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function () {
        //Check maximum number of input fields
        if (x < maxField) {
            x++; //Increment field counter
            $(wrapperip1).append(fieldHTML, fieldHTML2); //Add field html
        }
    });


    //Once remove button is clicked
    $(wrapperip1).on('click', '.remove_button', function (e) {
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });



});

