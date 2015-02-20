<?php
/**
 * @project demo-template
 * @author  nguyenvanduocit
 * @date    01/31/2015
 */
?>
<script src="js/generator.js"></script>
<style id="animation_style"></style>

<nav id="header" class="teal lighten-1 animated">
    <div class="nav-wrapper">
        <div class="col s12">
            <a style="margin-left: 50px" href="/" class="brand-logo">SEN VIỆT</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="http://wordpresskite.com">WordPress Dev</i></a></li>
                <li><a href="http://laptrinh.senviet.org">Dev tut</a></li>
                <li><a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt">Youtube</a></li>
                <li><a href="http://www.youtube.com/subscription_center?add_user=videohuongdanlt"><i class="mdi-navigation-more-vert"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="section no-pad-bot" id="index-banner" style="padding-top: 87px">
        <div class="container">
            <h1 class="header center">HeadroomJS Effect Generator</h1>

            <div class='row center'>
                <h4 class="header col s12 light center">The animate generator for for HeadroomJS.</h4>
            </div>
        </div>
        <div class="github-commit">
            <div class="container">
                <div class="commit"><span>Latest Commit on Github:&nbsp;&nbsp;<a href="" class="sha"></a>&nbsp;&nbsp;<span class="date"></span></span>
                    <a href="https://github.com/nguyenvanduocit/HeadroomJs-Generator" class="right waves-effect waves-light btn hide-on-small-only">Source code</a>&nbsp;&nbsp;<a href="https://github.com/nguyenvanduocit/HeadroomJs-Generator" class="right waves-effect waves-light btn hide-on-small-only" style="margin-right: 10px;">Bài viết</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-content section ">
        <div class="row">
            <p>Modify the form below, then click run to see live action. If you like this, copy the script to your site.</p><br/>
            <div class="row">
                <div class="col s6">
                    <div class="row">
                        <h3 class="header">Custom your animate</h3>
                        <form id="demo_form">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="offset" type="number" class="demo_field" min="0" value="100">
                                    <label for="offset">Offset</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6 " >
                                    <input id="toleranceUp" type="number" class="demo_field tooltipped" min="0" value="10" data-position="top" data-tooltip="Scroll-up tolerance in px before state changes">
                                    <label for="toleranceUp">Tolerance Up</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="toleranceDown" type="number" class="demo_field tooltipped" min="0" value="10" data-position="top" data-tooltip="Scroll-down tolerance in px before state changes">
                                    <label for="toleranceDown">Tolerance Down</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s6">
                                    <label>Scroll-up effect</label>
                                    <select id="upEffect" name="upEffect" class="demo_field browser-default tooltipped" data-position="top" data-tooltip="The animatie when scroll-up">
                                    </select>
                                </div>
                                <div class="col s6">
                                    <label>Scroll-down effect</label>
                                    <select id="downEffect" name="downEffect" class="demo_field browser-default tooltipped" data-position="top" data-tooltip="The animatie when scroll-down">
                                    </select>
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Run<i class="mdi-navigation-chevron-right right"></i></button>
                            <button  class="btn waves-effect waves-light tooltipped" id="random" data-position="top" data-tooltip="Click me to get random animate">Random effect<i class="mdi-image-blur-on right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col s6">
                    <h3 class="header">Featured animatie set</h3>
                    <div class="collection">
                        <a class="collection-item featured_effect" data-upeffect="rollIn" data-downeffect="rollOut" href="#">rollIn - rollOut</a>
                        <a class="collection-item featured_effect" data-upeffect="flipInTopBack" data-downeffect="flipOutTopBack" href="#">flipInTopBack - flipOutTopBack</a>
                        <a class="collection-item featured_effect" data-upeffect="fadeInDown" data-downeffect="fadeOutUp" href="#">fadeInDown - fadeOutUp</a>
                        <a class="collection-item featured_effect" data-upeffect="boingInUp" data-downeffect="fadeOutUp" href="#">boingInUp - fadeOutUp</a>
                        <a class="collection-item featured_effect" data-upeffect="rubberBand" data-downeffect="fadeOutUp" href="#">rubberBand - fadeOutUp</a>
                        <a class="collection-item featured_effect" data-upeffect="wobble" data-downeffect="slideOutUp" href="#">wobble - slideOutUp</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col s12">
                <div class="row">
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#tab_html">HTML</a></li>
                            <li class="tab col s3"><a href="#tab_javascript">Javascript</a></li>
                            <li class="tab col s3"><a href="#tab_css">CSS</a></li>
                        </ul>
                    </div>
                    <div id="tab_html" class="col s12">
                        <pre style="border-bottom: none"><code class="language-markup">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;HeadroomJs Example - laptrinh.senviet.org&lt;/title&gt;
        &lt;script src=&quot;//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;https://code.jquery.com/jquery-2.1.1.min.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;//cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js&quot;&gt;&lt;/script&gt;</code></pre>
<pre style="margin-bottom:0;margin-top:-.5em;padding-top: 0;padding-bottom: 0; border-bottom: none; border-top: none; padding-left: 80px !important;"><code class="language-markup css-code"></code></pre>
<pre style="margin-bottom:-.5em;margin-top:0;padding-top: 0;padding-bottom: 0; border-bottom: none; border-top: none; padding-left: 80px !important;"><code class="language-markup js-code"></code></pre>
<pre style="border-top: none"><code class="language-markup">    &lt;/head&gt;
    &lt;body style=&quot;height:1000px&quot;&gt;
        &lt;nav id=&quot;header&quot; class=&quot;teal lighten-1 animated&quot; style=&quot;background:#26a69a&quot;&gt;
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
        &lt;/nav&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                    </div>
                    <div id="tab_javascript" class="col s12">
                        <pre><code class="language-markup js-code"></code></pre>
                    </div>
                    <div id="tab_css" class="col s12">
                        <pre><code class="language-markup css-code"></code></pre>
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
                   class="btn-large waves-effect waves-light red darken-1 rubberBandAnimate infiniteAnimate animateEl">Subscribe</a>
            </div>
            <div class="row" id="youtube-container"></div>
        </div>
    </div>
</main>