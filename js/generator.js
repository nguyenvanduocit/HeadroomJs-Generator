/**
 * @project HeadroomJs-Example
 * @author thuytien
 * @date 02/18/2015
 */
(function ($) {
    $(function () {

        var $demo_field = $("#demo_form");
        var $random_run = $("#random");
        var headroom = null;
        var $header = $("#header");
        var $upEffectSelect = $("#upEffect");
        var $downEffectSelect = $("#downEffect");
        var css_content = '';
        var animate_in = {};
        var animate_out = {};

        request_css("css/animate_in.css", function(){
            process_css(animate_in, fill_effect_in);
        });
        request_css("css/animate_out.css", function(){
            process_css(animate_out, fill_effect_out);
        });

        $random_run.click(function(){
            event.preventDefault();

            var keys = Object.keys(animate_in);
            var random_in_effect = keys[ keys.length * Math.random() << 0];
            $upEffectSelect.val(random_in_effect);
            $upEffectSelect.trigger('click');

            keys = Object.keys(animate_out);
            var random_out_effect = keys[ keys.length * Math.random() << 0];
            $downEffectSelect.val(random_out_effect);
            $downEffectSelect.trigger('click');

            $demo_field.trigger("submit");
        });
        $demo_field.submit(function (event ) {
            event.preventDefault();
            var offset = $("#offset").val();
            var toleranceUp = $("#toleranceUp").val();
            var toleranceDown = $("#toleranceDown").val();
            var upEffect = $upEffectSelect.val();
            var downEffect = $downEffectSelect.val();

            var options = {
                offset: offset,
                tolerance: {
                    up: toleranceUp,
                    down: toleranceDown
                },
                classes: {
                    // when element is initialised
                    initial: "animated",
                    // when scrolling up
                    pinned: upEffect,
                    // when scrolling down
                    unpinned: downEffect
                }
            };

            var css =get_css(animate_in,upEffect) + "\n" + get_css(animate_out, downEffect);
            var default_css = '.animated {\n' +
                '    position: fixed;\n' +
                '    z-index: 9998;\n' +
                '    top: 0;\n' +
                '    left: 0;\n' +
                '    right: 0;\n' +
                '    -webkit-animation-duration: .60s !important;\n' +
                '    animation-duration: .60s !important;\n' +
                '    -webkit-animation-fill-mode: both;\n' +
                '    animation-fill-mode: both;\n' +
                '    transition: all 500ms cubic-bezier(1.000, 0.000, 0.000, 1.000);\n}\n';
            $(".css-code").html("&lt;style&gt;\n" +default_css+ css + "\n&lt;/style&gt;");
            $("#animation_style").html(css);

            var js = get_js(offset, toleranceUp, toleranceDown, upEffect, downEffect);
            $(".js-code").html("&lt;script&gt;\n"+js+"\n&lt;/script&gt;");

            Prism.highlightAll();
            if(headroom!=null){
                headroom.destroy();
            }
            $header.each(function(){
                headroom = new Headroom(this, options);
                headroom.init();
            });
            toast('Success ! Try scroll up and down.', 2000);
        });
        function fill_effect_in(){
            var $upEffect = $("#upEffect");
            var options = '';
            for(var propertyName in animate_in) {
                // propertyName is what you want
                options += '<option value="' + propertyName + '">' + propertyName + '</option>';
                // you can get the value like this: myObject[propertyName]
            }
            $upEffect.html(options);
        };
        function fill_effect_out(){
            var $downEffect = $("#downEffect");
            var options = '';
            for(var propertyName in animate_out) {
                // propertyName is what you want
                options += '<option value="' + propertyName + '">' + propertyName + '</option>';
                // you can get the value like this: myObject[propertyName]
            }
            $downEffect.html(options);
            $random_run.trigger("click");
        }
        // css file : /*property_name:*/ .... /*:property_name*/
        function request_css(file_path,callback){
            console.log("request_css");
            $.ajax({
                url: file_path,
                dataType: 'text',
                type: 'GET',
                async: true,
                success: function (rep) {
                    css_content = rep;
                    if(typeof(callback) == "function") {
                        callback();
                    }
                },
                error: function (jqXHR, status, errorThrown) {
                    alert('error');
                }
            });
        }

        function process_css(animate_arr, callback){
            console.log("process_css");
            if (css_content.length === 0) {
                return;
            }
            var regEx = /\/\*(\w+)\*\/([^]+)\/\*\1\*\//igm;
            var m;
            while ((m = regEx.exec(css_content)) != null) {
                if (m.index === regEx.lastIndex) {
                    regEx.lastIndex++;
                }
                animate_arr[m[1]] = m[0];
            }
            if(typeof(callback) == "function") {
                callback();
            }
        }
        function get_js(offset, up, down, pinned,unpinned ){
            var js = '(function ($) {\n'+
                '   $(function () {\n' +
                '       $("#header").headroom({\n' +
                '           // vertical offset in px before element is first unpinned\n' +
                '           offset : ' + offset + ',\n' +
                '           // or you can specify tolerance individually for up/down scroll\n' +
                '           tolerance : {\n' +
                '               up : ' + up + ',\n' +
                '               down : ' + down + '\n' +
                '           },' +
                '           classes : {' +
                '               // when element is initialised\n' +
                '               initial : "animated",\n' +
            '                   // when scrolling up\n' +
                '               pinned : "' + pinned + '",\n' +
                '               // when scrolling down\n' +
                '               unpinned : "' + unpinned + '",\n' +
                '           }\n' +
                '       });\n' +
                '   }); // end of document ready\n' +
                '})(jQuery); // end of jQuery name space\n';
            return js;
        }
        function get_css(animate_arr, property){
            var css = "";
            if(animate_arr[property] != undefined) {
                css = animate_arr[property];
            }
            return css;
        }
    }); // end of document ready
})(jQuery); // end of jQuery name space