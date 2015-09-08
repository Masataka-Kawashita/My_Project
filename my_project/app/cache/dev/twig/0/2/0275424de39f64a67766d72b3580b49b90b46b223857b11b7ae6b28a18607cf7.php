<?php

/* ::base.html.twig */
class __TwigTemplate_0275424de39f64a67766d72b3580b49b90b46b223857b11b7ae6b28a18607cf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b01e9d8564709a36ed8634c021ab92344f10d577056eb3eb96a668db1993766d = $this->env->getExtension("native_profiler");
        $__internal_b01e9d8564709a36ed8634c021ab92344f10d577056eb3eb96a668db1993766d->enter($__internal_b01e9d8564709a36ed8634c021ab92344f10d577056eb3eb96a668db1993766d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>";
        
        $__internal_b01e9d8564709a36ed8634c021ab92344f10d577056eb3eb96a668db1993766d->leave($__internal_b01e9d8564709a36ed8634c021ab92344f10d577056eb3eb96a668db1993766d_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a10c60707d6d975a2a270b74e4227c9a7faa12f23a59613d24a3a2d1fa9335b = $this->env->getExtension("native_profiler");
        $__internal_1a10c60707d6d975a2a270b74e4227c9a7faa12f23a59613d24a3a2d1fa9335b->enter($__internal_1a10c60707d6d975a2a270b74e4227c9a7faa12f23a59613d24a3a2d1fa9335b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_1a10c60707d6d975a2a270b74e4227c9a7faa12f23a59613d24a3a2d1fa9335b->leave($__internal_1a10c60707d6d975a2a270b74e4227c9a7faa12f23a59613d24a3a2d1fa9335b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3657c8af8e2840bae9bad158f1148d425ff6c7cdaa32894e94035c041389453 = $this->env->getExtension("native_profiler");
        $__internal_d3657c8af8e2840bae9bad158f1148d425ff6c7cdaa32894e94035c041389453->enter($__internal_d3657c8af8e2840bae9bad158f1148d425ff6c7cdaa32894e94035c041389453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_d3657c8af8e2840bae9bad158f1148d425ff6c7cdaa32894e94035c041389453->leave($__internal_d3657c8af8e2840bae9bad158f1148d425ff6c7cdaa32894e94035c041389453_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1abfb053594d3f08e7428d835beba8b268e9324194b91f321c8bc2f154334bd9 = $this->env->getExtension("native_profiler");
        $__internal_1abfb053594d3f08e7428d835beba8b268e9324194b91f321c8bc2f154334bd9->enter($__internal_1abfb053594d3f08e7428d835beba8b268e9324194b91f321c8bc2f154334bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "    <nav>
        <ul class=\"navigation\">
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
            <li><a href=\"#\">About</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
        </ul>
    </nav>
";
        
        $__internal_1abfb053594d3f08e7428d835beba8b268e9324194b91f321c8bc2f154334bd9->leave($__internal_1abfb053594d3f08e7428d835beba8b268e9324194b91f321c8bc2f154334bd9_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_2f4a6af2d05a19bf07b07557ad3decf67dfba9df61c3f405e3c5908f3bc69845 = $this->env->getExtension("native_profiler");
        $__internal_2f4a6af2d05a19bf07b07557ad3decf67dfba9df61c3f405e3c5908f3bc69845->enter($__internal_2f4a6af2d05a19bf07b07557ad3decf67dfba9df61c3f405e3c5908f3bc69845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">symblog</a>";
        
        $__internal_2f4a6af2d05a19bf07b07557ad3decf67dfba9df61c3f405e3c5908f3bc69845->leave($__internal_2f4a6af2d05a19bf07b07557ad3decf67dfba9df61c3f405e3c5908f3bc69845_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_8a468e2063bbc75d18209ba0c9b699bb8dd6aeb33efdf7b5ebab1558e9db9fa0 = $this->env->getExtension("native_profiler");
        $__internal_8a468e2063bbc75d18209ba0c9b699bb8dd6aeb33efdf7b5ebab1558e9db9fa0->enter($__internal_8a468e2063bbc75d18209ba0c9b699bb8dd6aeb33efdf7b5ebab1558e9db9fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">creating a blog in Symfony2</a>";
        
        $__internal_8a468e2063bbc75d18209ba0c9b699bb8dd6aeb33efdf7b5ebab1558e9db9fa0->leave($__internal_8a468e2063bbc75d18209ba0c9b699bb8dd6aeb33efdf7b5ebab1558e9db9fa0_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_91ac5111548886732ee8e1902837fab9d7fd56542dc5c2a12d7f714f75e5126a = $this->env->getExtension("native_profiler");
        $__internal_91ac5111548886732ee8e1902837fab9d7fd56542dc5c2a12d7f714f75e5126a->enter($__internal_91ac5111548886732ee8e1902837fab9d7fd56542dc5c2a12d7f714f75e5126a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91ac5111548886732ee8e1902837fab9d7fd56542dc5c2a12d7f714f75e5126a->leave($__internal_91ac5111548886732ee8e1902837fab9d7fd56542dc5c2a12d7f714f75e5126a_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b643741adc50e42b5f95f44992a8489257cf55e997fc54c394cc39c28abe6801 = $this->env->getExtension("native_profiler");
        $__internal_b643741adc50e42b5f95f44992a8489257cf55e997fc54c394cc39c28abe6801->enter($__internal_b643741adc50e42b5f95f44992a8489257cf55e997fc54c394cc39c28abe6801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b643741adc50e42b5f95f44992a8489257cf55e997fc54c394cc39c28abe6801->leave($__internal_b643741adc50e42b5f95f44992a8489257cf55e997fc54c394cc39c28abe6801_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_347d5929e24b3b745eb26db01c19de46978a7a9b0090dbb83abcc50e902dc22a = $this->env->getExtension("native_profiler");
        $__internal_347d5929e24b3b745eb26db01c19de46978a7a9b0090dbb83abcc50e902dc22a->enter($__internal_347d5929e24b3b745eb26db01c19de46978a7a9b0090dbb83abcc50e902dc22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_347d5929e24b3b745eb26db01c19de46978a7a9b0090dbb83abcc50e902dc22a->leave($__internal_347d5929e24b3b745eb26db01c19de46978a7a9b0090dbb83abcc50e902dc22a_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f19afbc6a8e52ab96b07cdd7dc3f38897491c64531115bea20aa718dd9e8fc9 = $this->env->getExtension("native_profiler");
        $__internal_3f19afbc6a8e52ab96b07cdd7dc3f38897491c64531115bea20aa718dd9e8fc9->enter($__internal_3f19afbc6a8e52ab96b07cdd7dc3f38897491c64531115bea20aa718dd9e8fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3f19afbc6a8e52ab96b07cdd7dc3f38897491c64531115bea20aa718dd9e8fc9->leave($__internal_3f19afbc6a8e52ab96b07cdd7dc3f38897491c64531115bea20aa718dd9e8fc9_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 53,  216 => 48,  210 => 47,  199 => 43,  188 => 40,  176 => 35,  164 => 34,  153 => 27,  148 => 25,  144 => 23,  138 => 22,  129 => 13,  125 => 11,  119 => 10,  107 => 6,  99 => 54,  97 => 53,  92 => 50,  90 => 47,  85 => 44,  83 => 43,  79 => 41,  77 => 40,  69 => 35,  65 => 34,  60 => 31,  58 => 22,  47 => 15,  45 => 10,  38 => 6,  31 => 1,);
    }
}
