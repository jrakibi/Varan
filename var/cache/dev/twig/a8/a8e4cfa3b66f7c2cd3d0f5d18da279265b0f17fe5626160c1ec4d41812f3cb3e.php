<?php

/* services/index.html.twig */
class __TwigTemplate_f0259552a651c908e940b781238beabd96e309ea1dc4ac54ebd049595aa82389 extends Twig_Template
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
        $__internal_657d2c81400d2b5017f2f7d3e4999bd20544239c2b71d007dbe7a38dbdf87b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657d2c81400d2b5017f2f7d3e4999bd20544239c2b71d007dbe7a38dbdf87b75->enter($__internal_657d2c81400d2b5017f2f7d3e4999bd20544239c2b71d007dbe7a38dbdf87b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        $__internal_046340d6f2deec5cbd70cd5352ad48b092f895a8118d052e0bbd48a026949729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_046340d6f2deec5cbd70cd5352ad48b092f895a8118d052e0bbd48a026949729->enter($__internal_046340d6f2deec5cbd70cd5352ad48b092f895a8118d052e0bbd48a026949729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/index.html.twig"));

        // line 1
        echo "<div class=\"tg-box tg-dashboardservices tg-uiicons\">
    <div class=\"tg-dashboardboxtitle tg-margin\">
        <h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"tg-dashboardboxtitle tg-feetitle tg-margin\">
        <h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fee Per Patient"), "html", null, true);
        echo "</h2>
    </div>
    <div class=\"tg-servicesbox\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 10
            echo "        <div class=\"tg-servicesholder\">
            <div class=\"tg-mainservice\"> <em>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "service", array()), "html", null, true);
            echo "</em> <i class=\"fa fa-pencil\"></i> <i class=\"fa fa-close\"></i> </div>
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Invoices:index", array("doctor" => ($context["doctor"] ?? $this->getContext($context, "doctor")), "service" => $this->getAttribute($context["service"], "id", array()))));
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
</div>";
        
        $__internal_657d2c81400d2b5017f2f7d3e4999bd20544239c2b71d007dbe7a38dbdf87b75->leave($__internal_657d2c81400d2b5017f2f7d3e4999bd20544239c2b71d007dbe7a38dbdf87b75_prof);

        
        $__internal_046340d6f2deec5cbd70cd5352ad48b092f895a8118d052e0bbd48a026949729->leave($__internal_046340d6f2deec5cbd70cd5352ad48b092f895a8118d052e0bbd48a026949729_prof);

    }

    public function getTemplateName()
    {
        return "services/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 15,  52 => 12,  48 => 11,  45 => 10,  41 => 9,  35 => 6,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-box tg-dashboardservices tg-uiicons\">
    <div class=\"tg-dashboardboxtitle tg-margin\">
        <h2>{{ 'Services'|trans }}</h2>
    </div>
    <div class=\"tg-dashboardboxtitle tg-feetitle tg-margin\">
        <h2>{{ 'Fee Per Patient'|trans }}</h2>
    </div>
    <div class=\"tg-servicesbox\">
        {% for service in services %}
        <div class=\"tg-servicesholder\">
            <div class=\"tg-mainservice\"> <em>{{ service.service }}</em> <i class=\"fa fa-pencil\"></i> <i class=\"fa fa-close\"></i> </div>
            {{ render(controller('DoctorsBundle:Invoices:index', {'doctor':doctor, 'service':service.id})) }}
        </div>
        {% endfor %}
    </div>
</div>", "services/index.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\services\\index.html.twig");
    }
}
