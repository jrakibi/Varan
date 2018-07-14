<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cc2ae96472f4383e174ebd870cadcbf9f7316d6265d0266ec099b34eef00bc01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_682cefcae34241a1e93df0e0daf8d48af46db2ec833aa1e86dad41085c970df0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682cefcae34241a1e93df0e0daf8d48af46db2ec833aa1e86dad41085c970df0->enter($__internal_682cefcae34241a1e93df0e0daf8d48af46db2ec833aa1e86dad41085c970df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0f531836fe285d3756b5d6d2750321910aa78da0a99c719128a721171c18b9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f531836fe285d3756b5d6d2750321910aa78da0a99c719128a721171c18b9da->enter($__internal_0f531836fe285d3756b5d6d2750321910aa78da0a99c719128a721171c18b9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_682cefcae34241a1e93df0e0daf8d48af46db2ec833aa1e86dad41085c970df0->leave($__internal_682cefcae34241a1e93df0e0daf8d48af46db2ec833aa1e86dad41085c970df0_prof);

        
        $__internal_0f531836fe285d3756b5d6d2750321910aa78da0a99c719128a721171c18b9da->leave($__internal_0f531836fe285d3756b5d6d2750321910aa78da0a99c719128a721171c18b9da_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12c96d9e68921646c5917c8ca1416dc036f9a6f64c45347ea570c80e8d986422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c96d9e68921646c5917c8ca1416dc036f9a6f64c45347ea570c80e8d986422->enter($__internal_12c96d9e68921646c5917c8ca1416dc036f9a6f64c45347ea570c80e8d986422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72f3ed1b493fd3597f7f306a507a31e84c919472d2bf1f2d081d299f9a237c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72f3ed1b493fd3597f7f306a507a31e84c919472d2bf1f2d081d299f9a237c44->enter($__internal_72f3ed1b493fd3597f7f306a507a31e84c919472d2bf1f2d081d299f9a237c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_72f3ed1b493fd3597f7f306a507a31e84c919472d2bf1f2d081d299f9a237c44->leave($__internal_72f3ed1b493fd3597f7f306a507a31e84c919472d2bf1f2d081d299f9a237c44_prof);

        
        $__internal_12c96d9e68921646c5917c8ca1416dc036f9a6f64c45347ea570c80e8d986422->leave($__internal_12c96d9e68921646c5917c8ca1416dc036f9a6f64c45347ea570c80e8d986422_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f117d890ebae848035a66dfe078c8941967623799b1c00f5dc2840f106b62a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f117d890ebae848035a66dfe078c8941967623799b1c00f5dc2840f106b62a8->enter($__internal_6f117d890ebae848035a66dfe078c8941967623799b1c00f5dc2840f106b62a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b0ec9dac8c69b4bd4bf3cc182a240bb93e29294f1311287f4268f6eab6a6f476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0ec9dac8c69b4bd4bf3cc182a240bb93e29294f1311287f4268f6eab6a6f476->enter($__internal_b0ec9dac8c69b4bd4bf3cc182a240bb93e29294f1311287f4268f6eab6a6f476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b0ec9dac8c69b4bd4bf3cc182a240bb93e29294f1311287f4268f6eab6a6f476->leave($__internal_b0ec9dac8c69b4bd4bf3cc182a240bb93e29294f1311287f4268f6eab6a6f476_prof);

        
        $__internal_6f117d890ebae848035a66dfe078c8941967623799b1c00f5dc2840f106b62a8->leave($__internal_6f117d890ebae848035a66dfe078c8941967623799b1c00f5dc2840f106b62a8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ef787b7d918c667032228ea910998ea1204a6471e77ad60715602bfeaf09e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ef787b7d918c667032228ea910998ea1204a6471e77ad60715602bfeaf09e9->enter($__internal_55ef787b7d918c667032228ea910998ea1204a6471e77ad60715602bfeaf09e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8074d5e2215a35f8cd4e63ad2330b131358c980a354474650849488af7e8aa4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8074d5e2215a35f8cd4e63ad2330b131358c980a354474650849488af7e8aa4e->enter($__internal_8074d5e2215a35f8cd4e63ad2330b131358c980a354474650849488af7e8aa4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_8074d5e2215a35f8cd4e63ad2330b131358c980a354474650849488af7e8aa4e->leave($__internal_8074d5e2215a35f8cd4e63ad2330b131358c980a354474650849488af7e8aa4e_prof);

        
        $__internal_55ef787b7d918c667032228ea910998ea1204a6471e77ad60715602bfeaf09e9->leave($__internal_55ef787b7d918c667032228ea910998ea1204a6471e77ad60715602bfeaf09e9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
