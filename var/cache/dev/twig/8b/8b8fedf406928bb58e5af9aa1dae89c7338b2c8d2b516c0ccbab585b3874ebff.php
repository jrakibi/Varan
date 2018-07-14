<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_38e28461f1cd5c4a1b51edde2bc07ffffd1f15b1dfe1791a70fc8feef6451e7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_224b300ea6730d47643389d080eb71afc1b80e0de595dcf1429bc80b8a3de6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224b300ea6730d47643389d080eb71afc1b80e0de595dcf1429bc80b8a3de6fa->enter($__internal_224b300ea6730d47643389d080eb71afc1b80e0de595dcf1429bc80b8a3de6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f9f55f822cc49673b62eba0edfb8fd9017975783e810f0a7bb63ed7b51582b28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f55f822cc49673b62eba0edfb8fd9017975783e810f0a7bb63ed7b51582b28->enter($__internal_f9f55f822cc49673b62eba0edfb8fd9017975783e810f0a7bb63ed7b51582b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_224b300ea6730d47643389d080eb71afc1b80e0de595dcf1429bc80b8a3de6fa->leave($__internal_224b300ea6730d47643389d080eb71afc1b80e0de595dcf1429bc80b8a3de6fa_prof);

        
        $__internal_f9f55f822cc49673b62eba0edfb8fd9017975783e810f0a7bb63ed7b51582b28->leave($__internal_f9f55f822cc49673b62eba0edfb8fd9017975783e810f0a7bb63ed7b51582b28_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_773038f84666016756f6450c93485739f6b7dfc95b1c3a41191562bf1dfe35d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773038f84666016756f6450c93485739f6b7dfc95b1c3a41191562bf1dfe35d6->enter($__internal_773038f84666016756f6450c93485739f6b7dfc95b1c3a41191562bf1dfe35d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_59de65a3b4f6efada36958acca668d60c77e442f7f45b05805854912e64a2e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59de65a3b4f6efada36958acca668d60c77e442f7f45b05805854912e64a2e85->enter($__internal_59de65a3b4f6efada36958acca668d60c77e442f7f45b05805854912e64a2e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_59de65a3b4f6efada36958acca668d60c77e442f7f45b05805854912e64a2e85->leave($__internal_59de65a3b4f6efada36958acca668d60c77e442f7f45b05805854912e64a2e85_prof);

        
        $__internal_773038f84666016756f6450c93485739f6b7dfc95b1c3a41191562bf1dfe35d6->leave($__internal_773038f84666016756f6450c93485739f6b7dfc95b1c3a41191562bf1dfe35d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
