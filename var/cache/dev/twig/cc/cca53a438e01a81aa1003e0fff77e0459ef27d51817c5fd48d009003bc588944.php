<?php

/* questions/questionslist.html.twig */
class __TwigTemplate_ae8a15e8b73d58399b62378cad26e86681e9843e3e18b2a4c765f6e6cf68fe98 extends Twig_Template
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
        $__internal_8d760b88ac7a7c77a8881eaaafa488d0674652895f8f338e4afb57e79e99c746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d760b88ac7a7c77a8881eaaafa488d0674652895f8f338e4afb57e79e99c746->enter($__internal_8d760b88ac7a7c77a8881eaaafa488d0674652895f8f338e4afb57e79e99c746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions/questionslist.html.twig"));

        $__internal_485920015e95a5256e2b53feeb4f9462e2473a9a6fbbc4063848f78ed195aad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_485920015e95a5256e2b53feeb4f9462e2473a9a6fbbc4063848f78ed195aad2->enter($__internal_485920015e95a5256e2b53feeb4f9462e2473a9a6fbbc4063848f78ed195aad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "questions/questionslist.html.twig"));

        // line 1
        echo "
<div class=\"tg-box\">


    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["questions"] ?? $this->getContext($context, "questions")));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 6
            echo "    <div class=\"tg-questionanswers\">
        <div class=\"tg-questionanswer\">
            <div class=\"tg-patientfeedbackbox\">
                <figure>
                    <img src=\"images/thumbnails/img-13.jpg\" alt=\"image description\">
                    <figcaption>
                        <a href=\"#\"><i class=\"fa fa-reply \"></i></a>
                    </figcaption>
                </figure>
                <div class=\"tg-patientfeedbackcontent\">
                    <div class=\"tg-contenthead\">
                        <div class=\"tg-leftbox\">
                            <div class=\"tg-patientname\">
                                <h4><a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
            echo "</a></h4>
                            </div>
                            <ul class=\"tg-metadata\">
                                <li><a href=\"#\">Edwide Coldiron</a></li>
                                <li><a href=\"#\">Il y a 10 minutes</a></li>
                            </ul>
                        </div>
                        <div class=\"tg-rightbox\">
                            <ul class=\"tg-metadata\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-thumbs-o-up tg-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"like\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-thumbs-o-down tg-tooltip tg-dislike\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"dislike\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tg-description\">
                        <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
            echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    <div class=\"tg-btnbox\">
        <a class=\"tg-btn tg-btnloadmoretwo\" href=\"javascript:void(0);\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("load more"), "html", null, true);
        echo "</a>
    </div>
</div>
";
        
        $__internal_8d760b88ac7a7c77a8881eaaafa488d0674652895f8f338e4afb57e79e99c746->leave($__internal_8d760b88ac7a7c77a8881eaaafa488d0674652895f8f338e4afb57e79e99c746_prof);

        
        $__internal_485920015e95a5256e2b53feeb4f9462e2473a9a6fbbc4063848f78ed195aad2->leave($__internal_485920015e95a5256e2b53feeb4f9462e2473a9a6fbbc4063848f78ed195aad2_prof);

    }

    public function getTemplateName()
    {
        return "questions/questionslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 50,  89 => 49,  76 => 42,  50 => 19,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"tg-box\">


    {% for question in questions %}
    <div class=\"tg-questionanswers\">
        <div class=\"tg-questionanswer\">
            <div class=\"tg-patientfeedbackbox\">
                <figure>
                    <img src=\"images/thumbnails/img-13.jpg\" alt=\"image description\">
                    <figcaption>
                        <a href=\"#\"><i class=\"fa fa-reply \"></i></a>
                    </figcaption>
                </figure>
                <div class=\"tg-patientfeedbackcontent\">
                    <div class=\"tg-contenthead\">
                        <div class=\"tg-leftbox\">
                            <div class=\"tg-patientname\">
                                <h4><a href=\"#\">{{ question.title }}</a></h4>
                            </div>
                            <ul class=\"tg-metadata\">
                                <li><a href=\"#\">Edwide Coldiron</a></li>
                                <li><a href=\"#\">Il y a 10 minutes</a></li>
                            </ul>
                        </div>
                        <div class=\"tg-rightbox\">
                            <ul class=\"tg-metadata\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-thumbs-o-up tg-tooltip\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"like\"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-thumbs-o-down tg-tooltip tg-dislike\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"dislike\"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"tg-description\">
                        <p>{{ question.question }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
    <div class=\"tg-btnbox\">
        <a class=\"tg-btn tg-btnloadmoretwo\" href=\"javascript:void(0);\">{{ 'load more'|trans }}</a>
    </div>
</div>
", "questions/questionslist.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\questions\\questionslist.html.twig");
    }
}
