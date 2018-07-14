<?php

/* patient/edit.html.twig */
class __TwigTemplate_2a8583dd44a74d9bfb6470c01215d0343ec37b2aefafbaaeb702bcf7461ad1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15c845f25c4720b8678cb78c497e2f747e766925ad416a5613f0a47353eadd7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c845f25c4720b8678cb78c497e2f747e766925ad416a5613f0a47353eadd7a->enter($__internal_15c845f25c4720b8678cb78c497e2f747e766925ad416a5613f0a47353eadd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        $__internal_b4850030220be720b97413beed66521aea331fa9fa9e3c40b365912edaa2c756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4850030220be720b97413beed66521aea331fa9fa9e3c40b365912edaa2c756->enter($__internal_b4850030220be720b97413beed66521aea331fa9fa9e3c40b365912edaa2c756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "patient/edit.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 149
        echo "
";
        
        $__internal_15c845f25c4720b8678cb78c497e2f747e766925ad416a5613f0a47353eadd7a->leave($__internal_15c845f25c4720b8678cb78c497e2f747e766925ad416a5613f0a47353eadd7a_prof);

        
        $__internal_b4850030220be720b97413beed66521aea331fa9fa9e3c40b365912edaa2c756->leave($__internal_b4850030220be720b97413beed66521aea331fa9fa9e3c40b365912edaa2c756_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f98a06eee0291baf55d8ce00ed45220e58660a98af0f610484d68745c383c7fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98a06eee0291baf55d8ce00ed45220e58660a98af0f610484d68745c383c7fd->enter($__internal_f98a06eee0291baf55d8ce00ed45220e58660a98af0f610484d68745c383c7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d2485db1bf5f50988d4cb813237003a1c6162f7ff8c6b43e943937e4cedc71fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2485db1bf5f50988d4cb813237003a1c6162f7ff8c6b43e943937e4cedc71fb->enter($__internal_d2485db1bf5f50988d4cb813237003a1c6162f7ff8c6b43e943937e4cedc71fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body class=\"tg-home tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Preloader End
    *************************************-->

    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:header"));
        echo "

        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\">
                                    ";
        // line 34
        if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["patient"] ?? $this->getContext($context, "patient")), "imageFile")) {
            // line 35
            echo "                                        <a href=\"#\">
                                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["patient"] ?? $this->getContext($context, "patient")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "image", array()), "html", null, true);
            echo "\" />
                                        </a>
                                    ";
        } else {
            // line 39
            echo "                                        <a href=\"#\">
                                            <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
            echo "\" alt=\"image description\">
                                        </a>
                                    ";
        }
        // line 42
        echo "                                
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profil"), "html", null, true);
        echo "</a> </div>
                            <nav id=\"tg-dashboardnav\" class=\"tg-dashboardnav\">
                                <ul>
                                    <li> <a href=\"#\"> <i class=\"fa fa-user\"></i> <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile Settings"), "html", null, true);
        echo "</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardtabs\">
                                <h3>";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profil edit"), "html", null, true);
        echo "</h3>
                                <hr>
                                <br>
                                <div class=\"tab-content tg-dashboardtabcontent\">
                                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                        <div class=\"row tg-rowmargin\">
                                            ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "birthday", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Date de naissance")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "gSM", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "GSM")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "domicile", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Domicile")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "travail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Travail")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    <select name=\"patientbundle_patient[preferredNumber]\" id=\"patientbundle_patient_preferredNumber\">
                                                        <option value=\"gsm\">GSM</option>
                                                        <option value=\"travail\">Travail</option>
                                                        <option value=\"domicile\">Domicile</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\" >
                                                <div class=\"form-group tg-formgroup\">
                                                    <select name=\"patientbundle_patient[sexe]\" id=\"patientbundle_patient_sexe\">
                                                        <option value=\"homme\">Homme</option>
                                                        <option value=\"femme\">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "imageFile", array()), 'widget');
        echo "
                                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"tg-btn pull-right\"><i class=\"fa fa-edit\"></i> ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
        echo "</button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    ";
        // line 146
        $this->loadTemplate("default/footer.html.twig", "patient/edit.html.twig", 146)->display($context);
        // line 147
        echo "
    ";
        
        $__internal_d2485db1bf5f50988d4cb813237003a1c6162f7ff8c6b43e943937e4cedc71fb->leave($__internal_d2485db1bf5f50988d4cb813237003a1c6162f7ff8c6b43e943937e4cedc71fb_prof);

        
        $__internal_f98a06eee0291baf55d8ce00ed45220e58660a98af0f610484d68745c383c7fd->leave($__internal_f98a06eee0291baf55d8ce00ed45220e58660a98af0f610484d68745c383c7fd_prof);

    }

    public function getTemplateName()
    {
        return "patient/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 147,  263 => 146,  240 => 126,  234 => 123,  230 => 122,  214 => 109,  197 => 95,  189 => 90,  181 => 85,  173 => 80,  165 => 75,  157 => 70,  151 => 67,  142 => 61,  133 => 55,  125 => 52,  113 => 45,  108 => 42,  102 => 40,  99 => 39,  91 => 36,  88 => 35,  86 => 34,  71 => 22,  50 => 3,  41 => 2,  30 => 149,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include ('base.html.twig') %}
{% block body %}
    <body class=\"tg-home tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Preloader End
    *************************************-->

    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        {{ render(controller('AppBundle:Default:header')) }}

        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\">
                                    {% if vich_uploader_asset(patient, 'imageFile') %}
                                        <a href=\"#\">
                                            <img src=\"{{ vich_uploader_asset(patient, 'imageFile') }}\" alt=\"{{ patient.image }}\" />
                                        </a>
                                    {% else %}
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/thumbnails/img-20.jpg') }}\" alt=\"image description\">
                                        </a>
                                    {% endif %}                                
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\"> {{ patient.firstName }} {{ patient.lastName }}</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('patient_profil', {'id':app.user.id}) }}\">{{ 'Profil'|trans }}</a> </div>
                            <nav id=\"tg-dashboardnav\" class=\"tg-dashboardnav\">
                                <ul>
                                    <li> <a href=\"#\"> <i class=\"fa fa-user\"></i> <span>{{ 'Profile Settings'|trans }}</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardtabs\">
                                <h3>{{ 'Profil edit'|trans }}</h3>
                                <hr>
                                <br>
                                <div class=\"tab-content tg-dashboardtabcontent\">
                                    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                        <div class=\"row tg-rowmargin\">
                                            {{ form_start(edit_form) }}
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.firstName, {'attr':{'class':'form-control', 'placeholder':'Prénom'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.lastName, {'attr':{'class':'form-control', 'placeholder':'Nom'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.birthday, {'attr':{'class':'form-control js-datepicker', 'placeholder':'Date de naissance'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.gSM, {'attr':{'class':'form-control', 'placeholder':'GSM'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.domicile, {'attr':{'class':'form-control', 'placeholder':'Domicile'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-4 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.travail, {'attr':{'class':'form-control', 'placeholder':'Travail'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    <select name=\"patientbundle_patient[preferredNumber]\" id=\"patientbundle_patient_preferredNumber\">
                                                        <option value=\"gsm\">GSM</option>
                                                        <option value=\"travail\">Travail</option>
                                                        <option value=\"domicile\">Domicile</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.adresse, {'attr':{'class':'form-control', 'placeholder':'Adresse'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\" >
                                                <div class=\"form-group tg-formgroup\">
                                                    <select name=\"patientbundle_patient[sexe]\" id=\"patientbundle_patient_sexe\">
                                                        <option value=\"homme\">Homme</option>
                                                        <option value=\"femme\">Femme</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group tg-formgroup\">
                                                    {{ form_widget(edit_form.imageFile) }}
                                                    {{ form_widget(edit_form._token) }}
                                                </div>
                                            </div>
                                            <button type=\"submit\" class=\"tg-btn pull-right\"><i class=\"fa fa-edit\"></i> {{ 'Edit'|trans }}</button>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    {% include ('default/footer.html.twig') %}

    {% endblock %}

", "patient/edit.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\patient\\edit.html.twig");
    }
}
