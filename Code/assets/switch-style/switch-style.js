/*!
 * jQuery Cookie Plugin v1.4.1
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2006, 2014 Klaus Hartl
 * Released under the MIT license
 */

!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):"object"==typeof exports?a(require("jquery")):a(jQuery)}(function(a){function c(a){return h.raw?a:encodeURIComponent(a)}function d(a){return h.raw?a:decodeURIComponent(a)}function e(a){return c(h.json?JSON.stringify(a):String(a))}function f(a){0===a.indexOf('"')&&(a=a.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return a=decodeURIComponent(a.replace(b," ")),h.json?JSON.parse(a):a}catch(c){}}function g(b,c){var d=h.raw?b:f(b);return a.isFunction(c)?c(d):d}var b=/\+/g,h=a.cookie=function(b,f,i){if(arguments.length>1&&!a.isFunction(f)){if(i=a.extend({},h.defaults,i),"number"==typeof i.expires){var j=i.expires,k=i.expires=new Date;k.setTime(+k+864e5*j)}return document.cookie=[c(b),"=",e(f),i.expires?"; expires="+i.expires.toUTCString():"",i.path?"; path="+i.path:"",i.domain?"; domain="+i.domain:"",i.secure?"; secure":""].join("")}for(var l=b?void 0:{},m=document.cookie?document.cookie.split("; "):[],n=0,o=m.length;o>n;n++){var p=m[n].split("="),q=d(p.shift()),r=p.join("=");if(b&&b===q){l=g(r,f);break}b||void 0===(r=g(r))||(l[q]=r)}return l};h.defaults={},a.removeCookie=function(b,c){return void 0===a.cookie(b)?!1:(a.cookie(b,"",a.extend({},c,{expires:-1})),!a.cookie(b))}});


/* Switch Style */

jQuery(document).ready(function($) {

    /* Left Panel */
    
    style_switcher = $('.style-customizer'),
    panelWidth = style_switcher.outerWidth(true);
    $('.style-customizer .opener').on("click", function(){
        var $this = $(this);
        if ($(".style-customizer.closed").length>0) { 
                style_switcher.animate({"left" : "0px"});
                $(".style-customizer.closed").removeClass("closed");
                $(".style-customizer").addClass("opened");
        } else {
                $(".style-customizer.opened").removeClass("opened");
                $(".style-customizer").addClass("closed");
                style_switcher.animate({"left" : '-' + panelWidth});
        }
        return false;
    });
		
		
    /* Resume from last selected style */
    var link = $('link[data-style="styles"]');
        //link_no_cookie = $('link[data-style="styles-no-cookie"]');
 
    var tp_stylesheet = $.cookie('tp_stylesheet');

    $(".style-customizer .selected").removeClass("selected");
    if (!($.cookie('tp_stylesheet'))) {
        $.cookie('tp_stylesheet', 'skin-default', 30);
        tp_stylesheet = $.cookie('tp_stylesheet');
        $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");
    } else {
        if (link.length>0) {
            link.attr('href','assets/css/color/' + tp_stylesheet + '.css');
            $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");			 	
        };
    };	
       
    $('.style-customizer .backgroundChange li.selected').removeClass("selected");
    
     /* Color Changer */
    $('.style-customizer .styleChange li').on('click',function(){
        if (link.length>0) {
            var $this = $(this),
                tp_stylesheet = $this.data('style');
                
            $(".style-customizer .styleChange .selected").removeClass("selected");
            $this.addClass("selected");
            link.attr('href', 'assets/css/color/' + tp_stylesheet + '.css');
            $.cookie('tp_stylesheet', tp_stylesheet, 30);
        } else {
            var $this = $(this),
                tp_stylesheet_no_cookie = $this.data('style');
            
            $(".style-customizer .styleChange .selected").removeClass("selected");
            $this.addClass("selected");
            //link_no_cookie.attr('href', 'assets/css/color/' + tp_stylesheet_no_cookie + '.css');
        };
    });
    
    		
    /* Reset all customize  */
    $('.style-customizer .resetAll li a.button-reset').on('click',function() { 
               
        $.cookie('tp_stylesheet', 'skin-default', 30);
        var tp_stylesheet = 'skin-default';
        $('.style-customizer .styleChange li.selected').removeClass("selected");
        $('.style-customizer .styleChange li[data-style="'+tp_stylesheet+'"]').addClass("selected");
        link.attr('href', 'css/color/' + tp_stylesheet + '.css');                       
    });

});
