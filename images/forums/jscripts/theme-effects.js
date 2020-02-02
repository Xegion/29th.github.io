$(document).ready(function() {
    $(".tpreview").hover(function() {
        $(this).children("#tpreview").length < 1 && $(this).prepend('<a href="#" id="tpreview" rel="' + $(this).attr("rel") + '"><span id="prevIcon" style="opacity: 0.5; float: right; margin-top: 5px;" class="fa fa-list"></span></a>')
    }, function() {
        var t = $(this).find("a:first");
        t.children().hasClass("fa-list") && t.remove()
    });
	$(document).on("click", "#tpreview", function() {
        if ("open" == $(this).attr("data-state")) return $(this).closest("tr").next("tr").remove(), $(this).remove(), !1;
        var t = $(this).parents(".inline_row").children("td").length;
            e = $(this).parents("td").attr("class"),
            r = $(this).parents("td").find("span[id*='tid']").attr("id").replace(/\D/g, ""),
            i = '<div id="actualPreview_' + r + '" style="-webkit-box-shadow: rgba(0, 0, 0, 0.14902) 0px 4px 5px 0px;border-bottom-color: rgb(243, 243, 243);border-bottom-style: solid;border-bottom-width: 1px;border-top-color: rgb(136, 144, 162);border-top-style: none;border-top-width: 0px;box-shadow: rgba(0, 0, 0, 0.14902) 0px 4px 5px 0px;color: rgb(136, 144, 162);display: table-cell;font-family: proxima-nova, Tahoma, sans-serif;font-size: 12px;height: 104px;line-height: 15px;margin-bottom: 0px;margin-left: 0px;margin-right: 0px;margin-top: 0px;padding-bottom: 20px;padding-left: 29px;padding-right: 10px;padding-top: 20px; width: 1500px;z-index: auto;"></div>';
        return $(this).find("span:first").removeClass("fa-list").addClass("fa-refresh fa-spin"), $.ajax({
            url: "misc.php?action=fetch_preview&tid=" + r + "&my_post_key=" + my_post_key,
            dataType: "json",
            success: function(t) {
                $("#actualPreview_" + r).html(t.preview);
            },
            error: function() {
                alert("There was an unknown Error with the ajax request.")
            }
        }), $(this).find("span:first").removeClass("fa-refresh fa-spin").addClass("fa-times"), $(this).closest("tr").after('<tr><td id="currentPreview" class="' + e + '"colspan="' + t + '">' + i + "</td></tr>"), $("#currentPreview").removeClass("tpreview"), $(this).attr("data-state", "open"), !1
    })
});