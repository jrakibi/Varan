<?php

/* reviews/new.html.twig */
class __TwigTemplate_827c3885fd577a7114e89e27c15df7f63ab385907f22d01e8cd8621545cdb6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d173101470ed63598f32e2aee3a5f22e5b4500aac21e2e1b6bb251e0c456e3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d173101470ed63598f32e2aee3a5f22e5b4500aac21e2e1b6bb251e0c456e3d1->enter($__internal_d173101470ed63598f32e2aee3a5f22e5b4500aac21e2e1b6bb251e0c456e3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviews/new.html.twig"));

        $__internal_8928397ed6bba3506c041b6e59f42a5d6fdd78ac18c71c19fedc666cff9d38e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8928397ed6bba3506c041b6e59f42a5d6fdd78ac18c71c19fedc666cff9d38e4->enter($__internal_8928397ed6bba3506c041b6e59f42a5d6fdd78ac18c71c19fedc666cff9d38e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviews/new.html.twig"));

        // line 5
        echo "<div class=\"tg-box\">
    <div class=\"tg-tabtitle\">
        <h2>Leave Your Feedback</h2>
    </div>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "tg-formtheme tg-formleavefeedback", "id" => "formAddReview")));
        echo "
        <fieldset>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label>Recommend This Doctor: </label>
                        <div class=\"tg-recommendedradio\">
                            <span class=\"tg-radio\">                                            
                                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "recommended", array()), 0, array(), "array"), 'widget', array("id" => "yes"));
        echo "
                                <label for=\"yes\"><i class=\"fa fa-thumbs-o-up\"></i> yes</label>
                            </span>

                            <span class=\"tg-radio\">                                            
                                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "recommended", array()), 1, array(), "array"), 'widget', array("id" => "no"));
        echo "
                                <label for=\"no\"><i class=\"fa fa-thumbs-o-up\"></i> no</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Review Reason")));
        echo "
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Description")));
        echo "
                    </div>
                </div>

                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "doctor", array()), 'widget');
        echo "
                
                <div class=\"col-sm-12 col-xs-12\">
                    <input type=\"submit\" class=\"tg-btn\" value=\"Envoyer\" />
                </div>
            </div>
        </fieldset>
    ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<script>
    \$(document).ready(function () {
        \$('body').on('submit', '#formAddReview', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reviews_new");
        echo "\";
            
            \$.ajax({
                url: URL,
                type: \"POST\",
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'html', // selon le retour attendu
                data: data,
                success: function (response) {
                    location.reload();
                    return true;
                }
            });
            return false;
        });
    });
</script>
    ";
        
        $__internal_d173101470ed63598f32e2aee3a5f22e5b4500aac21e2e1b6bb251e0c456e3d1->leave($__internal_d173101470ed63598f32e2aee3a5f22e5b4500aac21e2e1b6bb251e0c456e3d1_prof);

        
        $__internal_8928397ed6bba3506c041b6e59f42a5d6fdd78ac18c71c19fedc666cff9d38e4->leave($__internal_8928397ed6bba3506c041b6e59f42a5d6fdd78ac18c71c19fedc666cff9d38e4_prof);

    }

    public function getTemplateName()
    {
        return "reviews/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 60,  86 => 46,  76 => 39,  69 => 35,  61 => 30,  50 => 22,  42 => 17,  31 => 9,  25 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
{{- form_label(form.category,'Categoryname',{ 'label_attr' : {'class': 'control-label','for':'Cname'}}) -}} 
{{- form_widget(form.category,{ 'attr': {'class': 'form-control col-md-10','max-length':55},'label': 'Category name','required':true,'id':'Cname' }) -}}
#}
<div class=\"tg-box\">
    <div class=\"tg-tabtitle\">
        <h2>Leave Your Feedback</h2>
    </div>
    {{ form_start(form,{'attr':{'class':\"tg-formtheme tg-formleavefeedback\",'id':'formAddReview'}}) }}
        <fieldset>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        <label>Recommend This Doctor: </label>
                        <div class=\"tg-recommendedradio\">
                            <span class=\"tg-radio\">                                            
                                {{ form_widget(form.recommended[0],{'id':'yes' }) }}
                                <label for=\"yes\"><i class=\"fa fa-thumbs-o-up\"></i> yes</label>
                            </span>

                            <span class=\"tg-radio\">                                            
                                {{ form_widget(form.recommended[1],{'id':'no' }) }}
                                <label for=\"no\"><i class=\"fa fa-thumbs-o-up\"></i> no</label>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder':'Review Reason'}})}}
                    </div>
                </div>
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder':'Description'}}) }}
                    </div>
                </div>

                {{ form_widget(form.doctor) }}
                
                <div class=\"col-sm-12 col-xs-12\">
                    <input type=\"submit\" class=\"tg-btn\" value=\"Envoyer\" />
                </div>
            </div>
        </fieldset>
    {{ form_end(form) }}
</div>

<script>
    \$(document).ready(function () {
        \$('body').on('submit', '#formAddReview', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"{{ path('reviews_new') }}\";
            
            \$.ajax({
                url: URL,
                type: \"POST\",
                contentType: false, // obligatoire pour de l'upload
                processData: false, // obligatoire pour de l'upload
                dataType: 'html', // selon le retour attendu
                data: data,
                success: function (response) {
                    location.reload();
                    return true;
                }
            });
            return false;
        });
    });
</script>
    ", "reviews/new.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\reviews\\new.html.twig");
    }
}
