<?php

/* profilDoctorNav.html.twig */
class __TwigTemplate_cc02c075b3450e3bd9d4fe21a2d75aed43c75829a209b0dcb381c58701856f1d extends Twig_Template
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
        $__internal_53923609e65041fadb9669987a97b69d4c0cae3f8e72e04ba391b57d212c4c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53923609e65041fadb9669987a97b69d4c0cae3f8e72e04ba391b57d212c4c77->enter($__internal_53923609e65041fadb9669987a97b69d4c0cae3f8e72e04ba391b57d212c4c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profilDoctorNav.html.twig"));

        $__internal_4b9c0488b279d3310cba2978e8f83ed6a7a2131c73532a7950ea8654ef4b1cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b9c0488b279d3310cba2978e8f83ed6a7a2131c73532a7950ea8654ef4b1cc0->enter($__internal_4b9c0488b279d3310cba2978e8f83ed6a7a2131c73532a7950ea8654ef4b1cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "profilDoctorNav.html.twig"));

        // line 1
        echo "<nav id=\"tg-dashboardnav\" class=\"tg-dashboardnav\">
    <ul>
        <li> <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_index");
        echo "\"> <i class=\"fa fa-location-arrow\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Job Locations"), "html", null, true);
        echo "</span> </a> </li>
        <li> <a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("calendries_index", array("id" => 0));
        echo "\"> <i class=\"fa fa-calendar\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Appointment Settings"), "html", null, true);
        echo "</span> </a> </li>
        <li><a href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_display");
        echo "\"><i class=\"fa fa-calendar-times-o\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current Appointments"), "html", null, true);
        echo "</span></a></li>
        <li><a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("holiday_display");
        echo "\"><i class=\"fa fa-calendar-times-o\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Holidays Setting"), "html", null, true);
        echo "</span></a></li>
        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("patient_doctor_display");
        echo "\"><i class=\"fa fa-user\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Patient Management"), "html", null, true);
        echo "</span></a></li>
        <li> <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("services_settings");
        echo "\"> <i class=\"fa fa-stethoscope\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Services Settings"), "html", null, true);
        echo "</span> </a> </li>
        <li> <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("appointments_appointmentsByUser", array("success" => "no"));
        echo "\"> <i class=\"fa fa-calendar-check-o\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My Appointements"), "html", null, true);
        echo "</span> </a> </li>
        <li> <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_index");
        echo "\"> <i class=\"fa fa-user\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Paramétres du compte"), "html", null, true);
        echo "</span> </a> </li>
    </ul>
</nav>
";
        
        $__internal_53923609e65041fadb9669987a97b69d4c0cae3f8e72e04ba391b57d212c4c77->leave($__internal_53923609e65041fadb9669987a97b69d4c0cae3f8e72e04ba391b57d212c4c77_prof);

        
        $__internal_4b9c0488b279d3310cba2978e8f83ed6a7a2131c73532a7950ea8654ef4b1cc0->leave($__internal_4b9c0488b279d3310cba2978e8f83ed6a7a2131c73532a7950ea8654ef4b1cc0_prof);

    }

    public function getTemplateName()
    {
        return "profilDoctorNav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  65 => 9,  59 => 8,  53 => 7,  47 => 6,  41 => 5,  35 => 4,  29 => 3,  25 => 1,);
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
        <li> <a href=\"{{ path('locations_index') }}\"> <i class=\"fa fa-location-arrow\"></i> <span>{{ 'Job Locations'|trans }}</span> </a> </li>
        <li> <a href=\"{{ path('calendries_index', {'id': 0}) }}\"> <i class=\"fa fa-calendar\"></i> <span>{{ 'Appointment Settings'|trans }}</span> </a> </li>
        <li><a href=\"{{ path('appointments_display') }}\"><i class=\"fa fa-calendar-times-o\"></i> <span>{{ 'Current Appointments'|trans }}</span></a></li>
        <li><a href=\"{{ path('holiday_display') }}\"><i class=\"fa fa-calendar-times-o\"></i> <span>{{ 'Holidays Setting'|trans }}</span></a></li>
        <li><a href=\"{{ path('patient_doctor_display') }}\"><i class=\"fa fa-user\"></i> <span>{{ 'Patient Management'|trans }}</span></a></li>
        <li> <a href=\"{{ path('services_settings') }}\"> <i class=\"fa fa-stethoscope\"></i> <span>{{ 'Services Settings'|trans }}</span> </a> </li>
        <li> <a href=\"{{ path('appointments_appointmentsByUser', {'success':'no'}) }}\"> <i class=\"fa fa-calendar-check-o\"></i> <span>{{ 'My Appointements'|trans }}</span> </a> </li>
        <li> <a href=\"{{ path('settings_index') }}\"> <i class=\"fa fa-user\"></i> <span>{{ 'Paramétres du compte'|trans }}</span> </a> </li>
    </ul>
</nav>
", "profilDoctorNav.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\profilDoctorNav.html.twig");
    }
}
