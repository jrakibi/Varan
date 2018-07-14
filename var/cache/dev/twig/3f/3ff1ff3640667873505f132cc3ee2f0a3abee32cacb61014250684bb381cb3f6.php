<?php

/* PatientBundle:Doctor:display.html.twig */
class __TwigTemplate_60635f579157bbe9ec26e03c521cfe4bfb39c6393e4362be5be5931c4edf84b7 extends Twig_Template
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
        $__internal_d96f4b39cbf656eaa0c3f945076f01022a86044a828e50379a95f6c607c0f78c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96f4b39cbf656eaa0c3f945076f01022a86044a828e50379a95f6c607c0f78c->enter($__internal_d96f4b39cbf656eaa0c3f945076f01022a86044a828e50379a95f6c607c0f78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PatientBundle:Doctor:display.html.twig"));

        $__internal_e011b0a2d872dfff957149aa047df1735fc5b360e59ca766eefed885378c0232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e011b0a2d872dfff957149aa047df1735fc5b360e59ca766eefed885378c0232->enter($__internal_e011b0a2d872dfff957149aa047df1735fc5b360e59ca766eefed885378c0232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PatientBundle:Doctor:display.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "PatientBundle:Doctor:display.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d96f4b39cbf656eaa0c3f945076f01022a86044a828e50379a95f6c607c0f78c->leave($__internal_d96f4b39cbf656eaa0c3f945076f01022a86044a828e50379a95f6c607c0f78c_prof);

        
        $__internal_e011b0a2d872dfff957149aa047df1735fc5b360e59ca766eefed885378c0232->leave($__internal_e011b0a2d872dfff957149aa047df1735fc5b360e59ca766eefed885378c0232_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8a3892ddea4fe296cd6bf4c9623bbbac6e0086d24308067e6d21b2c893e7a68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a3892ddea4fe296cd6bf4c9623bbbac6e0086d24308067e6d21b2c893e7a68b->enter($__internal_8a3892ddea4fe296cd6bf4c9623bbbac6e0086d24308067e6d21b2c893e7a68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_133390af72961fc694b540b0dc985c4207541b7bd15fc817caf18eea865b9038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_133390af72961fc694b540b0dc985c4207541b7bd15fc817caf18eea865b9038->enter($__internal_133390af72961fc694b540b0dc985c4207541b7bd15fc817caf18eea865b9038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("profilPatientNav.html.twig", "PatientBundle:Doctor:display.html.twig", 44)->display($context);
        // line 45
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                      <h3>Vos médecins</h3>
                          ";
        // line 49
        if ((twig_length_filter($this->env, ($context["dp"] ?? $this->getContext($context, "dp"))) != 0)) {
            // line 50
            echo "                            <table>
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nom du médecin</th>
                                    <th>Commentaire</th>
                                    <th>Statut</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  ";
            // line 60
            $context["count"] = 1;
            // line 61
            echo "                                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dp"] ?? $this->getContext($context, "dp")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "                                  <tr>
                                    <td>";
                // line 63
                echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
                echo "</td>
                                    <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "doctor", array()), "firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "doctor", array()), "lastname", array()), "html", null, true);
                echo "</td>
                                    <td style=\"width: 40%\">";
                // line 65
                if (($this->getAttribute($context["item"], "review", array()) == "")) {
                    // line 66
                    echo "                                       <form action=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_managment_display_review");
                    echo "\" method=\"post\">
                                          <input type=\"text\" placeholder=\"Enter Your Review\" name=\"review\">
                                          <input type=\"hidden\" name=\"id\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\">
                                          <input type=\"submit\" class='btn btn-primary' value=\"Submit\">
                                       </form>
                                       ";
                } else {
                    // line 71
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "review", array()), "html", null, true);
                    echo " ";
                }
                echo " </td>
                                    <td>";
                // line 72
                if (($this->getAttribute($context["item"], "block", array()) == 1)) {
                    echo " <label class=\"label label-danger\">Blocked</label> ";
                } else {
                    echo " <label class=\"label label-success\">Open for Appointments</label> ";
                }
                echo "</td>
                                  </tr>
                                  ";
                // line 74
                $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                // line 75
                echo "                                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "
                                </tbody>
                            </table>

                          ";
        }
        // line 81
        echo "                    </div>
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
        // line 94
        $this->loadTemplate("default/footer.html.twig", "PatientBundle:Doctor:display.html.twig", 94)->display($context);
        // line 95
        echo "
";
        
        $__internal_133390af72961fc694b540b0dc985c4207541b7bd15fc817caf18eea865b9038->leave($__internal_133390af72961fc694b540b0dc985c4207541b7bd15fc817caf18eea865b9038_prof);

        
        $__internal_8a3892ddea4fe296cd6bf4c9623bbbac6e0086d24308067e6d21b2c893e7a68b->leave($__internal_8a3892ddea4fe296cd6bf4c9623bbbac6e0086d24308067e6d21b2c893e7a68b_prof);

    }

    public function getTemplateName()
    {
        return "PatientBundle:Doctor:display.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 95,  208 => 94,  193 => 81,  186 => 76,  180 => 75,  178 => 74,  169 => 72,  162 => 71,  155 => 68,  149 => 66,  147 => 65,  141 => 64,  137 => 63,  134 => 62,  129 => 61,  127 => 60,  115 => 50,  113 => 49,  107 => 45,  105 => 44,  98 => 42,  86 => 35,  79 => 31,  64 => 19,  46 => 3,  28 => 2,  26 => 1,);
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
                      <h3>Vos médecins</h3>
                          {% if dp|length != 0 %}
                            <table>
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Nom du médecin</th>
                                    <th>Commentaire</th>
                                    <th>Statut</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  {% set count = 1 %}
                                  {% for item in dp %}
                                  <tr>
                                    <td>{{ count }}</td>
                                    <td>{{ item.doctor.firstname }} {{ item.doctor.lastname }}</td>
                                    <td style=\"width: 40%\">{% if item.review == \"\" %}
                                       <form action=\"{{ path('doctor_managment_display_review') }}\" method=\"post\">
                                          <input type=\"text\" placeholder=\"Enter Your Review\" name=\"review\">
                                          <input type=\"hidden\" name=\"id\" value=\"{{ item.id }}\">
                                          <input type=\"submit\" class='btn btn-primary' value=\"Submit\">
                                       </form>
                                       {% else %} {{ item.review }} {% endif %} </td>
                                    <td>{% if item.block == 1 %} <label class=\"label label-danger\">Blocked</label> {% else %} <label class=\"label label-success\">Open for Appointments</label> {% endif %}</td>
                                  </tr>
                                  {% set count = count + 1 %}
                                  {% endfor %}

                                </tbody>
                            </table>

                          {% endif %}
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
", "PatientBundle:Doctor:display.html.twig", "C:\\wamp64\\www\\varan\\src\\PatientBundle/Resources/views/Doctor/display.html.twig");
    }
}
