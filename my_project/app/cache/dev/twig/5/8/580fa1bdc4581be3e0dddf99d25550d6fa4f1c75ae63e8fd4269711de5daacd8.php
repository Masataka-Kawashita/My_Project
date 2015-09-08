<?php

/* MyBlogBundle:Default:new.html.twig */
class __TwigTemplate_580fa1bdc4581be3e0dddf99d25550d6fa4f1c75ae63e8fd4269711de5daacd8 extends Twig_Template
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
        $__internal_e207b3a1dc06e1384914e0ec70dedd830afaf08270b952af753cf27244d3de48 = $this->env->getExtension("native_profiler");
        $__internal_e207b3a1dc06e1384914e0ec70dedd830afaf08270b952af753cf27244d3de48->enter($__internal_e207b3a1dc06e1384914e0ec70dedd830afaf08270b952af753cf27244d3de48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyBlogBundle:Default:new.html.twig"));

        // line 1
        echo "<h1>Add Post</h1>
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("blog_new");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Save Post\" />
</form>";
        
        $__internal_e207b3a1dc06e1384914e0ec70dedd830afaf08270b952af753cf27244d3de48->leave($__internal_e207b3a1dc06e1384914e0ec70dedd830afaf08270b952af753cf27244d3de48_prof);

    }

    public function getTemplateName()
    {
        return "MyBlogBundle:Default:new.html.twig";
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
