<?php

/* horaire/new.html.twig */
class __TwigTemplate_1d5f185b135e7351f18a698a034af4e0fb5921ab5445fab3aa82036dcf659045 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "horaire/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ac8cd830cd3e3c9f705ac2cdcf103819f3096bb54f7f5638cdd1530f2d46160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac8cd830cd3e3c9f705ac2cdcf103819f3096bb54f7f5638cdd1530f2d46160->enter($__internal_6ac8cd830cd3e3c9f705ac2cdcf103819f3096bb54f7f5638cdd1530f2d46160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horaire/new.html.twig"));

        $__internal_160a37fc21d07d257486452c18b8ea264ffcb61458cef5478c7e1e0eb75a283a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160a37fc21d07d257486452c18b8ea264ffcb61458cef5478c7e1e0eb75a283a->enter($__internal_160a37fc21d07d257486452c18b8ea264ffcb61458cef5478c7e1e0eb75a283a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "horaire/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac8cd830cd3e3c9f705ac2cdcf103819f3096bb54f7f5638cdd1530f2d46160->leave($__internal_6ac8cd830cd3e3c9f705ac2cdcf103819f3096bb54f7f5638cdd1530f2d46160_prof);

        
        $__internal_160a37fc21d07d257486452c18b8ea264ffcb61458cef5478c7e1e0eb75a283a->leave($__internal_160a37fc21d07d257486452c18b8ea264ffcb61458cef5478c7e1e0eb75a283a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_798acf6e9d25670ee2f94d858eb1d4e6d265f71a547f41924557f16936152099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_798acf6e9d25670ee2f94d858eb1d4e6d265f71a547f41924557f16936152099->enter($__internal_798acf6e9d25670ee2f94d858eb1d4e6d265f71a547f41924557f16936152099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_130e8c2936fad0d44c70d4f769c117bc7a4a61ea2e91ef1ef55cd81d3708bd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_130e8c2936fad0d44c70d4f769c117bc7a4a61ea2e91ef1ef55cd81d3708bd6f->enter($__internal_130e8c2936fad0d44c70d4f769c117bc7a4a61ea2e91ef1ef55cd81d3708bd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <style>
        
      .weekDays-selector input {
        display: none;
      }

      .weekDays-selector input[type=checkbox] + label {
        border-radius: 6px;
        background: #dddddd;
        height: 40px;
        width: 80px;
        margin-right: 3px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
      }

      .weekDays-selector input[type=checkbox]:checked + label {
        background: #2AD705;
        color: #ffffff;
      }
      
      .weekDays-selector .col-md-12 {
          margin-bottom: 20px;
      }
    </style>
    <h1>Horaire creation</h1>
    <form action=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("horaire_add");
        echo "\" id=\"form\" name=\"form\" method=\"POST\">
            <label for=\"\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select Location"), "html", null, true);
        echo "</label>
            <select name=\"loc\" id=\"loc\" class=\"form-control\" onChange=\"myFunction(event)\" style=\"margin-bottom: 25px;\">
                <option value=\"\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select Location"), "html", null, true);
        echo "</option>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </select>
            <div class=\"col-md-4\">
                <label>Jour</label>
            </div>
            <div class=\"col-md-4\">
                <label>Ouverture</label>
            </div>
            <div class=\"col-md-4\">
                <label>Fermeture</label>
            </div>
            <div class=\"weekDays-selector\">
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-mon\" name=\"jour[]\" value=\"lundi\"/>
                    <label for=\"weekday-mon\" class=\"col-md-2\">Lundi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"shourM\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"ehourM\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-tue\" name=\"jour[]\" value=\"mardi\"/>
                    <label for=\"weekday-tue\" class=\"col-md-2\">Mardi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"shourTu\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"ehourTu\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-wed\" name=\"jour[]\" value=\"mercredi\"/>
                    <label for=\"weekday-wed\" class=\"col-md-2\">Mercredi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourW\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourW\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-thu\" name=\"jour[]\" value=\"jeudi\"/>
                    <label for=\"weekday-thu\" class=\"col-md-2\">Jeudi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker\">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourTh\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourTh\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-fri\" name=\"jour[]\" value=\"vendredi\"/>
                    <label for=\"weekday-fri\" class=\"col-md-2\">Vendredi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourF\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourF\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-sat\" name=\"jour[]\" value=\"samedi\"/>
                    <label for=\"weekday-sat\" class=\"col-md-2\">Samedi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourSa\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourSa\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-sun\" name=\"jour[]\" value=\"dimanche\"/>
                    <label for=\"weekday-sun\" class=\"col-md-2\">Dimanche</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourSu\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourSu\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class=\"col-md-6\">
                <input type=\"submit\" value=\"Confirm\" class=\"tg-btn pull-right\" style=\"margin-top: 10px;background-color: coral\">
            </div>   
            
            <p id=\"test\"></p>
    </form>   
               
