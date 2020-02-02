$(document).ready(function(){
    $('.tpreview').hover(
       function(){
           if($(this).children("#tpreview").length < 1){
               $(this).prepend('<a href="#" id="tpreview" rel="' + $(this).attr('rel') + '"><span id="prevIcon" style="opacity: 0.5; float: right; margin-top: 5px;" class="fa fa-list"></span></a>');
           }
       },
       function(){
           var span = $(this).find("a:first");
           if(span.children().hasClass('fa-list')){
               span.remove();
           }
       }
    );

    $(document).on('click', "#tpreview", function() {
        if($(this).attr("data-state") == 'open'){
            $(this).closest('tr').next('tr').remove();
            $(this).remove();
            return false;
        }
        var tcount = $(this).closest('.inline_row').children('td').size();
        var parentClass = $(this).closest('td').attr('class');
        var ctid = $(this).attr('rel');
        var box = '<div id="actualPreview_' + ctid + '" style="-webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 4px 5px 0px;border-bottom-color: rgb(243, 243, 243);border-bottom-style: solid;border-bottom-width: 1px;border-top-color: rgb(136, 144, 162);border-top-style: none;border-top-width: 0px;box-shadow: rgba(0, 0, 0, 0.14902) 0px 4px 5px 0px;color: rgb(136, 144, 162);display: table-cell;font-family: proxima-nova, Tahoma, sans-serif;font-size: 12px;height: 104px;line-height: 15px;margin-bottom: 0px;margin-left: 0px;margin-right: 0px;margin-top: 0px;padding-bottom: 20px;padding-left: 29px;padding-right: 10px;padding-top: 20px; width: 1500px;z-index: auto;"></div>';
        // Change The FA
        $(this).find("span:first").removeClass('fa-list').addClass('fa-refresh fa-spin');
        $.ajax({
            url: 'misc.php?action=fetch_preview',
            data: {tid : ctid},
            type: 'post',
            dataType: 'json',
            success: function(data){
                $("#actualPreview_" + ctid).html(data.preview);
            },
            error: function(){
                alert('There was an unknown Error with the ajax request.');
            }
        });

        $(this).find("span:first").removeClass('fa-refresh fa-spin').addClass('fa-times');
        // Add the Box
        $(this).closest('tr').after('<tr><td id="currentPreview" class="'+ parentClass +'"colspan="'+ tcount +'">' + box + '</td></tr>');
        $("#currentPreview").removeClass('tpreview');
        $(this).attr('data-state', "open");
        return false;
    });

});
