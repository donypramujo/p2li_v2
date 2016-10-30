<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/pages/home.htm */
class __TwigTemplate_b7e2bfd9866c00bb64e196f346651cb2cdcdf7964489ddc852fec7c159a9dc8b extends Twig_Template
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
        echo "<section id=\"main-slider\" class=\"no-margin\">
\t";
        // line 2
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("carousel"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 3
        echo "    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section>

<section id=\"recent-works\">
\t";
        // line 16
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("works"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 17
        echo "</section>

<section id=\"services\" class=\"service-item\">
\t";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("services"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</section>

<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 26
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("skills"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 27
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("accordion"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id=\"content\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t";
        // line 35
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("tabs"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "\t\t\t";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("testimonials"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content-->

<section id=\"partner\">
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("partners"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "</section><!--/#partner-->

<section id=\"conatcat-info\">
\t";
        // line 46
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('CMS')->contentFunction("contact-info.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 47
        echo "</section><!--/#conatcat-info-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  109 => 46,  104 => 43,  100 => 42,  93 => 37,  88 => 36,  84 => 35,  75 => 28,  70 => 27,  66 => 26,  59 => 21,  55 => 20,  50 => 17,  46 => 16,  41 => 13,  37 => 12,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"main-slider\" class=\"no-margin\">
\t{% partial \"carousel\" %}
    <a class=\"prev hidden-xs\" href=\"#main-slider\" data-slide=\"prev\">
        <i class=\"fa fa-chevron-left\"></i>
    </a>
    <a class=\"next hidden-xs\" href=\"#main-slider\" data-slide=\"next\">
        <i class=\"fa fa-chevron-right\"></i>
    </a>
</section>

<section id=\"feature\">
\t{% partial \"features\" %}
</section>

<section id=\"recent-works\">
\t{% partial \"works\" %}
</section>

<section id=\"services\" class=\"service-item\">
\t{% partial \"services\" %}
</section>

<section id=\"middle\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"skills\" %}
\t\t\t{% partial \"accordion\" %}
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->

<section id=\"content\">
    <div class=\"container\">
        <div class=\"row\">
\t\t\t{% partial \"tabs\" %}
\t\t\t{% partial \"testimonials\" %}
        </div><!--/.row-->
    <div><!--/.container-->
</section><!--/#content-->

<section id=\"partner\">
\t{% partial \"partners\" %}
</section><!--/#partner-->

<section id=\"conatcat-info\">
\t{% content \"contact-info.htm\" %}
</section><!--/#conatcat-info-->";
    }
}
