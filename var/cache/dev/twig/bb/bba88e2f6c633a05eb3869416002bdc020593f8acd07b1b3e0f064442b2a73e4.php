<?php

/* specialities/listeOfSpecialities.html.twig */
class __TwigTemplate_054a1ebbaf890e3d9e7175f660a82b209dcc3341cafcb5eb9a7ba76800cca909 extends Twig_Template
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
        $__internal_dc0ed6360e549dc09409ae96d1b3addba99264ddfac79b34c6c182472fdf7f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0ed6360e549dc09409ae96d1b3addba99264ddfac79b34c6c182472fdf7f7e->enter($__internal_dc0ed6360e549dc09409ae96d1b3addba99264ddfac79b34c6c182472fdf7f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialities/listeOfSpecialities.html.twig"));

        $__internal_3f34fa0c5db890e1539d59366894ed858697ef53f6206368f507f94320c94a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f34fa0c5db890e1539d59366894ed858697ef53f6206368f507f94320c94a74->enter($__internal_3f34fa0c5db890e1539d59366894ed858697ef53f6206368f507f94320c94a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "specialities/listeOfSpecialities.html.twig"));

        // line 1
        echo "<div class=\"tg-searchbulder tg-searchprofilesttings\">
    <div class=\"tg-tabcontent\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["specialities"] ?? $this->getContext($context, "specialities")));
        foreach ($context['_seq'] as $context["_key"] => $context["specialitie"]) {
            // line 4
            echo "            <span class=\"tg-checkbox tg-subcategorycheckbox\">
                <input type=\"checkbox\"  name=\"subcategory\" value=\"Dentist\">
                <label for=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
            echo "\">
                    <span>
                        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
            echo "\" alt=\"image description\">
                    </span>
                    <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["specialitie"], "libelle", array()), "html", null, true);
            echo "</span>
                </label>
\t\t\t</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['specialitie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>";
        
        $__internal_dc0ed6360e549dc09409ae96d1b3addba99264ddfac79b34c6c182472fdf7f7e->leave($__internal_dc0ed6360e549dc09409ae96d1b3addba99264ddfac79b34c6c182472fdf7f7e_prof);

        
        $__internal_3f34fa0c5db890e1539d59366894ed858697ef53f6206368f507f94320c94a74->leave($__internal_3f34fa0c5db890e1539d59366894ed858697ef53f6206368f507f94320c94a74_prof);

    }

    public function getTemplateName()
    {
        return "specialities/listeOfSpecialities.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 14,  47 => 10,  42 => 8,  37 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-searchbulder tg-searchprofilesttings\">
    <div class=\"tg-tabcontent\">
        {% for specialitie in specialities %}
            <span class=\"tg-checkbox tg-subcategorycheckbox\">
                <input type=\"checkbox\"  name=\"subcategory\" value=\"Dentist\">
                <label for=\"{{ specialitie.libelle }}\">
                    <span>
                        <img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\">
                    </span>
                    <span>{{ specialitie.libelle }}</span>
                </label>
\t\t\t</span>
        {% endfor %}
    </div>
</div>", "specialities/listeOfSpecialities.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\specialities\\listeOfSpecialities.html.twig");
    }
}
