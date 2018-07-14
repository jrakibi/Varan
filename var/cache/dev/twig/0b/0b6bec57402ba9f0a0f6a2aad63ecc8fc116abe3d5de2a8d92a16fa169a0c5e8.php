<?php

/* default/header.html.twig */
class __TwigTemplate_b479edb487021a5b63475aa031701668df47c1847e3ba4eb79fafddb54ec73c4 extends Twig_Template
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
        $__internal_ae1db8519d718da5dac243bd3b34f3c697ceee6a788521986bb83564e2ea612c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1db8519d718da5dac243bd3b34f3c697ceee6a788521986bb83564e2ea612c->enter($__internal_ae1db8519d718da5dac243bd3b34f3c697ceee6a788521986bb83564e2ea612c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_d223048298d24a4b4a7cfe67ef863030815abd27413ac3e2f04baee0c7b01ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d223048298d24a4b4a7cfe67ef863030815abd27413ac3e2f04baee0c7b01ed6->enter($__internal_d223048298d24a4b4a7cfe67ef863030815abd27413ac3e2f04baee0c7b01ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        echo "<!--************************************
                                Header Start
                *************************************-->
<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
    <div class=\"tg-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12\">
                    <span class=\"tg-quickadvice\">Obtenez un conseil rapide: <strong>(+33) 05 25 25 25 25</strong></span>
                    <ul class=\"tg-contactinfo\">
                        <li><a href=\"#\">contact@e-zeedoc.com</a></li>
                        <li><address>12 rue des 31100 Toulouse</address></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12\">
                <strong class=\"tg-logo\">
                    <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"image description\">
                    </a>
                </strong>
                <div class=\"tg-navigationarea\">
                    <nav id=\"tg-nav\" class=\"tg-nav\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation collapse navbar-collapse\">
                            <ul>
                                <li class=\"tg-hasdropdown\">
                                    <a href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories"), "html", null, true);
        echo "</a>
                                    <ul class=\"tg-dropdownmenu\">
                                        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "medecins"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Doctors"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "hopitaux"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hospitals"), "html", null, true);
        echo "</a></li>
                                        <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "dentiste"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Dentiste</a></li>
                                        <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Oreille_Nez_Gorge"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Oreille-Nez-Gorge</a></li>
                                        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Gastro_Enterologue"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Gastro-Entérologue</a></li>
                                        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Psychiatre"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Psychiatre</a></li>
                                        <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Urologue"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Urologue</a></li>
                                        <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Homeopathe"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Homéopathe</a></li>
                                        <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Ophtalmologue"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Ophtalmologue</a></li>
                                        <li><a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Medecin_Generaliste"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Médecin Généraliste</a></li>
                                        <li><a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("doctor_search", twig_array_merge(array("mots" => "Neurologue"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()))), "html", null, true);
        echo "\">Neurologue</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
                                <li><a href=\"#\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How It Works"), "html", null, true);
        echo "?</a></li>
                                <li class=\"tg-hasdropdown\">

                                </li>
                            </ul>
                        </div>
                    </nav>
                    ";
        // line 62
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR"))) {
            // line 63
            echo "                        <div class=\"tg-admin\">
                            <div class=\"tg-user\">
                                <div class=\"tg-dropdown\">
                                    <figure class=\"tg-adminpic\">

                                        ";
            // line 68
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 69
                echo "                                            ";
                if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["patientH"] ?? $this->getContext($context, "patientH")), "imageFile")) {
                    // line 70
                    echo "                                                <a href=\"#\">
                                                    <img src=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["patientH"] ?? $this->getContext($context, "patientH")), "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["patientH"] ?? $this->getContext($context, "patientH")), "image", array()), "html", null, true);
                    echo "\" />
                                                </a>
                                            ";
                } else {
                    // line 74
                    echo "                                                ";
                    // line 75
                    echo "                                                <a href=\"#\">
                                                    <img src=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.svg"), "html", null, true);
                    echo "\" alt=\"\">
                                                </a>
                                            ";
                }
                // line 79
                echo "                                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 80
                echo "                                            ";
                if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctorH"] ?? $this->getContext($context, "doctorH")), "imageFile")) {
                    // line 81
                    echo "                                                <a href=\"#\">
                                                    <img src=\"";
                    // line 82
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctorH"] ?? $this->getContext($context, "doctorH")), "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["doctorH"] ?? $this->getContext($context, "doctorH")), "image", array()), "html", null, true);
                    echo "\" />
                                                </a>
                                            ";
                } else {
                    // line 85
                    echo "                                                ";
                    // line 86
                    echo "                                                <a href=\"#\">
                                                    <img src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/user.svg"), "html", null, true);
                    echo "\" alt=\"\">
                                                </a>
                                            ";
                }
                // line 90
                echo "                                        ";
            }
            // line 91
            echo "
                                    </figure>
                                    <a href=\"javascript:void(0);\" class=\"tg-usermenu tg-btndropdown\">
                                        ";
            // line 94
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 95
                echo "                                            <em>";
                if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                    echo " ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:getPatientName", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
                    echo " ";
                }
                echo "</em>

                                        ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 98
                echo "                                            <em>";
                if ( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()))) {
                    echo " ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:getDoctorName", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()))));
                    echo " ";
                }
                echo "</em>

                                        ";
            }
            // line 101
            echo "                                    </a>
                                    <div class=\"dropdown-menu tg-dropdownbox tg-usermenu\">
                                        <ul>
                                            ";
            // line 104
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_PATIENT")) {
                // line 105
                echo "                                                <li>
                                                    <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-user\"></i>
                                                        <span>";
                // line 108
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
                echo "</span>
                                                    </a>
                                                </li>
                                            ";
            } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_DOCTOR")) {
                // line 112
                echo "                                                <li>
                                                    <a href=\"";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
                echo "\">
                                                        <i class=\"fa fa-user\"></i>
                                                        <span>";
                // line 115
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
                echo "</span>
                                                    </a>
                                                </li>
                                            ";
            }
            // line 119
            echo "                                            <li>
                                                <a href=\"";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                                                    <i class=\"fa fa-sign-out\"></i>
                                                    <span>Déconnexion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        } else {
            // line 131
            echo "                        <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#loginModal\">Se connecter</button>
                    ";
        }
        // line 133
        echo "                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->


