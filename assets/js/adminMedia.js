$ = jQuery;

$(document).on('click', '.setCustomImage', function(event){
    event.preventDefault();
    var button = $(this);
    var formBlock = button.parents('.formBlock');
    var inputHidden = formBlock.find('.hiddenImageID');

    wp.media.editor.send.attachment = function(props, attachment){
        inputHidden.val(attachment.id);
    }



    wp.media.editor.open(button);
    return false;




});