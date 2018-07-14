<?php

/* doctors/doctorDetailsEducations.html.twig */
class __TwigTemplate_9260c10609821a640b7a6c01358b741ec2aa72bfd66fa5a8b616714b3f64e210 extends Twig_Template
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
        $__internal_8ca1e660047ca530eaa08ae61e869b69308bdbcfd77e95793d533e3eb182485b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca1e660047ca530eaa08ae61e869b69308bdbcfd77e95793d533e3eb182485b->enter($__internal_8ca1e660047ca530eaa08ae61e869b69308bdbcfd77e95793d533e3eb182485b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsEducations.html.twig"));

        $__internal_443eb839cf904c861e1bc103037a5741165219866be90aba17f666a2439789f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443eb839cf904c861e1bc103037a5741165219866be90aba17f666a2439789f0->enter($__internal_443eb839cf904c861e1bc103037a5741165219866be90aba17f666a2439789f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/doctorDetailsEducations.html.twig"));

        // line 1
        if (($context["educations"] ?? $this->getContext($context, "educations"))) {
            // line 2
            echo "<div class=\"tg-box\">
    <div class=\"tg-icontitle\">
        <h3 class=\"fa fa-mortar-board\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Education"), "html", null, true);
            echo "</h3>
    </div>
    <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-education\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["educations"] ?? $this->getContext($context, "educations")));
            foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
                // line 8
                echo "        <li>
            <span>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["education"], "typeOfSchool", array()), "html", null, true);
                echo "</span>
            <span>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute($context["education"], "school", array()), "html", null, true);
                echo "</span>
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    </ul>
</div>
";
        }
        
        $__internal_8ca1e660047ca530eaa08ae61e869b69308bdbcfd77e95793d533e3eb182485b->leave($__internal_8ca1e660047ca530eaa08ae61e869b69308bdbcfd77e95793d533e3eb182485b_prof);

        
        $__internal_443eb839cf904c861e1bc103037a5741165219866be90aba17f666a2439789f0->leave($__internal_443eb839cf904c861e1bc103037a5741165219866be90aba17f666a2439789f0_prof);

    }

    public function getTemplateName()
    {
        return "doctors/doctorDetailsEducations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  48 => 10,  44 => 9,  41 => 8,  37 => 7,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if educations %}
<div class=\"tg-box\">
    <div class=\"tg-icontitle\">
        <h3 class=\"fa fa-mortar-board\">{{ 'Education'|trans }}</h3>
    </div>
    <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle tg-education\">
        {% for education in educations %}
        <li>
            <span>{{ education.typeOfSchool }}</span>
            <span>{{ education.school }}</span>
        </li>
        {% endfor %}
    </ul>
</div>
{% endif %}", "doctors/doctorDetailsEducations.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\doctorDetailsEducations.html.twig");
    }
}
