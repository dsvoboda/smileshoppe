<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/smileshoppe/templates/layout/html.html.twig */
class __TwigTemplate_9ab5df8a0622da0660f1fe6dcb2590d2b479dea1cff210bd07d8dea9d33b0341 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 30];
        $filters = ["clean_class" => 32, "escape" => 39, "safe_join" => 43, "t" => 62];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'safe_join', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 30
        $context["body_classes"] = [0 => ((        // line 31
($context["logged_in"] ?? null)) ? ("user-authenticated") : ("")), 1 => (( !        // line 32
($context["root_path"] ?? null)) ? ("front") : (\Drupal\Component\Utility\Html::getClass("not-front"))), 2 => ((        // line 33
($context["node_type"] ?? null)) ? (("page-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null))))) : ("")), 3 => ((        // line 34
($context["nid"] ?? null)) ? ((("nid-" . $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null))) . \Drupal\Component\Utility\Html::getClass(""))) : ("")), 4 => ((        // line 35
($context["db_offline"] ?? null)) ? ("db-offline") : (""))];
        // line 38
        echo "<!DOCTYPE html>
<html";
        // line 39
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["html_attributes"] ?? null), "addClass", [0 => "no-js"], "method")), "html", null, true);
        echo ">
\t<head>
\t\t<script data-script=\"gtm\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PMM3C9D');</script>
\t\t<head-placeholder token=\"";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
\t\t<title>";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null)), " | "));
        echo "</title> 
