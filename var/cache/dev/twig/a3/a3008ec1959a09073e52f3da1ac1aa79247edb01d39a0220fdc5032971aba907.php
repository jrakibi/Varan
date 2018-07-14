<?php

/* user/login2.html.twig */
class __TwigTemplate_6284ce372eeea31cceeeae2b6bc71855c444a9632216285a9a5ed4f9b3c984d8 extends Twig_Template
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
        $__internal_17f7787761e99185950c2bd43196e963e72ed6082ee5b505784fff6712f58c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17f7787761e99185950c2bd43196e963e72ed6082ee5b505784fff6712f58c1d->enter($__internal_17f7787761e99185950c2bd43196e963e72ed6082ee5b505784fff6712f58c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login2.html.twig"));

        $__internal_a637fa3fa243ef99146953ddaefaf86e0e1f1e8a990e8258fe9d3feca69c2d7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a637fa3fa243ef99146953ddaefaf86e0e1f1e8a990e8258fe9d3feca69c2d7a->enter($__internal_a637fa3fa243ef99146953ddaefaf86e0e1f1e8a990e8258fe9d3feca69c2d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login2.html.twig"));

        // line 1
        echo "<div class=\"tg-widget tg-widgetlogin\">

    <div class=\"tg-widgetcontent\">
        <div class=\"tg-widgettitle\">
            <h3>Connectez-vous à votre compte</h3>
        </div>
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"tg-themeform tg-formsignin\">
            ";
        // line 8
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 9
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 11
        echo "            <input type=\"hidden\" name=\"backtourl\" value=\"";
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_SCHEME"), "method") . "://") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "SERVER_NAME"), "method")) . $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "PHP_SELF"), "method")), "html", null, true);
        echo "\">
            <fieldset>
                <div class=\"form-group tg-formgroup\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-control\" />
                </div>
                <div class=\"form-group tg-formgroup\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                </div>
                <div class=\"tg-kepploginpassword\">
                    <div class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                        <label for=\"keeplogin\">Garder ma session active</label>
                    </div>
                </div>
                <button type=\"submit\" class=\"tg-btn col-sm-12 col-xs-12\" id=\"_submit\" name=\"_submit\" style=\"background-color: #00adcf\"><b>Se connecter</b></button>
            </fieldset>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"\"><b>Mot de passe oublie ?</b></a>
            <br>
            <hr>
            <div class=\"tg-widgettitle\">
                <h3>Nouveau à MedicalApp ?</h3>
            </div>
            <button type=\"button\" class=\"tg-btn tg-btnnext col-sm-12 col-xs-12\" style=\"background-color: #00adcf\"><b>Créer un compte</b></button>

        </form>
    </div>

</div>

";
        
        $__internal_17f7787761e99185950c2bd43196e963e72ed6082ee5b505784fff6712f58c1d->leave($__internal_17f7787761e99185950c2bd43196e963e72ed6082ee5b505784fff6712f58c1d_prof);

        
        $__internal_a637fa3fa243ef99146953ddaefaf86e0e1f1e8a990e8258fe9d3feca69c2d7a->leave($__internal_a637fa3fa243ef99146953ddaefaf86e0e1f1e8a990e8258fe9d3feca69c2d7a_prof);

    }

    public function getTemplateName()
    {
        return "user/login2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  52 => 14,  45 => 11,  39 => 9,  37 => 8,  33 => 7,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-widget tg-widgetlogin\">

    <div class=\"tg-widgetcontent\">
        <div class=\"tg-widgettitle\">
            <h3>Connectez-vous à votre compte</h3>
        </div>
        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\" class=\"tg-themeform tg-formsignin\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <input type=\"hidden\" name=\"backtourl\" value=\"{{ app.request.server.get('REQUEST_SCHEME') ~ '://' ~ app.request.server.get('SERVER_NAME') ~ app.request.server.get('PHP_SELF') }}\">
            <fieldset>
                <div class=\"form-group tg-formgroup\">
                    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"form-control\" />
                </div>
                <div class=\"form-group tg-formgroup\">
                    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" />
                </div>
                <div class=\"tg-kepploginpassword\">
                    <div class=\"tg-checkbox\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                        <label for=\"keeplogin\">Garder ma session active</label>
                    </div>
                </div>
                <button type=\"submit\" class=\"tg-btn col-sm-12 col-xs-12\" id=\"_submit\" name=\"_submit\" style=\"background-color: #00adcf\"><b>Se connecter</b></button>
            </fieldset>
            <a href=\"{{ path('fos_user_resetting_request') }}\" class=\"\"><b>Mot de passe oublie ?</b></a>
            <br>
            <hr>
            <div class=\"tg-widgettitle\">
                <h3>Nouveau à MedicalApp ?</h3>
            </div>
            <button type=\"button\" class=\"tg-btn tg-btnnext col-sm-12 col-xs-12\" style=\"background-color: #00adcf\"><b>Créer un compte</b></button>

        </form>
    </div>

</div>

", "user/login2.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\user\\login2.html.twig");
    }
}
