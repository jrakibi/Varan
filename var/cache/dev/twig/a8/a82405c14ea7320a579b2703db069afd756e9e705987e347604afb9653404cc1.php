<?php

/* reviews/reviewslist.html.twig */
class __TwigTemplate_49766f6663e488aad9a443aefcc4bd3c6c573a76891a1ac86a116642e0755e3b extends Twig_Template
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
        $__internal_e9fd3ce407095619559ab7b1ba535bd0a5c987c73add3c9bf419e82f336d2bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fd3ce407095619559ab7b1ba535bd0a5c987c73add3c9bf419e82f336d2bb0->enter($__internal_e9fd3ce407095619559ab7b1ba535bd0a5c987c73add3c9bf419e82f336d2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviews/reviewslist.html.twig"));

        $__internal_f4f50e9e2475fd05abbf3bcef32b0b726a93e41427f25d0a881237f817b35168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f50e9e2475fd05abbf3bcef32b0b726a93e41427f25d0a881237f817b35168->enter($__internal_f4f50e9e2475fd05abbf3bcef32b0b726a93e41427f25d0a881237f817b35168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reviews/reviewslist.html.twig"));

        // line 1
        echo "    <div class=\"tg-box\">
        <div class=\"tg-tabtitle\">
            <h2>Patient’s Feedback</h2>
        </div>
        <div class=\"tg-patientfeedbackhead\">
            <form class=\"tg-formtheme tg-formfeedbacksearch\">
                <fieldset>
                    <input type=\"search\" class=\"form-control\" name=\"search\" placeholder=\"Search in Feedback\">
                    <button><i class=\"fa fa-search\"></i></button>
                </fieldset>
            </form>
        </div>
        
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 15
            echo "        <div class=\"tg-patientfeedbacks\">
            <div class=\"tg-patientfeedback\">
                <div class=\"tg-patientfeedbackbox\">
                    <figure>
                        <img src=\"images/thumbnails/img-11.jpg\" alt=\"image description\">
                        <figcaption>
                            <a href=\"#\"><i class=\"fa fa-reply \"></i></a>
                        </figcaption>
                    </figure>
                    <div class=\"tg-patientfeedbackcontent\">
                        <div class=\"tg-contenthead\">
                            <div class=\"tg-leftbox\">
                                <div class=\"tg-patientname\">
                                    <h4><a href=\"#\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "title", array()), "html", null, true);
            echo "</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"tg-description\">
                            <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "description", array()), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        <div class=\"tg-btnbox\">
            <a class=\"tg-btn tg-btnloadmore\" href=\"javascript:void(0);\">load more</a>
        </div>
    </div>";
        
        $__internal_e9fd3ce407095619559ab7b1ba535bd0a5c987c73add3c9bf419e82f336d2bb0->leave($__internal_e9fd3ce407095619559ab7b1ba535bd0a5c987c73add3c9bf419e82f336d2bb0_prof);

        
        $__internal_f4f50e9e2475fd05abbf3bcef32b0b726a93e41427f25d0a881237f817b35168->leave($__internal_f4f50e9e2475fd05abbf3bcef32b0b726a93e41427f25d0a881237f817b35168_prof);

    }

    public function getTemplateName()
    {
        return "reviews/reviewslist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  67 => 33,  59 => 28,  44 => 15,  40 => 14,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("    <div class=\"tg-box\">
        <div class=\"tg-tabtitle\">
            <h2>Patient’s Feedback</h2>
        </div>
        <div class=\"tg-patientfeedbackhead\">
            <form class=\"tg-formtheme tg-formfeedbacksearch\">
                <fieldset>
                    <input type=\"search\" class=\"form-control\" name=\"search\" placeholder=\"Search in Feedback\">
                    <button><i class=\"fa fa-search\"></i></button>
                </fieldset>
            </form>
        </div>
        
    {% for review in reviews %}
        <div class=\"tg-patientfeedbacks\">
            <div class=\"tg-patientfeedback\">
                <div class=\"tg-patientfeedbackbox\">
                    <figure>
                        <img src=\"images/thumbnails/img-11.jpg\" alt=\"image description\">
                        <figcaption>
                            <a href=\"#\"><i class=\"fa fa-reply \"></i></a>
                        </figcaption>
                    </figure>
                    <div class=\"tg-patientfeedbackcontent\">
                        <div class=\"tg-contenthead\">
                            <div class=\"tg-leftbox\">
                                <div class=\"tg-patientname\">
                                    <h4><a href=\"#\">{{ review.title }}</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class=\"tg-description\">
                            <p>{{ review.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}

        <div class=\"tg-btnbox\">
            <a class=\"tg-btn tg-btnloadmore\" href=\"javascript:void(0);\">load more</a>
        </div>
    </div>", "reviews/reviewslist.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\reviews\\reviewslist.html.twig");
    }
}
