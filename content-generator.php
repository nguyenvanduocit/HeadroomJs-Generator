<?php
/**
 * @project demo-template
 * @author  nguyenvanduocit
 * @date    01/31/2015
 */
?>
<script src="js/generator.js"></script>
<style id="animation_style"></style>
<nav id="header" class="teal lighten-1 animated" >
    <div class="nav-wrapper">
        <div class="col s12">
            <a style="margin-left: 50px" href="#!" class="brand-logo">Logo</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="sass.html"><i class="mdi-action-search"></i></a></li>
                <li><a href="components.html"><i class="mdi-action-view-module"></i></a></li>
                <li><a href="javascript.html"><i class="mdi-navigation-refresh"></i></a></li>
                <li><a href="mobile.html"><i class="mdi-navigation-more-vert"></i></a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
    <div class="section no-pad-bot" id="index-banner" style="padding-top: 87px">
        <div class="container">
            <h1 class="header center">HeadroomJS Generator</h1>

            <div class='row center'>
                <h4 class="header col s12 light center">Auto-generate option for HeadroomJS.</h4>
            </div>
        </div>
        <div class="github-commit">
            <div class="container">
                <div class="commit"><span>Latest Commit on Github:&nbsp;&nbsp;<a href="" class="sha"></a>&nbsp;&nbsp;<span class="date"></span></span>
                    <a href="https://github.com/nguyenvanduocit/HeadroomJs-Example" class="right waves-effect waves-light btn hide-on-small-only">Source code</a>&nbsp;&nbsp;<a href="https://github.com/nguyenvanduocit/regexpBuilderJS-Example" class="right waves-effect waves-light btn hide-on-small-only" style="margin-right: 10px;">Bài viết</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-content section ">
        <div class="row">
            <h2 class="header">Option form</h2>
            <p>Modify an </p><br/>
            <div class="row">
                <form class="col s8" id="demo_form">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="offset" type="number" class="demo_field" min="0" value="100">
                            <label for="offset">Offset</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="toleranceUp" type="number" class="demo_field" min="0" value="10">
                            <label for="toleranceUp">Tolerance Up</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="toleranceDown" type="number" class="demo_field" min="0" value="10">
                            <label for="toleranceDown">Tolerance Down</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6">
                            <label>Scroll-up effect</label>
                            <select id="upEffect" name="upEffect" class="demo_field">
                            </select>
                        </div>
                        <div class="col s6">
                            <label>Scroll-down effect</label>
                            <select id="downEffect" name="downEffect" class="demo_field">
                            </select>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" id="random">Random<i class="mdi-content-send right"></i></button>&nbsp;&nbsp;&nbsp;
                    <button class="btn waves-effect waves-light" type="submit" name="action">Run<i class="mdi-content-send right"></i></button>
                </form>
            </div>
            <div class="col s8"></div>
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
        &lt;title&gt;HeadroomJs Example - laptrinh.senviet.org&lt;/title&gt;</code></pre>
<pre style="margin:-.5em 0;padding-top: 0;padding-bottom: 0; border-bottom: none; border-top: none"><code class="language-markup css-code"></code></pre>
<pre style="margin:-.5em 0;padding-top: 0;padding-bottom: 0; border-bottom: none; border-top: none"><code class="language-markup js-code"></code></pre>
<pre style="border-top: none"><code class="language-markup">        &lt;script src=&quot;js/Debouncer.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;js/headroom.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;https://code.jquery.com/jquery-2.1.1.min.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;js/jQuery.headroom.js&quot;&gt;&lt;/script&gt;
    &lt;/head&gt;
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