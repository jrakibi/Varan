<?php

/* specialities/comboSpecialitiers.html.twig */
class __TwigTemplate_11ac0ff55f83432659386e30d224897742379ce912d9fc3f73cd31915cbfa3d3 extends Twig_Template
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
        $__internal_4b5d01dc8e7bc5c2da73e5770d1cc6c050777e74624fe6dc419c0def8314dd75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5d01dc8e7bc5c2da73e5770d1cc6c050777e74624fe6dc419c0def8314dd75->enter($__internal_4b5d01dc8e7bc5c2da73e5770d1cc6c050777e74624fe6dc419c0def8314dd75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialities/comboSpecialitiers.html.twig"));

        $__internal_b17285a82e10dcef7ba1cc3d356853197f5fdcafd42c3493378fff4eb904c099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17285a82e10dcef7ba1cc3d356853197f5fdcafd42c3493378fff4eb904c099->enter($__internal_b17285a82e10dcef7ba1cc3d356853197f5fdcafd42c3493378fff4eb904c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialities/comboSpecialitiers.html.twig"));

        // line 1
        echo "<div class=\"col-lg-12\">
    <div class=\"form-group tg-formgroup\">
        <span class=\"tg-select\">
            <select id=\"comboSpecialitie\" name=\"\">
                <option>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Selectionner"), "html", null, true);
        echo "</option>
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["specialities"] ?? $this->getContext($context, "specialities")));
        foreach ($context['_seq'] as $context["_key"] => $context["specialitie"]) {
            // line 7
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
            </select>
        </span>
    </div>
</div>

";
        
        $__internal_4b5d01dc8e7bc5c2da73e5770d1cc6c050777e74624fe6dc419c0def8314dd75->leave($__internal_4b5d01dc8e7bc5c2da73e5770d1cc6c050777e74624fe6dc419c0def8314dd75_prof);

        
        $__internal_b17285a82e10dcef7ba1cc3d356853197f5fdcafd42c3493378fff4eb904c099->leave($__internal_b17285a82e10dcef7ba1cc3d356853197f5fdcafd42c3493378fff4eb904c099_prof);

    }

    public function getTemplateName()
    {
        return "specialities/comboSpecialitiers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-12\">
    <div class=\"form-group tg-formgroup\">
        <span class=\"tg-select\">
            <select id=\"comboSpecialitie\" name=\"\">
                <option>{{ 'Selectionner'|trans }}</option>
                {% for specialitie in specialities %}
                    <option value=\"{{ specialitie.id }}\">{{ specialitie.libelle }}</option>
                {% endfor %}

            </select>
        </span>
    </div>
</div>

", "specialities/comboSpecialitiers.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\specialities\\comboSpecialitiers.html.twig");
    }
}
