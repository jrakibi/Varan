<?php

/* locations/index.html.twig */
class __TwigTemplate_0bb3047111324ee3aae04312d85b76d518075c329b59f098985cd22db51e797f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'addLocationModal' => array($this, 'block_addLocationModal'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1592c35f9c29c890e98e79d632f7ea94443b2de36c12852a49f14f085d90b50e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1592c35f9c29c890e98e79d632f7ea94443b2de36c12852a49f14f085d90b50e->enter($__internal_1592c35f9c29c890e98e79d632f7ea94443b2de36c12852a49f14f085d90b50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/index.html.twig"));

        $__internal_bb4edffdea864c2f75cfbcc80acc33c7bd0c8910c55814ce1e9000c2dd7c1d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4edffdea864c2f75cfbcc80acc33c7bd0c8910c55814ce1e9000c2dd7c1d12->enter($__internal_bb4edffdea864c2f75cfbcc80acc33c7bd0c8910c55814ce1e9000c2dd7c1d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/index.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "locations/index.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1592c35f9c29c890e98e79d632f7ea94443b2de36c12852a49f14f085d90b50e->leave($__internal_1592c35f9c29c890e98e79d632f7ea94443b2de36c12852a49f14f085d90b50e_prof);

        
        $__internal_bb4edffdea864c2f75cfbcc80acc33c7bd0c8910c55814ce1e9000c2dd7c1d12->leave($__internal_bb4edffdea864c2f75cfbcc80acc33c7bd0c8910c55814ce1e9000c2dd7c1d12_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_ac230130dff8530e5b808f1300f3b2fe82d1143d0d58c528f8936da8ac337ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac230130dff8530e5b808f1300f3b2fe82d1143d0d58c528f8936da8ac337ae9->enter($__internal_ac230130dff8530e5b808f1300f3b2fe82d1143d0d58c528f8936da8ac337ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06017f05998231b6ec89938d7bebc62f30132560194c15f56356c3e87434ca51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06017f05998231b6ec89938d7bebc62f30132560194c15f56356c3e87434ca51->enter($__internal_06017f05998231b6ec89938d7bebc62f30132560194c15f56356c3e87434ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body class=\"tg-home tg-login\">
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
\t\t\t\tMain Start
\t\t*************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetdashboard\">
                                <div class=\"tg-widgetprofile\">
                                    <figure class=\"tg-directpostimg\"> <a href=\"#\">
                                        ";
        // line 35
        if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile")) {
            // line 36
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "image", array()), "html", null, true);
            echo "\" />
                                            </a>
                                        ";
        } else {
            // line 40
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
            echo "\" alt=\"image description\">
                                            </a>
                                        ";
        }
        // line 44
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 45
            echo "                                            <figcaption>
                                                <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                    <em class=\"tg-usericonholder\">
                                                        <i class=\"fa fa-shield\"></i>
                                                        <span>";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                    </em>
                                                </a>
                                            </figcaption>
                                        ";
        }
        // line 54
        echo "                                    </figure>
                                    <div class=\"tg-directposthead\">
                                        <h3><a href=\"#\">Dr. ";
        // line 56
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
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a> </div>
                                ";
        // line 64
        $this->loadTemplate("profilDoctorNav.html.twig", "locations/index.html.twig", 64)->display($context);
        // line 65
        echo "                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardjobslocations\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Available Locations"), "html", null, true);
        echo "</h2>
                                    </div>
                                    <div class=\"tg-box tg-profilephoto\">
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-md-3 col-sm-6 col-xs-12 tg-columnpadding pull-right\" >
                                                <div class=\"form-group tg-formgroup \">
                                                    <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_new");
        echo "\" class=\"tg-btn tg-btn-lg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add Now"), "html", null, true);
        echo "</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"divFormAdd\">

                                    </div>
                                    <div class=\"tg-box tg-availablelocation\">
                                        <div class=\"tg-servicelocations\">
                                            <div id=\"divErreur\" hidden>
                                                <div class=\"tg-alertmessages\">
                                                    <div class=\"alert alert-danger tg-alertmessage fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <i class=\"fa fa-bug\"></i>
                                                        <span><strong>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Error Message"), "html", null, true);
        echo ".</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 97
            echo "                                                <div class=\"tg-servicelocation\">
                                                    <div class=\"tg-directpost\">
                                                        <div class=\"tg-directinfo\">
                                                            <div class=\"tg-directposthead\">
                                                                <h3><a href=\"#\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "name", array()), "html", null, true);
            echo "</a> <i class=\"fa fa-check-circle\" ";
            if (($this->getAttribute($context["location"], "verified", array()) == 1)) {
                echo "style=\"color: #6b9311\" title=\"vérifier\" ";
            } else {
                echo "style=\"color: #9d9d9d\" title = \"non vérifier\"";
            }
            echo "></i><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctors_comments", array("location" => $this->getAttribute($context["location"], "id", array()))), "html", null, true);
            echo "\"><span style=\"margin-left: 10px\" class=\"glyphicon glyphicon-comment\"></span></a></h3>
                                                                <div class=\"tg-subjects\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "ville", array()), "html", null, true);
            echo "</div>
                                                            </div>
                                                            <div class=\"tg-description\" style=\"max-height: none;\">
                                                                <p>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "adresse", array()), "html", null, true);
            echo "</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"tg-btnjoblocationeditdelete\" style=\"width: 10%\">
                                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" >
                                                            <a type=\"submit\" class=\"tg-btndelete showMap\" id=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#showMap\" style=\"background-color: #2b2b2b\"><i class=\"fa fa-map-marker\" title=\"Afficher la carte\"></i></a><br>
                                                            <a class=\"tg-btndelete\" href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_index", array("id" => $this->getAttribute($context["location"], "id", array()))), "html", null, true);
            echo "\" style=\"background-color: #2b2b2b\" title=\"Calendrier\"><i class=\"fa fa-calendar\"></i></a>
                                                        </div>
                                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" >
                                                            <a type=\"submit\" class=\"tg-btndelete deleteLocation\" id=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
            echo "\" style=\"background-color: #2b2b2b\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></a><br>
                                                            <a type=\"submit\" class=\"tg-btndelete editLocation\" id=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#editLocation\" style=\"background-color: #2b2b2b\" title=\"Modifier\"><i class=\"fa fa-pencil\"></i></a>
                                                        </div>

                                                    </div>
                                                    <br><br>
                                                </div>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "                                        </div>
                                    </div>
                                        
                                    <div>
                                        <!-- this is my comment -->
                                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Horaire:new"));
        echo "
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
        // line 147
        $this->loadTemplate("default/footer.html.twig", "locations/index.html.twig", 147)->display($context);
        // line 148
        echo "    ";
        $this->displayBlock('addLocationModal', $context, $blocks);
        // line 178
        echo "
