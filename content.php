<?php
/**
 * @project demo-template
 * @author  nguyenvanduocit
 * @date    01/31/2015
 */
?>
<script src="js/demo.js"></script>
<nav id="header" class="teal lighten-1 headroom">
    <div class="nav-wrapper">
        <div class="col s12">
            <a style="margin-left: 50px" href="#!" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#"><i class="mdi-action-search"></i></a></li>
                <li><a href="#"><i class="mdi-action-view-module"></i></a></li>
                <li><a href="#"><i class="mdi-navigation-refresh"></i></a></li>
                <li><a href="#"><i class="mdi-navigation-more-vert"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="section no-pad-bot" id="index-banner" style="padding-top: 87px">
        <div class="container">
            <h1 class="header center">HeadroomJS Example</h1>

            <div class='row center'>
                <h4 class="header col s12 light center">Give your pages some headroom. Hide your header until you need
                    it.</h4>
            </div>
        </div>
        <div class="github-commit">
            <div class="container">
                <div class="commit"><span>Latest Commit on Github:&nbsp;&nbsp;<a href=""
                                                                                 class="sha"></a>&nbsp;&nbsp;<span
                            class="date"></span></span>
                    <a href="https://github.com/nguyenvanduocit/HeadroomJs-Example"
                       class="right waves-effect waves-light btn hide-on-small-only">Source code</a>
                    &nbsp;&nbsp;
                    <a href="https://github.com/nguyenvanduocit/regexpBuilderJS-Example"
                       class="right waves-effect waves-light btn hide-on-small-only" style="margin-right: 10px;">Bài
                        viết</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-content section ">
        <div class="row">
            <div class="col s12 m9 l10">
                <div id="html" class="scrollspy section">
                    <h4 class="header">HTML</h4>
                    <pre><code class="language-markup">&lt;nav id=&quot;header&quot; class=&quot;teal lighten-1 headroom&quot;&gt;
    &lt;div class=&quot;nav-wrapper&quot;&gt;
        &lt;div class=&quot;col s12&quot;&gt;
            &lt;a style=&quot;margin-left: 50px&quot; href=&quot;#!&quot; class=&quot;brand-logo&quot;&gt;Logo&lt;/a&gt;
            &lt;ul class=&quot;right hide-on-med-and-down&quot;&gt;
                &lt;li&gt;&lt;a href=&quot;sass.html&quot;&gt;&lt;i class=&quot;mdi-action-search&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;components.html&quot;&gt;&lt;i class=&quot;mdi-action-view-module&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;javascript.html&quot;&gt;&lt;i class=&quot;mdi-navigation-refresh&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;mobile.html&quot;&gt;&lt;i class=&quot;mdi-navigation-more-vert&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
                </div>
                <div id="javascript" class="scrollspy section">
                    <h4 class="header">Javascript</h4>
                    <pre><code class="language-javascript">(function($){
    $(function(){
        $("#header").headroom({});
    }); // end of document ready
})(jQuery); // end of jQuery name space</code></pre>
                </div>
                <div id="css" class="scrollspy section">
                    <h4 class="header">CSS</h4>
                    <p>You can use any css to make animation more smooth : </p>
                    <pre><code class="language-css">.headroom, .animated {
    position: fixed;
    z-index: 9998;
    top: 0;
    left: 0;
    right: 0;
    -webkit-transition: .25s
    -o-transition: .25s
    -moz-transition: .25s
    -ms-transition: .25s
    transition: transform .25s ease-in-out;
}
.headroom--unpinned {
    top: -80px;
    -webkit-transition: .25s;
    -o-transition: .25s;
    -moz-transition: .25s;
    -ms-transition: .25s;
    transition: .25s;
    -webkit-transform: translateY(-80px);
    -o-transform: translateY(-80px);
    -moz-transform: translateY(-80px);
    -ms-transform: translateY(-80px);
    transform: translateY(-80px);
}

.headroom--pinned {
    top: 0;
    transition-timing-function: cubic-bezier(0.64, 0.57, 0.67, 1.53);

    -webkit-transition: .5s;
    -o-transition: .5s;
    -moz-transition: .5s;
    -ms-transition: .5s;
    transition: .5s;
}</code></pre>
                </div>
                <div id="with-pure-js" class="scrollspy section">
                    <h4 class="header">With pure JS</h4>
                    <p>Include the headroom.js script in your page:</p>
<pre><code class="language-markup">&lt;script src=&quot;js/Debouncer.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/headroom.js&quot;&gt;&lt;/script&gt;</code></pre>
                    <p>Then use :</p>
<pre><code class="language-javascript">// grab an element
var myElement = document.querySelector(&quot;#header&quot;);
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init();</code></pre>
                </div>
                <div id="with-jqueryzepto" class="scrollspy section">
                    <h4 class="header">With jQuery/Zepto</h4>
                    <p>Include the headroom.js and jQuery.headroom.js scripts :</p>
                    <pre><code class="language-markup">&lt;script src=&quot;js/Debouncer.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/headroom.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/jQuery.headroom.js&quot;&gt;&lt;/script&gt;</code></pre>
                    <p>Then : </p>
<pre><code class="language-javascript">// simple as this!
// NOTE: init() is implicitly called with the plugin
$("#header").headroom();</code></pre>
                </div>
                <div id="use-with-angularjs" class="scrollspy section">
                    <h4 class="header">With AngularJS</h4>
                    <p>Include the headroom.js and angular.headroom.js scripts in your page and require the headroom module in your AngularJS application module :</p>
                    <pre><code class="language-markup">&lt;script src=&quot;js/Debouncer.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/headroom.js&quot;&gt;&lt;/script&gt;
&lt;script src=&quot;js/angular.headroom.js&quot;&gt;&lt;/script&gt;</code></pre>
                    <p>Then :</p>
                    <pre><code class="language-markup">&lt;header headroom&gt;&lt;/header&gt;
&lt;!-- or --&gt;
&lt;headroom&gt;&lt;/headroom&gt;
&lt;!-- or with options --&gt;
&lt;headroom tolerance='0' offset='0' classes=&quot;{pinned:'headroom--pinned',unpinned:'headroom--unpinned',initial:'headroom'}&quot;&gt;&lt;/headroom&gt;</code></pre>
                </div>
            </div>
            <div class="col hide-on-small-only m3 l2">
                <div class="toc-wrapper pin-top" style="top: 0px;">
                    <div style="height: 1px;">
                        <ul class="table-of-contents"></ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row youtube-section teal section ">
        <div class="col s12 m12">
            <div class="row center">
                <h3 class="light header light">VIDEO MỚI NHẤT</h3>

                <p class="col s8 offset-s2 caption">Đây là các video hướng dẫn lập trình mới nhất của Sen Việt. Còn rất
                    nhiều video khác tại kênh của Sen Việt, để tiện theo dõi các video này, bạn hãy ấn nút Subscribe
                    phía dưới.</p>
            </div>
            <div class="row center">
                <a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt"
                   class="btn-large waves-effect waves-light red darken-1">Subscribe</a>
            </div>
            <div class="row" id="youtube-container"></div>
        </div>
    </div>
</main>