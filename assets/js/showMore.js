$ = jQuery;
console.log(load_more);


$('#showMore').click(function(){
    console.log('button is clicked');
    $.ajax({
        url: load_more.ajax_url,
        type: 'POST',
        data:{
            'action': 'loadmore',
            'query': load_more.query,
            'page': load_more.current_page
        },
        success:function(data){
            console.log(data);
        },
        error: function(error){
            console.log(error);
            console.log('there has been an error');

        }
    })
});