<?php

/* doctors/imageEdit.html.twig */
class __TwigTemplate_3327c564e0a7f26fc148364d78d555b6a7d21110b486dfc4372f7f151583ebfd extends Twig_Template
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
        $__internal_31a6c3f85eee8ef0463b7ddfacd2adf687c9fca0ff9ca3adfd242e664f922845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a6c3f85eee8ef0463b7ddfacd2adf687c9fca0ff9ca3adfd242e664f922845->enter($__internal_31a6c3f85eee8ef0463b7ddfacd2adf687c9fca0ff9ca3adfd242e664f922845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/imageEdit.html.twig"));

        $__internal_d0ded70f6ae995f7602185dc88307e2bda776f2771af1ad25ae80baed2ff7a4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ded70f6ae995f7602185dc88307e2bda776f2771af1ad25ae80baed2ff7a4c->enter($__internal_d0ded70f6ae995f7602185dc88307e2bda776f2771af1ad25ae80baed2ff7a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/imageEdit.html.twig"));

        // line 1
        echo "<div class=\"tg-box tg-profilephoto\">
    <div class=\"tg-box tg-profilephoto\">
        <div class=\"row tg-rowmargin\">
            <form action=\"\" id=\"formEditDoctorImage\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom", "readonly" => "true")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom", "readonly" => "true")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "title", "readonly" => "true")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding hidden\">
                    Please call us to change your name.
                </div>
                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "birthday", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Date de naissance", "readonly" => "true")));
        echo "
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "GSM", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "GSM", "readonly" => "true")));
        echo "
                    </div>
                </div>

                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "professionalStatement", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Professional statement", "readonly" => "true")));
        echo "
                    </div>
                </div>
                    
                    
                    
                <div class=\"col-md-2 col-sm-6 col-xs-12 tg-columnpadding\">
                    <div class=\"form-group tg-formgroup\">
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageFile", array()), 'widget');
        echo "
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                    </div>
                </div>

                    
                <br/><br/><br/><br/>
                <div class=\"col-md-2 col-sm-6 col-xs-12 tg-columnpadding\">
                    <div class=\"form-group tg-formgroup\">
                        <button class=\"tg-btn tg-btn-lg\" type=\"submit\" id=\"updateBasicInfo\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("upload"), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </form>      
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
        
        \$('body').on('submit', '#formEditDoctorImage', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctors_image_edit", array("id" => "myID"));
        echo "\";
            var idDoctor = '";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()), "html", null, true);
        echo "'
            URL = URL.replace(/myID/g, idDoctor);


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
</script>";
        
        $__internal_31a6c3f85eee8ef0463b7ddfacd2adf687c9fca0ff9ca3adfd242e664f922845->leave($__internal_31a6c3f85eee8ef0463b7ddfacd2adf687c9fca0ff9ca3adfd242e664f922845_prof);

        
        $__internal_d0ded70f6ae995f7602185dc88307e2bda776f2771af1ad25ae80baed2ff7a4c->leave($__internal_d0ded70f6ae995f7602185dc88307e2bda776f2771af1ad25ae80baed2ff7a4c_prof);

    }

    public function getTemplateName()
    {
        return "doctors/imageEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 78,  130 => 77,  103 => 53,  92 => 45,  88 => 44,  77 => 36,  68 => 30,  60 => 25,  49 => 17,  41 => 12,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-box tg-profilephoto\">
    <div class=\"tg-box tg-profilephoto\">
        <div class=\"row tg-rowmargin\">
            <form action=\"\" id=\"formEditDoctorImage\">
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.firstName, {'attr':{'class':'form-control', 'placeholder':'Prénom', 'readonly':'true'}}) }}
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.lastName, {'attr':{'class':'form-control', 'placeholder':'Nom', 'readonly':'true'}}) }}
                    </div>
                </div>
                <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.title, {'attr':{'class':'form-control', 'placeholder':'title', 'readonly':'true'}}) }}
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding hidden\">
                    Please call us to change your name.
                </div>
                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.birthday, {'attr':{'class':'form-control js-datepicker', 'placeholder':'Date de naissance', 'readonly':'true'}}) }}
                    </div>
                </div>
                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.GSM, {'attr':{'class':'form-control', 'placeholder':'GSM', 'readonly':'true'}}) }}
                    </div>
                </div>

                <div class=\"col-md-12 col-sm-6 col-xs-12 tg-columnpadding hidden\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.professionalStatement, {'attr':{'class':'form-control', 'placeholder':'Professional statement', 'readonly':'true'}}) }}
                    </div>
                </div>
                    
                    
                    
                <div class=\"col-md-2 col-sm-6 col-xs-12 tg-columnpadding\">
                    <div class=\"form-group tg-formgroup\">
                        {{ form_widget(edit_form.imageFile)}}
                        {{ form_widget(edit_form._token) }}
                    </div>
                </div>

                    
                <br/><br/><br/><br/>
                <div class=\"col-md-2 col-sm-6 col-xs-12 tg-columnpadding\">
                    <div class=\"form-group tg-formgroup\">
                        <button class=\"tg-btn tg-btn-lg\" type=\"submit\" id=\"updateBasicInfo\">{{ 'upload'|trans }}</button>
                    </div>
                </div>
            </form>      
        </div>
    </div>
</div>

<script>
    \$(document).ready(function() {
        // configure the bootstrap datepicker
        \$('.js-datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
        
        \$('body').on('submit', '#formEditDoctorImage', function (e) {
            // On empêche le navigateur de soumettre le formulaire
            e.preventDefault();
            e.stopImmediatePropagation();

            var \$form = \$(this);
            var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
            var data = (formdata !== null) ? formdata : \$form.serialize();

            var URL = \"{{ path('doctors_image_edit',{ 'id': 'myID' }) }}\";
            var idDoctor = '{{ app.user.idTable }}'
            URL = URL.replace(/myID/g, idDoctor);


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
</script>", "doctors/imageEdit.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\imageEdit.html.twig");
    }
}
