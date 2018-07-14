<?php

/* patient/profil.html.twig */
class __TwigTemplate_cd799d8c69257ef03f99ffa975d13d852f84c776a607e2162f6053b95183ee79 extends Twig_Template
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
        $__internal_842fdb883f8e26ddaa6393735fc6c31c24a6aa92515636f634eeefcad1d3acf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842fdb883f8e26ddaa6393735fc6c31c24a6aa92515636f634eeefcad1d3acf8->enter($__internal_842fdb883f8e26ddaa6393735fc6c31c24a6aa92515636f634eeefcad1d3acf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/profil.html.twig"));

        $__internal_c1c4eaeb28bc9d5020c6e954c2941cc0e851e06628e19c7a8f0c68ee1a6b93c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c4eaeb28bc9d5020c6e954c2941cc0e851e06628e19c7a8f0c68ee1a6b93c5->enter($__internal_c1c4eaeb28bc9d5020c6e954c2941cc0e851e06628e19c7a8f0c68ee1a6b93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "patient/profil.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "patient/profil.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "
";
        
        $__internal_842fdb883f8e26ddaa6393735fc6c31c24a6aa92515636f634eeefcad1d3acf8->leave($__internal_842fdb883f8e26ddaa6393735fc6c31c24a6aa92515636f634eeefcad1d3acf8_prof);

        
        $__internal_c1c4eaeb28bc9d5020c6e954c2941cc0e851e06628e19c7a8f0c68ee1a6b93c5->leave($__internal_c1c4eaeb28bc9d5020c6e954c2941cc0e851e06628e19c7a8f0c68ee1a6b93c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d720fae2f4ffa502a178af3f0f255842025546575afe08ec8a8b6e5660d4f229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d720fae2f4ffa502a178af3f0f255842025546575afe08ec8a8b6e5660d4f229->enter($__internal_d720fae2f4ffa502a178af3f0f255842025546575afe08ec8a8b6e5660d4f229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a25bed962e399d3e89e0b987bef219052550be135d716cd2785f362a72dd8bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25bed962e399d3e89e0b987bef219052550be135d716cd2785f362a72dd8bba->enter($__internal_a25bed962e399d3e89e0b987bef219052550be135d716cd2785f362a72dd8bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body class=\"tg-home tg-login\">
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************-->

<!--************************************
        Preloader End
*************************************-->

<!--************************************
        Wrapper Start
*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
    ";
        // line 19
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
                        <div class=\"tg-widgetdashboard\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\"> <a href=\"#\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a>

                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">";
        // line 35
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
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_editProfil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mis à jour"), "html", null, true);
        echo "</a> </div>

                            ";
        // line 44
        $this->loadTemplate("profilPatientNav.html.twig", "patient/profil.html.twig", 44)->display($context);
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <h3>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profil"), "html", null, true);
        echo "</h3>
                            <hr>
                            <br>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                                        <li><b>";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name"), "html", null, true);
        echo " :</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "lastName", array()), "html", null, true);
        echo "</li>
                                        <li><b>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Birthday"), "html", null, true);
        echo " :</b> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "birthday", array()), "d-M-Y"), "html", null, true);
        echo "</li>
                                        ";
        // line 57
        if ($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "GSM", array())) {
            // line 58
            echo "                                            <li><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("GSM"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "gSM", array()), "html", null, true);
            echo " </li>
                                        ";
        }
        // line 60
        echo "                                        ";
        if ($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "travail", array())) {
            // line 61
            echo "                                            <li><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Work"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "travail", array()), "html", null, true);
            echo " </li>
                                        ";
        }
        // line 63
        echo "                                        ";
        if ($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "domicile", array())) {
            // line 64
            echo "                                            <li><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "domicile", array()), "html", null, true);
            echo " </li>
                                        ";
        }
        // line 66
        echo "                                        ";
        if ($this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "adresse", array())) {
            // line 67
            echo "                                            <li><b>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Adresse"), "html", null, true);
            echo ":</b> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["patient"] ?? $this->getContext($context, "patient")), "adresse", array()), "html", null, true);
            echo " </li>
                                        ";
        }
        // line 69
        echo "                                    </ul>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Cliquez sur <strong>Mise à jour</strong> pour modifier ou mettre à jour vos informations.</span>
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
        // line 89
        $this->loadTemplate("default/footer.html.twig", "patient/profil.html.twig", 89)->display($context);
        // line 90
        echo "
";
        
        $__internal_a25bed962e399d3e89e0b987bef219052550be135d716cd2785f362a72dd8bba->leave($__internal_a25bed962e399d3e89e0b987bef219052550be135d716cd2785f362a72dd8bba_prof);

        
        $__internal_d720fae2f4ffa502a178af3f0f255842025546575afe08ec8a8b6e5660d4f229->leave($__internal_d720fae2f4ffa502a178af3f0f255842025546575afe08ec8a8b6e5660d4f229_prof);

    }

    public function getTemplateName()
    {
        return "patient/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 90,  205 => 89,  183 => 69,  175 => 67,  172 => 66,  164 => 64,  161 => 63,  153 => 61,  150 => 60,  142 => 58,  140 => 57,  134 => 56,  126 => 55,  117 => 49,  111 => 45,  109 => 44,  102 => 42,  90 => 35,  83 => 31,  68 => 19,  50 => 3,  41 => 2,  30 => 92,  28 => 2,  26 => 1,);
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
*************************************-->

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
                        <div class=\"tg-widgetdashboard\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\"> <a href=\"#\"><img src=\"{{ asset('assets/images/thumbnails/img-20.jpg') }}\" alt=\"image description\"></a>

                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">{{ patient.firstName }} {{ patient.lastName }}</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('patient_editProfil', {'id':app.user.idTable }) }}\">{{ 'Mis à jour'|trans }}</a> </div>

                            {% include('profilPatientNav.html.twig') %}
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <h3>{{ 'Profil'|trans }}</h3>
                            <hr>
                            <br>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                                        <li><b>{{ 'Name'|trans }} :</b> {{ patient.firstName }} {{ patient.lastName }}</li>
                                        <li><b>{{ 'Birthday'|trans }} :</b> {{ patient.birthday|date('d-M-Y') }}</li>
                                        {% if patient.GSM %}
                                            <li><b>{{ 'GSM'|trans }}:</b> {{ patient.gSM }} </li>
                                        {% endif %}
                                        {% if patient.travail %}
                                            <li><b>{{ 'Work'|trans }}:</b> {{ patient.travail }} </li>
                                        {% endif %}
                                        {% if patient.domicile %}
                                            <li><b>{{ 'Home'|trans }}:</b> {{ patient.domicile }} </li>
                                        {% endif %}
                                        {% if patient.adresse %}
                                            <li><b>{{ 'Adresse'|trans }}:</b> {{ patient.adresse }} </li>
                                        {% endif %}
                                    </ul>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Cliquez sur <strong>Mise à jour</strong> pour modifier ou mettre à jour vos informations.</span>
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

", "patient/profil.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\patient\\profil.html.twig");
    }
}
