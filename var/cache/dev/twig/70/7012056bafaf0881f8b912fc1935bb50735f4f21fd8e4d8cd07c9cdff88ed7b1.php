<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2ff06e0074a9a81eb27cf3ac67757da9bd1aaef339d9b638744b9ae2d51deca3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62d48249814ea814eb1ee54aac70dd7f8147f6dbbb3e19a4333604bef008651e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d48249814ea814eb1ee54aac70dd7f8147f6dbbb3e19a4333604bef008651e->enter($__internal_62d48249814ea814eb1ee54aac70dd7f8147f6dbbb3e19a4333604bef008651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_fbf22e0d69d42e16ac2a5048fc056eb9ad681dae4c03dc3805b603988268a5ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf22e0d69d42e16ac2a5048fc056eb9ad681dae4c03dc3805b603988268a5ae->enter($__internal_fbf22e0d69d42e16ac2a5048fc056eb9ad681dae4c03dc3805b603988268a5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d48249814ea814eb1ee54aac70dd7f8147f6dbbb3e19a4333604bef008651e->leave($__internal_62d48249814ea814eb1ee54aac70dd7f8147f6dbbb3e19a4333604bef008651e_prof);

        
        $__internal_fbf22e0d69d42e16ac2a5048fc056eb9ad681dae4c03dc3805b603988268a5ae->leave($__internal_fbf22e0d69d42e16ac2a5048fc056eb9ad681dae4c03dc3805b603988268a5ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_520ded033b597d53d1b13c20921e97b44e1df0a725aa29b3961c05b8f42f36f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_520ded033b597d53d1b13c20921e97b44e1df0a725aa29b3961c05b8f42f36f1->enter($__internal_520ded033b597d53d1b13c20921e97b44e1df0a725aa29b3961c05b8f42f36f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a378f40f89701c20f89c159ff72ee4b2665fa6e5a1329cf460e3ea5125469a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a378f40f89701c20f89c159ff72ee4b2665fa6e5a1329cf460e3ea5125469a68->enter($__internal_a378f40f89701c20f89c159ff72ee4b2665fa6e5a1329cf460e3ea5125469a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a378f40f89701c20f89c159ff72ee4b2665fa6e5a1329cf460e3ea5125469a68->leave($__internal_a378f40f89701c20f89c159ff72ee4b2665fa6e5a1329cf460e3ea5125469a68_prof);

        
        $__internal_520ded033b597d53d1b13c20921e97b44e1df0a725aa29b3961c05b8f42f36f1->leave($__internal_520ded033b597d53d1b13c20921e97b44e1df0a725aa29b3961c05b8f42f36f1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ed7a41068eb77fbf202253fcabe4d35ca3b70e4bfc20b4099f5ce15e4d78dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed7a41068eb77fbf202253fcabe4d35ca3b70e4bfc20b4099f5ce15e4d78dac->enter($__internal_5ed7a41068eb77fbf202253fcabe4d35ca3b70e4bfc20b4099f5ce15e4d78dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8b96cce3193a0dd466db5a6fb1df80ee113db86f55ec2f18037ce66cd584b48e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b96cce3193a0dd466db5a6fb1df80ee113db86f55ec2f18037ce66cd584b48e->enter($__internal_8b96cce3193a0dd466db5a6fb1df80ee113db86f55ec2f18037ce66cd584b48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b96cce3193a0dd466db5a6fb1df80ee113db86f55ec2f18037ce66cd584b48e->leave($__internal_8b96cce3193a0dd466db5a6fb1df80ee113db86f55ec2f18037ce66cd584b48e_prof);

        
        $__internal_5ed7a41068eb77fbf202253fcabe4d35ca3b70e4bfc20b4099f5ce15e4d78dac->leave($__internal_5ed7a41068eb77fbf202253fcabe4d35ca3b70e4bfc20b4099f5ce15e4d78dac_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_872fc77e1ce081fb07e0b71ee9b5551441654a1cc8a65a6c213cc55ebdd770e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872fc77e1ce081fb07e0b71ee9b5551441654a1cc8a65a6c213cc55ebdd770e3->enter($__internal_872fc77e1ce081fb07e0b71ee9b5551441654a1cc8a65a6c213cc55ebdd770e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1b3ff38fe597016fb185a098e674f61d5b490f464ec4c575bbc87aeac4b6c3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b3ff38fe597016fb185a098e674f61d5b490f464ec4c575bbc87aeac4b6c3b9->enter($__internal_1b3ff38fe597016fb185a098e674f61d5b490f464ec4c575bbc87aeac4b6c3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1b3ff38fe597016fb185a098e674f61d5b490f464ec4c575bbc87aeac4b6c3b9->leave($__internal_1b3ff38fe597016fb185a098e674f61d5b490f464ec4c575bbc87aeac4b6c3b9_prof);

        
        $__internal_872fc77e1ce081fb07e0b71ee9b5551441654a1cc8a65a6c213cc55ebdd770e3->leave($__internal_872fc77e1ce081fb07e0b71ee9b5551441654a1cc8a65a6c213cc55ebdd770e3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
