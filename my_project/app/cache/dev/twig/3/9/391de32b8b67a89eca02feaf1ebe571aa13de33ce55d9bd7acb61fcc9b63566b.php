<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_391de32b8b67a89eca02feaf1ebe571aa13de33ce55d9bd7acb61fcc9b63566b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e53e5ab3db6b9da2c8b8e54ddae966b332cad1878fc19ff6dbd217420da7ea3 = $this->env->getExtension("native_profiler");
        $__internal_9e53e5ab3db6b9da2c8b8e54ddae966b332cad1878fc19ff6dbd217420da7ea3->enter($__internal_9e53e5ab3db6b9da2c8b8e54ddae966b332cad1878fc19ff6dbd217420da7ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e53e5ab3db6b9da2c8b8e54ddae966b332cad1878fc19ff6dbd217420da7ea3->leave($__internal_9e53e5ab3db6b9da2c8b8e54ddae966b332cad1878fc19ff6dbd217420da7ea3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e118473772520bb4fd610750b8c2179aff46563221b125b679b74b780adb67d1 = $this->env->getExtension("native_profiler");
        $__internal_e118473772520bb4fd610750b8c2179aff46563221b125b679b74b780adb67d1->enter($__internal_e118473772520bb4fd610750b8c2179aff46563221b125b679b74b780adb67d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e118473772520bb4fd610750b8c2179aff46563221b125b679b74b780adb67d1->leave($__internal_e118473772520bb4fd610750b8c2179aff46563221b125b679b74b780adb67d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_101bef8eaea57003536715306ece97be65b9cecf9ed84be22c0e7338f5eb20c1 = $this->env->getExtension("native_profiler");
        $__internal_101bef8eaea57003536715306ece97be65b9cecf9ed84be22c0e7338f5eb20c1->enter($__internal_101bef8eaea57003536715306ece97be65b9cecf9ed84be22c0e7338f5eb20c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_101bef8eaea57003536715306ece97be65b9cecf9ed84be22c0e7338f5eb20c1->leave($__internal_101bef8eaea57003536715306ece97be65b9cecf9ed84be22c0e7338f5eb20c1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_843e66fb1e2325c747e9adf02900df2a0d364c466c2e4c103392c4d36d0ff5dd = $this->env->getExtension("native_profiler");
        $__internal_843e66fb1e2325c747e9adf02900df2a0d364c466c2e4c103392c4d36d0ff5dd->enter($__internal_843e66fb1e2325c747e9adf02900df2a0d364c466c2e4c103392c4d36d0ff5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_843e66fb1e2325c747e9adf02900df2a0d364c466c2e4c103392c4d36d0ff5dd->leave($__internal_843e66fb1e2325c747e9adf02900df2a0d364c466c2e4c103392c4d36d0ff5dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
