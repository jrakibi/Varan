<?php

/* profilPatientNav.html.twig */
class __TwigTemplate_debb05dcf47460f530d8065ede8d50d5ae55d5786eeb81f93afd47c19c55c398 extends Twig_Template
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
        $__internal_b9c1020d31e2b04dc77159bedbd96a9634815884ec9b109ea9535edb8604ec36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c1020d31e2b04dc77159bedbd96a9634815884ec9b109ea9535edb8604ec36->enter($__internal_b9c1020d31e2b04dc77159bedbd96a9634815884ec9b109ea9535edb8604ec36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profilPatientNav.html.twig"));

        $__internal_78375636d14dd9233fb424e04931aaebc362a2f6c5fc57763f714ed1ead5be6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78375636d14dd9233fb424e04931aaebc362a2f6c5fc57763f714ed1ead5be6c->enter($__internal_78375636d14dd9233fb424e04931aaebc362a2f6c5fc57763f714ed1ead5be6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profilPatientNav.html.twig"));

        // line 1
        echo "<nav id=\"tg-dashboardnav\" class=\"tg-dashboardnav\">
    <ul>
        <li> <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_appointmentsByUser", array("success" => "no"));
        echo "\"> <i class=\"fa fa-calendar-check-o\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Appointements"), "html", null, true);
        echo "</span> </a> </li>
        <li> <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_managment_display");
        echo "\"> <i class=\"fa fa-user\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Doctor Management"), "html", null, true);
        echo "</span> </a> </li>
        <li> <a href=\"#\"> <i class=\"fa fa-user\"></i> <span>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile Settings"), "html", null, true);
        echo "</span> </a> </li>

    </ul>
</nav>
";
        
        $__internal_b9c1020d31e2b04dc77159bedbd96a9634815884ec9b109ea9535edb8604ec36->leave($__internal_b9c1020d31e2b04dc77159bedbd96a9634815884ec9b109ea9535edb8604ec36_prof);

        
        $__internal_78375636d14dd9233fb424e04931aaebc362a2f6c5fc57763f714ed1ead5be6c->leave($__internal_78375636d14dd9233fb424e04931aaebc362a2f6c5fc57763f714ed1ead5be6c_prof);

    }

    public function getTemplateName()
    {
        return "profilPatientNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 5,  35 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav id=\"tg-dashboardnav\" class=\"tg-dashboardnav\">
    <ul>
        <li> <a href=\"{{ path('appointments_appointmentsByUser', {'success':'no'}) }}\"> <i class=\"fa fa-calendar-check-o\"></i> <span>{{ 'My Appointements'|trans }}</span> </a> </li>
        <li> <a href=\"{{ path('doctor_managment_display') }}\"> <i class=\"fa fa-user\"></i> <span>{{ 'Doctor Management'|trans }}</span> </a> </li>
        <li> <a href=\"#\"> <i class=\"fa fa-user\"></i> <span>{{ 'Profile Settings'|trans }}</span> </a> </li>

    </ul>
</nav>
", "profilPatientNav.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\profilPatientNav.html.twig");
    }
}
