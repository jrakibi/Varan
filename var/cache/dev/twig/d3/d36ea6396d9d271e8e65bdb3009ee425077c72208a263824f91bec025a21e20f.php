<?php

/* questions/new.html.twig */
class __TwigTemplate_fa01b302ac5bfe15eccb05a24590508f7b09234a24ec5cbb7df757ca5273d773 extends Twig_Template
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
        $__internal_41b5baaae719bc9a92e9e7cd1f04c406927ea637cc55c5b14465164e52b14fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41b5baaae719bc9a92e9e7cd1f04c406927ea637cc55c5b14465164e52b14fb8->enter($__internal_41b5baaae719bc9a92e9e7cd1f04c406927ea637cc55c5b14465164e52b14fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions/new.html.twig"));

        $__internal_6bb2fa6e12ab7f0482cf83af134adc1e46e1437ce52eaf900abf64a0b428bd80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb2fa6e12ab7f0482cf83af134adc1e46e1437ce52eaf900abf64a0b428bd80->enter($__internal_6bb2fa6e12ab7f0482cf83af134adc1e46e1437ce52eaf900abf64a0b428bd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions/new.html.twig"));

        // line 5
        echo "<div class=\"tg-box\">
    <div class=\"tg-tabtitle\">
        <h2>Leave Your Question</h2>
    </div>
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "tg-formtheme tg-formleavefeedback", "id" => "formAddQuestion")));
        echo "
        <fieldset>
            <div class=\"row\">

                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Objet")));
        echo "
                    </div>
                </div>                
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "question", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Question")));
        echo "
                    </div>
                </div>

                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "doctor", array()), 'widget');
        echo "
                
                <div class=\"col-sm-12 col-xs-12\">
                    <input type=\"submit\" class=\"tg-btn\" value=\"Envoyer\" />
                </div>
            </div>
        </fieldset>
    ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<script>
    \$(document).ready(function () {
        \$('body').on('submit', '#formAddQuestion', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questions_new");
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
        
        $__internal_41b5baaae719bc9a92e9e7cd1f04c406927ea637cc55c5b14465164e52b14fb8->leave($__internal_41b5baaae719bc9a92e9e7cd1f04c406927ea637cc55c5b14465164e52b14fb8_prof);

        
        $__internal_6bb2fa6e12ab7f0482cf83af134adc1e46e1437ce52eaf900abf64a0b428bd80->leave($__internal_6bb2fa6e12ab7f0482cf83af134adc1e46e1437ce52eaf900abf64a0b428bd80_prof);

    }

    public function getTemplateName()
    {
        return "questions/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 45,  65 => 31,  55 => 24,  48 => 20,  40 => 15,  31 => 9,  25 => 5,);
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
        <h2>Leave Your Question</h2>
    </div>
    {{ form_start(form,{'attr':{'class':\"tg-formtheme tg-formleavefeedback\",'id':'formAddQuestion'}}) }}
        <fieldset>
            <div class=\"row\">

                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder':'Objet'}})}}
                    </div>
                </div>                
                <div class=\"col-sm-12 col-xs-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.question, {'attr': {'class': 'form-control', 'placeholder':'Question'}})}}
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
        \$('body').on('submit', '#formAddQuestion', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"{{ path('questions_new') }}\";
            
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
    ", "questions/new.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\questions\\new.html.twig");
    }
}
