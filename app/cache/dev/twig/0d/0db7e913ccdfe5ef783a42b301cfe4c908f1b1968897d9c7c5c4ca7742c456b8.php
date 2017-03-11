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
        $__internal_e4d591ea02e81749b2cb5eb41293733ed4535e14ea47d18bc2b290396e1eb185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d591ea02e81749b2cb5eb41293733ed4535e14ea47d18bc2b290396e1eb185->enter($__internal_e4d591ea02e81749b2cb5eb41293733ed4535e14ea47d18bc2b290396e1eb185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4d591ea02e81749b2cb5eb41293733ed4535e14ea47d18bc2b290396e1eb185->leave($__internal_e4d591ea02e81749b2cb5eb41293733ed4535e14ea47d18bc2b290396e1eb185_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_11262f685ccd4180ccf166efdb13f80f6bd090a8a95d61b753b4e78e3083b15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11262f685ccd4180ccf166efdb13f80f6bd090a8a95d61b753b4e78e3083b15d->enter($__internal_11262f685ccd4180ccf166efdb13f80f6bd090a8a95d61b753b4e78e3083b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_11262f685ccd4180ccf166efdb13f80f6bd090a8a95d61b753b4e78e3083b15d->leave($__internal_11262f685ccd4180ccf166efdb13f80f6bd090a8a95d61b753b4e78e3083b15d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ac1dd602ecffaee6bae80ebf9857c1007bfb81ee501c874b3d7aca280e364fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac1dd602ecffaee6bae80ebf9857c1007bfb81ee501c874b3d7aca280e364fdf->enter($__internal_ac1dd602ecffaee6bae80ebf9857c1007bfb81ee501c874b3d7aca280e364fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css\"> 
";
        
        $__internal_ac1dd602ecffaee6bae80ebf9857c1007bfb81ee501c874b3d7aca280e364fdf->leave($__internal_ac1dd602ecffaee6bae80ebf9857c1007bfb81ee501c874b3d7aca280e364fdf_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98495b6146235b5305e6084f310bbb086b78e8e53573e3d4dc575151dd167166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98495b6146235b5305e6084f310bbb086b78e8e53573e3d4dc575151dd167166->enter($__internal_98495b6146235b5305e6084f310bbb086b78e8e53573e3d4dc575151dd167166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        // line 66
        echo "    </script>       
  ";
        
        $__internal_98495b6146235b5305e6084f310bbb086b78e8e53573e3d4dc575151dd167166->leave($__internal_98495b6146235b5305e6084f310bbb086b78e8e53573e3d4dc575151dd167166_prof);

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
        return array (  111 => 66,  107 => 22,  103 => 21,  98 => 19,  94 => 17,  88 => 16,  80 => 13,  74 => 12,  65 => 9,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  36 => 2,  11 => 1,);
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
{#    <script>
        \$(document).ready(function() {  
        \$(\"#category_categoryname\").change(function(){
        var cat_element = document.getElementById(\"category_categoryname\");
        var category_type = cat_element.options[cat_element.selectedIndex].value;
        \$.ajax({         
            type: \"POST\", 
            url: Routing.generate('homepage'),
            contentType: 'application/x-www-form-urlencoded',
            data: { cat_id : category_type},     
            success: function (result, status, xhr) {  
             // alert(result.success);   
             var tag_options = document.getElementById(\"category_categoryname\").options;
             for(var i = 0; i < tag_options.length; i++){        
                 tag_options[i].selected = false;    
             }        
             var tags_arr = JSON.parse(result); 
             var tags_val_arr = [];                     
             for(var i = 0; i < tags_arr.length; i++){  
                 tags_val_arr[i] = tags_arr[i].t_id; 
                 alert(tags_arr[0].t_id);  
             }  
             \$(\"#category_tags___name___tagname\").val(tags_val_arr);
             \$(\"#category_tags___name___tagname\").trigger(\"chosen:updated\");     
             \$(\"#category_categoryname\").val(category_type); 
            },    
                error: function(xhr, status, error) {     
                    console.log(status);
                } 
            });
        });
     \$collectionHolder = \$('div.tags');
     var prototype = \$collectionHolder.data('prototype');
     \$tagsField = \$('div#category_tags');      
     var \$newtagsField = \$tagsField.append(prototype);
    \$(\"#category_tags___name___tagname\").chosen({  
    display_selected_options: false,    
    width: \"22%\",          
    placeholder_text_multiple: 'Select Tags', 
    no_results_text: \"Oops, no tags found!\"  
});

  }); #}
    </script>       
  {#<script src=\"{{ asset('bundles/appbundle/js/main.js') }}\"></script>#}
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\app\\Resources\\views\\default\\index.html.twig");
    }
}
