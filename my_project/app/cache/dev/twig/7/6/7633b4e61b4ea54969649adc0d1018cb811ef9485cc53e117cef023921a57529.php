<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_7633b4e61b4ea54969649adc0d1018cb811ef9485cc53e117cef023921a57529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_137113ceab44780b4f96096e76a56cd1eb6cf5c32d5474188f4675ce42fb429b = $this->env->getExtension("native_profiler");
        $__internal_137113ceab44780b4f96096e76a56cd1eb6cf5c32d5474188f4675ce42fb429b->enter($__internal_137113ceab44780b4f96096e76a56cd1eb6cf5c32d5474188f4675ce42fb429b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137113ceab44780b4f96096e76a56cd1eb6cf5c32d5474188f4675ce42fb429b->leave($__internal_137113ceab44780b4f96096e76a56cd1eb6cf5c32d5474188f4675ce42fb429b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2496985dd68aecea8d4f4320bb57ca645d4f862ccffcb3f83c776037addf6ed = $this->env->getExtension("native_profiler");
        $__internal_e2496985dd68aecea8d4f4320bb57ca645d4f862ccffcb3f83c776037addf6ed->enter($__internal_e2496985dd68aecea8d4f4320bb57ca645d4f862ccffcb3f83c776037addf6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Configure database";
        
        $__internal_e2496985dd68aecea8d4f4320bb57ca645d4f862ccffcb3f83c776037addf6ed->leave($__internal_e2496985dd68aecea8d4f4320bb57ca645d4f862ccffcb3f83c776037addf6ed_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bf6bcafb1caf051aefbf3b442ee43ebfa3eee0b9bddedeb0737e286e61b97b3 = $this->env->getExtension("native_profiler");
        $__internal_8bf6bcafb1caf051aefbf3b442ee43ebfa3eee0b9bddedeb0737e286e61b97b3->enter($__internal_8bf6bcafb1caf051aefbf3b442ee43ebfa3eee0b9bddedeb0737e286e61b97b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig", "SensioDistributionBundle:Configurator/Step:doctrine.html.twig", 9)->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver", array()), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host", array()), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
        
        $__internal_8bf6bcafb1caf051aefbf3b442ee43ebfa3eee0b9bddedeb0737e286e61b97b3->leave($__internal_8bf6bcafb1caf051aefbf3b442ee43ebfa3eee0b9bddedeb0737e286e61b97b3_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 28,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  79 => 19,  74 => 17,  69 => 15,  62 => 10,  60 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
