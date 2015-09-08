<?php

/* MyBlogBundle:Default:edit.html.twig */
class __TwigTemplate_2dd0bca568105a55d50bb76b54ef2c047c227a710570e1e936d06959b7331be3 extends Twig_Template
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
        $__internal_5aff3406b258c541b7a31b7aaae743300a8d44eff8ee80b3b429c37c9c088b85 = $this->env->getExtension("native_profiler");
        $__internal_5aff3406b258c541b7a31b7aaae743300a8d44eff8ee80b3b429c37c9c088b85->enter($__internal_5aff3406b258c541b7a31b7aaae743300a8d44eff8ee80b3b429c37c9c088b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:edit.html.twig"));

        // line 1
        echo "<h1>Edit Post</h1>
<form action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Save Post\" />
</form>";
        
        $__internal_5aff3406b258c541b7a31b7aaae743300a8d44eff8ee80b3b429c37c9c088b85->leave($__internal_5aff3406b258c541b7a31b7aaae743300a8d44eff8ee80b3b429c37c9c088b85_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 2,  22 => 1,);
    }
}
