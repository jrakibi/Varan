<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c99d0e9b18a3bb04baaeb46d2728c789dd72d93956a01c6f1da39a92356c2c54 extends Twig_Template
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
        $__internal_c734df2f3ece39bba484ba037d2a4750598c65bee1b2b7cecbefdd4cd9f67bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c734df2f3ece39bba484ba037d2a4750598c65bee1b2b7cecbefdd4cd9f67bd0->enter($__internal_c734df2f3ece39bba484ba037d2a4750598c65bee1b2b7cecbefdd4cd9f67bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_c2eac3ed172a1583a5c93cf23882b6ba9f9802bfc40b6447d516c3b879f2f6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2eac3ed172a1583a5c93cf23882b6ba9f9802bfc40b6447d516c3b879f2f6ba->enter($__internal_c2eac3ed172a1583a5c93cf23882b6ba9f9802bfc40b6447d516c3b879f2f6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_c734df2f3ece39bba484ba037d2a4750598c65bee1b2b7cecbefdd4cd9f67bd0->leave($__internal_c734df2f3ece39bba484ba037d2a4750598c65bee1b2b7cecbefdd4cd9f67bd0_prof);

        
        $__internal_c2eac3ed172a1583a5c93cf23882b6ba9f9802bfc40b6447d516c3b879f2f6ba->leave($__internal_c2eac3ed172a1583a5c93cf23882b6ba9f9802bfc40b6447d516c3b879f2f6ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
