<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/pages/404.htm */
class __TwigTemplate_f04123b4601f8b32cd8a011d9a341fa2eb73088ad60f7c490482cbb867f19d22 extends Twig_Template
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
        echo "<section id=\"error\" class=\"container text-center\">
        <h1>404, Page Not Found</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"";
        // line 4
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "<section id=\"error\" class=\"container text-center\">
        <h1>404, Page Not Found</h1>
        <p>The page you are looking for doesn't exist or another error occurred.</p>
        <a class=\"btn btn-primary\" href=\"{{ 'home'|page }}\">GO BACK TO THE HOMEPAGE</a>
    </section><!--/#error-->";
    }
}
