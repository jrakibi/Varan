<?php

/* services/listeServicesDoctorDetails.html.twig */
class __TwigTemplate_5470fb212beab38ac442ff4507ae26c5460b18d1952733cc806f83612457f37f extends Twig_Template
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
        $__internal_df53f8f070ab05a10dd9a937c4ca3128ef26e75dab0cfa55fe5759581d00cd6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df53f8f070ab05a10dd9a937c4ca3128ef26e75dab0cfa55fe5759581d00cd6c->enter($__internal_df53f8f070ab05a10dd9a937c4ca3128ef26e75dab0cfa55fe5759581d00cd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/listeServicesDoctorDetails.html.twig"));

        $__internal_c50c7ecae120e4d4848cda4fc2c771b85a66200156264ef8a936b9944cc1eac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50c7ecae120e4d4848cda4fc2c771b85a66200156264ef8a936b9944cc1eac4->enter($__internal_c50c7ecae120e4d4848cda4fc2c771b85a66200156264ef8a936b9944cc1eac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "services/listeServicesDoctorDetails.html.twig"));

        // line 1
        echo "<div id=\"tg-servicesfeecollapse\" class=\"tg-servicesfeecollapse\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["services"] ?? $this->getContext($context, "services")));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 3
            echo "    <h3 class=\"fa fa-angle-down\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["service"], "service", array()), "html", null, true);
            echo "</h3>
    ";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Invoices:listeOfInvoicesByDoctor", array("doctor" => ($context["doctor"] ?? $this->getContext($context, "doctor")), "service" => $this->getAttribute($context["service"], "id", array()))));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>";
        
        $__internal_df53f8f070ab05a10dd9a937c4ca3128ef26e75dab0cfa55fe5759581d00cd6c->leave($__internal_df53f8f070ab05a10dd9a937c4ca3128ef26e75dab0cfa55fe5759581d00cd6c_prof);

        
        $__internal_c50c7ecae120e4d4848cda4fc2c771b85a66200156264ef8a936b9944cc1eac4->leave($__internal_c50c7ecae120e4d4848cda4fc2c771b85a66200156264ef8a936b9944cc1eac4_prof);

    }

    public function getTemplateName()
    {
        return "services/listeServicesDoctorDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  37 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"tg-servicesfeecollapse\" class=\"tg-servicesfeecollapse\">
    {% for service in services %}
    <h3 class=\"fa fa-angle-down\">{{ service.service }}</h3>
    {{ render(controller('DoctorsBundle:Invoices:listeOfInvoicesByDoctor', {'doctor':doctor, 'service':service.id})) }}
    {% endfor %}
</div>", "services/listeServicesDoctorDetails.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\services\\listeServicesDoctorDetails.html.twig");
    }
}
