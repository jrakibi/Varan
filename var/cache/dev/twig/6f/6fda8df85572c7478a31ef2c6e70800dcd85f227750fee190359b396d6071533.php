<?php

/* base.html.twig */
class __TwigTemplate_d83aebde30e76988a8cbf4b768aa003641000db05eafad447eb852a0370deef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7479fdcf4b3ae4de6e22863cb7d5a86e9533d68616a1446b3b00078c6413f8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7479fdcf4b3ae4de6e22863cb7d5a86e9533d68616a1446b3b00078c6413f8c5->enter($__internal_7479fdcf4b3ae4de6e22863cb7d5a86e9533d68616a1446b3b00078c6413f8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_8699cd4adbd507eeeaa739d6defe8cebedf77211bc1bbebbf510651150117971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8699cd4adbd507eeeaa739d6defe8cebedf77211bc1bbebbf510651150117971->enter($__internal_8699cd4adbd507eeeaa739d6defe8cebedf77211bc1bbebbf510651150117971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "</body>
";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "</html>
";
        
        $__internal_7479fdcf4b3ae4de6e22863cb7d5a86e9533d68616a1446b3b00078c6413f8c5->leave($__internal_7479fdcf4b3ae4de6e22863cb7d5a86e9533d68616a1446b3b00078c6413f8c5_prof);

        
        $__internal_8699cd4adbd507eeeaa739d6defe8cebedf77211bc1bbebbf510651150117971->leave($__internal_8699cd4adbd507eeeaa739d6defe8cebedf77211bc1bbebbf510651150117971_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_92661520b2780b51e5de4ae5114a4c8bbb0efe02f90df58d9af2a4fc2644575d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92661520b2780b51e5de4ae5114a4c8bbb0efe02f90df58d9af2a4fc2644575d->enter($__internal_92661520b2780b51e5de4ae5114a4c8bbb0efe02f90df58d9af2a4fc2644575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75d61d25860108e6002adb5277f7fe5e9e3af49734b872765f1f1252edfb10bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d61d25860108e6002adb5277f7fe5e9e3af49734b872765f1f1252edfb10bf->enter($__internal_75d61d25860108e6002adb5277f7fe5e9e3af49734b872765f1f1252edfb10bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_75d61d25860108e6002adb5277f7fe5e9e3af49734b872765f1f1252edfb10bf->leave($__internal_75d61d25860108e6002adb5277f7fe5e9e3af49734b872765f1f1252edfb10bf_prof);

        
        $__internal_92661520b2780b51e5de4ae5114a4c8bbb0efe02f90df58d9af2a4fc2644575d->leave($__internal_92661520b2780b51e5de4ae5114a4c8bbb0efe02f90df58d9af2a4fc2644575d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fbbbdb4e9f98ae1fa6dadea8db99aa0945fba1f97dbef8eb6cb5989aa99b687b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbbdb4e9f98ae1fa6dadea8db99aa0945fba1f97dbef8eb6cb5989aa99b687b->enter($__internal_fbbbdb4e9f98ae1fa6dadea8db99aa0945fba1f97dbef8eb6cb5989aa99b687b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecd56e6138ffadc98f4be70c48194fe39386188bbd96fe54b234c149a3cc68f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd56e6138ffadc98f4be70c48194fe39386188bbd96fe54b234c149a3cc68f0->enter($__internal_ecd56e6138ffadc98f4be70c48194fe39386188bbd96fe54b234c149a3cc68f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $this->loadTemplate("default/stylesheet.html.twig", "base.html.twig", 6)->display($context);
        
        $__internal_ecd56e6138ffadc98f4be70c48194fe39386188bbd96fe54b234c149a3cc68f0->leave($__internal_ecd56e6138ffadc98f4be70c48194fe39386188bbd96fe54b234c149a3cc68f0_prof);

        
        $__internal_fbbbdb4e9f98ae1fa6dadea8db99aa0945fba1f97dbef8eb6cb5989aa99b687b->leave($__internal_fbbbdb4e9f98ae1fa6dadea8db99aa0945fba1f97dbef8eb6cb5989aa99b687b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8bd934cc147bd36b084e43d08c6a9ae272b5f4c5735e1d66d11eebc5c81fccb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd934cc147bd36b084e43d08c6a9ae272b5f4c5735e1d66d11eebc5c81fccb9->enter($__internal_8bd934cc147bd36b084e43d08c6a9ae272b5f4c5735e1d66d11eebc5c81fccb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5b47e2850702ddf7465db6cb95633a1e88e2fb8bad19d008e00a8f6dc46bbe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b47e2850702ddf7465db6cb95633a1e88e2fb8bad19d008e00a8f6dc46bbe3->enter($__internal_e5b47e2850702ddf7465db6cb95633a1e88e2fb8bad19d008e00a8f6dc46bbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
";
        
        $__internal_e5b47e2850702ddf7465db6cb95633a1e88e2fb8bad19d008e00a8f6dc46bbe3->leave($__internal_e5b47e2850702ddf7465db6cb95633a1e88e2fb8bad19d008e00a8f6dc46bbe3_prof);

        
        $__internal_8bd934cc147bd36b084e43d08c6a9ae272b5f4c5735e1d66d11eebc5c81fccb9->leave($__internal_8bd934cc147bd36b084e43d08c6a9ae272b5f4c5735e1d66d11eebc5c81fccb9_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d524e51515d332646d0539ef3e98ec27d746b60fa7ab2061def36d96a822f998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d524e51515d332646d0539ef3e98ec27d746b60fa7ab2061def36d96a822f998->enter($__internal_d524e51515d332646d0539ef3e98ec27d746b60fa7ab2061def36d96a822f998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6bb6a87a630d1f9aaf280ac296a0390dc7859c5130246cb1192d12389d4624b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bb6a87a630d1f9aaf280ac296a0390dc7859c5130246cb1192d12389d4624b7->enter($__internal_6bb6a87a630d1f9aaf280ac296a0390dc7859c5130246cb1192d12389d4624b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $this->loadTemplate("default/javascripts.html.twig", "base.html.twig", 14)->display($context);
        
        $__internal_6bb6a87a630d1f9aaf280ac296a0390dc7859c5130246cb1192d12389d4624b7->leave($__internal_6bb6a87a630d1f9aaf280ac296a0390dc7859c5130246cb1192d12389d4624b7_prof);

        
        $__internal_d524e51515d332646d0539ef3e98ec27d746b60fa7ab2061def36d96a822f998->leave($__internal_d524e51515d332646d0539ef3e98ec27d746b60fa7ab2061def36d96a822f998_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  111 => 11,  102 => 10,  84 => 6,  66 => 5,  55 => 15,  53 => 14,  50 => 13,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}{% include ('default/stylesheet.html.twig') %}{% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('assets/images/favicon.ico') }}\" />
</head>
<body>
{% block body %}

{% endblock %}
</body>
{% block javascripts %}{% include ('default/javascripts.html.twig') %}{% endblock %}
</html>
", "base.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\base.html.twig");
    }
}
