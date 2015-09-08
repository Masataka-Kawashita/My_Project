<?php

/* SensioDistributionBundle::Configurator/form.html.twig */
class __TwigTemplate_de0681f6a37f7fe8a2080a416c1a55d0a539a199e52e4351c873c24b65494cd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "SensioDistributionBundle::Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c97409a8e60a778ca8201eaf6f50b621670142ca60b7e778706a187eef2b734a = $this->env->getExtension("native_profiler");
        $__internal_c97409a8e60a778ca8201eaf6f50b621670142ca60b7e778706a187eef2b734a->enter($__internal_c97409a8e60a778ca8201eaf6f50b621670142ca60b7e778706a187eef2b734a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c97409a8e60a778ca8201eaf6f50b621670142ca60b7e778706a187eef2b734a->leave($__internal_c97409a8e60a778ca8201eaf6f50b621670142ca60b7e778706a187eef2b734a_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_84eba97d6eadd246e2190a3fdb1c8b1f32b4834c1bc9a2e2b19a3e07c495f6d3 = $this->env->getExtension("native_profiler");
        $__internal_84eba97d6eadd246e2190a3fdb1c8b1f32b4834c1bc9a2e2b19a3e07c495f6d3->enter($__internal_84eba97d6eadd246e2190a3fdb1c8b1f32b4834c1bc9a2e2b19a3e07c495f6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_84eba97d6eadd246e2190a3fdb1c8b1f32b4834c1bc9a2e2b19a3e07c495f6d3->leave($__internal_84eba97d6eadd246e2190a3fdb1c8b1f32b4834c1bc9a2e2b19a3e07c495f6d3_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_5c9f551a1e65cdc5dd67818ee4a15e3ec9df6b7699152a8719df6520633e917e = $this->env->getExtension("native_profiler");
        $__internal_5c9f551a1e65cdc5dd67818ee4a15e3ec9df6b7699152a8719df6520633e917e->enter($__internal_5c9f551a1e65cdc5dd67818ee4a15e3ec9df6b7699152a8719df6520633e917e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_5c9f551a1e65cdc5dd67818ee4a15e3ec9df6b7699152a8719df6520633e917e->leave($__internal_5c9f551a1e65cdc5dd67818ee4a15e3ec9df6b7699152a8719df6520633e917e_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_888188768bd0dc4117d0acbff523e84a0088c2a82d4a40250ec1c94b7c3dd516 = $this->env->getExtension("native_profiler");
        $__internal_888188768bd0dc4117d0acbff523e84a0088c2a82d4a40250ec1c94b7c3dd516->enter($__internal_888188768bd0dc4117d0acbff523e84a0088c2a82d4a40250ec1c94b7c3dd516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_888188768bd0dc4117d0acbff523e84a0088c2a82d4a40250ec1c94b7c3dd516->leave($__internal_888188768bd0dc4117d0acbff523e84a0088c2a82d4a40250ec1c94b7c3dd516_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