<!--************************************
        Login modal start
*************************************-->

<div class=\"modal tg-modal loginModal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog tg-modaldialog\">
        <div class=\"modal-content tg-modalcontent\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
            <h2>Connectez-vous ou créez un compte</h2>
            <fieldset class=\"tg-formstepone tg-current\">
                ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:login"));
        echo "
            </fieldset>
            <fieldset class=\"tg-formsteptwo\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"";
        // line 158
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctors_new");
        echo "\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/physician-icon-png-10.png"), "html", null, true);
        echo "\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    ";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Doctors account"), "html", null, true);
        echo "</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_new");
        echo "\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/Icons-Land-Medical-People-Patient-Male.ico"), "html", null, true);
        echo "\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    <span>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Patient account"), "html", null, true);
        echo "</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--************************************
        Login modal End
*************************************-->";
        
        $__internal_ae1db8519d718da5dac243bd3b34f3c697ceee6a788521986bb83564e2ea612c->leave($__internal_ae1db8519d718da5dac243bd3b34f3c697ceee6a788521986bb83564e2ea612c_prof);

        
        $__internal_d223048298d24a4b4a7cfe67ef863030815abd27413ac3e2f04baee0c7b01ed6->leave($__internal_d223048298d24a4b4a7cfe67ef863030815abd27413ac3e2f04baee0c7b01ed6_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 180,  355 => 177,  349 => 174,  336 => 164,  330 => 161,  324 => 158,  316 => 153,  294 => 133,  290 => 131,  276 => 120,  273 => 119,  266 => 115,  261 => 113,  258 => 112,  251 => 108,  246 => 106,  243 => 105,  241 => 104,  236 => 101,  225 => 98,  214 => 95,  212 => 94,  207 => 91,  204 => 90,  198 => 87,  195 => 86,  193 => 85,  185 => 82,  182 => 81,  179 => 80,  176 => 79,  170 => 76,  167 => 75,  165 => 74,  157 => 71,  154 => 70,  151 => 69,  149 => 68,  142 => 63,  140 => 62,  130 => 55,  126 => 54,  120 => 51,  116 => 50,  112 => 49,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  82 => 42,  76 => 41,  71 => 39,  52 => 23,  48 => 22,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
                                Header Start
                *************************************-->
<header id=\"tg-header\" class=\"tg-header tg-haslayout\">
    <div class=\"tg-topbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12\">
                    <span class=\"tg-quickadvice\">Obtenez un conseil rapide: <strong>(+33) 05 25 25 25 25</strong></span>
                    <ul class=\"tg-contactinfo\">
                        <li><a href=\"#\">contact@e-zeedoc.com</a></li>
                        <li><address>12 rue des 31100 Toulouse</address></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-xs-12\">
                <strong class=\"tg-logo\">
                    <a href=\"{{ path('homepage') }}\">
                        <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"image description\">
                    </a>
                </strong>
                <div class=\"tg-navigationarea\">
                    <nav id=\"tg-nav\" class=\"tg-nav\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div id=\"tg-navigation\" class=\"tg-navigation collapse navbar-collapse\">
                            <ul>
                                <li class=\"tg-hasdropdown\">
                                    <a href=\"#\">{{ 'Categories'|trans}}</a>
                                    <ul class=\"tg-dropdownmenu\">
                                        <li><a href=\"{{ url('doctor_search', {mots:'medecins'}|merge(app.request.query.all)) }}\">{{ 'Doctors'|trans }}</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'hopitaux'}|merge(app.request.query.all)) }}\">{{ 'Hospitals'|trans }}</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'dentiste'}|merge(app.request.query.all)) }}\">Dentiste</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Oreille_Nez_Gorge'}|merge(app.request.query.all)) }}\">Oreille-Nez-Gorge</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Gastro_Enterologue'}|merge(app.request.query.all)) }}\">Gastro-Entérologue</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Psychiatre'}|merge(app.request.query.all)) }}\">Psychiatre</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Urologue'}|merge(app.request.query.all)) }}\">Urologue</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Homeopathe'}|merge(app.request.query.all)) }}\">Homéopathe</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Ophtalmologue'}|merge(app.request.query.all)) }}\">Ophtalmologue</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Medecin_Generaliste'}|merge(app.request.query.all)) }}\">Médecin Généraliste</a></li>
                                        <li><a href=\"{{ url('doctor_search', {mots:'Neurologue'}|merge(app.request.query.all)) }}\">Neurologue</a></li>
                                    </ul>
                                </li>
                                <li><a href=\"#\">{{ 'About'|trans }}</a></li>
                                <li><a href=\"#\">{{ 'How It Works'|trans }}?</a></li>
                                <li class=\"tg-hasdropdown\">

                                </li>
                            </ul>
                        </div>
                    </nav>
                    {% if is_granted('ROLE_PATIENT') or is_granted('ROLE_DOCTOR') %}
                        <div class=\"tg-admin\">
                            <div class=\"tg-user\">
                                <div class=\"tg-dropdown\">
                                    <figure class=\"tg-adminpic\">

                                        {% if is_granted('ROLE_PATIENT') %}
                                            {% if vich_uploader_asset(patientH, 'imageFile') %}
                                                <a href=\"#\">
                                                    <img src=\"{{ vich_uploader_asset(patientH, 'imageFile') }}\" alt=\"{{ patientH.image }}\" />
                                                </a>
                                            {% else %}
                                                {# pppic patient #}
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('assets/images/user.svg') }}\" alt=\"\">
                                                </a>
                                            {% endif %}
                                        {% elseif is_granted('ROLE_DOCTOR') %}
                                            {% if vich_uploader_asset(doctorH, 'imageFile') %}
                                                <a href=\"#\">
                                                    <img src=\"{{ vich_uploader_asset(doctorH, 'imageFile') }}\" alt=\"{{ doctorH.image }}\" />
                                                </a>
                                            {% else %}
                                                {# pppic doctor #}
                                                <a href=\"#\">
                                                    <img src=\"{{ asset('assets/images/user.svg') }}\" alt=\"\">
                                                </a>
                                            {% endif %}
                                        {% endif %}

                                    </figure>
                                    <a href=\"javascript:void(0);\" class=\"tg-usermenu tg-btndropdown\">
                                        {% if is_granted('ROLE_PATIENT') %}
                                            <em>{% if not (app.user is null)%} {{ render(controller('UserBundle:User:getPatientName', { 'id': app.user.idTable })) }} {% endif %}</em>

                                        {% elseif is_granted('ROLE_DOCTOR') %}
                                            <em>{% if not (app.user is null)%} {{ render(controller('UserBundle:User:getDoctorName', { 'id': app.user.idTable })) }} {% endif %}</em>

                                        {% endif %}
                                    </a>
                                    <div class=\"dropdown-menu tg-dropdownbox tg-usermenu\">
                                        <ul>
                                            {% if is_granted('ROLE_PATIENT') %}
                                                <li>
                                                    <a href=\"{{ path('patient_profil', {'id': app.user.id }) }}\">
                                                        <i class=\"fa fa-user\"></i>
                                                        <span>{{ 'Profile'|trans }}</span>
                                                    </a>
                                                </li>
                                            {% elseif is_granted('ROLE_DOCTOR') %}
                                                <li>
                                                    <a href=\"{{ path('user_profil', {'id': app.user.id }) }}\">
                                                        <i class=\"fa fa-user\"></i>
                                                        <span>{{ 'Profile'|trans }}</span>
                                                    </a>
                                                </li>
                                            {% endif %}
                                            <li>
                                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                                    <i class=\"fa fa-sign-out\"></i>
                                                    <span>Déconnexion</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#loginModal\">Se connecter</button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</header>
<!--************************************
        Header End
*************************************-->


<!--************************************
        Login modal start
*************************************-->

<div class=\"modal tg-modal loginModal fade\" id=\"loginModal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog tg-modaldialog\">
        <div class=\"modal-content tg-modalcontent\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\"></span></button>
            <h2>Connectez-vous ou créez un compte</h2>
            <fieldset class=\"tg-formstepone tg-current\">
                {{ render(controller('UserBundle:User:login')) }}
            </fieldset>
            <fieldset class=\"tg-formsteptwo\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"{{ path('doctors_new') }}\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"{{ asset('assets/images/physician-icon-png-10.png') }}\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    {{ 'Doctors account'|trans }}</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class=\"col-md-6 col-sm-6 col-xs-6\">
                        <a href=\"{{ path('patient_new') }}\" style=\"text-decoration: none\">
                            <div class=\"tg-profilewidget tg-recommendation\">
                                <span class=\"tg-profilewidgeticon\">
                                    <img src=\"{{ asset('assets/images/Icons-Land-Medical-People-Patient-Male.ico') }}\" alt=\"image description\">
                                </span>
                                <div class=\"tg-percentage\">
                                    <span>{{ 'Patient account'|trans }}</span>
                                </div>
                                <hr>
                                <div class=\"tg-description\">
                                    <p><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit </b>  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<!--************************************
        Login modal End
*************************************-->", "default/header.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\default\\header.html.twig");
    }
}
