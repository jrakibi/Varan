<?php

/* educations/listeOfEducations.html.twig */
class __TwigTemplate_6b4f70c92653fc88a42a13cda68ef9a7e34ea12967d90d761f93402a4c9c5ea5 extends Twig_Template
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
        $__internal_c1dfaf4bf758c1d35ae5189326a498e27356ab1e37fe4f1691f059b3ac86e1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1dfaf4bf758c1d35ae5189326a498e27356ab1e37fe4f1691f059b3ac86e1fb->enter($__internal_c1dfaf4bf758c1d35ae5189326a498e27356ab1e37fe4f1691f059b3ac86e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "educations/listeOfEducations.html.twig"));

        $__internal_fb7b1f2f03833ed6e93cfe9e539d090ddca41250296613ba8b8c1b2d4c583cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7b1f2f03833ed6e93cfe9e539d090ddca41250296613ba8b8c1b2d4c583cf7->enter($__internal_fb7b1f2f03833ed6e93cfe9e539d090ddca41250296613ba8b8c1b2d4c583cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "educations/listeOfEducations.html.twig"));

        // line 1
        if (($context["educations"] ?? $this->getContext($context, "educations"))) {
            // line 2
            echo "<div class=\"tg-dashboardbox\">
    <div class=\"tg-dashboardboxtitle\">
        <h2><i class=\"fa fa-graduation-cap\"></i> ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("education"), "html", null, true);
            echo "</h2>
    </div>
    <div class=\"tg-box tg-experience tg-uiicons\">
        <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
            ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["educations"] ?? $this->getContext($context, "educations")));
            foreach ($context['_seq'] as $context["_key"] => $context["education"]) {
                // line 9
                echo "            <li> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["education"], "typeOfSchool", array()), "html", null, true);
                echo "</span> <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["education"], "school", array()), "html", null, true);
                echo "</span> </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['education'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "        </ul>
    </div>
</div>
";
        }
        
        $__internal_c1dfaf4bf758c1d35ae5189326a498e27356ab1e37fe4f1691f059b3ac86e1fb->leave($__internal_c1dfaf4bf758c1d35ae5189326a498e27356ab1e37fe4f1691f059b3ac86e1fb_prof);

        
        $__internal_fb7b1f2f03833ed6e93cfe9e539d090ddca41250296613ba8b8c1b2d4c583cf7->leave($__internal_fb7b1f2f03833ed6e93cfe9e539d090ddca41250296613ba8b8c1b2d4c583cf7_prof);

    }

    public function getTemplateName()
    {
        return "educations/listeOfEducations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  42 => 9,  38 => 8,  31 => 4,  27 => 2,  25 => 1,);
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
<div class=\"tg-dashboardbox\">
    <div class=\"tg-dashboardboxtitle\">
        <h2><i class=\"fa fa-graduation-cap\"></i> {{ 'education'|trans }}</h2>
    </div>
    <div class=\"tg-box tg-experience tg-uiicons\">
        <ul class=\"tg-themelist tg-liststyledot tg-listdatastyle\">
            {% for education in educations %}
            <li> <span>{{ education.typeOfSchool }}</span> <span>{{ education.school }}</span> </li>
            {% endfor %}
        </ul>
    </div>
</div>
{% endif %}", "educations/listeOfEducations.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\educations\\listeOfEducations.html.twig");
    }
}
