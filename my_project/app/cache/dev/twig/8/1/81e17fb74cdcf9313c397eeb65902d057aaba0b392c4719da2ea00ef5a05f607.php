<?php

/* SensioDistributionBundle::Configurator/final.html.twig */
class __TwigTemplate_81e17fb74cdcf9313c397eeb65902d057aaba0b392c4719da2ea00ef5a05f607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig", "SensioDistributionBundle::Configurator/final.html.twig", 1);
        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc822fd2a324c126f95f4ffeb7aab59786a9197c5a7bb50fb64cb046c2e89d41 = $this->env->getExtension("native_profiler");
        $__internal_dc822fd2a324c126f95f4ffeb7aab59786a9197c5a7bb50fb64cb046c2e89d41->enter($__internal_dc822fd2a324c126f95f4ffeb7aab59786a9197c5a7bb50fb64cb046c2e89d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/final.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc822fd2a324c126f95f4ffeb7aab59786a9197c5a7bb50fb64cb046c2e89d41->leave($__internal_dc822fd2a324c126f95f4ffeb7aab59786a9197c5a7bb50fb64cb046c2e89d41_prof);

    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        $__internal_dde28d537a83dc4d79d8b4a9fb7ebf3e1b41d59c1f6bea8640385dac3aa3ae86 = $this->env->getExtension("native_profiler");
        $__internal_dde28d537a83dc4d79d8b4a9fb7ebf3e1b41d59c1f6bea8640385dac3aa3ae86->enter($__internal_dde28d537a83dc4d79d8b4a9fb7ebf3e1b41d59c1f6bea8640385dac3aa3ae86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_class"));

        echo "config_done";
        
        $__internal_dde28d537a83dc4d79d8b4a9fb7ebf3e1b41d59c1f6bea8640385dac3aa3ae86->leave($__internal_dde28d537a83dc4d79d8b4a9fb7ebf3e1b41d59c1f6bea8640385dac3aa3ae86_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_738e152d6cda3d28b65495323ca04674b18d41a3ef54addedb03c1fa07ef69bb = $this->env->getExtension("native_profiler");
        $__internal_738e152d6cda3d28b65495323ca04674b18d41a3ef54addedb03c1fa07ef69bb->enter($__internal_738e152d6cda3d28b65495323ca04674b18d41a3ef54addedb03c1fa07ef69bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
        
        $__internal_738e152d6cda3d28b65495323ca04674b18d41a3ef54addedb03c1fa07ef69bb->leave($__internal_738e152d6cda3d28b65495323ca04674b18d41a3ef54addedb03c1fa07ef69bb_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  85 => 19,  79 => 17,  73 => 15,  71 => 14,  67 => 12,  63 => 10,  59 => 8,  57 => 7,  53 => 5,  47 => 4,  35 => 3,  11 => 1,);
    }
}
