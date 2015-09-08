<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_88ed04e4c8142ba12d4a114ab91e4ce68de5f33f88e527cb3c5c52799343d998 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75fe2cc56a1d37aec7dfa27468b6f43ea46509bb69043705416ef25fedf8463e = $this->env->getExtension("native_profiler");
        $__internal_75fe2cc56a1d37aec7dfa27468b6f43ea46509bb69043705416ef25fedf8463e->enter($__internal_75fe2cc56a1d37aec7dfa27468b6f43ea46509bb69043705416ef25fedf8463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fe2cc56a1d37aec7dfa27468b6f43ea46509bb69043705416ef25fedf8463e->leave($__internal_75fe2cc56a1d37aec7dfa27468b6f43ea46509bb69043705416ef25fedf8463e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a58336817b920c7c376e65159407203a52dadbc669679ffc976bb95846ab9c60 = $this->env->getExtension("native_profiler");
        $__internal_a58336817b920c7c376e65159407203a52dadbc669679ffc976bb95846ab9c60->enter($__internal_a58336817b920c7c376e65159407203a52dadbc669679ffc976bb95846ab9c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_a58336817b920c7c376e65159407203a52dadbc669679ffc976bb95846ab9c60->leave($__internal_a58336817b920c7c376e65159407203a52dadbc669679ffc976bb95846ab9c60_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a35e307fc896e4f007e4a15a52544c3f2e36aa06d155a60c140e90125e20745 = $this->env->getExtension("native_profiler");
        $__internal_5a35e307fc896e4f007e4a15a52544c3f2e36aa06d155a60c140e90125e20745->enter($__internal_5a35e307fc896e4f007e4a15a52544c3f2e36aa06d155a60c140e90125e20745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    <p>Want to contact symblog?</p>

    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>
";
        
        $__internal_5a35e307fc896e4f007e4a15a52544c3f2e36aa06d155a60c140e90125e20745->leave($__internal_5a35e307fc896e4f007e4a15a52544c3f2e36aa06d155a60c140e90125e20745_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 19,  80 => 18,  76 => 17,  72 => 16,  67 => 14,  61 => 13,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
