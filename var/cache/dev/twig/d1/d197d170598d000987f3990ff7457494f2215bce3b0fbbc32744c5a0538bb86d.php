<?php

/* doctors/filtreSearch.html.twig */
class __TwigTemplate_8c81a5166691b5a278f29a8a09863c017735c359f743da13574e96cf4e8c9eab extends Twig_Template
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
        $__internal_ac8df49297cd94d54b817803e932e0cdda7abf28cb6be76bb023757533e43dd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac8df49297cd94d54b817803e932e0cdda7abf28cb6be76bb023757533e43dd7->enter($__internal_ac8df49297cd94d54b817803e932e0cdda7abf28cb6be76bb023757533e43dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/filtreSearch.html.twig"));

        $__internal_fffeb7a614cc1c560c9e8b1dcd39eb75018fb4c85ee2f79b5098b59a3a84c2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffeb7a614cc1c560c9e8b1dcd39eb75018fb4c85ee2f79b5098b59a3a84c2b4->enter($__internal_fffeb7a614cc1c560c9e8b1dcd39eb75018fb4c85ee2f79b5098b59a3a84c2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/filtreSearch.html.twig"));

        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<div class=\"tg-filterarea\">
    <a class=\"tg-btnfilter\" href=\"javascript:void(0);\"><i class=\"fa fa-filter\"></i></a>
    <div id=\"tg-filtersection\" class=\"tg-filtersection\">
        <a class=\"tg-btnfilter\" href=\"javascript:void(0);\"></a>
        <form class=\"tg-themeform tg-formrefinesearch\">
             <h3>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Narrow Your Search"), "html", null, true);
        echo "</h3>
            <fieldset>
                <h4>Specialité</h4>
                <span class=\"tg-optionbox\">
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Specialities:getSpecialities"));
        echo "
                </span>
            </fieldset>
            <fieldset>
                <h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Availability"), "html", null, true);
        echo "</h4>

                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"monday\" name=\"availability[]\" value=\"Monday\">
                    <label for=\"monday\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Monday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"tuesday\" name=\"availability[]\" value=\"Tuesday\">
                    <label for=\"tuesday\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tuesday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"wednesday\" name=\"availability[]\" value=\"Wednesday\">
                    <label for=\"wednesday\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Wednesday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"thursday\" name=\"availability[]\" value=\"Thursday\">
                    <label for=\"thursday\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Thursday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"friday\" name=\"availability[]\" value=\"Friday\">
                    <label for=\"friday\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Friday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"saturday\" name=\"availability[]\" value=\"Saturday\">
                    <label for=\"saturday\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Saturday"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"sunday\" name=\"availability[]\" value=\"Sunday\">
                    <label for=\"sunday\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sunday"), "html", null, true);
        echo "</label>
                </span>
                <div class=\"tg-uislider\">
                    <div id=\"tg-timerangeslider\" class=\"tg-timerangeslider tg-themerangeslider\">
                        <div class=\"sliders_step1\">
                            <div id=\"slider-range\"></div>
                        </div>
                    </div>
                    <div class=\"tg-amountbox\">
                        <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Time Range"), "html", null, true);
        echo ": </span>
                        <span name=\"\" class=\"tg-timeslider\">12:00 AM</span> - <span name=\"timeMax\" class=\"tg-timeslider2\">12:00 AM</span>
                        <input type=\"hidden\" name = \"timeMin\" id=\"timeMin\" readonly>
                        <input type=\"hidden\" name = \"timeMax\" id=\"timeMax\" readonly>

                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h4>";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gender"), "html", null, true);
        echo "</h4>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"allgender\" name=\"gender\" value=\"all\">
                        <label for=\"allgender\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("All"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"male\" name=\"gender\" value=\"male\">
                        <label for=\"male\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Male"), "html", null, true);
        echo "</label>
                </span>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"female\" name=\"gender\" value=\"female\">
                        <label for=\"female\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Female"), "html", null, true);
        echo "</label>
                </span>
            </fieldset>
            
            <fieldset>
                <h4>";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Consultation Fee"), "html", null, true);
        echo "</h4>
                <div id=\"tg-consultationfeerangeslider\" class=\"tg-consultationfeerangeslider tg-themerangeslider\"></div>
                <div class=\"tg-amountbox\">
                    <span>";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fee Range"), "html", null, true);
        echo ": </span>
                    <input type=\"text\" id=\"tg-consultationfeeamount\" >
                    <input type=\"hidden\" name = \"fraisMin\" id=\"fraisMin\" readonly>
                    <input type=\"hidden\" name = \"fraisMax\" id=\"fraisMax\" readonly>
                </div>
            </fieldset>
            ";
        // line 99
        echo "            
            <fieldset>
                <input type=\"hidden\" name = \"mots\" value=\"\" id=\"searchParam\" readonly>
            </fieldset>
            <h1><span id=\"searchParam\"></span></h1>
            <fieldset>
                <button class=\"tg-btn\" type=\"reset\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("reset all"), "html", null, true);
        echo "</button>
                <button class=\"tg-btn\" type=\"submit\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("apply filter"), "html", null, true);
        echo "</button>
            </fieldset>
        </form>
    </div>
