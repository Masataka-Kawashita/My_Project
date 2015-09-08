<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_31ea6f3624921fec5b8139f6b8bd044a81ea461e667e52d4613339cd0c15f1c9 extends Twig_Template
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
        $__internal_c1796c439b11d2efa2ae7a074e9f53eb6ce670c582ca44ab0ab2bc1ae9c8c70f = $this->env->getExtension("native_profiler");
        $__internal_c1796c439b11d2efa2ae7a074e9f53eb6ce670c582ca44ab0ab2bc1ae9c8c70f->enter($__internal_c1796c439b11d2efa2ae7a074e9f53eb6ce670c582ca44ab0ab2bc1ae9c8c70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
        
        $__internal_c1796c439b11d2efa2ae7a074e9f53eb6ce670c582ca44ab0ab2bc1ae9c8c70f->leave($__internal_c1796c439b11d2efa2ae7a074e9f53eb6ce670c582ca44ab0ab2bc1ae9c8c70f_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 3,  22 => 2,);
    }
}
