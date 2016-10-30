<?php

/* C:\xampp\htdocs\p2li_v2/themes/jtherczeg-corlate/partials/tabs.htm */
class __TwigTemplate_e137c0b4841e3d47ef962c01bfd6d31e22f6804bcf28313011b0166e9820a242 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                   <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Responsive Web Design</a></li>
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Premium Plugin Included</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Predefine Layout</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                                    <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade\" id=\"tab1\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/tab2.png");
        echo "\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class=\"tab-pane fade active in\" id=\"tab2\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/tab1.png");
        echo "\" class=\"img-responsive\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab3\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class=\"tab-pane fade\" id=\"tab4\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab5\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\p2li_v2/themes/jtherczeg-corlate/partials/tabs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 31,  39 => 19,  19 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"col-xs-12 col-sm-8 wow fadeInDown\">
                   <div class=\"tab-wrap\"> 
                        <div class=\"media\">
                            <div class=\"parrent pull-left\">
                                <ul class=\"nav nav-tabs nav-stacked\">
                                    <li class=\"\"><a href=\"#tab1\" data-toggle=\"tab\" class=\"analistic-01\">Responsive Web Design</a></li>
                                    <li class=\"active\"><a href=\"#tab2\" data-toggle=\"tab\" class=\"analistic-02\">Premium Plugin Included</a></li>
                                    <li class=\"\"><a href=\"#tab3\" data-toggle=\"tab\" class=\"tehnical\">Predefine Layout</a></li>
                                    <li class=\"\"><a href=\"#tab4\" data-toggle=\"tab\" class=\"tehnical\">Our Philosopy</a></li>
                                    <li class=\"\"><a href=\"#tab5\" data-toggle=\"tab\" class=\"tehnical\">What We Do?</a></li>
                                </ul>
                            </div>

                            <div class=\"parrent media-body\">
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade\" id=\"tab1\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img class=\"img-responsive\" src=\"{{ 'assets/images/tab2.png'|theme }}\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.</p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class=\"tab-pane fade active in\" id=\"tab2\">
                                        <div class=\"media\">
                                           <div class=\"pull-left\">
                                                <img src=\"{{ 'assets/images/tab1.png'|theme }}\" class=\"img-responsive\">
                                            </div>
                                            <div class=\"media-body\">
                                                 <h2>Adipisicing elit</h2>
                                                 <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use.
                                                 </p>
                                            </div>
                                        </div>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab3\">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                                     </div>
                                     
                                     <div class=\"tab-pane fade\" id=\"tab4\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
                                     </div>

                                     <div class=\"tab-pane fade\" id=\"tab5\">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,</p>
                                     </div>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->";
    }
}