<script type=\"text/javascript\">
    \$('.clockpicker').clockpicker();
</script>    

<script>
document.getElementById('weekday-mon').onchange = function() {
    document.getElementById('shourM').disabled = !this.checked;
    document.getElementById('ehourM').disabled = !this.checked;
};
document.getElementById('weekday-tue').onchange = function() {
    document.getElementById('ehourTu').disabled = !this.checked;
    document.getElementById('shourTu').disabled = !this.checked;
};
document.getElementById('weekday-wed').onchange = function() {
    document.getElementById('ehourW').disabled = !this.checked;
    document.getElementById('shourW').disabled = !this.checked;
};
document.getElementById('weekday-thu').onchange = function() {
    document.getElementById('ehourTh').disabled = !this.checked;
    document.getElementById('shourTh').disabled = !this.checked;
};
document.getElementById('weekday-fri').onchange = function() {
    document.getElementById('ehourF').disabled = !this.checked;
    document.getElementById('shourF').disabled = !this.checked;
};
document.getElementById('weekday-sat').onchange = function() {
    document.getElementById('ehourSa').disabled = !this.checked;
    document.getElementById('shourSa').disabled = !this.checked;
};
document.getElementById('weekday-sun').onchange = function() {
    document.getElementById('ehourSu').disabled = !this.checked;
    document.getElementById('shourSu').disabled = !this.checked;
};
</script>

