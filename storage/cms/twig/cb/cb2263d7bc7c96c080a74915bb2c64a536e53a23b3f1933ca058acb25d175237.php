<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/partials/partners.htm */
class __TwigTemplate_53aa67256276228d88a5dee67fc9872936e780f6611dc9c314456bdb7d408d0e extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Our Partners</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class=\"partners\">
                <ul>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/partners/partner1.png");
        echo "\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\" src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/partners/partner2.png");
        echo "\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/partners/partner3.png");
        echo "\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\" src=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/partners/partner4.png");
        echo "\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1500ms\" src=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/partners/partner5.png");
        echo "\"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/partials/partners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container\">
            <div class=\"center wow fadeInDown\">
                <h2>Our Partners</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>    

            <div class=\"partners\">
                <ul>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"300ms\" src=\"{{ 'assets/images/partners/partner1.png'|theme }}\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\" src=\"{{ 'assets/images/partners/partner2.png'|theme }}\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"900ms\" src=\"{{ 'assets/images/partners/partner3.png'|theme }}\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1200ms\" src=\"{{ 'assets/images/partners/partner4.png'|theme }}\"></a></li>
                    <li> <a href=\"#\"><img class=\"img-responsive wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"1500ms\" src=\"{{ 'assets/images/partners/partner5.png'|theme }}\"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->";
    }
}
