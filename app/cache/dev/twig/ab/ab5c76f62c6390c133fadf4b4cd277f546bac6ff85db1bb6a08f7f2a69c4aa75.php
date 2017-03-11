<?php

/* base.html.twig */
class __TwigTemplate_f4790cc6b71f8930ff85662c57f92061f46792f57590fa1fd00d3f6455a589bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd6caa051ff2c67bb50c9185cf987c65612e969981a2e0c42bcb0a6e65c3f7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6caa051ff2c67bb50c9185cf987c65612e969981a2e0c42bcb0a6e65c3f7a3->enter($__internal_cd6caa051ff2c67bb50c9185cf987c65612e969981a2e0c42bcb0a6e65c3f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cd6caa051ff2c67bb50c9185cf987c65612e969981a2e0c42bcb0a6e65c3f7a3->leave($__internal_cd6caa051ff2c67bb50c9185cf987c65612e969981a2e0c42bcb0a6e65c3f7a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7db2dc87afc70d765a83e45f79da216e5dfc238d3f2542d1e53bce48b6f13e86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db2dc87afc70d765a83e45f79da216e5dfc238d3f2542d1e53bce48b6f13e86->enter($__internal_7db2dc87afc70d765a83e45f79da216e5dfc238d3f2542d1e53bce48b6f13e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7db2dc87afc70d765a83e45f79da216e5dfc238d3f2542d1e53bce48b6f13e86->leave($__internal_7db2dc87afc70d765a83e45f79da216e5dfc238d3f2542d1e53bce48b6f13e86_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c799713cfebb6043034bbd4c209d4121ca754fc481506e79c8250cde74f1d4a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c799713cfebb6043034bbd4c209d4121ca754fc481506e79c8250cde74f1d4a5->enter($__internal_c799713cfebb6043034bbd4c209d4121ca754fc481506e79c8250cde74f1d4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c799713cfebb6043034bbd4c209d4121ca754fc481506e79c8250cde74f1d4a5->leave($__internal_c799713cfebb6043034bbd4c209d4121ca754fc481506e79c8250cde74f1d4a5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_df5d998d79916bbdb672541900aac4ddee8e936e44232b1a9bef996835052d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5d998d79916bbdb672541900aac4ddee8e936e44232b1a9bef996835052d54->enter($__internal_df5d998d79916bbdb672541900aac4ddee8e936e44232b1a9bef996835052d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_df5d998d79916bbdb672541900aac4ddee8e936e44232b1a9bef996835052d54->leave($__internal_df5d998d79916bbdb672541900aac4ddee8e936e44232b1a9bef996835052d54_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f38f7d2da5719760d6e6bd7db3603387413df04ba6fd0d22de5b254d8e0e241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f38f7d2da5719760d6e6bd7db3603387413df04ba6fd0d22de5b254d8e0e241->enter($__internal_2f38f7d2da5719760d6e6bd7db3603387413df04ba6fd0d22de5b254d8e0e241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2f38f7d2da5719760d6e6bd7db3603387413df04ba6fd0d22de5b254d8e0e241->leave($__internal_2f38f7d2da5719760d6e6bd7db3603387413df04ba6fd0d22de5b254d8e0e241_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\app\\Resources\\views\\base.html.twig");
    }
}
