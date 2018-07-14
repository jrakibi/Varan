<?php

/* doctors/doctorDetails.html.twig */
class __TwigTemplate_76641cd98eda42921876f788d3922ac5105ff9e88b22fb7d285fbe48b61a2c8b extends Twig_Template
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
        $__internal_1398485ea009e341383248684407afc858a9353bb49c8bf55947ac83fb01d581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1398485ea009e341383248684407afc858a9353bb49c8bf55947ac83fb01d581->enter($__internal_1398485ea009e341383248684407afc858a9353bb49c8bf55947ac83fb01d581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetails.html.twig"));

        $__internal_0fb55fc0ff9b99985a9cbd3a0cec65ca36b4f94cebaaea2f5c14f0fa7f8f8c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb55fc0ff9b99985a9cbd3a0cec65ca36b4f94cebaaea2f5c14f0fa7f8f8c55->enter($__internal_0fb55fc0ff9b99985a9cbd3a0cec65ca36b4f94cebaaea2f5c14f0fa7f8f8c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetails.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "doctors/doctorDetails.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1398485ea009e341383248684407afc858a9353bb49c8bf55947ac83fb01d581->leave($__internal_1398485ea009e341383248684407afc858a9353bb49c8bf55947ac83fb01d581_prof);

        
        $__internal_0fb55fc0ff9b99985a9cbd3a0cec65ca36b4f94cebaaea2f5c14f0fa7f8f8c55->leave($__internal_0fb55fc0ff9b99985a9cbd3a0cec65ca36b4f94cebaaea2f5c14f0fa7f8f8c55_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_1434e70acd1de1af88add1e8614d33afdec227e333ff74793b26b66c32f3926a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1434e70acd1de1af88add1e8614d33afdec227e333ff74793b26b66c32f3926a->enter($__internal_1434e70acd1de1af88add1e8614d33afdec227e333ff74793b26b66c32f3926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd67b9fe8225a802bf5fa3f8e5dfba3b6f3c456e05b7d080c59759a26be091a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd67b9fe8225a802bf5fa3f8e5dfba3b6f3c456e05b7d080c59759a26be091a3->enter($__internal_fd67b9fe8225a802bf5fa3f8e5dfba3b6f3c456e05b7d080c59759a26be091a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                            Inner Banner Start
                *************************************-->
        <div id=\"tg-innerbanner\" class=\"tg-innerbanner tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <form class=\"tg-formtheme tg-formsearch\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_search");
        echo "\" method=\"get\">
                            <fieldset>
                                <input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
                                <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                    Inner Banner End
        *************************************-->
        <!--************************************
\t\t\t\t\t\tMain Start
\t\t*************************************-->
        
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-9 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-directpost tg-detailpage\">
                                    <div class=\"tg-detail\">
                                        <figure class=\"tg-directpostimg\">
                                            
                                                <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_detail", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))), "html", null, true);
        echo "\">
                                                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-04.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                                </a>
                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                        <span>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
        echo "</span>
                                                    </em>
                                                </a>
                                                ";
        // line 67
        if (($this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:isVerified", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array())))) == 1)) {
            // line 68
            echo "                                                    <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                        <em class=\"tg-usericonholder\">
                                                            <i class=\"fa fa-shield\"></i>
                                                            <span>";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                        </em>
                                                    </a>
                                                ";
        }
        // line 75
        echo "                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class=\"tg-directinfo\">
                                        <div class=\"tg-directposthead\">
                                            <h3><a href=\"#\">Dr. ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                            <div class=\"tg-subjects\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:getDoctorsSpecification", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "</div>
                                            <ul class=\"tg-metadata\">
                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                                            </ul>
                                            <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Make An Appointment"), "html", null, true);
        echo "</button>
                                        </div>modal
                                        <div class=\"tg-description\">
                                            <p>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "professionalStatement", array()), "html", null, true);
        echo "</p>
                                        </div>

                                    </div>
                                        
                                    <section class=\"tg-section\">
                                        <div class=\"tg-detailpagetabs\">
                                            <ul class=\"tg-navdetailpagetabs\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\">
                                                    <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Overview"), "html", null, true);
        echo "</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#calendrie\" aria-controls=\"calendrie\" role=\"tab\" data-toggle=\"tab\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Calendrier"), "html", null, true);
        echo "</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#horaire\" aria-controls=\"horaire\" role=\"tab\" data-toggle=\"tab\">Horaire</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reviews"), "html", null, true);
        echo "</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#mapothercenters\" aria-controls=\"mapothercenters\" role=\"tab\" data-toggle=\"tab\">";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Map/Other Centers"), "html", null, true);
        echo "</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services"), "html", null, true);
        echo "</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#askquestion\" aria-controls=\"askquestion\" role=\"tab\" data-toggle=\"tab\">";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ask Question"), "html", null, true);
        echo "</a>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content tg-contentdetailpage\">
                                                <div role=\"tabpanel\" class=\"tab-pane tg-overview fade in active\" id=\"overview\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-icontitle\">
                                                            <h3 class=\"fa fa-location-arrow\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available Locations"), "html", null, true);
        echo "</h3>
                                                        </div>
                                                        <div style=\"z-index: 99999\">
                                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:doctorLocations", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "

                                                        </div>
                                                    </div>
                                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:doctorDetailsSpecialites", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:doctorDetailsEducations", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:doctorDetailsCertifications", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"calendrie\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>Calendrier</h3>
                                                        </div>
                                                        ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Seances:getSeancesByDoctor", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    </div>
                                                </div>
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"horaire\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>Horaire</h3>
                                                        </div>
                                                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Horaire:getHoraireByDoctor", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    </div>
                                                </div>
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-reviews fade\" id=\"reviews\">
                                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Reviews:reviewsList", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Reviews:new"));
        echo "
                                                </div>
                                                
                                                <div role=\"tabpanel\" class=\"tab-pane tg-mapothercenters fade\" id=\"mapothercenters\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h2>";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available Locations"), "html", null, true);
        echo "</h2>
                                                        </div>
                                                        ";
        // line 163
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:doctorMapLocations", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    </div>
                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"services\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>services</h3>
                                                            <h4>";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fee Per Patient"), "html", null, true);
        echo " </h4>
                                                        </div>
                                                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Services:listServicesByDoctor", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                    </div>
                                                </div>
                                                 
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-askquestion fade\" id=\"askquestion\">
                                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Questions:new"));
        echo "                                                    
                                                    ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Questions:questionsList", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
                                                </div>    
                                               
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                         
                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:getNearestDoctor", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
               
                    </div>
                </div>
            </div>
        </main>
        
        <!--************************************
