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
        $__internal_b6ca5b2310bb6a87213bb52be0aeab7a75ab115dff857bafc5b7bd22a4a682e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ca5b2310bb6a87213bb52be0aeab7a75ab115dff857bafc5b7bd22a4a682e2->enter($__internal_b6ca5b2310bb6a87213bb52be0aeab7a75ab115dff857bafc5b7bd22a4a682e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ca5b2310bb6a87213bb52be0aeab7a75ab115dff857bafc5b7bd22a4a682e2->leave($__internal_b6ca5b2310bb6a87213bb52be0aeab7a75ab115dff857bafc5b7bd22a4a682e2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dd246f96bcde22ca34f4cf43f83c74468d05e65392d40188cd57c9db4f4a250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dd246f96bcde22ca34f4cf43f83c74468d05e65392d40188cd57c9db4f4a250->enter($__internal_8dd246f96bcde22ca34f4cf43f83c74468d05e65392d40188cd57c9db4f4a250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8dd246f96bcde22ca34f4cf43f83c74468d05e65392d40188cd57c9db4f4a250->leave($__internal_8dd246f96bcde22ca34f4cf43f83c74468d05e65392d40188cd57c9db4f4a250_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_234b5d94f6504b5a5326dc420e9a7603748222ccfe28a7bcb137034beadcefc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234b5d94f6504b5a5326dc420e9a7603748222ccfe28a7bcb137034beadcefc7->enter($__internal_234b5d94f6504b5a5326dc420e9a7603748222ccfe28a7bcb137034beadcefc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.min.css\"> 
";
        
        $__internal_234b5d94f6504b5a5326dc420e9a7603748222ccfe28a7bcb137034beadcefc7->leave($__internal_234b5d94f6504b5a5326dc420e9a7603748222ccfe28a7bcb137034beadcefc7_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_46942a03b0f326a4bc1fd7bfc226fba3f595a7e9fedb26f27fad15ae4eb90ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46942a03b0f326a4bc1fd7bfc226fba3f595a7e9fedb26f27fad15ae4eb90ae4->enter($__internal_46942a03b0f326a4bc1fd7bfc226fba3f595a7e9fedb26f27fad15ae4eb90ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"> </script> 
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js\"> </script> 
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script> 
    <script src=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script>       
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
                 //alert(tags_arr[0].t_id); 
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

  }); 
    </script> 
";
        
        $__internal_46942a03b0f326a4bc1fd7bfc226fba3f595a7e9fedb26f27fad15ae4eb90ae4->leave($__internal_46942a03b0f326a4bc1fd7bfc226fba3f595a7e9fedb26f27fad15ae4eb90ae4_prof);

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
        return array (  102 => 20,  98 => 19,  94 => 17,  88 => 16,  80 => 13,  74 => 12,  65 => 9,  61 => 8,  56 => 6,  52 => 5,  48 => 4,  44 => 3,  36 => 2,  11 => 1,);
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
    <script>       
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
                 //alert(tags_arr[0].t_id); 
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

  }); 
    </script> 
{% endblock %}", "default/index.html.twig", "C:\\xampp\\htdocs\\MtoMEmbCollecForm\\app\\Resources\\views\\default\\index.html.twig");
    }
}
