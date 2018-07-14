<?php

/* locations/new.html.twig */
class __TwigTemplate_db10b1283a947c435081a768d4d6e66005583be136c44500d51dcd1a0ab7dc43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca39e597fa73d2598b1c0b316a610738d945ef542fe95bc7033ad8f50003d7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca39e597fa73d2598b1c0b316a610738d945ef542fe95bc7033ad8f50003d7ce->enter($__internal_ca39e597fa73d2598b1c0b316a610738d945ef542fe95bc7033ad8f50003d7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/new.html.twig"));

        $__internal_14c173f62053de97a07037f484eb65683af5687216ddff514c558b6c0f2afc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c173f62053de97a07037f484eb65683af5687216ddff514c558b6c0f2afc2b->enter($__internal_14c173f62053de97a07037f484eb65683af5687216ddff514c558b6c0f2afc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/new.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "locations/new.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        // line 247
        echo "
";
        
        $__internal_ca39e597fa73d2598b1c0b316a610738d945ef542fe95bc7033ad8f50003d7ce->leave($__internal_ca39e597fa73d2598b1c0b316a610738d945ef542fe95bc7033ad8f50003d7ce_prof);

        
        $__internal_14c173f62053de97a07037f484eb65683af5687216ddff514c558b6c0f2afc2b->leave($__internal_14c173f62053de97a07037f484eb65683af5687216ddff514c558b6c0f2afc2b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b8a61fd818790ea9e680ce70c00a557f13350845ef19f1461d0247e7380ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b8a61fd818790ea9e680ce70c00a557f13350845ef19f1461d0247e7380ef7->enter($__internal_89b8a61fd818790ea9e680ce70c00a557f13350845ef19f1461d0247e7380ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a8450929b17a001aef75130279499f6c8d0a97d7118bc8cada28370be120484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8450929b17a001aef75130279499f6c8d0a97d7118bc8cada28370be120484->enter($__internal_0a8450929b17a001aef75130279499f6c8d0a97d7118bc8cada28370be120484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<body class=\"tg-home tg-login\">
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************
<div class=\"preloader-outer\">
    <div class=\"pin\"></div>
    <div class=\"pulse\"></div>
</div>
<!--************************************
        Preloader End
*************************************-->

<!--************************************
        Wrapper Start
*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:header"));
        echo "

    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                    <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                        <div class=\"tg-widgetdashboard\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\"> 
                                                                            
                                        ";
        // line 36
        if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile")) {
            // line 37
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "image", array()), "html", null, true);
            echo "\" />
                                            </a>
                                        ";
        } else {
            // line 41
            echo "                                            <a href=\"#\">
                                                <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-20.jpg"), "html", null, true);
            echo "\" alt=\"image description\">
                                            </a>
                                        ";
        }
        // line 44
        echo "                                    
                                    ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "verifier", array()) == 1)) {
            // line 46
            echo "                                        <figcaption>
                                            <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                <em class=\"tg-usericonholder\">
                                                    <i class=\"fa fa-shield\"></i>
                                                    <span>";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
            echo "</span>
                                                </em>
                                            </a>
                                        </figcaption>
                                    ";
        }
        // line 55
        echo "                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. ";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "lastName", array()), "html", null, true);
        echo "</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_profil", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile"), "html", null, true);
        echo "</a> </div>
                            ";
        // line 65
        $this->loadTemplate("profilDoctorNav.html.twig", "locations/new.html.twig", 65)->display($context);
        // line 66
        echo "                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardjobslocations\">
                            <div class=\"tg-dashboardbox\">
                                <form class=\"tg-formbookappointment\" method=\"post\" action=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("locations_new");
        echo "\" >
                                    <fieldset class=\"tg-formstepone tg-current\">
                                        <h3>Chercher votre location ?</h3>
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <div class=\"input-group input-group-sm\">
                                                        <input type=\"text\" id=\"adresse\" class=\"form-control\" placeholder=\"Chercher dans google maps\"/>
                                                        <span class=\"input-group-btn\">
                                                          <button class=\"btn btn-info btn-flat\" type=\"button\" onclick=\"TrouverAdresse();\"><i class=\"fa fa-search\"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id=\"mapLocation\" style=\"height:250px;width:100%;\">

                                                </div>
                                                <p>(*) Vous devez faire glisser le marqueur pour pointer vers une position</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Name")));
        echo "
                                                </div>
                                            </div>
                                            <style>
                                                input[data-readonly] {
                                                    pointer-events: none;
                                                }
                                            </style>
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <input id=\"doctorsbundle_locations_langitude\" name=\"doctorsbundle_locations[langitude]\" required=\"required\" class=\"form-control\" placeholder=\"Longitude\" type=\"text\" data-readonly>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <input id=\"doctorsbundle_locations_latitude\" name=\"doctorsbundle_locations[latitude]\" required=\"required\" class=\"form-control\" placeholder=\"Latitude\" type=\"text\" data-readonly>                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse", "type" => "text", "rows" => "2")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville", "type" => "text")));
        echo "
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codeZip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Code Zip", "type" => "text")));
        echo "
                                                    ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                                                </div>
                                            </div>
                                            <input type=\"hidden\" id=\"doctorsbundle_locations_doctor\" name=\"doctorsbundle_locations[doctor]\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "idTable", array()), "html", null, true);
        echo "\">
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <button type=\"submit\" class=\"tg-btn\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add now"), "html", null, true);
        echo "</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

