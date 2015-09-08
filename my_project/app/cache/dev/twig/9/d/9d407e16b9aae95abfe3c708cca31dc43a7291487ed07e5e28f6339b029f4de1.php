<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_9d407e16b9aae95abfe3c708cca31dc43a7291487ed07e5e28f6339b029f4de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac068d95215780bdc0fe28c117ccbcfb50af687672ff8d600c7b548f081caece = $this->env->getExtension("native_profiler");
        $__internal_ac068d95215780bdc0fe28c117ccbcfb50af687672ff8d600c7b548f081caece->enter($__internal_ac068d95215780bdc0fe28c117ccbcfb50af687672ff8d600c7b548f081caece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac068d95215780bdc0fe28c117ccbcfb50af687672ff8d600c7b548f081caece->leave($__internal_ac068d95215780bdc0fe28c117ccbcfb50af687672ff8d600c7b548f081caece_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3f6a105f44590332dd7e5290703099404d68e434175aa641d9d5ce9a51a0e71 = $this->env->getExtension("native_profiler");
        $__internal_a3f6a105f44590332dd7e5290703099404d68e434175aa641d9d5ce9a51a0e71->enter($__internal_a3f6a105f44590332dd7e5290703099404d68e434175aa641d9d5ce9a51a0e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/bloggerblog/css/sidebar.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
        
        $__internal_a3f6a105f44590332dd7e5290703099404d68e434175aa641d9d5ce9a51a0e71->leave($__internal_a3f6a105f44590332dd7e5290703099404d68e434175aa641d9d5ce9a51a0e71_prof);

    }

    // line 10
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a11101c00d6907a1eaefa81a08d30eda162f3de88b873bbf29924382dc84b508 = $this->env->getExtension("native_profiler");
        $__internal_a11101c00d6907a1eaefa81a08d30eda162f3de88b873bbf29924382dc84b508->enter($__internal_a11101c00d6907a1eaefa81a08d30eda162f3de88b873bbf29924382dc84b508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 11
        echo "    ";
        
        $__internal_a11101c00d6907a1eaefa81a08d30eda162f3de88b873bbf29924382dc84b508->leave($__internal_a11101c00d6907a1eaefa81a08d30eda162f3de88b873bbf29924382dc84b508_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  59 => 10,  50 => 7,  46 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
