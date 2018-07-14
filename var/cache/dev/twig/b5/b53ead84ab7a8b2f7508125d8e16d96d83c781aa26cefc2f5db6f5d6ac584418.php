<?php

/* horaire/horaireByDoctor.html.twig */
class __TwigTemplate_588bd0bb4e490f4be362e43fc374d1a37279e3415daf4d2edbe462f4e8f5e944 extends Twig_Template
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
        $__internal_a525303a3ab3b1e5784c502a3314a4a26a7dfc44abf80e5eaa5b39e0f79bdb99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a525303a3ab3b1e5784c502a3314a4a26a7dfc44abf80e5eaa5b39e0f79bdb99->enter($__internal_a525303a3ab3b1e5784c502a3314a4a26a7dfc44abf80e5eaa5b39e0f79bdb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horaire/horaireByDoctor.html.twig"));

        $__internal_4c347f7ab942a41634a2f5cb9a44a7e090743897d2ceef9d1e2e6ccbc07ea800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c347f7ab942a41634a2f5cb9a44a7e090743897d2ceef9d1e2e6ccbc07ea800->enter($__internal_4c347f7ab942a41634a2f5cb9a44a7e090743897d2ceef9d1e2e6ccbc07ea800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horaire/horaireByDoctor.html.twig"));

        // line 1
        echo "<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang=\"\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/horaire.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <div class=\"container demo-bg\">
            <div class=\"row\">
                <select name=\"loc\" id=\"loc\" class=\"form-control\" onChange=\"myFunction(event)\" style=\"margin-bottom: 25px;\">
                    <option value=\"\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select Location"), "html", null, true);
        echo "</option>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </select>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    <div class=\"business-hours\">
                        <h2 class=\"title\">Heure d'ouverture</h2>
                        <ul class=\"list-unstyled opening-hours\">
                            <li>Lundi <span id=\"hourL\" class=\"pull-right\"/></li>
                            <li>Mardi <span id=\"hourMar\" class=\"pull-right\"/></li>
                            <li>Mercredi <span id=\"hourMer\" class=\"pull-right\"/></li>
                            <li>Jeudi <span id=\"hourJ\" class=\"pull-right\"/></li>
                            <li>Vendredi <span id=\"hourV\" class=\"pull-right\"/></li>
                            <li>Samedi <span id=\"hourS\" class=\"pull-right\"/></li>
                            <li>Dimanche <span id=\"hourD\" class=\"pull-right\"/></li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    // highlight current day on opeining hours
    \$(document).ready(function() {
    \$('.opening-hours li').eq(new Date().getDay()).addClass('today');
    });
</script>

<script>
    function myFunction(e) {
        
        var locId = document.getElementById(\"loc\").value;
         
        var d = new Date();
        d.setHours(0,0);
        var h = (d.getHours()<10?'0':'') + d.getHours();
        var m = (d.getMinutes()<10?'0':'') + d.getMinutes();
        var heure = h+':'+m;
        
        
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horaires"] ?? $this->getContext($context, "horaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 67
            echo "            if('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horaire"], "locationId", array()), "id", array()), "html", null, true);
            echo "' == locId ){
                if('";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'lundi'){
                    document.getElementById(\"hourL\").innerHTML = '";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'mardi'){
                    document.getElementById(\"hourMar\").innerHTML = '";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'mercredi'){                    
                    document.getElementById(\"hourMer\").innerHTML = '";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'jeudi'){
                    document.getElementById(\"hourJ\").innerHTML = '";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'vendredi'){
                    document.getElementById(\"hourV\").innerHTML = '";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'samedi'){
                    document.getElementById(\"hourS\").innerHTML = '";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'dimanche'){
                    document.getElementById(\"hourD\").innerHTML = '";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "'+\"-\"+'";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
            }
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    }
</script>";
        
        $__internal_a525303a3ab3b1e5784c502a3314a4a26a7dfc44abf80e5eaa5b39e0f79bdb99->leave($__internal_a525303a3ab3b1e5784c502a3314a4a26a7dfc44abf80e5eaa5b39e0f79bdb99_prof);

        
        $__internal_4c347f7ab942a41634a2f5cb9a44a7e090743897d2ceef9d1e2e6ccbc07ea800->leave($__internal_4c347f7ab942a41634a2f5cb9a44a7e090743897d2ceef9d1e2e6ccbc07ea800_prof);

    }

    public function getTemplateName()
    {
        return "horaire/horaireByDoctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 91,  191 => 87,  187 => 86,  180 => 84,  176 => 83,  169 => 81,  165 => 80,  158 => 78,  154 => 77,  147 => 75,  143 => 74,  136 => 72,  132 => 71,  125 => 69,  121 => 68,  116 => 67,  112 => 66,  67 => 23,  56 => 21,  52 => 20,  48 => 19,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\" id=\"bootstrap-css\">
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
<script src=\"//code.jquery.com/jquery-1.11.1.min.js\"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang=\"\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link href='//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/css/horaire.css')}}\">
    </head>
    <body>
        <div class=\"container demo-bg\">
            <div class=\"row\">
                <select name=\"loc\" id=\"loc\" class=\"form-control\" onChange=\"myFunction(event)\" style=\"margin-bottom: 25px;\">
                    <option value=\"\">{{'Select Location'|trans}}</option>
                    {% for item in locations %}
                        <option value=\"{{ item.id }}\">{{ item.name }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    <div class=\"business-hours\">
                        <h2 class=\"title\">Heure d'ouverture</h2>
                        <ul class=\"list-unstyled opening-hours\">
                            <li>Lundi <span id=\"hourL\" class=\"pull-right\"/></li>
                            <li>Mardi <span id=\"hourMar\" class=\"pull-right\"/></li>
                            <li>Mercredi <span id=\"hourMer\" class=\"pull-right\"/></li>
                            <li>Jeudi <span id=\"hourJ\" class=\"pull-right\"/></li>
                            <li>Vendredi <span id=\"hourV\" class=\"pull-right\"/></li>
                            <li>Samedi <span id=\"hourS\" class=\"pull-right\"/></li>
                            <li>Dimanche <span id=\"hourD\" class=\"pull-right\"/></li>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    // highlight current day on opeining hours
    \$(document).ready(function() {
    \$('.opening-hours li').eq(new Date().getDay()).addClass('today');
    });
</script>

<script>
    function myFunction(e) {
        
        var locId = document.getElementById(\"loc\").value;
         
        var d = new Date();
        d.setHours(0,0);
        var h = (d.getHours()<10?'0':'') + d.getHours();
        var m = (d.getMinutes()<10?'0':'') + d.getMinutes();
        var heure = h+':'+m;
        
        
        {% for horaire in horaires %}
            if('{{horaire.locationId.id}}' == locId ){
                if('{{horaire.jour}}' == 'lundi'){
                    document.getElementById(\"hourL\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'mardi'){
                    document.getElementById(\"hourMar\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'mercredi'){                    
                    document.getElementById(\"hourMer\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'jeudi'){
                    document.getElementById(\"hourJ\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'vendredi'){
                    document.getElementById(\"hourV\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'samedi'){
                    document.getElementById(\"hourS\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'dimanche'){
                    document.getElementById(\"hourD\").innerHTML = '{{horaire.heureDebut|date('H:i')}}'+\"-\"+'{{horaire.heureFin|date('H:i')}}';
                }
            }
        {% endfor %}
    }
</script>", "horaire/horaireByDoctor.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\horaire\\horaireByDoctor.html.twig");
    }
}
