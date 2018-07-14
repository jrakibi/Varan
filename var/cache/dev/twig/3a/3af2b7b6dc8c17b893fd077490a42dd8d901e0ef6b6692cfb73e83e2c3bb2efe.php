<?php

/* appointments/appointmentsByUser.html.twig */
class __TwigTemplate_5113ff001e369b1db115c28fd7347aa6159c768b11c469e4e6ad06b8523d596e extends Twig_Template
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
        $__internal_2ee3534705b16bf134c41ea307cfdbb6fd51548f3deec414b0e48ec4877a309e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ee3534705b16bf134c41ea307cfdbb6fd51548f3deec414b0e48ec4877a309e->enter($__internal_2ee3534705b16bf134c41ea307cfdbb6fd51548f3deec414b0e48ec4877a309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appointments/appointmentsByUser.html.twig"));

        $__internal_c74e6544bca7f419f06697f029d048f85f44a82e9cc3501a5d959386110d075b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74e6544bca7f419f06697f029d048f85f44a82e9cc3501a5d959386110d075b->enter($__internal_c74e6544bca7f419f06697f029d048f85f44a82e9cc3501a5d959386110d075b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "appointments/appointmentsByUser.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "appointments/appointmentsByUser.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_2ee3534705b16bf134c41ea307cfdbb6fd51548f3deec414b0e48ec4877a309e->leave($__internal_2ee3534705b16bf134c41ea307cfdbb6fd51548f3deec414b0e48ec4877a309e_prof);

        
        $__internal_c74e6544bca7f419f06697f029d048f85f44a82e9cc3501a5d959386110d075b->leave($__internal_c74e6544bca7f419f06697f029d048f85f44a82e9cc3501a5d959386110d075b_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_d82b7e6b980ecb9079a4e759261a53ecb327fe63562d249acbceac2b613e3b06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d82b7e6b980ecb9079a4e759261a53ecb327fe63562d249acbceac2b613e3b06->enter($__internal_d82b7e6b980ecb9079a4e759261a53ecb327fe63562d249acbceac2b613e3b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06e502d28510e7322b43a15befab15560d1a2d137c8b5ad988da86e55416752f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06e502d28510e7322b43a15befab15560d1a2d137c8b5ad988da86e55416752f->enter($__internal_06e502d28510e7322b43a15befab15560d1a2d137c8b5ad988da86e55416752f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

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
        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:header"));
        echo "

        <!--************************************
            Main Start
    *************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetdashboard\">
                                <div class=\"tg-widgetprofile\">
                                    <figure class=\"tg-directpostimg\"> 
                                        ";
        // line 38
        if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile")) {
            // line 39
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "image", array()), "html", null, true);
            echo "\" />
                                            </a>
                                        ";
        } else {
            // line 43
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
            echo "\" alt=\"image description\">
                                            </a>
                                        ";
        }
        // line 47
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 48
            echo "                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-shield\"></i>
                                                        <span>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                    </em>
                                                </a>
                                            </figcaption>
                                        ";
        }
        // line 57
        echo "                                    </figure>
                                    <div class=\"tg-directposthead\">
                                        <h3><a href=\"#\">Dr. ";
        // line 59
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
                                        ";
        // line 66
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 67
            echo "                                            <a class=\"tg-btn tg-btn-lg\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
            echo "</a> </div>
                                        ";
        }
        // line 69
        echo "                                        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
            // line 70
            echo "                                            <a class=\"tg-btn tg-btn-lg\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profil"), "html", null, true);
            echo "</a> </div>
                                        ";
        }
        // line 72
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 73
            echo "                                    ";
            $this->loadTemplate("profilDoctorNav.html.twig", "appointments/appointmentsByUser.html.twig", 73)->display($context);
            // line 74
            echo "                                ";
        }
        // line 75
        echo "                                ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
            // line 76
            echo "                                    ";
            $this->loadTemplate("profilPatientNav.html.twig", "appointments/appointmentsByUser.html.twig", 76)->display($context);
            // line 77
            echo "                                ";
        }
        // line 78
        echo "                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardappointments\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your Appointments"), "html", null, true);
        echo "</h2>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #6cbf6d; color: #ffffff\">
                                            Confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #f1b55f; color: #ffffff\">
                                            Non confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #db6460; color: #ffffff\">
                                            Annuler
                                        </div>
                                    </div>
                                    <div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

                                    </div>
                                    <script type=\"text/javascript\" src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/jquery.js"), "html", null, true);
        echo "\"></script>
                                    <script type=\"text/javascript\" src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/Calendar/js/monthly.js"), "html", null, true);
        echo "\"></script>
                                    <script type=\"text/javascript\">

                                        var sampleEvents = {
                                            \"monthly\": [
                                                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["appointments"] ?? $this->getContext($context, "appointments")));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 107
            echo "                                                {
                                                    \"id\": ";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["appointment"], "id", array()), "html", null, true);
            echo ",
                                                    \"name\": \"";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "heurDebut", array()), "H:i"), "html", null, true);
            echo " <br> Docteur : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "location", array()), "doctor", array()), "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "location", array()), "doctor", array()), "lastName", array()), "html", null, true);
            echo " <br> Raison: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["appointment"], "reason", array()), "reason", array()), "html", null, true);
            echo "\",
                                                    \"startdate\": \"";
            // line 110
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"), "html", null, true);
            echo "\",
                                                    \"enddate\": \"\",
                                                    ";
            // line 112
            if ((twig_date_format_filter($this->env, "now", "Y-m-d") > twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d"))) {
                // line 113
                echo "                                                    \"color\": \"#dfe0d8\",
                                                    ";
            } else {
                // line 115
                echo "                                                        ";
                if (($this->getAttribute($context["appointment"], "etat", array()) == "annuler")) {
                    // line 116
                    echo "                                                        \"color\": \"#db6460\",
                                                        ";
                } elseif (($this->getAttribute(                // line 117
$context["appointment"], "etat", array()) == "confirme")) {
                    // line 118
                    echo "                                                        \"color\": \"#6cbf6d\",
                                                        ";
                } elseif (($this->getAttribute(                // line 119
$context["appointment"], "etat", array()) == "non confirmer")) {
                    // line 120
                    echo "                                                        \"color\": \"#f1b55f\",
                                                        ";
                }
                // line 122
                echo "                                                    ";
            }
            // line 123
            echo "
                                                ";
            // line 124
            if ((($this->getAttribute($context["appointment"], "etat", array()) != "annuler") && (twig_date_format_filter($this->env, "now", "Y-m-d") <= twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["appointment"], "seance", array()), "calendrie", array()), "date", array()), "Y-m-d")))) {
                // line 125
                echo "                                                    \"url\": \"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_show", array("id" => $this->getAttribute($context["appointment"], "id", array()))), "html", null, true);
                echo "\",
                                                ";
            } else {
                // line 127
                echo "                                                    \"url\": \"\",
                                                ";
            }
            // line 129
            echo "                                                },
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                                            ]
                                        };
                                    </script>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Light Box Start
    *************************************-->


    <!--************************************
                Light Box End
    *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    </body>
    ";
        // line 162
        $this->loadTemplate("default/footer.html.twig", "appointments/appointmentsByUser.html.twig", 162)->display($context);
        // line 163
        echo "
    <script>
        \$(document).ready(function () {
            \$('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });

            \$(\".annuler\").click(function () {
                if (!confirm('Vous voulez vraiment annuler se rendez-vous')) return false;
                var appointment = \$(this).attr('id');
                var type = \$(this).attr('type');
                var URL = \"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_cancel", array("id" => "sss", "type" => "fff")), "html", null, true);
        echo "\";
                URL = URL.replace(/sss/g, appointment);
                URL = URL.replace(/fff/g, type);
                console.log(URL);
                \$.ajax({
                    type: \"GET\",
                    url: URL,
                    cache: false,
                    success: function (response) {
                        location.reload();
                        return true;
                    }
                });
            });
        });
    </script>