</div>
            
<script>
    \$(document).ready(function(){
        \$('input:checkbox[name=\"gender\"]').click(function() {
            \$('input:checkbox[name=\"gender\"]').not(this).prop('checked', false);
        });
});
</script>
<script>
var url_string = window.location.href;
var url = new URL(url_string);
var mots = url.searchParams.get(\"mots\");
document.getElementById(\"searchParam\").value = mots;
document.getElementById(\"searchBar\").value = mots;

</script>";
        
        $__internal_ac8df49297cd94d54b817803e932e0cdda7abf28cb6be76bb023757533e43dd7->leave($__internal_ac8df49297cd94d54b817803e932e0cdda7abf28cb6be76bb023757533e43dd7_prof);

        
        $__internal_fffeb7a614cc1c560c9e8b1dcd39eb75018fb4c85ee2f79b5098b59a3a84c2b4->leave($__internal_fffeb7a614cc1c560c9e8b1dcd39eb75018fb4c85ee2f79b5098b59a3a84c2b4_prof);

    }

    public function getTemplateName()
    {
        return "doctors/filtreSearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 106,  173 => 105,  165 => 99,  156 => 82,  150 => 79,  142 => 74,  135 => 70,  128 => 66,  122 => 63,  109 => 53,  97 => 44,  90 => 40,  83 => 36,  76 => 32,  69 => 28,  62 => 24,  55 => 20,  48 => 16,  41 => 12,  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

<div class=\"tg-filterarea\">
    <a class=\"tg-btnfilter\" href=\"javascript:void(0);\"><i class=\"fa fa-filter\"></i></a>
    <div id=\"tg-filtersection\" class=\"tg-filtersection\">
        <a class=\"tg-btnfilter\" href=\"javascript:void(0);\"></a>
        <form class=\"tg-themeform tg-formrefinesearch\">
             <h3>{{ 'Narrow Your Search'|trans }}</h3>
            <fieldset>
                <h4>Specialité</h4>
                <span class=\"tg-optionbox\">
                    {{ render(controller('DoctorsBundle:Specialities:getSpecialities')) }}
                </span>
            </fieldset>
            <fieldset>
                <h4>{{ 'Availability'|trans }}</h4>

                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"monday\" name=\"availability[]\" value=\"Monday\">
                    <label for=\"monday\">{{ 'Monday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"tuesday\" name=\"availability[]\" value=\"Tuesday\">
                    <label for=\"tuesday\">{{ 'Tuesday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"wednesday\" name=\"availability[]\" value=\"Wednesday\">
                    <label for=\"wednesday\">{{ 'Wednesday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"thursday\" name=\"availability[]\" value=\"Thursday\">
                    <label for=\"thursday\">{{ 'Thursday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"friday\" name=\"availability[]\" value=\"Friday\">
                    <label for=\"friday\">{{ 'Friday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"saturday\" name=\"availability[]\" value=\"Saturday\">
                    <label for=\"saturday\">{{ 'Saturday'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                    <input type=\"checkbox\" id=\"sunday\" name=\"availability[]\" value=\"Sunday\">
                    <label for=\"sunday\">{{ 'Sunday'|trans }}</label>
                </span>
                <div class=\"tg-uislider\">
                    <div id=\"tg-timerangeslider\" class=\"tg-timerangeslider tg-themerangeslider\">
                        <div class=\"sliders_step1\">
                            <div id=\"slider-range\"></div>
                        </div>
                    </div>
                    <div class=\"tg-amountbox\">
                        <span>{{ 'Time Range'|trans }}: </span>
                        <span name=\"\" class=\"tg-timeslider\">12:00 AM</span> - <span name=\"timeMax\" class=\"tg-timeslider2\">12:00 AM</span>
                        <input type=\"hidden\" name = \"timeMin\" id=\"timeMin\" readonly>
                        <input type=\"hidden\" name = \"timeMax\" id=\"timeMax\" readonly>

                    </div>
                </div>
            </fieldset>

            <fieldset>
                <h4>{{ 'Gender'|trans }}</h4>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"allgender\" name=\"gender\" value=\"all\">
                        <label for=\"allgender\">{{ 'All'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"male\" name=\"gender\" value=\"male\">
                        <label for=\"male\">{{ 'Male'|trans }}</label>
                </span>
                <span class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"female\" name=\"gender\" value=\"female\">
                        <label for=\"female\">{{ 'Female'|trans }}</label>
                </span>
            </fieldset>
            
            <fieldset>
                <h4>{{ 'Consultation Fee'|trans }}</h4>
                <div id=\"tg-consultationfeerangeslider\" class=\"tg-consultationfeerangeslider tg-themerangeslider\"></div>
                <div class=\"tg-amountbox\">
                    <span>{{ 'Fee Range'|trans }}: </span>
                    <input type=\"text\" id=\"tg-consultationfeeamount\" >
                    <input type=\"hidden\" name = \"fraisMin\" id=\"fraisMin\" readonly>
                    <input type=\"hidden\" name = \"fraisMax\" id=\"fraisMax\" readonly>
                </div>
            </fieldset>
            {#<fieldset>
                <h4>{{ 'Radius'|trans }}</h4>
                <div id=\"tg-radiusrangeslider\" class=\"tg-radiusrangeslider tg-themerangeslider\"></div>
                <div class=\"tg-amountbox\">
                    <span>{{ 'Distance in (Miles)'|trans }}: </span>
                    <input type=\"text\" name = \"distance\" id=\"tg-radiusamount\" readonly>
                    <input type=\"hidden\" name = \"distanceMin\" id=\"distanceMin\" readonly>
                    <input type=\"hidden\" name = \"distanceMax\" id=\"distanceMax\" readonly>
                </div>
            </fieldset>
            #}
            
            <fieldset>
                <input type=\"hidden\" name = \"mots\" value=\"\" id=\"searchParam\" readonly>
            </fieldset>
            <h1><span id=\"searchParam\"></span></h1>
            <fieldset>
                <button class=\"tg-btn\" type=\"reset\">{{ 'reset all'|trans }}</button>
                <button class=\"tg-btn\" type=\"submit\">{{ 'apply filter'|trans }}</button>
            </fieldset>
        </form>
    </div>
</div>
            
<script>
    \$(document).ready(function(){
        \$('input:checkbox[name=\"gender\"]').click(function() {
            \$('input:checkbox[name=\"gender\"]').not(this).prop('checked', false);
        });
});
</script>
<script>
var url_string = window.location.href;
var url = new URL(url_string);
var mots = url.searchParams.get(\"mots\");
document.getElementById(\"searchParam\").value = mots;
document.getElementById(\"searchBar\").value = mots;

</script>", "doctors/filtreSearch.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\filtreSearch.html.twig");
    }
}
