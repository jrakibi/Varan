<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_e91bcb3deab79e2019828733a0ce64e54fc1c3e458e06a4cc52077248dc19a8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9fd1804a1a5b9effeb030ad535b3ec99e6c07b06b4e15265d0948569bdd9b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9fd1804a1a5b9effeb030ad535b3ec99e6c07b06b4e15265d0948569bdd9b75->enter($__internal_d9fd1804a1a5b9effeb030ad535b3ec99e6c07b06b4e15265d0948569bdd9b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_514642e55dbcbb90044b9303cf770e3800f013b886f4944172d8ba4268b1920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514642e55dbcbb90044b9303cf770e3800f013b886f4944172d8ba4268b1920f->enter($__internal_514642e55dbcbb90044b9303cf770e3800f013b886f4944172d8ba4268b1920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9fd1804a1a5b9effeb030ad535b3ec99e6c07b06b4e15265d0948569bdd9b75->leave($__internal_d9fd1804a1a5b9effeb030ad535b3ec99e6c07b06b4e15265d0948569bdd9b75_prof);

        
        $__internal_514642e55dbcbb90044b9303cf770e3800f013b886f4944172d8ba4268b1920f->leave($__internal_514642e55dbcbb90044b9303cf770e3800f013b886f4944172d8ba4268b1920f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_048bc8e88c7c49fd6f8290293734feee43f1acbb805933991ab726ca8bbbeedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048bc8e88c7c49fd6f8290293734feee43f1acbb805933991ab726ca8bbbeedd->enter($__internal_048bc8e88c7c49fd6f8290293734feee43f1acbb805933991ab726ca8bbbeedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2907220ec6fcf78348992cb9ce157a2c39a88e448aa62654a36f8a70882d2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2907220ec6fcf78348992cb9ce157a2c39a88e448aa62654a36f8a70882d2f0->enter($__internal_b2907220ec6fcf78348992cb9ce157a2c39a88e448aa62654a36f8a70882d2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b2907220ec6fcf78348992cb9ce157a2c39a88e448aa62654a36f8a70882d2f0->leave($__internal_b2907220ec6fcf78348992cb9ce157a2c39a88e448aa62654a36f8a70882d2f0_prof);

        
        $__internal_048bc8e88c7c49fd6f8290293734feee43f1acbb805933991ab726ca8bbbeedd->leave($__internal_048bc8e88c7c49fd6f8290293734feee43f1acbb805933991ab726ca8bbbeedd_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37e33893bf458e7903916a0f24a79061800364b8e92feb832078dfca23b35db3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e33893bf458e7903916a0f24a79061800364b8e92feb832078dfca23b35db3->enter($__internal_37e33893bf458e7903916a0f24a79061800364b8e92feb832078dfca23b35db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d665390cfef35730292b68fab69e365fb51d3b8d0e18e4118961c806e9da2ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d665390cfef35730292b68fab69e365fb51d3b8d0e18e4118961c806e9da2ada->enter($__internal_d665390cfef35730292b68fab69e365fb51d3b8d0e18e4118961c806e9da2ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_d665390cfef35730292b68fab69e365fb51d3b8d0e18e4118961c806e9da2ada->leave($__internal_d665390cfef35730292b68fab69e365fb51d3b8d0e18e4118961c806e9da2ada_prof);

        
        $__internal_37e33893bf458e7903916a0f24a79061800364b8e92feb832078dfca23b35db3->leave($__internal_37e33893bf458e7903916a0f24a79061800364b8e92feb832078dfca23b35db3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
