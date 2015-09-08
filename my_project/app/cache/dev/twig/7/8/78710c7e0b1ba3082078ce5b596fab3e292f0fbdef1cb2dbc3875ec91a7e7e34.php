<?php

/* MyBlogBundle:Default:show.html.twig */
class __TwigTemplate_78710c7e0b1ba3082078ce5b596fab3e292f0fbdef1cb2dbc3875ec91a7e7e34 extends Twig_Template
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
        $__internal_192d25eb4a53e447eefd901d6ae53782879c2ee173a5be2675b204c5ac04aeeb = $this->env->getExtension("native_profiler");
        $__internal_192d25eb4a53e447eefd901d6ae53782879c2ee173a5be2675b204c5ac04aeeb->enter($__internal_192d25eb4a53e447eefd901d6ae53782879c2ee173a5be2675b204c5ac04aeeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:show.html.twig"));

        // line 1
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
<p><small>Created: ";
        // line 2
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "Y/m/d H:i"), "html", null, true);
        echo "</small></p>
<p>";
        // line 3
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true));
        echo "</p>
";
        
        $__internal_192d25eb4a53e447eefd901d6ae53782879c2ee173a5be2675b204c5ac04aeeb->leave($__internal_192d25eb4a53e447eefd901d6ae53782879c2ee173a5be2675b204c5ac04aeeb_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  27 => 2,  22 => 1,);
    }
}
