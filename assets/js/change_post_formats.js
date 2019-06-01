console.log('formatObject');


$(document).ready(function(){

    $('.conditionalField').hide();
    // var option = $('#post-format-selector-0').val();v
    var inputs = $('.conditionalField');
    inputs.each(function(i, input){
        if($(this).data('condition') == formatObject['format']){
            $(this).show();
            return;
        }
    });



    $(document).on('change','#post-format-selector-0', function(){
       console.log($(this).val());
       var value = $(this).val();

       var inputs = $('.conditionalField');
       console.log(inputs);
       inputs.each(function(i, input){
        if ($(this).data('condition') == value) {
            $(this).show();
        } else {
            $(this).hide();
            $(this).find('input').val('');
        }
       })
   });

})