<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_ddaf9ce0d9dc097b848158b5e216b823fdbea434393a428e2e952cacafd7ed58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_87f1220ac605b1d7b145e14cd9d21d0bb8144005cb62b3d5ec53e2d82127ff71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f1220ac605b1d7b145e14cd9d21d0bb8144005cb62b3d5ec53e2d82127ff71->enter($__internal_87f1220ac605b1d7b145e14cd9d21d0bb8144005cb62b3d5ec53e2d82127ff71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a37470a65bd10044a533a9c81326ee4ef65840a635d8a50c2a637b6dc2ff4b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a37470a65bd10044a533a9c81326ee4ef65840a635d8a50c2a637b6dc2ff4b3->enter($__internal_3a37470a65bd10044a533a9c81326ee4ef65840a635d8a50c2a637b6dc2ff4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87f1220ac605b1d7b145e14cd9d21d0bb8144005cb62b3d5ec53e2d82127ff71->leave($__internal_87f1220ac605b1d7b145e14cd9d21d0bb8144005cb62b3d5ec53e2d82127ff71_prof);

        
        $__internal_3a37470a65bd10044a533a9c81326ee4ef65840a635d8a50c2a637b6dc2ff4b3->leave($__internal_3a37470a65bd10044a533a9c81326ee4ef65840a635d8a50c2a637b6dc2ff4b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7703a4851a0e5f4c1dd8bbd5050962e84a8107a5ccaa328f84026a3bd31dd128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7703a4851a0e5f4c1dd8bbd5050962e84a8107a5ccaa328f84026a3bd31dd128->enter($__internal_7703a4851a0e5f4c1dd8bbd5050962e84a8107a5ccaa328f84026a3bd31dd128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3b5d8368b5b33184cc5dc69e84b1c02358dc3ceb92693c9bfb4757b745839878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b5d8368b5b33184cc5dc69e84b1c02358dc3ceb92693c9bfb4757b745839878->enter($__internal_3b5d8368b5b33184cc5dc69e84b1c02358dc3ceb92693c9bfb4757b745839878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_3b5d8368b5b33184cc5dc69e84b1c02358dc3ceb92693c9bfb4757b745839878->leave($__internal_3b5d8368b5b33184cc5dc69e84b1c02358dc3ceb92693c9bfb4757b745839878_prof);

        
        $__internal_7703a4851a0e5f4c1dd8bbd5050962e84a8107a5ccaa328f84026a3bd31dd128->leave($__internal_7703a4851a0e5f4c1dd8bbd5050962e84a8107a5ccaa328f84026a3bd31dd128_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a9bba1d4ee359cce7aa5da04893e60b81eba1dbf2a2a5898bc40458ada0f8417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9bba1d4ee359cce7aa5da04893e60b81eba1dbf2a2a5898bc40458ada0f8417->enter($__internal_a9bba1d4ee359cce7aa5da04893e60b81eba1dbf2a2a5898bc40458ada0f8417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0952cb38ee5303dbe6a8081e2c1b4727a3b88324517997783079d9c6213b4026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0952cb38ee5303dbe6a8081e2c1b4727a3b88324517997783079d9c6213b4026->enter($__internal_0952cb38ee5303dbe6a8081e2c1b4727a3b88324517997783079d9c6213b4026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0952cb38ee5303dbe6a8081e2c1b4727a3b88324517997783079d9c6213b4026->leave($__internal_0952cb38ee5303dbe6a8081e2c1b4727a3b88324517997783079d9c6213b4026_prof);

        
        $__internal_a9bba1d4ee359cce7aa5da04893e60b81eba1dbf2a2a5898bc40458ada0f8417->leave($__internal_a9bba1d4ee359cce7aa5da04893e60b81eba1dbf2a2a5898bc40458ada0f8417_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d1b199421267b0f1b5d69bdb37e10a0aa59ad00ef1ab80449d7cd3b697b9f5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1b199421267b0f1b5d69bdb37e10a0aa59ad00ef1ab80449d7cd3b697b9f5b4->enter($__internal_d1b199421267b0f1b5d69bdb37e10a0aa59ad00ef1ab80449d7cd3b697b9f5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_297b0084616ea4531b0a91060ecb7d0fe21fc67d133b93acf3f16801f10896a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297b0084616ea4531b0a91060ecb7d0fe21fc67d133b93acf3f16801f10896a9->enter($__internal_297b0084616ea4531b0a91060ecb7d0fe21fc67d133b93acf3f16801f10896a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_297b0084616ea4531b0a91060ecb7d0fe21fc67d133b93acf3f16801f10896a9->leave($__internal_297b0084616ea4531b0a91060ecb7d0fe21fc67d133b93acf3f16801f10896a9_prof);

        
        $__internal_d1b199421267b0f1b5d69bdb37e10a0aa59ad00ef1ab80449d7cd3b697b9f5b4->leave($__internal_d1b199421267b0f1b5d69bdb37e10a0aa59ad00ef1ab80449d7cd3b697b9f5b4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\varan\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
