$(document).ready(function () {

    /**
     * JS custom function trims space
     * @returns {string}
     */
    String.prototype.trim = function() {
        return this.replace(/^\s+|\s+$/g,"");
    };
    /**
     * JS custom function trims left space
     * @returns {string}
     */
    String.prototype.ltrim = function() {
        return this.replace(/^\s+/,"");
    };
    /**
     * JS custom function trims right space
     * @returns {string}
     */
    String.prototype.rtrim = function() {
        return this.replace(/\s+$/,"");
    };



    $('.select2_single').select2({
        placeholder: 'Select a value',
        allowClear: true
    });

    /*
     $(".select2_group").select2({});
     $(".select2_multiple").select2({
     maximumSelectionLength: 4,
     placeholder: "With Max Selection limit 4",
     allowClear: true
     });
     */






    /**
     * Page Create Form Generates h1-title, menu title and keywords as per title value
     */
    var pageCreateForm=$('#createPageForm');
    pageCreateForm.find('input#title').keyup(function () {
        var $this = $(this);
        var fieldValue = $this.val().trim();
        var h1Title=pageCreateForm.find('input#h1title');
        var menuTitle=pageCreateForm.find('input#menutitle');

        if (fieldValue.length > 5 || fieldValue.length==0) {
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
