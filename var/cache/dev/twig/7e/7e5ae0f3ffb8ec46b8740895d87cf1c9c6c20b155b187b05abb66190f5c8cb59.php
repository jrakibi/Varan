<?php

/* patient/new.html.twig */
class __TwigTemplate_653341856eda78514af7934558ff8419d00bfd897ac6aa35c0ce6778c3492152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "patient/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31e3482f37f2681d1f01a64cd3ad8bf4c1755dc820daea8551652b2fd1ddb407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e3482f37f2681d1f01a64cd3ad8bf4c1755dc820daea8551652b2fd1ddb407->enter($__internal_31e3482f37f2681d1f01a64cd3ad8bf4c1755dc820daea8551652b2fd1ddb407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/new.html.twig"));

        $__internal_e5fd86cf1ddc691da79ad44d1b2e692c0c1451fefe470dbc3c32311ca09af0ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fd86cf1ddc691da79ad44d1b2e692c0c1451fefe470dbc3c32311ca09af0ab->enter($__internal_e5fd86cf1ddc691da79ad44d1b2e692c0c1451fefe470dbc3c32311ca09af0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e3482f37f2681d1f01a64cd3ad8bf4c1755dc820daea8551652b2fd1ddb407->leave($__internal_31e3482f37f2681d1f01a64cd3ad8bf4c1755dc820daea8551652b2fd1ddb407_prof);

        
        $__internal_e5fd86cf1ddc691da79ad44d1b2e692c0c1451fefe470dbc3c32311ca09af0ab->leave($__internal_e5fd86cf1ddc691da79ad44d1b2e692c0c1451fefe470dbc3c32311ca09af0ab_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_46cfb7f90dc7190268521b52cda2bfdf7e87aed3caa90abe65793cec6be5edc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46cfb7f90dc7190268521b52cda2bfdf7e87aed3caa90abe65793cec6be5edc4->enter($__internal_46cfb7f90dc7190268521b52cda2bfdf7e87aed3caa90abe65793cec6be5edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7585403184ee3ff87eb30d398e21e459124bfa173eccc7448f37b02a6cc7108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7585403184ee3ff87eb30d398e21e459124bfa173eccc7448f37b02a6cc7108->enter($__internal_c7585403184ee3ff87eb30d398e21e459124bfa173eccc7448f37b02a6cc7108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        <!--************************************
                Header Start
        *************************************-->
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:header"));
        echo "
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Banner Start
        *************************************-->
        <div class=\"tg-pageinnerbanner tg-haslayout tg-parallaximg\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"images/banner/img-02.jpg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-pageheadcontent\">
                            <div class=\"tg-pagetitle\">
                                <h1>Connexion / Créer un compte</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-signinsignup\">
                                    <div class=\"tg-title\" id=\"titleInscription\">
                                        <h2>Inscrivez-vous dès maintenant</h2>
                                    </div>
                                    <div class=\"tg-title\" id=\"titleConnexion\" hidden>
                                        <h2>Se connecter</h2>
                                    </div>
                                    <div class=\"tg-alertmessages col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"alert alert-success tg-alertmessage fade in\" id=\"alertSuccess\" hidden>
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                            <i class=\"fa fa-check\"></i>
                                            <span><strong>success Message.</strong> Adipisicing elit, sed do eiusmod tempor incididunt.</span>
                                        </div>
                                        <div class=\"alert alert-danger tg-alertmessage fade in\" id=\"divErreurAlert\" hidden>
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                            <i class=\"fa fa-bug\"></i>
                                            <span><strong>Error Message.</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
                                        </div>
                                    </div>
                                    <div class=\"tg-dashboardtabs\">
                                        <div class=\"tab-content tg-dashboardtabcontent\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                                <div class=\"tg-searchbulder\">
                                                    <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                                        <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                            <div id=\"formAddDoctor\">
                                                                <form class=\"tg-formtheme tg-formsigninsignup\" id=\"addPatientForm\" autocomplete=\"off\">
                                                                    <fieldset>
                                                                        <div class=\"row tg-rowmargin\">
                                                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prénom")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div id=\"noDispoName\" hidden>
                                                                                <p style=\"color:#761c19\"><i class=\"fa fa-times-circle\" style=\"color: #761c19\"></i>Nom et prénom existent déjà</p>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "birthday", array()), 'widget', array("attr" => array("class" => "form-control js-datepicker", "placeholder" => "Date de naissance")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "gSM", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "GSM")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "domicile", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "domicile (optionnel)")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "travail", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "travail (optionnel)")));
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
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <select name=\"patientbundle_patient[sexe]\" id=\"patientbundle_patient_sexe\">
                                                                                        <option value=\"homme\">Homme</option>
                                                                                        <option value=\"femme\">Femme</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <button type=\"submit\" class=\"tg-btn pull-right\">Suivant <i class=\"fa fa-arrow-right\"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script>
            \$(document).ready(function() {
                // configure the bootstrap datepicker
                \$('.js-datepicker').datepicker({
                    format: 'dd-mm-yyyy'
                });
            });
        </script>
        <script>
            var nomDispo = false;
            var prenomDispo = false;
            \$('body').on('submit', '#addPatientForm', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();

                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();

                var URL = \"";
        // line 180
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_create");
        echo "\";
                console.log(URL);
                if (prenomDispo == false && nomDispo == false){
                    \$('#noDispoName').show();
                }else {
                    \$('#noDispoName').hide();
                    \$.ajax({
                        url: URL,
                        type: \"POST\",
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        dataType: 'html', // selon le retour attendu
                        data: data,
                        success: function (response) {
                            if (response == 'erreur') {
                                \$('#divErreurAlert').show();
                            } else {
                                \$('#formAddDoctor').html(response);
                            }
                            return true;
                        }

                    });
                }
                return false;
            });

            \$(\"#patientbundle_patient_lastName\").change(function (key) {
                var nom = \$(\"#patientbundle_patient_lastName\").val();
                var DATA = 'nom=' + nom;

                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_verifierNom");
        echo "\",
                    data: DATA,
                    cache: false,
                    success: function (responce) {
                        if(responce == 'dispo'){
                            nomDispo = true;
                            \$('#noDispoName').hide();
                        }else {
                            nomDispo = false;
                        }

                    }
                });
                return false;
            });

            \$(\"#patientbundle_patient_firstName\").change(function (key) {
                var prenom = \$(\"#patientbundle_patient_firstName\").val();
                var DATA = 'prenom=' + prenom;

                \$.ajax({
                    type: \"POST\",
                    url: \"";
        // line 235
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_verifierPrenom");
        echo "\",
                    data: DATA,
                    cache: false,
                    success: function (responce) {
                        if(responce == 'dispo'){
                            prenomDispo = true;
                            \$('#noDispoName').hide();
                        }else {
                            prenomDispo = false;
                        }
                    }
                });
                return false;
            });
        </script>
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        ";
        // line 256
        $this->loadTemplate("default/footer.html.twig", "patient/new.html.twig", 256)->display($context);
        // line 257
        echo "        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    </body>
";
        
        $__internal_c7585403184ee3ff87eb30d398e21e459124bfa173eccc7448f37b02a6cc7108->leave($__internal_c7585403184ee3ff87eb30d398e21e459124bfa173eccc7448f37b02a6cc7108_prof);

        
        $__internal_46cfb7f90dc7190268521b52cda2bfdf7e87aed3caa90abe65793cec6be5edc4->leave($__internal_46cfb7f90dc7190268521b52cda2bfdf7e87aed3caa90abe65793cec6be5edc4_prof);

    }

    public function getTemplateName()
    {
        return "patient/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 257,  339 => 256,  315 => 235,  290 => 213,  254 => 180,  210 => 139,  196 => 128,  178 => 113,  170 => 108,  162 => 103,  154 => 98,  143 => 90,  135 => 85,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <body class=\"tg-login\">
    <!--[if lt IE 8]>
    <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!--************************************
            Preloader Start
    *************************************-->
    <div class=\"preloader-outer\">
        <div class=\"pin\"></div>
        <div class=\"pulse\"></div>
    </div>
    <!--************************************
            Wrapper Start
    *************************************-->
    <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
        <!--************************************
                Header Start
        *************************************-->
        {{ render(controller('AppBundle:Default:header')) }}
        <!--************************************
                Header End
        *************************************-->
        <!--************************************
                Home Banner Start
        *************************************-->
        <div class=\"tg-pageinnerbanner tg-haslayout tg-parallaximg\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"images/banner/img-02.jpg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <div class=\"tg-pageheadcontent\">
                            <div class=\"tg-pagetitle\">
                                <h1>Connexion / Créer un compte</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                Home Banner End
        *************************************-->
        <!--************************************
                Main Start
        *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-offset-2 col-sm-offset-2 col-md-8 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-signinsignup\">
                                    <div class=\"tg-title\" id=\"titleInscription\">
                                        <h2>Inscrivez-vous dès maintenant</h2>
                                    </div>
                                    <div class=\"tg-title\" id=\"titleConnexion\" hidden>
                                        <h2>Se connecter</h2>
                                    </div>
                                    <div class=\"tg-alertmessages col-md-12 col-sm-12 col-xs-12\">
                                        <div class=\"alert alert-success tg-alertmessage fade in\" id=\"alertSuccess\" hidden>
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                            <i class=\"fa fa-check\"></i>
                                            <span><strong>success Message.</strong> Adipisicing elit, sed do eiusmod tempor incididunt.</span>
                                        </div>
                                        <div class=\"alert alert-danger tg-alertmessage fade in\" id=\"divErreurAlert\" hidden>
                                            <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                            <i class=\"fa fa-bug\"></i>
                                            <span><strong>Error Message.</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
                                        </div>
                                    </div>
                                    <div class=\"tg-dashboardtabs\">
                                        <div class=\"tab-content tg-dashboardtabcontent\">
                                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                                <div class=\"tg-searchbulder\">
                                                    <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                                        <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                            <div id=\"formAddDoctor\">
                                                                <form class=\"tg-formtheme tg-formsigninsignup\" id=\"addPatientForm\" autocomplete=\"off\">
                                                                    <fieldset>
                                                                        <div class=\"row tg-rowmargin\">
                                                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.firstName, {'attr':{'class':'form-control', 'placeholder':'Prénom'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-6 col-sm-6 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.lastName, {'attr':{'class':'form-control', 'placeholder':'Nom'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div id=\"noDispoName\" hidden>
                                                                                <p style=\"color:#761c19\"><i class=\"fa fa-times-circle\" style=\"color: #761c19\"></i>Nom et prénom existent déjà</p>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.birthday, {'attr':{'class':'form-control js-datepicker', 'placeholder':'Date de naissance'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.gSM, {'attr':{'class':'form-control', 'placeholder':'GSM'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.domicile, {'attr':{'class':'form-control', 'placeholder':'domicile (optionnel)'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-4 col-sm-4 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    {{ form_widget(form.travail, {'attr':{'class':'form-control', 'placeholder':'travail (optionnel)'}}) }}
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
                                                                                    {{ form_widget(form.adresse, {'attr':{'class':'form-control', 'placeholder':'Adresse'}}) }}
                                                                                </div>
                                                                            </div>
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <div class=\"form-group tg-formgroup\">
                                                                                    <select name=\"patientbundle_patient[sexe]\" id=\"patientbundle_patient_sexe\">
                                                                                        <option value=\"homme\">Homme</option>
                                                                                        <option value=\"femme\">Femme</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            {{ form_widget(form._token) }}
                                                                            <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                                                                <button type=\"submit\" class=\"tg-btn pull-right\">Suivant <i class=\"fa fa-arrow-right\"></i></button>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
        <script>
            \$(document).ready(function() {
                // configure the bootstrap datepicker
                \$('.js-datepicker').datepicker({
                    format: 'dd-mm-yyyy'
                });
            });
        </script>
        <script>
            var nomDispo = false;
            var prenomDispo = false;
            \$('body').on('submit', '#addPatientForm', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();

                var \$form = \$(this);
                var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                var data = (formdata !== null) ? formdata : \$form.serialize();

                var URL = \"{{ path('patient_create')}}\";
                console.log(URL);
                if (prenomDispo == false && nomDispo == false){
                    \$('#noDispoName').show();
                }else {
                    \$('#noDispoName').hide();
                    \$.ajax({
                        url: URL,
                        type: \"POST\",
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        dataType: 'html', // selon le retour attendu
                        data: data,
                        success: function (response) {
                            if (response == 'erreur') {
                                \$('#divErreurAlert').show();
                            } else {
                                \$('#formAddDoctor').html(response);
                            }
                            return true;
                        }

                    });
                }
                return false;
            });

            \$(\"#patientbundle_patient_lastName\").change(function (key) {
                var nom = \$(\"#patientbundle_patient_lastName\").val();
                var DATA = 'nom=' + nom;

                \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('patient_verifierNom')}}\",
                    data: DATA,
                    cache: false,
                    success: function (responce) {
                        if(responce == 'dispo'){
                            nomDispo = true;
                            \$('#noDispoName').hide();
                        }else {
                            nomDispo = false;
                        }

                    }
                });
                return false;
            });

            \$(\"#patientbundle_patient_firstName\").change(function (key) {
                var prenom = \$(\"#patientbundle_patient_firstName\").val();
                var DATA = 'prenom=' + prenom;

                \$.ajax({
                    type: \"POST\",
                    url: \"{{ path('patient_verifierPrenom')}}\",
                    data: DATA,
                    cache: false,
                    success: function (responce) {
                        if(responce == 'dispo'){
                            prenomDispo = true;
                            \$('#noDispoName').hide();
                        }else {
                            prenomDispo = false;
                        }
                    }
                });
                return false;
            });
        </script>
        <!--************************************
                Main End
        *************************************-->
        <!--************************************
                Footer Start
        *************************************-->
        {% include ('default/footer.html.twig') %}
        <!--************************************
                Footer End
        *************************************-->
    </div>
    <!--************************************
            Wrapper End
    *************************************-->

    </body>
{% endblock %}
", "patient/new.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\patient\\new.html.twig");
    }
}
