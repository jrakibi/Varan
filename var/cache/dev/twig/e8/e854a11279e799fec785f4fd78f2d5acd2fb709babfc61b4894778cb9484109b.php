<?php

/* doctors/doctorDetailsCertifications.html.twig */
class __TwigTemplate_97b9a0c194a97d7680301ea7673d8314d273018b3b15b7187113701b7bf6320b extends Twig_Template
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
        $__internal_4d381eaae3b9cf2e4f6dc7873b7d6d5e7cb5fc07cacb15f89178fcf56558cfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d381eaae3b9cf2e4f6dc7873b7d6d5e7cb5fc07cacb15f89178fcf56558cfef->enter($__internal_4d381eaae3b9cf2e4f6dc7873b7d6d5e7cb5fc07cacb15f89178fcf56558cfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsCertifications.html.twig"));

        $__internal_e1dbd01d9860359186282404e284646c7d23adfcb83de6251dae5e91b78e93c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dbd01d9860359186282404e284646c7d23adfcb83de6251dae5e91b78e93c4->enter($__internal_e1dbd01d9860359186282404e284646c7d23adfcb83de6251dae5e91b78e93c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsCertifications.html.twig"));

        // line 1
        if (($context["certifications"] ?? $this->getContext($context, "certifications"))) {
            // line 2
            echo "    <div class=\"tg-box\">
        <div class=\"tg-icontitle\">
            <h3 class=\"fa fa-mortar-board\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Certification"), "html", null, true);
            echo "</h3>
        </div>
        <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-education\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? $this->getContext($context, "certifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                // line 8
                echo "                <li>
                    <span>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "title", array()), "html", null, true);
                echo "</span>
                    <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "occasion", array()), "html", null, true);
                echo "</span>
                    <span>";
                // line 11
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["certification"], "date", array()), "d-M-Y"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </div>
";
        }
        
        $__internal_4d381eaae3b9cf2e4f6dc7873b7d6d5e7cb5fc07cacb15f89178fcf56558cfef->leave($__internal_4d381eaae3b9cf2e4f6dc7873b7d6d5e7cb5fc07cacb15f89178fcf56558cfef_prof);

        
        $__internal_e1dbd01d9860359186282404e284646c7d23adfcb83de6251dae5e91b78e93c4->leave($__internal_e1dbd01d9860359186282404e284646c7d23adfcb83de6251dae5e91b78e93c4_prof);

    }

    public function getTemplateName()
    {
        return "doctors/doctorDetailsCertifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 14,  52 => 11,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if certifications %}
    <div class=\"tg-box\">
        <div class=\"tg-icontitle\">
            <h3 class=\"fa fa-mortar-board\">{{ 'Certification'|trans }}</h3>
        </div>
        <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-education\">
            {% for certification in certifications %}
                <li>
                    <span>{{ certification.title }}</span>
                    <span>{{ certification.occasion }}</span>
                    <span>{{ certification.date|date('d-M-Y') }}</span>
                </li>
            {% endfor %}
        </ul>
    </div>
{% endif %}", "doctors/doctorDetailsCertifications.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\doctorDetailsCertifications.html.twig");
    }
}