\t\t\t\t\t\tMain End
\t\t*************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"tg-appointmentlightbox\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog tg-modaldialog\">
            <div class=\"modal-content tg-modalcontent\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                ";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Seances:getSeancesByDoctor", array("doctor" => $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "id", array()))));
        echo "
            </div>
        </div>
    </div>
    ";
        // line 212
        $this->loadTemplate("default/footer.html.twig", "doctors/doctorDetails.html.twig", 212)->display($context);
        
        $__internal_fd67b9fe8225a802bf5fa3f8e5dfba3b6f3c456e05b7d080c59759a26be091a3->leave($__internal_fd67b9fe8225a802bf5fa3f8e5dfba3b6f3c456e05b7d080c59759a26be091a3_prof);

        
        $__internal_1434e70acd1de1af88add1e8614d33afdec227e333ff74793b26b66c32f3926a->leave($__internal_1434e70acd1de1af88add1e8614d33afdec227e333ff74793b26b66c32f3926a_prof);

    }

    public function getTemplateName()
    {
        return "doctors/doctorDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 212,  356 => 208,  334 => 189,  321 => 179,  317 => 178,  308 => 172,  303 => 170,  293 => 163,  288 => 161,  279 => 155,  275 => 154,  267 => 149,  255 => 140,  245 => 133,  241 => 132,  237 => 131,  230 => 127,  224 => 124,  214 => 117,  208 => 114,  202 => 111,  196 => 108,  187 => 102,  181 => 99,  169 => 90,  163 => 87,  154 => 81,  148 => 80,  141 => 75,  134 => 71,  129 => 68,  127 => 67,  121 => 64,  112 => 58,  108 => 57,  78 => 30,  67 => 22,  46 => 3,  28 => 2,  26 => 1,);
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
                            Inner Banner Start
                *************************************-->
        <div id=\"tg-innerbanner\" class=\"tg-innerbanner tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-12 col-xs-12\">
                        <form class=\"tg-formtheme tg-formsearch\" action=\"{{ path('doctor_search') }}\" method=\"get\">
                            <fieldset>
                                <input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
                                <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                    Inner Banner End
        *************************************-->
        <!--************************************
\t\t\t\t\t\tMain Start
\t\t*************************************-->
        
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                        <div class=\"col-md-9 col-sm-8 col-xs-12\">
                            <div id=\"tg-content\" class=\"tg-content\">
                                <div class=\"tg-directpost tg-detailpage\">
                                    <div class=\"tg-detail\">
                                        <figure class=\"tg-directpostimg\">
                                            
                                                <a href=\"{{ path('doctor_detail', {'doctor' : doctor.id}) }}\">
                                                    <img src=\"{{ asset('assets/images/directpost/img-04.jpg') }}\" alt=\"image description\">
                                                </a>
                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-bolt\"></i>
                                                        <span>{{ 'featured'|trans }}</span>
                                                    </em>
                                                </a>
                                                {% if render(controller('UserBundle:User:isVerified', {'doctor':doctor.id})) == 1 %}
                                                    <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                        <em class=\"tg-usericonholder\">
                                                            <i class=\"fa fa-shield\"></i>
                                                            <span>{{ 'verified'|trans }}</span>
                                                        </em>
                                                    </a>
                                                {% endif %}
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <div class=\"tg-directinfo\">
                                        <div class=\"tg-directposthead\">
                                            <h3><a href=\"#\">Dr. {{ doctor.firstName }} {{ doctor.lastName }}</a></h3>
                                            <div class=\"tg-subjects\">{{ render(controller('DoctorsBundle:Doctors:getDoctorsSpecification', {'doctor':doctor.id})) }}</div>
                                            <ul class=\"tg-metadata\">
                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                                            </ul>
                                            <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">{{ 'Make An Appointment'|trans }}</button>
                                        </div>modal
                                        <div class=\"tg-description\">
                                            <p>{{ doctor.professionalStatement }}</p>
                                        </div>

                                    </div>
                                        
                                    <section class=\"tg-section\">
                                        <div class=\"tg-detailpagetabs\">
                                            <ul class=\"tg-navdetailpagetabs\" role=\"tablist\">
                                                <li role=\"presentation\" class=\"active\">
                                                    <a href=\"#overview\" aria-controls=\"overview\" role=\"tab\" data-toggle=\"tab\">{{ 'Overview'|trans }}</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#calendrie\" aria-controls=\"calendrie\" role=\"tab\" data-toggle=\"tab\">{{ 'Calendrier'|trans }}</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#horaire\" aria-controls=\"horaire\" role=\"tab\" data-toggle=\"tab\">Horaire</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">{{ 'Reviews'|trans }}</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#mapothercenters\" aria-controls=\"mapothercenters\" role=\"tab\" data-toggle=\"tab\">{{ 'Map/Other Centers'|trans }}</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#services\" aria-controls=\"services\" role=\"tab\" data-toggle=\"tab\">{{ 'Services'|trans }}</a>
                                                </li>
                                                <li role=\"presentation\">
                                                    <a href=\"#askquestion\" aria-controls=\"askquestion\" role=\"tab\" data-toggle=\"tab\">{{ 'Ask Question'|trans }}</a>
                                                </li>
                                            </ul>
                                            <div class=\"tab-content tg-contentdetailpage\">
                                                <div role=\"tabpanel\" class=\"tab-pane tg-overview fade in active\" id=\"overview\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-icontitle\">
                                                            <h3 class=\"fa fa-location-arrow\">{{ 'Available Locations'|trans }}</h3>
                                                        </div>
                                                        <div style=\"z-index: 99999\">
                                                            {{ render(controller('DoctorsBundle:Locations:doctorLocations', {'doctor':doctor.id})) }}

                                                        </div>
                                                    </div>
                                                    {{ render(controller('DoctorsBundle:Doctors:doctorDetailsSpecialites', {'doctor':doctor.id})) }}
                                                    {{ render(controller('DoctorsBundle:Doctors:doctorDetailsEducations', {'doctor':doctor.id})) }}
                                                    {{ render(controller('DoctorsBundle:Doctors:doctorDetailsCertifications', {'doctor':doctor.id})) }}
                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"calendrie\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>Calendrier</h3>
                                                        </div>
                                                        {{ render(controller('AppointmentsBundle:Seances:getSeancesByDoctor', {'doctor': doctor.id })) }}
                                                    </div>
                                                </div>
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"horaire\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>Horaire</h3>
                                                        </div>
                                                        {{ render(controller('DoctorsBundle:Horaire:getHoraireByDoctor', {'doctor': doctor.id })) }}
                                                    </div>
                                                </div>
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-reviews fade\" id=\"reviews\">
                                                    {{ render(controller('DoctorsBundle:Reviews:reviewsList',{'doctor':doctor.id})) }}
                                                    {{ render(controller('DoctorsBundle:Reviews:new')) }}
                                                </div>
                                                
                                                <div role=\"tabpanel\" class=\"tab-pane tg-mapothercenters fade\" id=\"mapothercenters\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h2>{{ 'Available Locations'|trans }}</h2>
                                                        </div>
                                                        {{ render(controller('DoctorsBundle:Locations:doctorMapLocations', {'doctor':doctor.id})) }}
                                                    </div>
                                                </div>
                                                <div role=\"tabpanel\" class=\"tab-pane tg-services fade\" id=\"services\">
                                                    <div class=\"tg-box\">
                                                        <div class=\"tg-tabtitle\">
                                                            <h3>services</h3>
                                                            <h4>{{ 'Fee Per Patient'|trans }} </h4>
                                                        </div>
                                                        {{ render(controller('DoctorsBundle:Services:listServicesByDoctor', {'doctor': doctor.id})) }}
                                                    </div>
                                                </div>
                                                 
                                                    
                                                <div role=\"tabpanel\" class=\"tab-pane tg-askquestion fade\" id=\"askquestion\">
                                                    {{ render(controller('DoctorsBundle:Questions:new')) }}                                                    
                                                    {{ render(controller('DoctorsBundle:Questions:questionsList',{'doctor':doctor.id})) }}
                                                </div>    
                                               
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                         
                        {{ render(controller('DoctorsBundle:Locations:getNearestDoctor', {'doctor': doctor.id })) }}
               
                    </div>
                </div>
            </div>
        </main>
        
        <!--************************************
\t\t\t\t\t\tMain End
\t\t*************************************-->

    </div>
    <!--************************************
            Wrapper End
    *************************************-->
    <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"tg-appointmentlightbox\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog tg-modaldialog\">
            <div class=\"modal-content tg-modalcontent\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                {{ render(controller('AppointmentsBundle:Seances:getSeancesByDoctor', {'doctor': doctor.id })) }}
            </div>
        </div>
    </div>
    {% include ('default/footer.html.twig') %}
{% endblock %}", "doctors/doctorDetails.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\doctorDetails.html.twig");
    }
}
