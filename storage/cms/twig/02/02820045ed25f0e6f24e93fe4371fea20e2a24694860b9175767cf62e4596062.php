<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/layouts/default.htm */
class __TwigTemplate_ccbf83cd19c07fa47a59dde48908e91ff1124978f67b7d468b2aedee05ae67a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_keywords", array()), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_author", array()), "html", null, true);
        echo "\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
\t
\t<!-- core CSS -->
\t";
        // line 13
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 14
        echo "\t<link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/prettyPhoto.css", 4 => "assets/css/main.css", 5 => "assets/css/responsive.css"));
        // line 20
        echo "\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
\t\t";
        // line 31
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("top"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 32
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</header><!--/header-->

    ";
        // line 35
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 36
        echo "
<section id=\"bottom\">
\t";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bottom"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue\">
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "</footer><!--/#footer-->

<!-- Scripts -->
<script type=\"text/javascript\" src=\"";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/html5shiv.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/respond.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 50
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
";
        // line 54
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 55
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        echo "             
         
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 55,  150 => 54,  146 => 53,  142 => 52,  138 => 51,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  113 => 43,  109 => 42,  104 => 39,  100 => 38,  96 => 36,  94 => 35,  90 => 33,  85 => 32,  81 => 31,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  53 => 20,  50 => 14,  47 => 13,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
\t<meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <meta name=\"author\" content=\"{{ this.page.meta_author }}\">
    <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>
\t
\t<!-- core CSS -->
\t{% styles %}
\t<link href=\"{{ ['assets/css/bootstrap.min.css',
\t\t'assets/css/font-awesome.min.css',
\t\t'assets/css/animate.min.css',
\t\t'assets/css/prettyPhoto.css',
\t\t'assets/css/main.css',
\t\t'assets/css/responsive.css',
\t]|theme }}\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ 'assets/images/ico/apple-touch-icon-144-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'assets/images/ico/apple-touch-icon-114-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'assets/images/ico/apple-touch-icon-72-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'assets/images/ico/apple-touch-icon-57-precomposed.png'|theme }}\">
</head><!--/head-->

<body class=\"homepage\">

<header id=\"header\">
\t\t{% partial \"top\" %}
        {% partial \"nav\" %}
</header><!--/header-->

    {% page %}

<section id=\"bottom\">
\t{% partial \"bottom\" %}
</section><!--/#bottom-->

<footer id=\"footer\" class=\"midnight-blue\">
\t{% partial \"footer\" %}
</footer><!--/#footer-->

<!-- Scripts -->
<script type=\"text/javascript\" src=\"{{ 'assets/js/html5shiv.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/respond.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}             
         
</body>
</html>";
    }
}
