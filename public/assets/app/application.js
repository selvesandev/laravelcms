$(document).ready(function () {

    String.prototype.trim = function() { return this.replace(/^\s+|\s+$/g,""); };
    String.prototype.ltrim = function() { return this.replace(/^\s+/,""); };
    String.prototype.rtrim = function() { return this.replace(/\s+$/,""); };



    $('.select2_single').select2({
        placeholder: 'Select a value',
        allowClear: true
    });



    //customise checkbox and radio buttons
    // iCheck
        if ($("input.iSquare")) {
            $(document).ready(function () {
                $('input.iSquare').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green'
                });
            });
        }
    // iCheck







    /**
     * Page Create Form Generates h1-title, menu title and keywords as per title value
     */
    var pageCreateForm=$('#createPageForm');
    pageCreateForm.find('input#title').keyup(function () {
        var $this = $(this);
        var fieldValue = $this.val().trim();
        var h1Title=pageCreateForm.find('input#h1title');
        var menuTitle=pageCreateForm.find('input#menutitle');

        if (fieldValue.length >= 2 || fieldValue.length==0) {
            duplicateFormInput(fieldValue,[h1Title,menuTitle]);
        }
    });


    /**
     * Duplicates Given value to given for field/fields value
     * @param dupValue
     * @param array fields
     */
    var duplicateFormInput=function(dupValue,fields){
        $(fields).each(function(){
            $(this).val(dupValue);
        });
    }


});
