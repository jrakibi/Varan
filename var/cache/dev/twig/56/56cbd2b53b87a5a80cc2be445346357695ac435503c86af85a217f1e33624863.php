<?php

/* certifications/listeOfCertifications.html.twig */
class __TwigTemplate_b640c6c78333c55456d62467f19bcc80c38d63f31358518e7768917ca37eb3a1 extends Twig_Template
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
        $__internal_aa3acfd45c994a4ca214811e19a5b957388c0a34b1892c75cbf0f6b4b44666c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa3acfd45c994a4ca214811e19a5b957388c0a34b1892c75cbf0f6b4b44666c9->enter($__internal_aa3acfd45c994a4ca214811e19a5b957388c0a34b1892c75cbf0f6b4b44666c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "certifications/listeOfCertifications.html.twig"));

        $__internal_6b6d5640eba5f85c6290aec459521c3268e52ba1b635cc4fb0d3bd5e254bbbf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b6d5640eba5f85c6290aec459521c3268e52ba1b635cc4fb0d3bd5e254bbbf5->enter($__internal_6b6d5640eba5f85c6290aec459521c3268e52ba1b635cc4fb0d3bd5e254bbbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "certifications/listeOfCertifications.html.twig"));

        // line 1
        if (($context["certifications"] ?? $this->getContext($context, "certifications"))) {
            // line 2
            echo "    <div class=\"tg-dashboardbox\">
        <div class=\"tg-dashboardboxtitle\">
            <h2><i class=\"fa fa-trophy\"></i> ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Certifications"), "html", null, true);
            echo "</h2>
        </div>
        <div class=\"tg-box tg-experience tg-uiicons\">
            <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["certifications"] ?? $this->getContext($context, "certifications")));
            foreach ($context['_seq'] as $context["_key"] => $context["certification"]) {
                // line 9
                echo "                    <li> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "title", array()), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["certification"], "occasion", array()), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["certification"], "date", array()), "d-M-Y"), "html", null, true);
                echo "</span></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            </ul>
        </div>
    </div>
";
        }
        
        $__internal_aa3acfd45c994a4ca214811e19a5b957388c0a34b1892c75cbf0f6b4b44666c9->leave($__internal_aa3acfd45c994a4ca214811e19a5b957388c0a34b1892c75cbf0f6b4b44666c9_prof);

        
        $__internal_6b6d5640eba5f85c6290aec459521c3268e52ba1b635cc4fb0d3bd5e254bbbf5->leave($__internal_6b6d5640eba5f85c6290aec459521c3268e52ba1b635cc4fb0d3bd5e254bbbf5_prof);

    }

    public function getTemplateName()
    {
        return "certifications/listeOfCertifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  42 => 9,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
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
    <div class=\"tg-dashboardbox\">
        <div class=\"tg-dashboardboxtitle\">
            <h2><i class=\"fa fa-trophy\"></i> {{ 'Certifications'|trans }}</h2>
        </div>
        <div class=\"tg-box tg-experience tg-uiicons\">
            <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
                {% for certification in certifications %}
                    <li> <span>{{ certification.title }}</span> <span>{{ certification.occasion }}</span> <span>{{ certification.date|date('d-M-Y') }}</span></li>
                {% endfor %}
            </ul>
        </div>
    </div>
{% endif %}", "certifications/listeOfCertifications.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\certifications\\listeOfCertifications.html.twig");
    }
}