";
        
        $__internal_06e502d28510e7322b43a15befab15560d1a2d137c8b5ad988da86e55416752f->leave($__internal_06e502d28510e7322b43a15befab15560d1a2d137c8b5ad988da86e55416752f_prof);

        
        $__internal_d82b7e6b980ecb9079a4e759261a53ecb327fe63562d249acbceac2b613e3b06->leave($__internal_d82b7e6b980ecb9079a4e759261a53ecb327fe63562d249acbceac2b613e3b06_prof);

    }

    public function getTemplateName()
    {
        return "appointments/appointmentsByUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 176,  330 => 163,  328 => 162,  295 => 131,  288 => 129,  284 => 127,  278 => 125,  276 => 124,  273 => 123,  270 => 122,  266 => 120,  264 => 119,  261 => 118,  259 => 117,  256 => 116,  253 => 115,  249 => 113,  247 => 112,  242 => 110,  232 => 109,  228 => 108,  225 => 107,  221 => 106,  213 => 101,  209 => 100,  190 => 84,  182 => 78,  179 => 77,  176 => 76,  173 => 75,  170 => 74,  167 => 73,  164 => 72,  156 => 70,  153 => 69,  145 => 67,  143 => 66,  131 => 59,  127 => 57,  119 => 52,  113 => 48,  110 => 47,  104 => 44,  101 => 43,  93 => 40,  90 => 39,  88 => 38,  72 => 25,  49 => 4,  31 => 3,  29 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% include ('base.html.twig') %}
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
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetdashboard\">
                                <div class=\"tg-widgetprofile\">
                                    <figure class=\"tg-directpostimg\"> 
                                        {% if vich_uploader_asset(doctor, 'imageFile') %}
                                            <a href=\"#\">
                                                <img src=\"{{ vich_uploader_asset(doctor, 'imageFile') }}\" alt=\"{{ doctor.image }}\" />
                                            </a>
                                        {% else %}
                                            <a href=\"#\">
                                                <img src=\"{{ asset('assets/images/thumbnails/img-20.jpg') }}\" alt=\"image description\">
                                            </a>
                                        {% endif %}
                                        {% if app.user.verifier == 1 %}
                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-shield\"></i>
                                                        <span>{{ 'verified'|trans }}</span>
                                                    </em>
                                                </a>
                                            </figcaption>
                                        {% endif %}
                                    </figure>
                                    <div class=\"tg-directposthead\">
                                        <h3><a href=\"#\">Dr. {{ patient.firstName }} {{ patient.lastName }}</a></h3>
                                        <div class=\"tg-subjects\"></div>
                                        <ul class=\"tg-metadata\">
                                            <li><span class=\"tg-stars\"><span></span></span></li>
                                            <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                        </ul>
                                    </div>
                                        {% if is_granted('ROLE_DOCTOR') %}
                                            <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profil', {'id': app.user.id }) }}\">{{ 'Profile'|trans }}</a> </div>
                                        {% endif %}
                                        {% if is_granted('ROLE_PATIENT') %}
                                            <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('patient_profil', {'id':app.user.id}) }}\">{{ 'Profil'|trans }}</a> </div>
                                        {% endif %}
                                {% if is_granted('ROLE_DOCTOR') %}
                                    {% include('profilDoctorNav.html.twig') %}
                                {% endif %}
                                {% if is_granted('ROLE_PATIENT') %}
                                    {% include('profilPatientNav.html.twig') %}
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardappointments\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>{{ 'Your Appointments'|trans }}</h2>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #6cbf6d; color: #ffffff\">
                                            Confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #f1b55f; color: #ffffff\">
                                            Non confirmer
                                        </div>
                                        <div class=\"col-lg-4 text-center\" style=\"background-color: #db6460; color: #ffffff\">
                                            Annuler
                                        </div>
                                    </div>
                                    <div class=\"tg-favoritlistingbox monthly\" id=\"mycalendar\">

                                    </div>
                                    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/jquery.js') }}\"></script>
                                    <script type=\"text/javascript\" src=\"{{ asset('assets/Calendar/js/monthly.js') }}\"></script>
                                    <script type=\"text/javascript\">

                                        var sampleEvents = {
                                            \"monthly\": [
                                                {% for appointment in appointments %}
                                                {
                                                    \"id\": {{ appointment.id }},
                                                    \"name\": \"{{ appointment.seance.heurDebut|date('H:i') }} <br> Docteur : {{ appointment.seance.calendrie.location.doctor.firstName }} {{ appointment.seance.calendrie.location.doctor.lastName }} <br> Raison: {{ appointment.reason.reason }}\",
                                                    \"startdate\": \"{{ appointment.seance.calendrie.date|date('Y-m-d') }}\",
                                                    \"enddate\": \"\",
                                                    {% if \"now\"|date('Y-m-d')  > appointment.seance.calendrie.date|date('Y-m-d') %}
                                                    \"color\": \"#dfe0d8\",
                                                    {% else %}
                                                        {% if appointment.etat == 'annuler' %}
                                                        \"color\": \"#db6460\",
                                                        {% elseif appointment.etat == 'confirme' %}
                                                        \"color\": \"#6cbf6d\",
                                                        {% elseif appointment.etat == 'non confirmer' %}
                                                        \"color\": \"#f1b55f\",
                                                        {% endif %}
                                                    {% endif %}

                                                {% if appointment.etat != 'annuler' and \"now\"|date('Y-m-d')  <= appointment.seance.calendrie.date|date('Y-m-d') %}
                                                    \"url\": \"{{ path('appointments_show', {'id': appointment.id}) }}\",
                                                {% else %}
                                                    \"url\": \"\",
                                                {% endif %}
                                                },
                                                {% endfor %}
                                            ]
                                        };
                                    </script>
                                </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!--************************************
            Main End
    *************************************-->
    <!--************************************
            Light Box Start
    *************************************-->


    <!--************************************
                Light Box End
    *************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    </body>
    {% include ('default/footer.html.twig') %}

    <script>
        \$(document).ready(function () {
            \$('#mycalendar').monthly({
                mode: 'event',
                dataType: 'json',
                events: sampleEvents
            });

            \$(\".annuler\").click(function () {
                if (!confirm('Vous voulez vraiment annuler se rendez-vous')) return false;
                var appointment = \$(this).attr('id');
                var type = \$(this).attr('type');
                var URL = \"{{ path('appointments_cancel', {'id' : 'sss', 'type':'fff'}) }}\";
                URL = URL.replace(/sss/g, appointment);
                URL = URL.replace(/fff/g, type);
                console.log(URL);
                \$.ajax({
                    type: \"GET\",
                    url: URL,
                    cache: false,
                    success: function (response) {
                        location.reload();
                        return true;
                    }
                });
            });
        });
    </script>

{% endblock %}
", "appointments/appointmentsByUser.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\appointments\\appointmentsByUser.html.twig");
    }
}
