<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_4e776bd9b58fa953e3c6823b6a1c5bf1824a3b42389dd60c7f954f9f984f20f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
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
        $__internal_e61e11d58e9d9405b1e579c70ea55879d5d037b34c15e89ab1cf5259211d067a = $this->env->getExtension("native_profiler");
        $__internal_e61e11d58e9d9405b1e579c70ea55879d5d037b34c15e89ab1cf5259211d067a->enter($__internal_e61e11d58e9d9405b1e579c70ea55879d5d037b34c15e89ab1cf5259211d067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e61e11d58e9d9405b1e579c70ea55879d5d037b34c15e89ab1cf5259211d067a->leave($__internal_e61e11d58e9d9405b1e579c70ea55879d5d037b34c15e89ab1cf5259211d067a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d8824ec93e60ee6f23295e6641f8c01980a0d0bdb4bcc35c28f51aaa2ac71de = $this->env->getExtension("native_profiler");
        $__internal_3d8824ec93e60ee6f23295e6641f8c01980a0d0bdb4bcc35c28f51aaa2ac71de->enter($__internal_3d8824ec93e60ee6f23295e6641f8c01980a0d0bdb4bcc35c28f51aaa2ac71de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        
        $__internal_3d8824ec93e60ee6f23295e6641f8c01980a0d0bdb4bcc35c28f51aaa2ac71de->leave($__internal_3d8824ec93e60ee6f23295e6641f8c01980a0d0bdb4bcc35c28f51aaa2ac71de_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d55950d9df2f4f3d1794a88f6079a104a735cd4152935fb418ba24e47f0e61d4 = $this->env->getExtension("native_profiler");
        $__internal_d55950d9df2f4f3d1794a88f6079a104a735cd4152935fb418ba24e47f0e61d4->enter($__internal_d55950d9df2f4f3d1794a88f6079a104a735cd4152935fb418ba24e47f0e61d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <article class=\"blog\">
        <header>
            <div class=\"date\"><time datetime=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "c"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></div>
            <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h2>
        </header>
        <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\" />
        <div>
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
        </div>
    </article>
            
    <section class=\"comments\" id=\"comments\">
        <section class=\"previous-comments\">
            <h3>Comments</h3>
            ";
        // line 21
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 21)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 22
        echo "        </section>
        
                <h3>Add Comment</h3>
        ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BloggerBlogBundle:Comment:new", array("blog_id" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "id", array()))));
        echo "
    </section>
";
        
        $__internal_d55950d9df2f4f3d1794a88f6079a104a735cd4152935fb418ba24e47f0e61d4->leave($__internal_d55950d9df2f4f3d1794a88f6079a104a735cd4152935fb418ba24e47f0e61d4_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  87 => 22,  85 => 21,  75 => 14,  68 => 12,  63 => 10,  57 => 9,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }
}