</div>
<!--************************************
        Wrapper End
*************************************-->
";
        // line 149
        $this->loadTemplate("default/footer.html.twig", "locations/new.html.twig", 149)->display($context);
        // line 150
        echo "    <!--************************************
            Light Box Start
*************************************-->
    <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4\"></script>

    <script>
        function initialiserCarte() {
            geocoder = new google.maps.Geocoder();
            // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ
            var latlng = new google.maps.LatLng('34.0209975','-6.752055');
            var mapOptions = {
                zoom      : 14,
                center    : latlng,
                mapTypeId : google.maps.MapTypeId.roadmap
            };
            // map-canvas est le conteneur HTML de la carte Google Map
            map = new google.maps.Map(document.getElementById('mapLocation'), mapOptions);
            var ecole = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng('46.62260','2.70538'),
                draggable: true
            });
            map.setCenter(ecole.position);
            ecole.setMap(map);
                  
            google.maps.event.addListener(ecole, 'dragend', function (evt) {
                var lat = evt.latLng.lat().toFixed(20);
                var lng = evt.latLng.lng().toFixed(20);
                \$(\"#doctorsbundle_locations_latitude\").val(lat);
                \$(\"#doctorsbundle_locations_langitude\").val(lng);
            });

            google.maps.event.addListener(ecole, 'dragstart', function (evt) {
                \$(\"#doctorsbundle_locations_latitude\").val('Currently dragging marker...');
                \$(\"#doctorsbundle_locations_langitude\").val('Currently dragging marker...');
            });
        }

        function TrouverAdresse() {
            // Récupération de l'adresse tapée dans le formulaire
            var adresse = document.getElementById('adresse').value;
            geocoder.geocode( { 'address': adresse}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var strposition = results[0].geometry.location+\"\";

                    strposition=strposition.replace('(', '');
                    strposition=strposition.replace(')', '');

                    var markeur = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        draggable: true
                    });
                    
                    
                    /*map.addListener('center_changed', function(evt) {
                        var lati = ecole.getPosition().lat();
                        var l=  results[0].geometry.location.lat();;
                        alert(l)
                        var lngi = ecole.getPosition().lng();
                        \$(\"#doctorsbundle_locations_latitude\").val(l);
                        \$(\"#doctorsbundle_locations_langitude\").val(lngi);
                    });*/
                   
                  
                  google.maps.event.addListener(markeur, 'click', function(evt) {
                    var lat = evt.latLng.lat().toFixed(20);
                    var lng = evt.latLng.lng().toFixed(20);
                    alert(lat);
                  });
                  
                    google.maps.event.addListener(markeur, 'dragend', function (evt) {
                        var lat = evt.latLng.lat().toFixed(20);
                        var lng = evt.latLng.lng().toFixed(20);
                        \$(\"#doctorsbundle_locations_latitude\").val(lat);
                        \$(\"#doctorsbundle_locations_langitude\").val(lng);
                    });

                    google.maps.event.addListener(markeur, 'dragstart', function (evt) {
                        \$(\"#doctorsbundle_locations_latitude\").val('Currently dragging marker...');
                        \$(\"#doctorsbundle_locations_langitude\").val('Currently dragging marker...');
                    });
                } else {
                    alert('Adresse introuvable: ' + status);
                }
            });
        }
        // Lancement de la construction de la carte google map
        google.maps.event.addDomListener(window, 'load', initialiserCarte);
    </script>

    <!--************************************
                Light Box End
    *************************************-->
";
        
        $__internal_0a8450929b17a001aef75130279499f6c8d0a97d7118bc8cada28370be120484->leave($__internal_0a8450929b17a001aef75130279499f6c8d0a97d7118bc8cada28370be120484_prof);

        
        $__internal_89b8a61fd818790ea9e680ce70c00a557f13350845ef19f1461d0247e7380ef7->leave($__internal_89b8a61fd818790ea9e680ce70c00a557f13350845ef19f1461d0247e7380ef7_prof);

    }

    public function getTemplateName()
    {
        return "locations/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 150,  262 => 149,  240 => 130,  234 => 127,  228 => 124,  224 => 123,  216 => 118,  208 => 113,  186 => 94,  160 => 71,  153 => 66,  151 => 65,  145 => 64,  133 => 57,  129 => 55,  121 => 50,  115 => 46,  113 => 45,  110 => 44,  104 => 42,  101 => 41,  93 => 38,  90 => 37,  88 => 36,  71 => 22,  50 => 3,  41 => 2,  30 => 247,  28 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include ('base.html.twig') %}
{% block body %}
<body class=\"tg-home tg-login\">
<!--[if lt IE 8]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!--************************************
        Preloader Start
*************************************
<div class=\"preloader-outer\">
    <div class=\"pin\"></div>
    <div class=\"pulse\"></div>
</div>
<!--************************************
        Preloader End
*************************************-->

<!--************************************
        Wrapper Start
*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
    {{ render(controller('AppBundle:Default:header')) }}

    <!--************************************
            Main Start
    *************************************-->
    <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"tg-content\" class=\"tg-content tg-dashboard\">
                    <div class=\"col-lg-3 col-md-4 col-sm-4 col-xs-12 pull-left\">
                        <div class=\"tg-widgetdashboard\">
                            <div class=\"tg-widgetprofile\">
                                <figure class=\"tg-directpostimg\"> 
                                                                            
                                        {% if vich_uploader_asset(doctor, 'imageFile') %}
                                            <a href=\"#\">
                                                <img src=\"{{ vich_uploader_asset(doctor, 'imageFile') }}\" alt=\"{{ doctor.image }}\" />
                                            </a>
                                        {% else %}
                                            <a href=\"#\">
                                                <img src=\"{{ asset('assets/images/thumbnails/img-20.jpg') }}\" alt=\"image description\">
                                            </a>
                                        {% endif %}                                    
                                    {% if app.user.verifier == 1 %}
                                        <figcaption>
                                            <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                <em class=\"tg-usericonholder\">
                                                    <i class=\"fa fa-shield\"></i>
                                                    <span>{{ 'verified'|trans }}</span>
                                                </em>
                                            </a>
                                        </figcaption>
                                    {% endif %}
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. {{ doctor.firstName }} {{ doctor.lastName }}</a></h3>
                                    <div class=\"tg-subjects\"></div>
                                    <ul class=\"tg-metadata\">
                                        <li><span class=\"tg-stars\"><span></span></span></li>
                                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes)</a></li>
                                    </ul>
                                </div>
                                <a class=\"tg-btn tg-btn-lg\" href=\"{{ path('user_profil', {'id': app.user.id }) }}\">{{ 'Profile'|trans }}</a> </div>
                            {% include('profilDoctorNav.html.twig') %}
                        </div>
                    </div>
                    <div class=\"col-lg-9 col-md-8 col-sm-8 col-xs-12 pull-right\">
                        <div class=\"tg-dashboardjobslocations\">
                            <div class=\"tg-dashboardbox\">
                                <form class=\"tg-formbookappointment\" method=\"post\" action=\"{{ path('locations_new') }}\" >
                                    <fieldset class=\"tg-formstepone tg-current\">
                                        <h3>Chercher votre location ?</h3>
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <div class=\"input-group input-group-sm\">
                                                        <input type=\"text\" id=\"adresse\" class=\"form-control\" placeholder=\"Chercher dans google maps\"/>
                                                        <span class=\"input-group-btn\">
                                                          <button class=\"btn btn-info btn-flat\" type=\"button\" onclick=\"TrouverAdresse();\"><i class=\"fa fa-search\"></i></button>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div id=\"mapLocation\" style=\"height:250px;width:100%;\">

                                                </div>
                                                <p>(*) Vous devez faire glisser le marqueur pour pointer vers une position</p>
                                            </div>
                                        </div>
                                        <br>
                                        <div class=\"row tg-rowmargin\">
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(form.name, {'attr':{'class':'form-control', 'placeholder':'Name'}}) }}
                                                </div>
                                            </div>
                                            <style>
                                                input[data-readonly] {
                                                    pointer-events: none;
                                                }
                                            </style>
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <input id=\"doctorsbundle_locations_langitude\" name=\"doctorsbundle_locations[langitude]\" required=\"required\" class=\"form-control\" placeholder=\"Longitude\" type=\"text\" data-readonly>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    <input id=\"doctorsbundle_locations_latitude\" name=\"doctorsbundle_locations[latitude]\" required=\"required\" class=\"form-control\" placeholder=\"Latitude\" type=\"text\" data-readonly>                                                </div>
                                            </div>
                                            <div class=\"col-sm-12 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(form.adresse, {'attr':{'class':'form-control', 'placeholder':'Adresse', 'type':'text', 'rows':'2'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(form.ville, {'attr':{'class':'form-control', 'placeholder':'Ville', 'type':'text'}}) }}
                                                </div>
                                            </div>
                                            <div class=\"col-sm-6 col-xs-12 tg-columnpadding\">
                                                <div class=\"form-group\">
                                                    {{ form_widget(form.codeZip, {'attr':{'class':'form-control', 'placeholder':'Code Zip', 'type':'text'}}) }}
                                                    {{ form_widget(form._token) }}
                                                </div>
                                            </div>
                                            <input type=\"hidden\" id=\"doctorsbundle_locations_doctor\" name=\"doctorsbundle_locations[doctor]\" value=\"{{ app.user.idTable }}\">
                                        </div>
                                        <div class=\"tg-btnbox\">
                                            <button type=\"submit\" class=\"tg-btn\">{{ 'add now'|trans }}</button>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--************************************
            Main End
    *************************************-->

