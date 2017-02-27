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
        $__internal_d6ff4f3d0199622e4848c5d49decde729b9ab268eb738d06c6b9044ddf3b3f78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ff4f3d0199622e4848c5d49decde729b9ab268eb738d06c6b9044ddf3b3f78->enter($__internal_d6ff4f3d0199622e4848c5d49decde729b9ab268eb738d06c6b9044ddf3b3f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d6ff4f3d0199622e4848c5d49decde729b9ab268eb738d06c6b9044ddf3b3f78->leave($__internal_d6ff4f3d0199622e4848c5d49decde729b9ab268eb738d06c6b9044ddf3b3f78_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_820b9d7d97cf8633bcbca93ec28cb092c1c4b613c44193c7b7bb82f1db8d9fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820b9d7d97cf8633bcbca93ec28cb092c1c4b613c44193c7b7bb82f1db8d9fdd->enter($__internal_820b9d7d97cf8633bcbca93ec28cb092c1c4b613c44193c7b7bb82f1db8d9fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_820b9d7d97cf8633bcbca93ec28cb092c1c4b613c44193c7b7bb82f1db8d9fdd->leave($__internal_820b9d7d97cf8633bcbca93ec28cb092c1c4b613c44193c7b7bb82f1db8d9fdd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d45e74517301cd4f6514f346be8a2375cb00ad0228f91624370ed592d224a53c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45e74517301cd4f6514f346be8a2375cb00ad0228f91624370ed592d224a53c->enter($__internal_d45e74517301cd4f6514f346be8a2375cb00ad0228f91624370ed592d224a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d45e74517301cd4f6514f346be8a2375cb00ad0228f91624370ed592d224a53c->leave($__internal_d45e74517301cd4f6514f346be8a2375cb00ad0228f91624370ed592d224a53c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ae5a7c44a26e5080d9a6cfb0efe1ecfbd4b4c895ff4466e3310d1473ca3492c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae5a7c44a26e5080d9a6cfb0efe1ecfbd4b4c895ff4466e3310d1473ca3492c->enter($__internal_1ae5a7c44a26e5080d9a6cfb0efe1ecfbd4b4c895ff4466e3310d1473ca3492c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ae5a7c44a26e5080d9a6cfb0efe1ecfbd4b4c895ff4466e3310d1473ca3492c->leave($__internal_1ae5a7c44a26e5080d9a6cfb0efe1ecfbd4b4c895ff4466e3310d1473ca3492c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a97f8b54589d27c1ef6be3a152cc288b1c1365e1dd4664bf85d68e30ccbfeae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97f8b54589d27c1ef6be3a152cc288b1c1365e1dd4664bf85d68e30ccbfeae4->enter($__internal_a97f8b54589d27c1ef6be3a152cc288b1c1365e1dd4664bf85d68e30ccbfeae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a97f8b54589d27c1ef6be3a152cc288b1c1365e1dd4664bf85d68e30ccbfeae4->leave($__internal_a97f8b54589d27c1ef6be3a152cc288b1c1365e1dd4664bf85d68e30ccbfeae4_prof);

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
