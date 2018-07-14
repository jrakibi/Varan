<?php

/* doctors/doctorDetailsSpecialites.html.twig */
class __TwigTemplate_274407a845a2084af439cd6847806c7370d21647d20a9ba6ad1ba3b9911466d9 extends Twig_Template
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
        $__internal_e764e7986bd38baa3468f1ddec1fd61f76e4d751ec8e2327f44a530727e14cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e764e7986bd38baa3468f1ddec1fd61f76e4d751ec8e2327f44a530727e14cfb->enter($__internal_e764e7986bd38baa3468f1ddec1fd61f76e4d751ec8e2327f44a530727e14cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsSpecialites.html.twig"));

        $__internal_8a751a8091f55072cc7b30e1a68d5fad8f2e5b0140cb4b66d1513f6433fcdfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a751a8091f55072cc7b30e1a68d5fad8f2e5b0140cb4b66d1513f6433fcdfb8->enter($__internal_8a751a8091f55072cc7b30e1a68d5fad8f2e5b0140cb4b66d1513f6433fcdfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsSpecialites.html.twig"));

        // line 1
        if (($context["specialities"] ?? $this->getContext($context, "specialities"))) {
            // line 2
            echo "<div class=\"tg-box\">
    <div class=\"tg-icontitle\">
        <h3 class=\"fa fa-star-o\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Specializations"), "html", null, true);
            echo "</h3>
    </div>
    <ul class=\"tg-threecolumns tg-liststyledot tg-specialization\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["specialities"] ?? $this->getContext($context, "specialities")));
            foreach ($context['_seq'] as $context["_key"] => $context["specialitie"]) {
                // line 8
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialitie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
</div>
";
        }
        
        $__internal_e764e7986bd38baa3468f1ddec1fd61f76e4d751ec8e2327f44a530727e14cfb->leave($__internal_e764e7986bd38baa3468f1ddec1fd61f76e4d751ec8e2327f44a530727e14cfb_prof);

        
        $__internal_8a751a8091f55072cc7b30e1a68d5fad8f2e5b0140cb4b66d1513f6433fcdfb8->leave($__internal_8a751a8091f55072cc7b30e1a68d5fad8f2e5b0140cb4b66d1513f6433fcdfb8_prof);

    }

    public function getTemplateName()
    {
        return "doctors/doctorDetailsSpecialites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  41 => 8,  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if specialities %}
<div class=\"tg-box\">
    <div class=\"tg-icontitle\">
        <h3 class=\"fa fa-star-o\">{{ 'Specializations'|trans }}</h3>
    </div>
    <ul class=\"tg-threecolumns tg-liststyledot tg-specialization\">
        {% for specialitie in specialities %}
            <li>{{ specialitie.libelle }}</li>
        {% endfor %}
    </ul>
</div>
{% endif %}", "doctors/doctorDetailsSpecialites.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\doctorDetailsSpecialites.html.twig");
    }
}