</div>
<!--************************************
        Wrapper End
*************************************-->
{% include ('default/footer.html.twig') %}
    <!--************************************
            Light Box Start
*************************************-->
    <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4\"></script>

    <script>
        function initialiserCarte() {
            geocoder = new google.maps.Geocoder();
            // Ici j'ai mis la latitude et longitude du vieux Port de Marseille pour centrer la carte de départ
            var latlng = new google.maps.LatLng('34.0209975','-6.752055');
            var mapOptions = {
                zoom      : 14,
                center    : latlng,
                mapTypeId : google.maps.MapTypeId.roadmap
            };
            // map-canvas est le conteneur HTML de la carte Google Map
            map = new google.maps.Map(document.getElementById('mapLocation'), mapOptions);
            var ecole = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng('46.62260','2.70538'),
                draggable: true
            });
            map.setCenter(ecole.position);
            ecole.setMap(map);
                  
            google.maps.event.addListener(ecole, 'dragend', function (evt) {
                var lat = evt.latLng.lat().toFixed(20);
                var lng = evt.latLng.lng().toFixed(20);
                \$(\"#doctorsbundle_locations_latitude\").val(lat);
                \$(\"#doctorsbundle_locations_langitude\").val(lng);
            });

            google.maps.event.addListener(ecole, 'dragstart', function (evt) {
                \$(\"#doctorsbundle_locations_latitude\").val('Currently dragging marker...');
                \$(\"#doctorsbundle_locations_langitude\").val('Currently dragging marker...');
            });
        }

        function TrouverAdresse() {
            // Récupération de l'adresse tapée dans le formulaire
            var adresse = document.getElementById('adresse').value;
            geocoder.geocode( { 'address': adresse}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var strposition = results[0].geometry.location+\"\";

                    strposition=strposition.replace('(', '');
                    strposition=strposition.replace(')', '');

                    var markeur = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location,
                        draggable: true
                    });
                    
                    
                    /*map.addListener('center_changed', function(evt) {
                        var lati = ecole.getPosition().lat();
                        var l=  results[0].geometry.location.lat();;
                        alert(l)
                        var lngi = ecole.getPosition().lng();
                        \$(\"#doctorsbundle_locations_latitude\").val(l);
                        \$(\"#doctorsbundle_locations_langitude\").val(lngi);
                    });*/
                   
                  
                  google.maps.event.addListener(markeur, 'click', function(evt) {
                    var lat = evt.latLng.lat().toFixed(20);
                    var lng = evt.latLng.lng().toFixed(20);
                    alert(lat);
                  });
                  
                    google.maps.event.addListener(markeur, 'dragend', function (evt) {
                        var lat = evt.latLng.lat().toFixed(20);
                        var lng = evt.latLng.lng().toFixed(20);
                        \$(\"#doctorsbundle_locations_latitude\").val(lat);
                        \$(\"#doctorsbundle_locations_langitude\").val(lng);
                    });

                    google.maps.event.addListener(markeur, 'dragstart', function (evt) {
                        \$(\"#doctorsbundle_locations_latitude\").val('Currently dragging marker...');
                        \$(\"#doctorsbundle_locations_langitude\").val('Currently dragging marker...');
                    });
                } else {
                    alert('Adresse introuvable: ' + status);
                }
            });
        }
        // Lancement de la construction de la carte google map
        google.maps.event.addDomListener(window, 'load', initialiserCarte);
    </script>

    <!--************************************
                Light Box End
    *************************************-->
{% endblock %}

", "locations/new.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\new.html.twig");
    }
}
