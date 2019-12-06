$(document).ready(function(){

    $('[data-toggle="tab"]').click(function(e) {
        var $this = $(this),
        loadurl = $this.attr('href'),
        targ = $this.attr('data-target');
        window.location = loadurl;
//        alert(loadurl);

       /*
    
        $.get(loadurl, function(data) {
        $(targ).html(data);
        });
    
        $('[data-toggle="tab"]:eq(0)').trigger('click');
        $this.tab('show');
        return false;*/
    });

});
