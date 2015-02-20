/**
 * @project regexpBuilderJS-Example
 * @author thuytien
 * @date 02/18/2015
 */
/**
 * @project regexpBuilderJS-Example
 * @author thuytien
 * @date 02/18/2015
 */
(function($){
    $(function(){
        $.fn.toc = function (options) {
            var defaults = {
                headers: $("h2.header")
            }
            options = $.extend(defaults, options);
            var $headers = options.headers;
            var $TOC_container = $(this);
            if ($TOC_container.length && $headers.length) {
                var newLine, el, title, link;
                var ToC = ""
                $headers.each(function(){
                    el = $(this);
                    title = el.text();
                    link = "#" + el.closest(".scrollspy").attr("id");
                    newLine =
                        "<li>" +
                        "<a href='" + link + "'>" +
                        title +
                        "</a>" +
                        "</li>";

                    ToC += newLine;
                });
                ToC +=
                    "</ul>" +
                    "</nav>";
                $TOC_container.html(ToC);
            }
        };
    }); // end of document ready
})(jQuery); // end of jQuery name space