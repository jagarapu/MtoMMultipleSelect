<?php

/* default/index.html.twig */
class __TwigTemplate_e5d327ded234b64cc88da9b7c3537be755e2a83834a1617018a3895df72f0405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b608bd01690a7bae7f69247bd87e80807cd8ceb64126c69ac5c3053354667d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b608bd01690a7bae7f69247bd87e80807cd8ceb64126c69ac5c3053354667d8->enter($__internal_1b608bd01690a7bae7f69247bd87e80807cd8ceb64126c69ac5c3053354667d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b608bd01690a7bae7f69247bd87e80807cd8ceb64126c69ac5c3053354667d8->leave($__internal_1b608bd01690a7bae7f69247bd87e80807cd8ceb64126c69ac5c3053354667d8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1c7b848323861b15627e94d92903dcdd5ec505535c26b97b866044de6faf044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c7b848323861b15627e94d92903dcdd5ec505535c26b97b866044de6faf044->enter($__internal_e1c7b848323861b15627e94d92903dcdd5ec505535c26b97b866044de6faf044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "    
    ";
        // line 3
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "     
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoryname", array()), 'row');
        echo " 
    <div class=\"tags\"  data-prototype=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "prototype", array()), "tagname", array()), 'row', array("attr" => array("style" => "width:300px"))));
        echo "\">     
    ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'row');
        echo "  
    </div>       
    ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'row');
        echo "   
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e1c7b848323861b15627e94d92903dcdd5ec505535c26b97b866044de6faf044->leave($__internal_e1c7b848323861b15627e94d92903dcdd5ec505535c26b97b866044de6faf044_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_849e11061e3b275b9028b4cc3c372d4559bca33c181f7d0a288542319df4a98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849e11061e3b275b9028b4cc3c372d4559bca33c181f7d0a288542319df4a98c->enter($__internal_849e11061e3b275b9028b4cc3c372d4559bca33c181f7d0a288542319df4a98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css\"> 
";
        
        $__internal_849e11061e3b275b9028b4cc3c372d4559bca33c181f7d0a288542319df4a98c->leave($__internal_849e11061e3b275b9028b4cc3c372d4559bca33c181f7d0a288542319df4a98c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b854c6e0c3b3c809537456e205fe9fdb51bfc1e2914332447e98069813eaed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b854c6e0c3b3c809537456e205fe9fdb51bfc1e2914332447e98069813eaed7->enter($__internal_8b854c6e0c3b3c809537456e205fe9fdb51bfc1e2914332447e98069813eaed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"> </script> 
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js\"> </script> 
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script> 
    
    <script src=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/app/js/main.js"), "html", null, true);
        echo "\"></script> 
";
        
        $__internal_8b854c6e0c3b3c809537456e205fe9fdb51bfc1e2914332447e98069813eaed7->leave($__internal_8b854c6e0c3b3c809537456e205fe9fdb51bfc1e2914332447e98069813eaed7_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  103 => 21,  98 => 19,  94 => 17,  88 => 16,  80 => 13,  74 => 12,  65 => 9,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  36 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}    
    {{ form_start(form) }}     
    {{ form_row(form.categoryname) }} 
    <div class=\"tags\"  data-prototype=\"{{ form_row(form.tags.vars.prototype.tagname,  {'attr':{'style':'width:300px'}})|e }}\">     
    {{ form_row(form.tags) }}  
    </div>       
    {{ form_row(form.save) }}   
    {{ form_end(form) }}
{% endblock %}  

{% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css\"> 
{% endblock %}

{% block javascripts %}
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"> </script> 
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js\"> </script> 
    <script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script> 
    
    <script src=\"{{ path('fos_js_routing_js', { callback: 'fos.Router.setData' }) }}\"></script>
    <script src=\"{{ asset('bundles/app/js/main.js') }}\"></script> 
{% endblock %}
", "default/index.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\app\\Resources\\views\\default\\index.html.twig");
    }
}
