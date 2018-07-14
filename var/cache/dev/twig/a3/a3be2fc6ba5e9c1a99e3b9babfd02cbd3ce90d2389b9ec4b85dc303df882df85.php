<?php

/* locations/comments.html.twig */
class __TwigTemplate_b1e3f4f79e57ccfcfbf78d94a5d30470e9ca744842aceaac30d1ca803c9ac345 extends Twig_Template
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
        $__internal_a0df94f3deb2364d95e417401c7ca16e01ab99c6e6fa1db92921131de90abba9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0df94f3deb2364d95e417401c7ca16e01ab99c6e6fa1db92921131de90abba9->enter($__internal_a0df94f3deb2364d95e417401c7ca16e01ab99c6e6fa1db92921131de90abba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/comments.html.twig"));

        $__internal_8db59708f3f4fab2e12fdaac0a421ee934603103edf8f566646c4c7726230786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db59708f3f4fab2e12fdaac0a421ee934603103edf8f566646c4c7726230786->enter($__internal_8db59708f3f4fab2e12fdaac0a421ee934603103edf8f566646c4c7726230786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/comments.html.twig"));

        // line 1
        echo "<label><b>Comments:</b>";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " <i class=\"fa fa-dot-circle-o\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "comment", array()), "html", null, true);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</label>";
        
        $__internal_a0df94f3deb2364d95e417401c7ca16e01ab99c6e6fa1db92921131de90abba9->leave($__internal_a0df94f3deb2364d95e417401c7ca16e01ab99c6e6fa1db92921131de90abba9_prof);

        
        $__internal_8db59708f3f4fab2e12fdaac0a421ee934603103edf8f566646c4c7726230786->leave($__internal_8db59708f3f4fab2e12fdaac0a421ee934603103edf8f566646c4c7726230786_prof);

    }

    public function getTemplateName()
    {
        return "locations/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<label><b>Comments:</b>{% for item in comments %} <i class=\"fa fa-dot-circle-o\"></i> {{ item.comment }}{% endfor %}</label>", "locations/comments.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\comments.html.twig");
    }
}