<script>

    \$(document).ready(function () {

        \$(\".showMap\").click(function () {
            var location = \$(this).attr('id');
            var URL = \"";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_show", array("id" => "myID"));
        echo "\";
            URL = URL.replace(/myID/g, location);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    \$('#result').html(response);
                    return true;
                }
            });
        });

        \$(\".editLocation\").click(function () {
            var location = \$(this).attr('id');
            var URL = \"";
        // line 201
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_edit", array("id" => "myID"));
        echo "\";
            URL = URL.replace(/myID/g, location);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    \$('#formEdit').html(response);
                    return true;
                }
            });
        });
        \$(\".deleteLocation\").click(function () {
            if (!confirm('Vous voulez vraiment supprime cette job location')) return false;
            var locations = \$(this).attr('id');
            var URL = \"";
        // line 217
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_delete", array("id" => "myID"));
        echo "\";
            URL = URL.replace(/myID/g, locations);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    if (response == 'erreur') {
                        \$('#divErreur').show();
                        return true;
                    }
                    location.reload();
                    return true;
                }
            });
        });
    });
    </script>
";
        
        $__internal_06017f05998231b6ec89938d7bebc62f30132560194c15f56356c3e87434ca51->leave($__internal_06017f05998231b6ec89938d7bebc62f30132560194c15f56356c3e87434ca51_prof);

        
        $__internal_ac230130dff8530e5b808f1300f3b2fe82d1143d0d58c528f8936da8ac337ae9->leave($__internal_ac230130dff8530e5b808f1300f3b2fe82d1143d0d58c528f8936da8ac337ae9_prof);

    }

    // line 148
    public function block_addLocationModal($context, array $blocks = array())
    {
        $__internal_1c8fdeb3e607d7c4ccc55504d6d826d49f414ef05e48cb4ef67a3783dcce78ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8fdeb3e607d7c4ccc55504d6d826d49f414ef05e48cb4ef67a3783dcce78ec->enter($__internal_1c8fdeb3e607d7c4ccc55504d6d826d49f414ef05e48cb4ef67a3783dcce78ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addLocationModal"));

        $__internal_808d69d01502ddde433d745cf8b7f0853659e2069aff002f24cc5e21fe69c45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808d69d01502ddde433d745cf8b7f0853659e2069aff002f24cc5e21fe69c45a->enter($__internal_808d69d01502ddde433d745cf8b7f0853659e2069aff002f24cc5e21fe69c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addLocationModal"));

        // line 149
        echo "        <!--************************************
\t\t\t\tLight Box Start
\t*************************************-->
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"showMap\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2 id=\"locationName\"></h2>
                    <div id=\"result\">

                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"editLocation\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2 id=\"locationName\"></h2>
                    <div id=\"formEdit\">

                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                    Light Box End
        *************************************-->
        ";
        
        $__internal_808d69d01502ddde433d745cf8b7f0853659e2069aff002f24cc5e21fe69c45a->leave($__internal_808d69d01502ddde433d745cf8b7f0853659e2069aff002f24cc5e21fe69c45a_prof);

        
        $__internal_1c8fdeb3e607d7c4ccc55504d6d826d49f414ef05e48cb4ef67a3783dcce78ec->leave($__internal_1c8fdeb3e607d7c4ccc55504d6d826d49f414ef05e48cb4ef67a3783dcce78ec_prof);

    }

    public function getTemplateName()
    {
        return "locations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  375 => 149,  366 => 148,  336 => 217,  317 => 201,  298 => 185,  289 => 178,  286 => 148,  284 => 147,  263 => 129,  256 => 124,  243 => 117,  239 => 116,  233 => 113,  229 => 112,  219 => 105,  213 => 102,  201 => 101,  195 => 97,  191 => 96,  184 => 92,  164 => 77,  155 => 71,  147 => 65,  145 => 64,  139 => 63,  127 => 56,  123 => 54,  115 => 49,  109 => 45,  106 => 44,  100 => 41,  97 => 40,  89 => 37,  86 => 36,  84 => 35,  68 => 22,  47 => 3,  29 => 2,  27 => 1,);
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
\t\t\t\tMain Start
\t\t*************************************-->
        <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
            <div class=\"container\">
                <div class=\"row\">
                    <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                        <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                            <div class=\"tg-widgetdashboard\">
                                <div class=\"tg-widgetprofile\">
                                    <figure class=\"tg-directpostimg\"> <a href=\"#\">
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
                                    <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profil', {'id': app.user.id }) }}\">{{ 'Profile'|trans }}</a> </div>
                                {% include('profilDoctorNav.html.twig') %}
                            </div>
                        </div>
                        <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                            <div class=\"tg-dashboardjobslocations\">
                                <div class=\"tg-dashboardbox\">
                                    <div class=\"tg-dashboardboxtitle\">
                                        <h2>{{ 'Available Locations'|trans }}</h2>
                                    </div>
                                    <div class=\"tg-box tg-profilephoto\">
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-md-3 col-sm-6 col-xs-12 tg-columnpadding pull-right\" >
                                                <div class=\"form-group tg-formgroup \">
                                                    <a href=\"{{ path('locations_new') }}\" class=\"tg-btn tg-btn-lg\">{{ 'Add Now'|trans }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"divFormAdd\">

                                    </div>
                                    <div class=\"tg-box tg-availablelocation\">
                                        <div class=\"tg-servicelocations\">
                                            <div id=\"divErreur\" hidden>
                                                <div class=\"tg-alertmessages\">
                                                    <div class=\"alert alert-danger tg-alertmessage fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>
                                                        <i class=\"fa fa-bug\"></i>
                                                        <span><strong>{{ 'Error Message'|trans }}.</strong> Adipisicing elit, sed do eiusmod et dolore magna aliqua enim ad minimati.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {% for location in locations %}
                                                <div class=\"tg-servicelocation\">
                                                    <div class=\"tg-directpost\">
                                                        <div class=\"tg-directinfo\">
                                                            <div class=\"tg-directposthead\">
                                                                <h3><a href=\"#\">{{ location.name }}</a> <i class=\"fa fa-check-circle\" {% if location.verified == 1 %}style=\"color: #6b9311\" title=\"vérifier\" {% else %}style=\"color: #9d9d9d\" title = \"non vérifier\"{% endif %}></i><a href=\"{{ path('doctors_comments',{'location':location.id}) }}\"><span style=\"margin-left: 10px\" class=\"glyphicon glyphicon-comment\"></span></a></h3>
                                                                <div class=\"tg-subjects\">{{ location.ville }}</div>
                                                            </div>
                                                            <div class=\"tg-description\" style=\"max-height: none;\">
                                                                <p>{{ location.adresse }}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"tg-btnjoblocationeditdelete\" style=\"width: 10%\">
                                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" >
                                                            <a type=\"submit\" class=\"tg-btndelete showMap\" id=\"{{ location.id }}\" data-toggle=\"modal\" data-target=\"#showMap\" style=\"background-color: #2b2b2b\"><i class=\"fa fa-map-marker\" title=\"Afficher la carte\"></i></a><br>
                                                            <a class=\"tg-btndelete\" href=\"{{ path('calendries_index', {'id':location.id}) }}\" style=\"background-color: #2b2b2b\" title=\"Calendrier\"><i class=\"fa fa-calendar\"></i></a>
                                                        </div>
                                                        <div class=\"col-lg-6 col-md-6 col-sm-6 col-xs-6\" >
                                                            <a type=\"submit\" class=\"tg-btndelete deleteLocation\" id=\"{{ location.id }}\" style=\"background-color: #2b2b2b\" title=\"Supprimer\"><i class=\"fa fa-trash\"></i></a><br>
                                                            <a type=\"submit\" class=\"tg-btndelete editLocation\" id=\"{{ location.id }}\" data-toggle=\"modal\" data-target=\"#editLocation\" style=\"background-color: #2b2b2b\" title=\"Modifier\"><i class=\"fa fa-pencil\"></i></a>
                                                        </div>

                                                    </div>
                                                    <br><br>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    </div>
                                        
                                    <div>
                                        <!-- this is my comment -->
                                        {{ render(controller('DoctorsBundle:Horaire:new')) }}
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
    {% block addLocationModal %}
        <!--************************************
\t\t\t\tLight Box Start
\t*************************************-->
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"showMap\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2 id=\"locationName\"></h2>
                    <div id=\"result\">

                    </div>
                </div>
            </div>
        </div>
        <div class=\"modal tg-modal tg-appointmentlightbox fade\" id=\"editLocation\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog tg-modaldialog\">
                <div class=\"modal-content tg-modalcontent\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
                    <h2 id=\"locationName\"></h2>
                    <div id=\"formEdit\">

                    </div>
                </div>
            </div>
        </div>
        <!--************************************
                    Light Box End
        *************************************-->
        {% endblock %}

<script>

    \$(document).ready(function () {

        \$(\".showMap\").click(function () {
            var location = \$(this).attr('id');
            var URL = \"{{ path('locations_show',{ 'id': 'myID' }) }}\";
            URL = URL.replace(/myID/g, location);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    \$('#result').html(response);
                    return true;
                }
            });
        });

        \$(\".editLocation\").click(function () {
            var location = \$(this).attr('id');
            var URL = \"{{ path('locations_edit',{ 'id': 'myID' }) }}\";
            URL = URL.replace(/myID/g, location);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    \$('#formEdit').html(response);
                    return true;
                }
            });
        });
        \$(\".deleteLocation\").click(function () {
            if (!confirm('Vous voulez vraiment supprime cette job location')) return false;
            var locations = \$(this).attr('id');
            var URL = \"{{ path('locations_delete',{ 'id': 'myID' }) }}\";
            URL = URL.replace(/myID/g, locations);
            console.log(URL);
            \$.ajax({
                type: \"GET\",
                url: URL,
                cache: false,
                success: function (response) {
                    if (response == 'erreur') {
                        \$('#divErreur').show();
                        return true;
                    }
                    location.reload();
                    return true;
                }
            });
        });
    });
    </script>
{% endblock %}
", "locations/index.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\index.html.twig");
    }
}
