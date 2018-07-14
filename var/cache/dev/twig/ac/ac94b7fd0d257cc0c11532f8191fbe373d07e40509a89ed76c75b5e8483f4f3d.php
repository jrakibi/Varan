<?php

/* user/profil.html.twig */
class __TwigTemplate_b14d582fd00cbb6113c3616956de55c37785209e929a7728ff9a6299ad797c09 extends Twig_Template
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
        $__internal_d5b55148a87b5e09d948d47b893f8b29050530313eafcce15a63c92230c3418f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b55148a87b5e09d948d47b893f8b29050530313eafcce15a63c92230c3418f->enter($__internal_d5b55148a87b5e09d948d47b893f8b29050530313eafcce15a63c92230c3418f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        $__internal_08d60deb0c0b0142925b3fdc2e0fb7f77fe9c464e2cd509dc48da8daf034780e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d60deb0c0b0142925b3fdc2e0fb7f77fe9c464e2cd509dc48da8daf034780e->enter($__internal_08d60deb0c0b0142925b3fdc2e0fb7f77fe9c464e2cd509dc48da8daf034780e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/profil.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("base.html.twig", "user/profil.html.twig", 2)->display($context);
        // line 3
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 4
            $this->displayBlock('body', $context, $blocks);
        }
        
        $__internal_d5b55148a87b5e09d948d47b893f8b29050530313eafcce15a63c92230c3418f->leave($__internal_d5b55148a87b5e09d948d47b893f8b29050530313eafcce15a63c92230c3418f_prof);

        
        $__internal_08d60deb0c0b0142925b3fdc2e0fb7f77fe9c464e2cd509dc48da8daf034780e->leave($__internal_08d60deb0c0b0142925b3fdc2e0fb7f77fe9c464e2cd509dc48da8daf034780e_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_7908d76e44770077a469e3dbeb04b8e2a13886446aad3569fe891641595a5f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7908d76e44770077a469e3dbeb04b8e2a13886446aad3569fe891641595a5f75->enter($__internal_7908d76e44770077a469e3dbeb04b8e2a13886446aad3569fe891641595a5f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_45969fb2d453002a4fd9a35b8809cc45747d325eaf3b0da7d8002adb987e34a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45969fb2d453002a4fd9a35b8809cc45747d325eaf3b0da7d8002adb987e34a1->enter($__internal_45969fb2d453002a4fd9a35b8809cc45747d325eaf3b0da7d8002adb987e34a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "

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
    ";
        // line 23
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
                                <figure class=\"tg-directpostimg\">
                                    ";
        // line 36
        if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile")) {
            // line 37
            echo "                                        <a href=\"#\">
                                            <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "image", array()), "html", null, true);
            echo "\" />
                                        </a>
                                    ";
        } else {
            // line 41
            echo "                                        <a href=\"#\">
                                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
            echo "\" alt=\"image description\">
                                        </a>
                                    ";
        }
        // line 45
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 46
            echo "                                    <figcaption>
                                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                            <em class=\"tg-usericonholder\">
                                                <i class=\"fa fa-shield\"></i>
                                                <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                            </em>
                                        </a>
                                    </figcaption>
                                    ";
        }
        // line 55
        echo "                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profilEdit", array("doctor" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mis à jour"), "html", null, true);
        echo "</a> </div>
                                ";
        // line 65
        $this->loadTemplate("profilDoctorNav.html.twig", "user/profil.html.twig", 65)->display($context);
        // line 66
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <ul class=\"tg-dashboardtabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"> <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview"), "html", null, true);
        echo "</a> </li>
                                <li role=\"presentation\"> <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services"), "html", null, true);
        echo "</a> </li>
                                <li role=\"presentation\"> <a href=\"#addphotos\" aria-controls=\"addphotos\" role=\"tab\" data-toggle=\"tab\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Photos"), "html", null, true);
        echo "(en construction)</a> </li>
                            </ul>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:getDoctorSpecialities", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Educations:getDoctorEducation", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Certifications:getDoctorCertification", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    ";
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 81
            echo "                                        ";
            if ($this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "professionalStatement", array())) {
                // line 82
                echo "                                            <div class=\"tg-dashboardbox\">
                                                <div class=\"tg-dashboardboxtitle\">
                                                    <h2><i class=\"fa fa-user\"></i> ";
                // line 84
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Professional Statement"), "html", null, true);
                echo "</h2>
                                                </div>
                                                <div class=\"tg-box tg-basicinformation\">
                                                    <div class=\"row tg-rowmargin\">
                                                        ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "professionalStatement", array()), "html", null, true);
                echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            // line 93
            echo "                                    ";
        }
        // line 94
        echo "
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click sur <strong>Mis à jour</strong> pour modifier ou mettre à jour vos informations.</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"services\">
                                    <div class=\"tg-dashboardbox tg-profilesettings\">
                                        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Services:index", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                    </div>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click <strong>invoices settings</strong> to update latest added detail (s).</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"addphotos\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                            ";
        // line 108
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
            // line 109
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:profileEditImage", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
            echo "
                                            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
            // line 111
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PatientBundle:Patient:profileEditImage", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
            echo "
                                            ";
        }
        // line 113
        echo "                                        </div>
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
        // line 131
        $this->loadTemplate("default/footer.html.twig", "user/profil.html.twig", 131)->display($context);
        
        $__internal_45969fb2d453002a4fd9a35b8809cc45747d325eaf3b0da7d8002adb987e34a1->leave($__internal_45969fb2d453002a4fd9a35b8809cc45747d325eaf3b0da7d8002adb987e34a1_prof);

        
        $__internal_7908d76e44770077a469e3dbeb04b8e2a13886446aad3569fe891641595a5f75->leave($__internal_7908d76e44770077a469e3dbeb04b8e2a13886446aad3569fe891641595a5f75_prof);

    }

    public function getTemplateName()
    {
        return "user/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 131,  245 => 113,  239 => 111,  233 => 109,  231 => 108,  220 => 100,  212 => 94,  209 => 93,  201 => 88,  194 => 84,  190 => 82,  187 => 81,  185 => 80,  181 => 79,  177 => 78,  173 => 77,  166 => 73,  162 => 72,  158 => 71,  151 => 66,  149 => 65,  143 => 64,  131 => 57,  127 => 55,  119 => 50,  113 => 46,  110 => 45,  104 => 42,  101 => 41,  93 => 38,  90 => 37,  88 => 36,  72 => 23,  52 => 5,  33 => 4,  31 => 3,  29 => 2,  26 => 1,);
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
{% if is_granted('IS_AUTHENTICATED_FULLY') %}
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
                                    <h3><a href=\"#\">Dr. {{ doctor.firstName }} {{ doctor.lastName }}</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profilEdit', {'doctor': app.user.idTable }) }}\">{{ 'Mis à jour'|trans }}</a> </div>
                                {% include('profilDoctorNav.html.twig') %}
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardtabs\">
                            <ul class=\"tg-dashboardtabnav\" role=\"tablist\">
                                <li role=\"presentation\" class=\"active\"> <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">{{ 'Overview'|trans }}</a> </li>
                                <li role=\"presentation\"> <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">{{ 'Services'|trans }}</a> </li>
                                <li role=\"presentation\"> <a href=\"#addphotos\" aria-controls=\"addphotos\" role=\"tab\" data-toggle=\"tab\">{{ 'Photos'|trans }}(en construction)</a> </li>
                            </ul>
                            <div class=\"tab-content tg-dashboardtabcontent\">
                                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"overview\">
                                    {{ render(controller('DoctorsBundle:Doctors:getDoctorSpecialities', { 'doctor': doctor.id })) }}
                                    {{ render(controller('DoctorsBundle:Educations:getDoctorEducation', { 'doctor': doctor.id })) }}
                                    {{ render(controller('DoctorsBundle:Certifications:getDoctorCertification', { 'doctor': doctor.id })) }}
                                    {% if is_granted('ROLE_DOCTOR') %}
                                        {% if doctor.professionalStatement %}
                                            <div class=\"tg-dashboardbox\">
                                                <div class=\"tg-dashboardboxtitle\">
                                                    <h2><i class=\"fa fa-user\"></i> {{ 'Professional Statement'|trans }}</h2>
                                                </div>
                                                <div class=\"tg-box tg-basicinformation\">
                                                    <div class=\"row tg-rowmargin\">
                                                        {{ doctor.professionalStatement }}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endif %}

                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click sur <strong>Mis à jour</strong> pour modifier ou mettre à jour vos informations.</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"services\">
                                    <div class=\"tg-dashboardbox tg-profilesettings\">
                                        {{ render(controller('DoctorsBundle:Services:index', {'doctor':doctor.id})) }}
                                    </div>
                                    <div class=\"tg-updateall\"> <span class=\"tg-note\">* Click <strong>invoices settings</strong> to update latest added detail (s).</span>
                                    </div>
                                </div>
                                <div role=\"tabpanel\" class=\"tab-pane\" id=\"addphotos\">
                                    <div class=\"tg-dashboardbox\">
                                        <div class=\"col-md-12 col-sm-12 col-xs-12 tg-columnpadding\">
                                            {% if is_granted('ROLE_DOCTOR') %}
                                                {{ render(controller('DoctorsBundle:Doctors:profileEditImage', {'doctor': doctor.id})) }}
                                            {% elseif is_granted('ROLE_PATIENT') %}
                                                {{ render(controller('PatientBundle:Patient:profileEditImage', {'doctor': doctor.id})) }}
                                            {% endif %}
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
    <!--************************************
            Main End
    *************************************-->

</div>
<!--************************************
        Wrapper End
*************************************-->
{% include ('default/footer.html.twig') %}
{% endblock %}
{% endif %}", "user/profil.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\user\\profil.html.twig");
    }
}
