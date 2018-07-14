<?php

/* seances/weekSeancesByLocation.html.twig */
class __TwigTemplate_d8d64bfa015866b5a6c3fdb2e985e476c64af716599d8662f915f2771b0e1d80 extends Twig_Template
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
        $__internal_bc44ad178fc0f72246d3a61a26867b8a8f011c8acaf223d6a3965eb1c69e485d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc44ad178fc0f72246d3a61a26867b8a8f011c8acaf223d6a3965eb1c69e485d->enter($__internal_bc44ad178fc0f72246d3a61a26867b8a8f011c8acaf223d6a3965eb1c69e485d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "seances/weekSeancesByLocation.html.twig"));

        $__internal_8be27b4f934199e7a2a9155d09902cb26b22737fac82fa6166784713e1f98330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be27b4f934199e7a2a9155d09902cb26b22737fac82fa6166784713e1f98330->enter($__internal_8be27b4f934199e7a2a9155d09902cb26b22737fac82fa6166784713e1f98330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "seances/weekSeancesByLocation.html.twig"));

        // line 1
        echo "<div class=\"tg-dashboardbox\">
    ";
        // line 2
        if ((twig_length_filter($this->env, ($context["calendries"] ?? $this->getContext($context, "calendries"))) != 0)) {
            // line 3
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["calendries"] ?? $this->getContext($context, "calendries")));
            foreach ($context['_seq'] as $context["_key"] => $context["calendrie"]) {
                // line 4
                echo "            ";
                if (($this->getAttribute($context["calendrie"], "deleatedAt", array()) == null)) {
                    // line 5
                    echo "                ";
                    if (($this->getAttribute($context["calendrie"], "absence", array()) == 0)) {
                        // line 6
                        echo "                    ";
                        if (($this->getAttribute($context["calendrie"], "public", array()) == 1)) {
                            // line 7
                            echo "                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                <div class=\"tg-dateandtimeslots\">
                                    <div class=\"tg-datebox\">
                                        <time datetime=\"2011-10-10\">";
                            // line 11
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendrie"], "date", array()), "M-d"), "html", null, true);
                            echo ", ";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["calendrie"], "date", array()), "l"), "html", null, true);
                            echo "</time>
                                        <label style=\"color: white\">";
                            // line 12
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["calendrie"], "location", array()), "name", array()), "html", null, true);
                            echo "</label>
                                        <span>";
                            // line 13
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Seances:getNbrOfSeancesActive", array("calendrie" => $this->getAttribute($context["calendrie"], "id", array()))));
                            echo " Disponible</span>
                                        <i class=\"fa fa-calendar-check-o\"></i>
                                    </div>
                                    <div class=\"tg-timeslots\">
                                        ";
                            // line 17
                            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppointmentsBundle:Seances:getSeacesByCalendarAppointements", array("calendar" => $this->getAttribute($context["calendrie"], "id", array()))));
                            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    ";
                        }
                        // line 24
                        echo "
                ";
                    }
                    // line 26
                    echo "            ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['calendrie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        <p>médecin non disponible à cet emplacement</p>
    ";
        }
        // line 31
        echo "
</div>";
        
        $__internal_bc44ad178fc0f72246d3a61a26867b8a8f011c8acaf223d6a3965eb1c69e485d->leave($__internal_bc44ad178fc0f72246d3a61a26867b8a8f011c8acaf223d6a3965eb1c69e485d_prof);

        
        $__internal_8be27b4f934199e7a2a9155d09902cb26b22737fac82fa6166784713e1f98330->leave($__internal_8be27b4f934199e7a2a9155d09902cb26b22737fac82fa6166784713e1f98330_prof);

    }

    public function getTemplateName()
    {
        return "seances/weekSeancesByLocation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 29,  90 => 28,  84 => 27,  81 => 26,  77 => 24,  67 => 17,  60 => 13,  56 => 12,  50 => 11,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-dashboardbox\">
    {% if calendries|length != 0 %}
        {% for calendrie in calendries %}
            {% if calendrie.deleatedAt == null %}
                {% if calendrie.absence == 0 %}
                    {% if calendrie.public == 1 %}
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                <div class=\"tg-dateandtimeslots\">
                                    <div class=\"tg-datebox\">
                                        <time datetime=\"2011-10-10\">{{ calendrie.date|date(\"M-d\") }}, {{ calendrie.date|date(\"l\") }}</time>
                                        <label style=\"color: white\">{{ calendrie.location.name }}</label>
                                        <span>{{ render(controller('AppointmentsBundle:Seances:getNbrOfSeancesActive', {'calendrie': calendrie.id })) }} Disponible</span>
                                        <i class=\"fa fa-calendar-check-o\"></i>
                                    </div>
                                    <div class=\"tg-timeslots\">
                                        {{ render(controller('AppointmentsBundle:Seances:getSeacesByCalendarAppointements', {'calendar': calendrie.id })) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    {% endif %}

                {% endif %}
            {% endif %}
        {% endfor %}
    {% else %}
        <p>médecin non disponible à cet emplacement</p>
    {% endif %}

</div>", "seances/weekSeancesByLocation.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\seances\\weekSeancesByLocation.html.twig");
    }
}