<script>
\$('#form').submit(function(e){
    var check = true;
    if(\$('#loc').val() == \"\"){
        check = false;
    }
        
    if(document.getElementById('weekday-mon').checked){
        if(\$('#shourM').val() == \"\" || \$('#ehourM').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-tue').checked){
        if(\$('#shourTu').val() == \"\" || \$('#ehourTu').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-wed').checked){
        if(\$('#shourW').val() == \"\" || \$('#ehourW').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-thu').checked){
        if(\$('#shourTh').val() == \"\" || \$('#ehourTh').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-fri').checked){
        if(\$('#shourF').val() == \"\" || \$('#ehourF').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-sat').checked){
        if(\$('#shourSa').val() == \"\" || \$('#ehourSa').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-sun').checked){
        if(\$('#shourSu').val() == \"\" || \$('#ehourSu').val() == \"\"){
            check = false;
        }
    }else{
        check = false;
    }
    
    
    if(!check){
        alert('Veuillez remplire les champs obligatoires');
        e.preventDefault();
    }
});
</script>

<script>
    function myFunction(e) {
        
        var locId = document.getElementById(\"loc\").value;

        ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["horaires"] ?? $this->getContext($context, "horaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["horaire"]) {
            // line 251
            echo "            if('";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["horaire"], "locationId", array()), "id", array()), "html", null, true);
            echo "' == locId ){
                if('";
            // line 252
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'lundi'){
                    document.getElementById(\"shourM\").value = '";
            // line 253
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourM\").value = '";
            // line 254
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                
                if('";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'mardi'){
                    document.getElementById(\"shourTu\").value = '";
            // line 258
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourTu\").value = '";
            // line 259
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 261
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'mercredi'){
                    document.getElementById(\"shourW\").value = '";
            // line 262
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourW\").value = '";
            // line 263
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'jeudi'){
                    document.getElementById(\"shourTh\").value = '";
            // line 266
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourTh\").value = '";
            // line 267
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'vendredi'){
                    document.getElementById(\"shourF\").value = '";
            // line 270
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourF\").value = '";
            // line 271
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'samedi'){
                    document.getElementById(\"shourSa\").value = '";
            // line 274
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourSa\").value = '";
            // line 275
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                if('";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["horaire"], "jour", array()), "html", null, true);
            echo "' == 'dimanche'){
                    document.getElementById(\"shourSu\").value = '";
            // line 278
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureDebut", array()), "H:i"), "html", null, true);
            echo "';
                    document.getElementById(\"ehourSu\").value = '";
            // line 279
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["horaire"], "heureFin", array()), "H:i"), "html", null, true);
            echo "';
                }
                
            }            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['horaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "        
    }
</script>
<script>
    function changeText(event){
        this.setState(
            {this.state.textValue : event.target.value}
        );
    }
</script>
";
        
        $__internal_130e8c2936fad0d44c70d4f769c117bc7a4a61ea2e91ef1ef55cd81d3708bd6f->leave($__internal_130e8c2936fad0d44c70d4f769c117bc7a4a61ea2e91ef1ef55cd81d3708bd6f_prof);

        
        $__internal_798acf6e9d25670ee2f94d858eb1d4e6d265f71a547f41924557f16936152099->leave($__internal_798acf6e9d25670ee2f94d858eb1d4e6d265f71a547f41924557f16936152099_prof);

    }

    public function getTemplateName()
    {
        return "horaire/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 284,  416 => 279,  412 => 278,  408 => 277,  403 => 275,  399 => 274,  395 => 273,  390 => 271,  386 => 270,  382 => 269,  377 => 267,  373 => 266,  369 => 265,  364 => 263,  360 => 262,  356 => 261,  351 => 259,  347 => 258,  343 => 257,  337 => 254,  333 => 253,  329 => 252,  324 => 251,  320 => 250,  106 => 38,  95 => 36,  91 => 35,  87 => 34,  82 => 32,  78 => 31,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <style>
        
      .weekDays-selector input {
        display: none;
      }

      .weekDays-selector input[type=checkbox] + label {
        border-radius: 6px;
        background: #dddddd;
        height: 40px;
        width: 80px;
        margin-right: 3px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
      }

      .weekDays-selector input[type=checkbox]:checked + label {
        background: #2AD705;
        color: #ffffff;
      }
      
      .weekDays-selector .col-md-12 {
          margin-bottom: 20px;
      }
    </style>
    <h1>Horaire creation</h1>
    <form action=\"{{ path('horaire_add') }}\" id=\"form\" name=\"form\" method=\"POST\">
            <label for=\"\">{{'Select Location'|trans}}</label>
            <select name=\"loc\" id=\"loc\" class=\"form-control\" onChange=\"myFunction(event)\" style=\"margin-bottom: 25px;\">
                <option value=\"\">{{'Select Location'|trans}}</option>
                {% for item in locations %}
                    <option value=\"{{ item.id }}\">{{ item.name }}</option>
                {% endfor %}
            </select>
            <div class=\"col-md-4\">
                <label>Jour</label>
            </div>
            <div class=\"col-md-4\">
                <label>Ouverture</label>
            </div>
            <div class=\"col-md-4\">
                <label>Fermeture</label>
            </div>
            <div class=\"weekDays-selector\">
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-mon\" name=\"jour[]\" value=\"lundi\"/>
                    <label for=\"weekday-mon\" class=\"col-md-2\">Lundi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"shourM\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"ehourM\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-tue\" name=\"jour[]\" value=\"mardi\"/>
                    <label for=\"weekday-tue\" class=\"col-md-2\">Mardi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"shourTu\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\"  onChange = \"changeText(event)\" id=\"ehourTu\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-wed\" name=\"jour[]\" value=\"mercredi\"/>
                    <label for=\"weekday-wed\" class=\"col-md-2\">Mercredi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourW\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourW\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-thu\" name=\"jour[]\" value=\"jeudi\"/>
                    <label for=\"weekday-thu\" class=\"col-md-2\">Jeudi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker\">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourTh\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourTh\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-fri\" name=\"jour[]\" value=\"vendredi\"/>
                    <label for=\"weekday-fri\" class=\"col-md-2\">Vendredi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourF\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\"  disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourF\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-sat\" name=\"jour[]\" value=\"samedi\"/>
                    <label for=\"weekday-sat\" class=\"col-md-2\">Samedi</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourSa\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourSa\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-12\">
                    <input type=\"checkbox\" id=\"weekday-sun\" name=\"jour[]\" value=\"dimanche\"/>
                    <label for=\"weekday-sun\" class=\"col-md-2\">Dimanche</label>
                    <div class=\"col-md-offset-1 col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"shourSu\" name=\"sHour[]\" placeholder=\"Entrer Heure de Debut\" disabled />
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"input-group clockpicker \">
                            <input type=\"text\" class=\"form-control\" onChange = \"changeText(event)\" id=\"ehourSu\" name=\"eHour[]\" placeholder=\"Entrer Heure de Fin\" disabled />
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class=\"col-md-6\">
                <input type=\"submit\" value=\"Confirm\" class=\"tg-btn pull-right\" style=\"margin-top: 10px;background-color: coral\">
            </div>   
            
            <p id=\"test\"></p>
    </form>   
               
<script type=\"text/javascript\">
    \$('.clockpicker').clockpicker();
</script>    

<script>
document.getElementById('weekday-mon').onchange = function() {
    document.getElementById('shourM').disabled = !this.checked;
    document.getElementById('ehourM').disabled = !this.checked;
};
document.getElementById('weekday-tue').onchange = function() {
    document.getElementById('ehourTu').disabled = !this.checked;
    document.getElementById('shourTu').disabled = !this.checked;
};
document.getElementById('weekday-wed').onchange = function() {
    document.getElementById('ehourW').disabled = !this.checked;
    document.getElementById('shourW').disabled = !this.checked;
};
document.getElementById('weekday-thu').onchange = function() {
    document.getElementById('ehourTh').disabled = !this.checked;
    document.getElementById('shourTh').disabled = !this.checked;
};
document.getElementById('weekday-fri').onchange = function() {
    document.getElementById('ehourF').disabled = !this.checked;
    document.getElementById('shourF').disabled = !this.checked;
};
document.getElementById('weekday-sat').onchange = function() {
    document.getElementById('ehourSa').disabled = !this.checked;
    document.getElementById('shourSa').disabled = !this.checked;
};
document.getElementById('weekday-sun').onchange = function() {
    document.getElementById('ehourSu').disabled = !this.checked;
    document.getElementById('shourSu').disabled = !this.checked;
};
</script>

<script>
\$('#form').submit(function(e){
    var check = true;
    if(\$('#loc').val() == \"\"){
        check = false;
    }
        
    if(document.getElementById('weekday-mon').checked){
        if(\$('#shourM').val() == \"\" || \$('#ehourM').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-tue').checked){
        if(\$('#shourTu').val() == \"\" || \$('#ehourTu').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-wed').checked){
        if(\$('#shourW').val() == \"\" || \$('#ehourW').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-thu').checked){
        if(\$('#shourTh').val() == \"\" || \$('#ehourTh').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-fri').checked){
        if(\$('#shourF').val() == \"\" || \$('#ehourF').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-sat').checked){
        if(\$('#shourSa').val() == \"\" || \$('#ehourSa').val() == \"\"){
            check = false;
        }
    }else if(document.getElementById('weekday-sun').checked){
        if(\$('#shourSu').val() == \"\" || \$('#ehourSu').val() == \"\"){
            check = false;
        }
    }else{
        check = false;
    }
    
    
    if(!check){
        alert('Veuillez remplire les champs obligatoires');
        e.preventDefault();
    }
});
</script>

<script>
    function myFunction(e) {
        
        var locId = document.getElementById(\"loc\").value;

        {% for horaire in horaires %}
            if('{{horaire.locationId.id}}' == locId ){
                if('{{horaire.jour}}' == 'lundi'){
                    document.getElementById(\"shourM\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourM\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                
                if('{{horaire.jour}}' == 'mardi'){
                    document.getElementById(\"shourTu\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourTu\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'mercredi'){
                    document.getElementById(\"shourW\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourW\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'jeudi'){
                    document.getElementById(\"shourTh\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourTh\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'vendredi'){
                    document.getElementById(\"shourF\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourF\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'samedi'){
                    document.getElementById(\"shourSa\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourSa\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                if('{{horaire.jour}}' == 'dimanche'){
                    document.getElementById(\"shourSu\").value = '{{horaire.heureDebut|date('H:i')}}';
                    document.getElementById(\"ehourSu\").value = '{{horaire.heureFin|date('H:i')}}';
                }
                
            }            
        {% endfor %}
        
    }
</script>
<script>
    function changeText(event){
        this.setState(
            {this.state.textValue : event.target.value}
        );
    }
</script>
{% endblock %}






", "horaire/new.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\horaire\\new.html.twig");
    }
}
