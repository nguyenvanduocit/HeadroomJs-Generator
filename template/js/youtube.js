(function ($) {
    $(function () {
        $.fn.youtube = function (options) {

            var defaults = {
                userId: 'videohuongdanlt'
            }

            options = $.extend(defaults, options);
            var $container = $(this);

            get_view_request(6);

            function get_view_request(number) {
                $.ajax({
                    url: "https://gdata.youtube.com/feeds/api/users/" + options.userId + "/uploads?v=2.1&alt=jsonc&max-results=" + number + "&orderby=published",
                    dataType: "json",
                    success: show_video
                });
            };
            function show_video(data){
                var data = data.data;
                if (typeof data.items != "undefined") {
                    var items = data.items;

                    for(var i=0; i<items.length; i++){
                        var strVar="";
                        strVar += "<div class=\"col s4\">";
                        strVar += "<a target=\"_blank\" href=\"https://www.youtube.com/watch?v=" + items[i].id + "\"><div class=\"card\">";
                        strVar += "        <div class=\"card-image waves-effect waves-block waves-light\">";
                        strVar += "          <img class=\"activator\" src=\""+items[i].thumbnail.hqDefault+"\">";
                        strVar += "        <\/div>";
                        strVar += "        <div class=\"card-content\">";
                        strVar += "                      <span class=\"card-title activator grey-text text-darken-4\">" + items[i].title + "</span>";
                        strVar += "        <\/div>";
                        strVar += "<\/div></a>";
                        strVar += "<\/div>";
                        $container.append(strVar);
                    }
                }
            }
        };
    }); // end of document ready
})(jQuery); // end of jQuery name space