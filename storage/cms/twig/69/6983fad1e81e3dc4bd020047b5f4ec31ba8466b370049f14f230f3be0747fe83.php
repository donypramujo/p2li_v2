<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/partials/bottom.htm */
class __TwigTemplate_4c9ca24ccbdb38ec8c7a953de50af4e1f0c94cef3273b28d3351db5b420ae768 extends Twig_Template
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
        echo "<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Company</h3>
                    <ul>
                        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/about");
        echo "\">About us</a></li>
                        <li><a href=\"#\">We are hiring</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("samples/contact");
        echo "\">Contact us</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog/blog");
        echo "\">Blog</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">Documentation</a></li>
                        <li><a href=\"#\">Refund policy</a></li>
                        <li><a href=\"#\">Ticket system</a></li>
                        <li><a href=\"#\">Billing system</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">SEO Marketing</a></li>
                        <li><a href=\"#\">Theme</a></li>
                        <li><a href=\"#\">Development</a></li>
                        <li><a href=\"#\">Email Marketing</a></li>
                        <li><a href=\"#\">Plugin Development</a></li>
                        <li><a href=\"#\">Article Writing</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Our Partners</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"#\">Adipisicing Elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Eiusmod</a></li>
                        <li><a href=\"#\">Tempor</a></li>
                        <li><a href=\"#\">Veniam</a></li>
                        <li><a href=\"#\">Exercitation</a></li>
                        <li><a href=\"#\">Ullamco</a></li>
                        <li><a href=\"#\">Laboris</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/partials/bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  36 => 13,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"container wow fadeInDown\" data-wow-duration=\"1000ms\" data-wow-delay=\"600ms\">
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Company</h3>
                    <ul>
                        <li><a href=\"{{ 'samples/about'|page }}\">About us</a></li>
                        <li><a href=\"#\">We are hiring</a></li>
                        <li><a href=\"#\">Meet the team</a></li>
                        <li><a href=\"#\">Copyright</a></li>
                        <li><a href=\"#\">Terms of use</a></li>
                        <li><a href=\"#\">Privacy policy</a></li>
                        <li><a href=\"{{ 'samples/contact'|page }}\">Contact us</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Support</h3>
                    <ul>
                        <li><a href=\"#\">Faq</a></li>
                        <li><a href=\"{{ 'blog/blog'|page }}\">Blog</a></li>
                        <li><a href=\"#\">Forum</a></li>
                        <li><a href=\"#\">Documentation</a></li>
                        <li><a href=\"#\">Refund policy</a></li>
                        <li><a href=\"#\">Ticket system</a></li>
                        <li><a href=\"#\">Billing system</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Developers</h3>
                    <ul>
                        <li><a href=\"#\">Web Development</a></li>
                        <li><a href=\"#\">SEO Marketing</a></li>
                        <li><a href=\"#\">Theme</a></li>
                        <li><a href=\"#\">Development</a></li>
                        <li><a href=\"#\">Email Marketing</a></li>
                        <li><a href=\"#\">Plugin Development</a></li>
                        <li><a href=\"#\">Article Writing</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->

            <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget\">
                    <h3>Our Partners</h3>
                    <ul>
\t\t\t\t\t\t<li><a href=\"#\">Adipisicing Elit</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Eiusmod</a></li>
                        <li><a href=\"#\">Tempor</a></li>
                        <li><a href=\"#\">Veniam</a></li>
                        <li><a href=\"#\">Exercitation</a></li>
                        <li><a href=\"#\">Ullamco</a></li>
                        <li><a href=\"#\">Laboris</a></li>
                    </ul>
                </div>    
            </div><!--/.col-md-3-->
        </div>
    </div>";
    }
}
