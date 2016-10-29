<?php

/* C:\xampp\htdocs\louhan/themes/jtherczeg-corlate/pages/test.htm */
class __TwigTemplate_756fc624bf609eaa61b19d07b5c702c26b7faa4dca8f696035817ba9a600d9ef extends Twig_Template
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
        echo "<a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("test");
        echo "\" data-google-event-name=\"TestKlik\">Contact</a>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("google_event"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\louhan/themes/jtherczeg-corlate/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
/* <a href="{{ 'test'|page }}" data-google-event-name="TestKlik">Contact</a>*/
/* {% component 'google_event' %}*/
