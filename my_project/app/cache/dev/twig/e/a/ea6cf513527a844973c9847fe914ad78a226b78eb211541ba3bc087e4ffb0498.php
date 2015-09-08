<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_ea6cf513527a844973c9847fe914ad78a226b78eb211541ba3bc087e4ffb0498 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72630bdd474c83585ed22a316f4ad3e22a5c2e77a9290a74f4799af73d6db439 = $this->env->getExtension("native_profiler");
        $__internal_72630bdd474c83585ed22a316f4ad3e22a5c2e77a9290a74f4799af73d6db439->enter($__internal_72630bdd474c83585ed22a316f4ad3e22a5c2e77a9290a74f4799af73d6db439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72630bdd474c83585ed22a316f4ad3e22a5c2e77a9290a74f4799af73d6db439->leave($__internal_72630bdd474c83585ed22a316f4ad3e22a5c2e77a9290a74f4799af73d6db439_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d438d8dcf248ca20fda46e519a5d1a966973da046f776ce5584059cd8ac55c3 = $this->env->getExtension("native_profiler");
        $__internal_2d438d8dcf248ca20fda46e519a5d1a966973da046f776ce5584059cd8ac55c3->enter($__internal_2d438d8dcf248ca20fda46e519a5d1a966973da046f776ce5584059cd8ac55c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2d438d8dcf248ca20fda46e519a5d1a966973da046f776ce5584059cd8ac55c3->leave($__internal_2d438d8dcf248ca20fda46e519a5d1a966973da046f776ce5584059cd8ac55c3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a60b6ce8fda1c58ee2dfc73f7c8f2a029cf8b68d21649a0690771f2c21e68379 = $this->env->getExtension("native_profiler");
        $__internal_a60b6ce8fda1c58ee2dfc73f7c8f2a029cf8b68d21649a0690771f2c21e68379->enter($__internal_a60b6ce8fda1c58ee2dfc73f7c8f2a029cf8b68d21649a0690771f2c21e68379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_a60b6ce8fda1c58ee2dfc73f7c8f2a029cf8b68d21649a0690771f2c21e68379->leave($__internal_a60b6ce8fda1c58ee2dfc73f7c8f2a029cf8b68d21649a0690771f2c21e68379_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d1929df11e4f16ebc5c22e974e9d3005d6a1e0b43ee605c6a385073b41870b7 = $this->env->getExtension("native_profiler");
        $__internal_1d1929df11e4f16ebc5c22e974e9d3005d6a1e0b43ee605c6a385073b41870b7->enter($__internal_1d1929df11e4f16ebc5c22e974e9d3005d6a1e0b43ee605c6a385073b41870b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_1d1929df11e4f16ebc5c22e974e9d3005d6a1e0b43ee605c6a385073b41870b7->leave($__internal_1d1929df11e4f16ebc5c22e974e9d3005d6a1e0b43ee605c6a385073b41870b7_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f092cb8362711b12a351ae103719f92423364decdbef7f10d82af50933d645f = $this->env->getExtension("native_profiler");
        $__internal_4f092cb8362711b12a351ae103719f92423364decdbef7f10d82af50933d645f->enter($__internal_4f092cb8362711b12a351ae103719f92423364decdbef7f10d82af50933d645f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4f092cb8362711b12a351ae103719f92423364decdbef7f10d82af50933d645f->leave($__internal_4f092cb8362711b12a351ae103719f92423364decdbef7f10d82af50933d645f_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