\t\t<css-placeholder token=\"";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
\t\t<style>.dialog-off-canvas-main-canvas{-webkit-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out}.async-hide .dialog-off-canvas-main-canvas{opacity:0 !important}.async-hide .lds-roller{display:inline-block;position:fixed;top:50%;left:50%;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%)}.lds-roller{display:none;position:relative;width:80px;height:80px}.lds-roller div{-webkit-animation:lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;animation:lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;-webkit-transform-origin:40px 40px;transform-origin:40px 40px}.lds-roller div:after{content:\" \";display:block;position:absolute;width:7px;height:7px;border-radius:50%;background:#006bad;margin:-4px 0 0 -4px}.lds-roller div:nth-child(1){-webkit-animation-delay:-0.036s;animation-delay:-0.036s}.lds-roller div:nth-child(1):after{top:63px;left:63px}.lds-roller div:nth-child(2){-webkit-animation-delay:-0.072s;animation-delay:-0.072s}.lds-roller div:nth-child(2):after{top:68px;left:56px}.lds-roller div:nth-child(3){-webkit-animation-delay:-0.108s;animation-delay:-0.108s}.lds-roller div:nth-child(3):after{top:71px;left:48px}.lds-roller div:nth-child(4){-webkit-animation-delay:-0.144s;animation-delay:-0.144s}.lds-roller div:nth-child(4):after{top:72px;left:40px}.lds-roller div:nth-child(5){-webkit-animation-delay:-0.18s;animation-delay:-0.18s}.lds-roller div:nth-child(5):after{top:71px;left:32px}.lds-roller div:nth-child(6){-webkit-animation-delay:-0.216s;animation-delay:-0.216s}.lds-roller div:nth-child(6):after{top:68px;left:24px}.lds-roller div:nth-child(7){-webkit-animation-delay:-0.252s;animation-delay:-0.252s}.lds-roller div:nth-child(7):after{top:63px;left:17px}.lds-roller div:nth-child(8){-webkit-animation-delay:-0.288s;animation-delay:-0.288s}.lds-roller div:nth-child(8):after{top:56px;left:12px}@-webkit-keyframes lds-roller{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes lds-roller{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>
\t\t<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
\t\th.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
\t\t(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
\t\t})(window,document.documentElement,'async-hide','dataLayer',4000,
\t\t{'GTM-PMM3C9D':true});</script>
\t\t<script data-script=\"modernizr\" type=\"text/javascript\">
\t\t\t!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,a,i,s;for(var l in b)if(b.hasOwnProperty(l)){if(e=[],t=b[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,\"function\")?t.fn():t.fn,a=0;a<e.length;a++)i=e[a],s=i.split(\".\"),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),w.push((o?\"\":\"no-\")+s.join(\"-\"))}}function a(e){var t=C.className,n=Modernizr._config.classPrefix||\"\";if(S&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp(\"(^|\\\\s)\"+n+\"no-js(\\\\s|\$)\");t=t.replace(r,\"\$1\"+n+\"js\$2\")}Modernizr._config.enableClasses&&(t+=\" \"+n+e.join(\" \"+n),S?C.className.baseVal=t:C.className=t)}function i(e,t){if(\"object\"==typeof e)for(var n in e)x(e,n)&&i(n,e[n]);else{e=e.toLowerCase();var r=e.split(\".\"),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),\"undefined\"!=typeof o)return Modernizr;t=\"function\"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),a([(t&&0!=t?\"\":\"no-\")+r.join(\"-\")]),Modernizr._trigger(e,t)}return Modernizr}function s(e,t){return!!~(\"\"+e).indexOf(t)}function l(){return\"function\"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,\"http://www.w3.org/2000/svg\",arguments[0]):t.createElement.apply(t,arguments)}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,\"\")}function A(e,t){return function(){return e.apply(t,arguments)}}function c(e,t,n){var o;for(var a in e)if(e[a]in t)return n===!1?e[a]:(o=t[e[a]],r(o,\"function\")?A(o,n||t):o);return!1}function f(e){return e.replace(/([A-Z])/g,function(e,t){return\"-\"+t.toLowerCase()}).replace(/^ms-/,\"-ms-\")}function d(t,n,r){var o;if(\"getComputedStyle\"in e){o=getComputedStyle.call(e,t,n);var a=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(a){var i=a.error?\"error\":\"log\";a[i].call(a,\"getComputedStyle returning null, its possible modernizr test results are inaccurate\")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function p(){var e=t.body;return e||(e=l(S?\"svg\":\"body\"),e.fake=!0),e}function m(e,n,r,o){var a,i,s,u,A=\"modernizr\",c=l(\"div\"),f=p();if(parseInt(r,10))for(;r--;)s=l(\"div\"),s.id=o?o[r]:A+(r+1),c.appendChild(s);return a=l(\"style\"),a.type=\"text/css\",a.id=\"s\"+A,(f.fake?f:c).appendChild(a),f.appendChild(c),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(t.createTextNode(e)),c.id=A,f.fake&&(f.style.background=\"\",f.style.overflow=\"hidden\",u=C.style.overflow,C.style.overflow=\"hidden\",C.appendChild(f)),i=n(c,e),f.fake?(f.parentNode.removeChild(f),C.style.overflow=u,C.offsetHeight):c.parentNode.removeChild(c),!!i}function h(t,r){var o=t.length;if(\"CSS\"in e&&\"supports\"in e.CSS){for(;o--;)if(e.CSS.supports(f(t[o]),r))return!0;return!1}if(\"CSSSupportsRule\"in e){for(var a=[];o--;)a.push(\"(\"+f(t[o])+\":\"+r+\")\");return a=a.join(\" or \"),m(\"@supports (\"+a+\") { #modernizr { position: absolute; } }\",function(e){return\"absolute\"==d(e,null,\"position\")})}return n}function g(e,t,o,a){function i(){c&&(delete T.style,delete T.modElem)}if(a=r(a,\"undefined\")?!1:a,!r(o,\"undefined\")){var A=h(e,o);if(!r(A,\"undefined\"))return A}for(var c,f,d,p,m,g=[\"modernizr\",\"tspan\",\"samp\"];!T.style&&g.length;)c=!0,T.modElem=l(g.shift()),T.style=T.modElem.style;for(d=e.length,f=0;d>f;f++)if(p=e[f],m=T.style[p],s(p,\"-\")&&(p=u(p)),T.style[p]!==n){if(a||r(o,\"undefined\"))return i(),\"pfx\"==t?p:!0;try{T.style[p]=o}catch(v){}if(T.style[p]!=m)return i(),\"pfx\"==t?p:!0}return i(),!1}function v(e,t,n,o,a){var i=e.charAt(0).toUpperCase()+e.slice(1),s=(e+\" \"+_.join(i+\" \")+i).split(\" \");return r(t,\"string\")||r(t,\"undefined\")?g(s,t,o,a):(s=(e+\" \"+Q.join(i+\" \")+i).split(\" \"),c(s,t,n))}function y(e,t,r){return v(e,n,n,t,r)}var w=[],b=[],E={_version:\"3.6.0\",_config:{classPrefix:\"\",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){b.push({name:e,fn:t,options:n})},addAsyncTest:function(e){b.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=E,Modernizr=new Modernizr,Modernizr.addTest(\"picture\",\"HTMLPictureElement\"in e);var C=t.documentElement,S=\"svg\"===C.nodeName.toLowerCase();S||!function(e,t){function n(e,t){var n=e.createElement(\"p\"),r=e.getElementsByTagName(\"head\")[0]||e.documentElement;return n.innerHTML=\"x<style>\"+t+\"</style>\",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=y.elements;return\"string\"==typeof e?e.split(\" \"):e}function o(e,t){var n=y.elements;\"string\"!=typeof n&&(n=n.join(\" \")),\"string\"!=typeof e&&(e=e.join(\" \")),y.elements=n+\" \"+e,u(t)}function a(e){var t=v[e[h]];return t||(t={},g++,e[h]=g,v[g]=t),t}function i(e,n,r){if(n||(n=t),c)return n.createElement(e);r||(r=a(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():m.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||p.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),c)return e.createDocumentFragment();n=n||a(e);for(var o=n.frag.cloneNode(),i=0,s=r(),l=s.length;l>i;i++)o.createElement(s[i]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return y.shivMethods?i(n,e,t):t.createElem(n)},e.createDocumentFragment=Function(\"h,f\",\"return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(\"+r().join().replace(/[\\w\\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c(\"'+e+'\")'})+\");return n}\")(y,t.frag)}function u(e){e||(e=t);var r=a(e);return!y.shivCSS||A||r.hasCSS||(r.hasCSS=!!n(e,\"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}\")),c||l(e,r),e}var A,c,f=\"3.7.3\",d=e.html5||{},p=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)\$/i,m=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)\$/i,h=\"_html5shiv\",g=0,v={};!function(){try{var e=t.createElement(\"a\");e.innerHTML=\"<xyz></xyz>\",A=\"hidden\"in e,c=1==e.childNodes.length||function(){t.createElement(\"a\");var e=t.createDocumentFragment();return\"undefined\"==typeof e.cloneNode||\"undefined\"==typeof e.createDocumentFragment||\"undefined\"==typeof e.createElement}()}catch(n){A=!0,c=!0}}();var y={elements:d.elements||\"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video\",version:f,shivCSS:d.shivCSS!==!1,supportsUnknownElements:c,shivMethods:d.shivMethods!==!1,type:\"default\",shivDocument:u,createElement:i,createDocumentFragment:s,addElements:o};e.html5=y,u(t),\"object\"==typeof module&&module.exports&&(module.exports=y)}(\"undefined\"!=typeof e?e:this,t);var x;!function(){var e={}.hasOwnProperty;x=r(e,\"undefined\")||r(e.call,\"undefined\")?function(e,t){return t in e&&r(e.constructor.prototype[t],\"undefined\")}:function(t,n){return e.call(t,n)}}(),E._l={},E.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},E._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){E.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,t,n){function r(t){var r=t&&\"load\"===t.type?1==o.width:!1,a=\"webp\"===e;i(e,a&&r?new Boolean(r):r),n&&n(t)}var o=new Image;o.onerror=r,o.onload=r,o.src=t}var t=[{uri:\"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=\",name:\"webp\"},{uri:\"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==\",name:\"webp.alpha\"},{uri:\"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA\",name:\"webp.animation\"},{uri:\"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=\",name:\"webp.lossless\"}],n=t.shift();e(n.name,n.uri,function(n){if(n&&\"load\"===n.type)for(var r=0;r<t.length;r++)e(t[r].name,t[r].uri)})}),Modernizr.addAsyncTest(function(){var e=new Image;e.onerror=function(){i(\"webpalpha\",!1,{aliases:[\"webp-alpha\"]})},e.onload=function(){i(\"webpalpha\",1==e.width,{aliases:[\"webp-alpha\"]})},e.src=\"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==\"});var B=\"Moz O ms Webkit\",_=E._config.usePrefixes?B.split(\" \"):[];E._cssomPrefixes=_;var Q=E._config.usePrefixes?B.toLowerCase().split(\" \"):[];E._domPrefixes=Q;var D={elem:l(\"modernizr\")};Modernizr._q.push(function(){delete D.elem});var T={style:D.elem.style};Modernizr._q.unshift(function(){delete T.style}),E.testAllProps=v,E.testAllProps=y,Modernizr.addTest(\"flexbox\",y(\"flexBasis\",\"1px\",!0)),Modernizr.addTest(\"flexwrap\",y(\"flexWrap\",\"wrap\",!0)),o(),a(w),delete E.addTest,delete E.addAsyncTest;for(var U=0;U<Modernizr._q.length;U++)Modernizr._q[U]();e.Modernizr=Modernizr}(window,document);
\t\t</script> 
\t\t<js-placeholder token=\"";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
\t</head>
\t<body";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t\t";
        // line 61
        echo "\t\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-PMM3C9D\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Skip to main content"));
        echo "</a>
\t\t";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null)), "html", null, true);
        echo "
\t\t";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null)), "html", null, true);
        echo "
\t\t";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null)), "html", null, true);
        echo "
\t\t";
        // line 67
        echo "\t\t<div class=\"lds-roller\"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
\t\t";
        // line 69
        echo "\t\t<js-bottom-placeholder token=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null)), "html", null, true);
        echo "\">
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/smileshoppe/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 69,  120 => 67,  116 => 65,  112 => 64,  108 => 63,  104 => 62,  101 => 61,  97 => 56,  92 => 54,  79 => 44,  75 => 43,  71 => 42,  65 => 39,  62 => 38,  60 => 35,  59 => 34,  58 => 33,  57 => 32,  56 => 31,  55 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain one or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 */
 
 Google optimize snippets marked for removal when not testing.
 
#}
{%
\tset body_classes = [
\t\tlogged_in ? 'user-authenticated',
\t\tnot root_path ? 'front' : 'not-front'|clean_class,
\t\tnode_type ? 'page-type-' ~ node_type|clean_class,
\t\tnid ? 'nid-' ~ nid ~ ''|clean_class,
\t\tdb_offline ? 'db-offline'
\t]
%}
<!DOCTYPE html>
<html{{ html_attributes.addClass('no-js') }}>
\t<head>
\t\t<script data-script=\"gtm\">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-PMM3C9D');</script>
\t\t<head-placeholder token=\"{{ placeholder_token }}\">
\t\t<title>{{ head_title|safe_join(' | ') }}</title> 
\t\t<css-placeholder token=\"{{ placeholder_token }}\">
\t\t<style>.dialog-off-canvas-main-canvas{-webkit-transition:opacity .5s ease-in-out;transition:opacity .5s ease-in-out}.async-hide .dialog-off-canvas-main-canvas{opacity:0 !important}.async-hide .lds-roller{display:inline-block;position:fixed;top:50%;left:50%;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%)}.lds-roller{display:none;position:relative;width:80px;height:80px}.lds-roller div{-webkit-animation:lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;animation:lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;-webkit-transform-origin:40px 40px;transform-origin:40px 40px}.lds-roller div:after{content:\" \";display:block;position:absolute;width:7px;height:7px;border-radius:50%;background:#006bad;margin:-4px 0 0 -4px}.lds-roller div:nth-child(1){-webkit-animation-delay:-0.036s;animation-delay:-0.036s}.lds-roller div:nth-child(1):after{top:63px;left:63px}.lds-roller div:nth-child(2){-webkit-animation-delay:-0.072s;animation-delay:-0.072s}.lds-roller div:nth-child(2):after{top:68px;left:56px}.lds-roller div:nth-child(3){-webkit-animation-delay:-0.108s;animation-delay:-0.108s}.lds-roller div:nth-child(3):after{top:71px;left:48px}.lds-roller div:nth-child(4){-webkit-animation-delay:-0.144s;animation-delay:-0.144s}.lds-roller div:nth-child(4):after{top:72px;left:40px}.lds-roller div:nth-child(5){-webkit-animation-delay:-0.18s;animation-delay:-0.18s}.lds-roller div:nth-child(5):after{top:71px;left:32px}.lds-roller div:nth-child(6){-webkit-animation-delay:-0.216s;animation-delay:-0.216s}.lds-roller div:nth-child(6):after{top:68px;left:24px}.lds-roller div:nth-child(7){-webkit-animation-delay:-0.252s;animation-delay:-0.252s}.lds-roller div:nth-child(7):after{top:63px;left:17px}.lds-roller div:nth-child(8){-webkit-animation-delay:-0.288s;animation-delay:-0.288s}.lds-roller div:nth-child(8):after{top:56px;left:12px}@-webkit-keyframes lds-roller{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes lds-roller{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}</style>
\t\t<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
\t\th.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
\t\t(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
\t\t})(window,document.documentElement,'async-hide','dataLayer',4000,
\t\t{'GTM-PMM3C9D':true});</script>
\t\t<script data-script=\"modernizr\" type=\"text/javascript\">
\t\t\t!function(e,t,n){function r(e,t){return typeof e===t}function o(){var e,t,n,o,a,i,s;for(var l in b)if(b.hasOwnProperty(l)){if(e=[],t=b[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(o=r(t.fn,\"function\")?t.fn():t.fn,a=0;a<e.length;a++)i=e[a],s=i.split(\".\"),1===s.length?Modernizr[s[0]]=o:(!Modernizr[s[0]]||Modernizr[s[0]]instanceof Boolean||(Modernizr[s[0]]=new Boolean(Modernizr[s[0]])),Modernizr[s[0]][s[1]]=o),w.push((o?\"\":\"no-\")+s.join(\"-\"))}}function a(e){var t=C.className,n=Modernizr._config.classPrefix||\"\";if(S&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp(\"(^|\\\\s)\"+n+\"no-js(\\\\s|\$)\");t=t.replace(r,\"\$1\"+n+\"js\$2\")}Modernizr._config.enableClasses&&(t+=\" \"+n+e.join(\" \"+n),S?C.className.baseVal=t:C.className=t)}function i(e,t){if(\"object\"==typeof e)for(var n in e)x(e,n)&&i(n,e[n]);else{e=e.toLowerCase();var r=e.split(\".\"),o=Modernizr[r[0]];if(2==r.length&&(o=o[r[1]]),\"undefined\"!=typeof o)return Modernizr;t=\"function\"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),a([(t&&0!=t?\"\":\"no-\")+r.join(\"-\")]),Modernizr._trigger(e,t)}return Modernizr}function s(e,t){return!!~(\"\"+e).indexOf(t)}function l(){return\"function\"!=typeof t.createElement?t.createElement(arguments[0]):S?t.createElementNS.call(t,\"http://www.w3.org/2000/svg\",arguments[0]):t.createElement.apply(t,arguments)}function u(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,\"\")}function A(e,t){return function(){return e.apply(t,arguments)}}function c(e,t,n){var o;for(var a in e)if(e[a]in t)return n===!1?e[a]:(o=t[e[a]],r(o,\"function\")?A(o,n||t):o);return!1}function f(e){return e.replace(/([A-Z])/g,function(e,t){return\"-\"+t.toLowerCase()}).replace(/^ms-/,\"-ms-\")}function d(t,n,r){var o;if(\"getComputedStyle\"in e){o=getComputedStyle.call(e,t,n);var a=e.console;if(null!==o)r&&(o=o.getPropertyValue(r));else if(a){var i=a.error?\"error\":\"log\";a[i].call(a,\"getComputedStyle returning null, its possible modernizr test results are inaccurate\")}}else o=!n&&t.currentStyle&&t.currentStyle[r];return o}function p(){var e=t.body;return e||(e=l(S?\"svg\":\"body\"),e.fake=!0),e}function m(e,n,r,o){var a,i,s,u,A=\"modernizr\",c=l(\"div\"),f=p();if(parseInt(r,10))for(;r--;)s=l(\"div\"),s.id=o?o[r]:A+(r+1),c.appendChild(s);return a=l(\"style\"),a.type=\"text/css\",a.id=\"s\"+A,(f.fake?f:c).appendChild(a),f.appendChild(c),a.styleSheet?a.styleSheet.cssText=e:a.appendChild(t.createTextNode(e)),c.id=A,f.fake&&(f.style.background=\"\",f.style.overflow=\"hidden\",u=C.style.overflow,C.style.overflow=\"hidden\",C.appendChild(f)),i=n(c,e),f.fake?(f.parentNode.removeChild(f),C.style.overflow=u,C.offsetHeight):c.parentNode.removeChild(c),!!i}function h(t,r){var o=t.length;if(\"CSS\"in e&&\"supports\"in e.CSS){for(;o--;)if(e.CSS.supports(f(t[o]),r))return!0;return!1}if(\"CSSSupportsRule\"in e){for(var a=[];o--;)a.push(\"(\"+f(t[o])+\":\"+r+\")\");return a=a.join(\" or \"),m(\"@supports (\"+a+\") { #modernizr { position: absolute; } }\",function(e){return\"absolute\"==d(e,null,\"position\")})}return n}function g(e,t,o,a){function i(){c&&(delete T.style,delete T.modElem)}if(a=r(a,\"undefined\")?!1:a,!r(o,\"undefined\")){var A=h(e,o);if(!r(A,\"undefined\"))return A}for(var c,f,d,p,m,g=[\"modernizr\",\"tspan\",\"samp\"];!T.style&&g.length;)c=!0,T.modElem=l(g.shift()),T.style=T.modElem.style;for(d=e.length,f=0;d>f;f++)if(p=e[f],m=T.style[p],s(p,\"-\")&&(p=u(p)),T.style[p]!==n){if(a||r(o,\"undefined\"))return i(),\"pfx\"==t?p:!0;try{T.style[p]=o}catch(v){}if(T.style[p]!=m)return i(),\"pfx\"==t?p:!0}return i(),!1}function v(e,t,n,o,a){var i=e.charAt(0).toUpperCase()+e.slice(1),s=(e+\" \"+_.join(i+\" \")+i).split(\" \");return r(t,\"string\")||r(t,\"undefined\")?g(s,t,o,a):(s=(e+\" \"+Q.join(i+\" \")+i).split(\" \"),c(s,t,n))}function y(e,t,r){return v(e,n,n,t,r)}var w=[],b=[],E={_version:\"3.6.0\",_config:{classPrefix:\"\",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){b.push({name:e,fn:t,options:n})},addAsyncTest:function(e){b.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=E,Modernizr=new Modernizr,Modernizr.addTest(\"picture\",\"HTMLPictureElement\"in e);var C=t.documentElement,S=\"svg\"===C.nodeName.toLowerCase();S||!function(e,t){function n(e,t){var n=e.createElement(\"p\"),r=e.getElementsByTagName(\"head\")[0]||e.documentElement;return n.innerHTML=\"x<style>\"+t+\"</style>\",r.insertBefore(n.lastChild,r.firstChild)}function r(){var e=y.elements;return\"string\"==typeof e?e.split(\" \"):e}function o(e,t){var n=y.elements;\"string\"!=typeof n&&(n=n.join(\" \")),\"string\"!=typeof e&&(e=e.join(\" \")),y.elements=n+\" \"+e,u(t)}function a(e){var t=v[e[h]];return t||(t={},g++,e[h]=g,v[g]=t),t}function i(e,n,r){if(n||(n=t),c)return n.createElement(e);r||(r=a(n));var o;return o=r.cache[e]?r.cache[e].cloneNode():m.test(e)?(r.cache[e]=r.createElem(e)).cloneNode():r.createElem(e),!o.canHaveChildren||p.test(e)||o.tagUrn?o:r.frag.appendChild(o)}function s(e,n){if(e||(e=t),c)return e.createDocumentFragment();n=n||a(e);for(var o=n.frag.cloneNode(),i=0,s=r(),l=s.length;l>i;i++)o.createElement(s[i]);return o}function l(e,t){t.cache||(t.cache={},t.createElem=e.createElement,t.createFrag=e.createDocumentFragment,t.frag=t.createFrag()),e.createElement=function(n){return y.shivMethods?i(n,e,t):t.createElem(n)},e.createDocumentFragment=Function(\"h,f\",\"return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(\"+r().join().replace(/[\\w\\-:]+/g,function(e){return t.createElem(e),t.frag.createElement(e),'c(\"'+e+'\")'})+\");return n}\")(y,t.frag)}function u(e){e||(e=t);var r=a(e);return!y.shivCSS||A||r.hasCSS||(r.hasCSS=!!n(e,\"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}\")),c||l(e,r),e}var A,c,f=\"3.7.3\",d=e.html5||{},p=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)\$/i,m=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)\$/i,h=\"_html5shiv\",g=0,v={};!function(){try{var e=t.createElement(\"a\");e.innerHTML=\"<xyz></xyz>\",A=\"hidden\"in e,c=1==e.childNodes.length||function(){t.createElement(\"a\");var e=t.createDocumentFragment();return\"undefined\"==typeof e.cloneNode||\"undefined\"==typeof e.createDocumentFragment||\"undefined\"==typeof e.createElement}()}catch(n){A=!0,c=!0}}();var y={elements:d.elements||\"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output picture progress section summary template time video\",version:f,shivCSS:d.shivCSS!==!1,supportsUnknownElements:c,shivMethods:d.shivMethods!==!1,type:\"default\",shivDocument:u,createElement:i,createDocumentFragment:s,addElements:o};e.html5=y,u(t),\"object\"==typeof module&&module.exports&&(module.exports=y)}(\"undefined\"!=typeof e?e:this,t);var x;!function(){var e={}.hasOwnProperty;x=r(e,\"undefined\")||r(e.call,\"undefined\")?function(e,t){return t in e&&r(e.constructor.prototype[t],\"undefined\")}:function(t,n){return e.call(t,n)}}(),E._l={},E.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},E._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){E.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,t,n){function r(t){var r=t&&\"load\"===t.type?1==o.width:!1,a=\"webp\"===e;i(e,a&&r?new Boolean(r):r),n&&n(t)}var o=new Image;o.onerror=r,o.onload=r,o.src=t}var t=[{uri:\"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=\",name:\"webp\"},{uri:\"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==\",name:\"webp.alpha\"},{uri:\"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA\",name:\"webp.animation\"},{uri:\"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=\",name:\"webp.lossless\"}],n=t.shift();e(n.name,n.uri,function(n){if(n&&\"load\"===n.type)for(var r=0;r<t.length;r++)e(t[r].name,t[r].uri)})}),Modernizr.addAsyncTest(function(){var e=new Image;e.onerror=function(){i(\"webpalpha\",!1,{aliases:[\"webp-alpha\"]})},e.onload=function(){i(\"webpalpha\",1==e.width,{aliases:[\"webp-alpha\"]})},e.src=\"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==\"});var B=\"Moz O ms Webkit\",_=E._config.usePrefixes?B.split(\" \"):[];E._cssomPrefixes=_;var Q=E._config.usePrefixes?B.toLowerCase().split(\" \"):[];E._domPrefixes=Q;var D={elem:l(\"modernizr\")};Modernizr._q.push(function(){delete D.elem});var T={style:D.elem.style};Modernizr._q.unshift(function(){delete T.style}),E.testAllProps=v,E.testAllProps=y,Modernizr.addTest(\"flexbox\",y(\"flexBasis\",\"1px\",!0)),Modernizr.addTest(\"flexwrap\",y(\"flexWrap\",\"wrap\",!0)),o(),a(w),delete E.addTest,delete E.addAsyncTest;for(var U=0;U<Modernizr._q.length;U++)Modernizr._q[U]();e.Modernizr=Modernizr}(window,document);
\t\t</script> 
\t\t<js-placeholder token=\"{{ placeholder_token }}\">
\t</head>
\t<body{{ attributes.addClass(body_classes) }}>
\t\t{#
\t\tKeyboard navigation/accessibility link to main content section in
\t\tpage.html.twig.
\t\t#}
\t\t<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-PMM3C9D\" height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
\t\t<a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">{{ 'Skip to main content'|t }}</a>
\t\t{{ page_top }}
\t\t{{ page }}
\t\t{{ page_bottom }}
\t\t{# Google Optimize #}
\t\t<div class=\"lds-roller\"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
\t\t{# /Google Optimize #}
\t\t<js-bottom-placeholder token=\"{{ placeholder_token }}\">
\t</body>
</html>
", "themes/custom/smileshoppe/templates/layout/html.html.twig", "/nfs/c03/h03/mnt/49724/domains/dsvoboda.com/html/themes/custom/smileshoppe/templates/layout/html.html.twig");
    }
}
