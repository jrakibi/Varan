<?php

/* doctors/seachResult.html.twig */
class __TwigTemplate_d9614a615db1e30e548dfd330ed1b3cb0e0d01c1bb49a66725a219dfc8b91298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "doctors/seachResult.html.twig", 1);
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
        $__internal_672cd09d71fcd2a161d1edb500830bc4cb7347795518119df8bbcde21ebef8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_672cd09d71fcd2a161d1edb500830bc4cb7347795518119df8bbcde21ebef8ca->enter($__internal_672cd09d71fcd2a161d1edb500830bc4cb7347795518119df8bbcde21ebef8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/seachResult.html.twig"));

        $__internal_0509eeefdb40d92f5187a0eae493cdef8c4f0850b1f44d03de5b1fca8855bbb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0509eeefdb40d92f5187a0eae493cdef8c4f0850b1f44d03de5b1fca8855bbb3->enter($__internal_0509eeefdb40d92f5187a0eae493cdef8c4f0850b1f44d03de5b1fca8855bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "doctors/seachResult.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_672cd09d71fcd2a161d1edb500830bc4cb7347795518119df8bbcde21ebef8ca->leave($__internal_672cd09d71fcd2a161d1edb500830bc4cb7347795518119df8bbcde21ebef8ca_prof);

        
        $__internal_0509eeefdb40d92f5187a0eae493cdef8c4f0850b1f44d03de5b1fca8855bbb3->leave($__internal_0509eeefdb40d92f5187a0eae493cdef8c4f0850b1f44d03de5b1fca8855bbb3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ce527526bf7d2e2532d836be4067cd022dd9bd81f46a67c20027bf20af093b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ce527526bf7d2e2532d836be4067cd022dd9bd81f46a67c20027bf20af093b8->enter($__internal_5ce527526bf7d2e2532d836be4067cd022dd9bd81f46a67c20027bf20af093b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92545f1a699f049504533d3f1d6b77f56eb20ff58479e27e6773ad6d87b5ce0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92545f1a699f049504533d3f1d6b77f56eb20ff58479e27e6773ad6d87b5ce0e->enter($__internal_92545f1a699f049504533d3f1d6b77f56eb20ff58479e27e6773ad6d87b5ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <body class=\"tg-login\">
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
                Wrapper Start
        *************************************-->
        <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
            <!--************************************
                    Header Start
            *************************************-->
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Default:header"));
        echo "
            <!--************************************
                    Header End
            *************************************-->
            <!--************************************
                                Inner Banner Start
                    *************************************-->
            <div id=\"tg-innerbanner\" class=\"tg-innerbanner tg-haslayout\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <form class=\"tg-formtheme tg-formsearch\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_search");
        echo "\" method=\"get\">
                                <fieldset>
                                    <input type=\"text\" name=\"mots\" id=\"searchBar\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\" value=\"\">
                                    <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                        Inner Banner End
            *************************************-->
            <!--************************************
                    Main Start
            *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-allpaddingzero tg-haslayout\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div id=\"tg-content\" class=\"tg-content\" style=\"\">
                            <div class=\"tg-mapbox\">
                                <div id=\"mapCanvas\" style=\"width: 100%; height: 600px;\"></div>

                                ";
        // line 56
        $this->loadTemplate("doctors/filtreSearch.html.twig", "doctors/seachResult.html.twig", 56)->display($context);
        // line 57
        echo "
                            </div>
                            <div class=\"tg-directposts tg-directpostsv2\">
                                <div class=\"tg-pagehead\">
                                    ";
        // line 61
        if ((($context["resultDoc"] ?? $this->getContext($context, "resultDoc")) == 1)) {
            // line 62
            echo "                                        <p>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["doctors"] ?? $this->getContext($context, "doctors"))), "html", null, true);
            echo " résultats trouvés</p>
                                    ";
        } elseif ((        // line 63
($context["resultDoc"] ?? $this->getContext($context, "resultDoc")) == 0)) {
            // line 64
            echo "                                        <p>Désolé, aucun résultat trouvé</p>
                                    ";
        }
        // line 66
        echo "                                </div>

                                <div id=\"tg-directpostslistingscrollbar\" class=\"tg-themescrollbar tg-directpostslistingscrollbar\">
                                    ";
        // line 69
        if ((($context["doctors"] ?? $this->getContext($context, "doctors")) != null)) {
            // line 70
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["doctors"] ?? $this->getContext($context, "doctors")));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 71
                echo "                                            <div class=\"tg-directpost\">
                                                <figure class=\"tg-directpostimg\">

                                                    ";
                // line 74
                if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["doctor"], "imageFile")) {
                    // line 75
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_detail", array("doctor" => $this->getAttribute($context["doctor"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <img src=\"";
                    // line 76
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "image", array()), "html", null, true);
                    echo "\" />
                                                        </a>
                                                    ";
                } else {
                    // line 79
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_detail", array("doctor" => $this->getAttribute($context["doctor"], "id", array()))), "html", null, true);
                    echo "\">
                                                            <img src=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-04.jpg"), "html", null, true);
                    echo "\"
                                                        </a>
                                                    ";
                }
                // line 83
                echo "                                                    <figcaption>
                                                        ";
                // line 84
                if (($this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("UserBundle:User:isVerified", array("doctor" => $this->getAttribute($context["doctor"], "id", array())))) == 1)) {
                    // line 85
                    echo "                                                            <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                                <em class=\"tg-usericonholder\">
                                                                    <i class=\"fa fa-shield\"></i>
                                                                    <span>";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
                    echo "</span>
                                                                </em>
                                                            </a>
                                                        ";
                }
                // line 92
                echo "                                                        <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                                <span>";
                // line 95
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
                echo "</span>
                                                            </em>
                                                        </a>
                                                    </figcaption>
                                                </figure>

                                                <div class=\"tg-directinfo\">
                                                    <div class=\"tg-directposthead\">
                                                        <h3><a href=\"";
                // line 103
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_detail", array("doctor" => $this->getAttribute($context["doctor"], "id", array()))), "html", null, true);
                echo "\">Dr. ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "lastName", array()), "html", null, true);
                echo "</a></h3>

                                                        <div class=\"tg-subjects\">";
                // line 105
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Doctors:getDoctorsSpecification", array("doctor" => $this->getAttribute($context["doctor"], "id", array()))));
                echo "</div>
                                                        <ul class=\"tg-metadata\">
                                                            <li><span class=\"tg-stars\"><span></span></span></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-description\">
                                                        <p>";
                // line 113
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["doctor"], "professionalStatement", array()), 0, 80), "html", null, true);
                echo "...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "                                    ";
        }
        // line 119
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
            ";
        // line 126
        if ( !twig_test_empty(($context["locations"] ?? $this->getContext($context, "locations")))) {
            // line 127
            echo "                <script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize3\";
                        document.body.appendChild(script);
                    });

                    function initialize3() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'roadmap'
                        };

// Display a map on the page
                        map = new google.maps.Map(document.getElementById(\"mapCanvas\"), mapOptions);
                        map.setTilt(45);

// Multiple Markers
                        var markers = [
                    ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["latLag"]) {
                // line 149
                echo "                                ['";
                echo twig_escape_filter($this->env, $this->getAttribute($context["latLag"], "name", array()), "html", null, true);
                echo "', ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["latLag"], "latitude", array()), "html", null, true);
                echo ",     ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["latLag"], "langitude", array()), "html", null, true);
                echo " ],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latLag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                            ];

                            var infoWindowContent = [
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["infos"]) {
                // line 155
                echo "                                ['<div class=\"info_content\">' +
                                            '<h3>";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "name", array()), "html", null, true);
                echo "</h3>' +
                                            '<b>";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "lastName", array()), "html", null, true);
                echo "</b>' +
                                            '<p>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "adresse", array()), "html", null, true);
                echo "</p>' + '</div>'],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                            ];
                            // Display multiple markers on a map
                            var infoWindow = new google.maps.InfoWindow(), marker, i;



                            // Loop through our array of markers & place each one on the map
                            var markerss = [];
                            for (i = 0; i < markers.length; i++) {
                                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                                bounds.extend(position);
                                marker = new google.maps.Marker({
                                    position: position,
                                    map: map,
                                    title: markers[i][0]
                                });

                                markerss.push(marker);

                                // Allow each marker to have an info window
                                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                    return function () {
                                        infoWindow.setContent(infoWindowContent[i][0]);
                                        infoWindow.open(map, marker);
                                    }
                                })(marker, i));

                                // Automatically center the map fitting all markers on the screen
                                if (bounds.getNorthEast().equals(bounds.getSouthWest())) {
                                   var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.01, bounds.getNorthEast().lng() + 0.01);
                                   var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.01, bounds.getNorthEast().lng() - 0.01);
                                   bounds.extend(extendPoint1);
                                   bounds.extend(extendPoint2);
                                }
                                map.fitBounds(bounds);
                            }

                            var markerCluster = new MarkerClusterer(map, markerss, {
                                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

                            //j'ai commenté ces ligne pour avoir un zoom sur les markers

                            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
                            /*  var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                             this.setZoom(6);
                             google.maps.event.removeListener(boundsListener);
                             });*/
                        }

                </script>
            ";
        } else {
            // line 210
            echo "   
                <script>
                    jQuery(function (\$) {
                        // Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initMap\";
                        document.body.appendChild(script);
                    });
                    var map;
                    function initMap() {

                        map = new google.maps.Map(document.getElementById('mapCanvas'), {
                            center: {lat: 48.8566, lng: 2.3522},
                            zoom: 7
                        });
                    }
                </script>
            ";
        }
        // line 228
        echo "            <script>
                \$(document).ready(function () {
                    // configure the bootstrap datepicker
                    \$('.js-datepicker').datepicker({
                        format: 'dd-mm-yyyy'
                    });
                });
            </script>
            <script>

                \$('body').on('submit', '#addDoctorForm', function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();

                    var \$form = \$(this);
                    var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                    var data = (formdata !== null) ? formdata : \$form.serialize();

                    var URL = \"";
        // line 246
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctors_create");
        echo "\";
                    console.log(URL);

                    \$.ajax({
                        url: URL,
                        type: \"POST\",
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        dataType: 'html', // selon le retour attendu
                        data: data,
                        success: function (response) {
                            if (response == 'erreur') {
                                \$('#divErreurAlert').show();
                            } else {
                                \$('#formAddDoctor').html(response);
                            }
                            return true;
                        }
                    });
                    return false;
                });
            </script>

            <!--************************************
                    Main End
            *************************************-->
            <!--************************************
                    Footer Start
            *************************************-->
            ";
        // line 275
        $this->loadTemplate("default/footer.html.twig", "doctors/seachResult.html.twig", 275)->display($context);
        // line 276
        echo "            <!--************************************
                    Footer End
            *************************************-->
        </div>
        <!--************************************
                Wrapper End
        *************************************-->

    </body>
";
        
        $__internal_92545f1a699f049504533d3f1d6b77f56eb20ff58479e27e6773ad6d87b5ce0e->leave($__internal_92545f1a699f049504533d3f1d6b77f56eb20ff58479e27e6773ad6d87b5ce0e_prof);

        
        $__internal_5ce527526bf7d2e2532d836be4067cd022dd9bd81f46a67c20027bf20af093b8->leave($__internal_5ce527526bf7d2e2532d836be4067cd022dd9bd81f46a67c20027bf20af093b8_prof);

    }

    public function getTemplateName()
    {
        return "doctors/seachResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 276,  446 => 275,  414 => 246,  394 => 228,  374 => 210,  321 => 160,  313 => 158,  307 => 157,  303 => 156,  300 => 155,  296 => 154,  291 => 151,  278 => 149,  274 => 148,  251 => 127,  249 => 126,  240 => 119,  237 => 118,  226 => 113,  215 => 105,  206 => 103,  195 => 95,  190 => 92,  183 => 88,  178 => 85,  176 => 84,  173 => 83,  167 => 80,  162 => 79,  154 => 76,  149 => 75,  147 => 74,  142 => 71,  137 => 70,  135 => 69,  130 => 66,  126 => 64,  124 => 63,  119 => 62,  117 => 61,  111 => 57,  109 => 56,  83 => 33,  69 => 22,  49 => 4,  40 => 3,  11 => 1,);
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
    <body class=\"tg-login\">
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
                Wrapper Start
        *************************************-->
        <div id=\"tg-wrapper\" class=\"tg-wrapper tg-haslayout\">
            <!--************************************
                    Header Start
            *************************************-->
            {{ render(controller('AppBundle:Default:header')) }}
            <!--************************************
                    Header End
            *************************************-->
            <!--************************************
                                Inner Banner Start
                    *************************************-->
            <div id=\"tg-innerbanner\" class=\"tg-innerbanner tg-haslayout\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm-12 col-xs-12\">
                            <form class=\"tg-formtheme tg-formsearch\" action=\"{{ path('doctor_search') }}\" method=\"get\">
                                <fieldset>
                                    <input type=\"text\" name=\"mots\" id=\"searchBar\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\" value=\"\">
                                    <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                        Inner Banner End
            *************************************-->
            <!--************************************
                    Main Start
            *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-allpaddingzero tg-haslayout\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div id=\"tg-content\" class=\"tg-content\" style=\"\">
                            <div class=\"tg-mapbox\">
                                <div id=\"mapCanvas\" style=\"width: 100%; height: 600px;\"></div>

                                {% include('doctors/filtreSearch.html.twig') %}

                            </div>
                            <div class=\"tg-directposts tg-directpostsv2\">
                                <div class=\"tg-pagehead\">
                                    {% if resultDoc == 1%}
                                        <p>{{ doctors|length }} résultats trouvés</p>
                                    {% elseif resultDoc == 0%}
                                        <p>Désolé, aucun résultat trouvé</p>
                                    {% endif %}
                                </div>

                                <div id=\"tg-directpostslistingscrollbar\" class=\"tg-themescrollbar tg-directpostslistingscrollbar\">
                                    {% if doctors != null %}
                                        {% for doctor in doctors %}
                                            <div class=\"tg-directpost\">
                                                <figure class=\"tg-directpostimg\">

                                                    {% if vich_uploader_asset(doctor, 'imageFile')  %}
                                                        <a href=\"{{ path('doctor_detail', {'doctor' : doctor.id}) }}\">
                                                            <img src=\"{{ vich_uploader_asset(doctor, 'imageFile') }}\" alt=\"{{ doctor.image }}\" />
                                                        </a>
                                                    {% else %}
                                                        <a href=\"{{ path('doctor_detail', {'doctor' : doctor.id}) }}\">
                                                            <img src=\"{{ asset('assets/images/directpost/img-04.jpg') }}\"
                                                        </a>
                                                    {% endif %}
                                                    <figcaption>
                                                        {% if render(controller('UserBundle:User:isVerified', {'doctor' : doctor.id })) == 1 %}
                                                            <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                                <em class=\"tg-usericonholder\">
                                                                    <i class=\"fa fa-shield\"></i>
                                                                    <span>{{ 'verified'|trans }}</span>
                                                                </em>
                                                            </a>
                                                        {% endif %}
                                                        <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                                <span>{{ 'featured'|trans }}</span>
                                                            </em>
                                                        </a>
                                                    </figcaption>
                                                </figure>

                                                <div class=\"tg-directinfo\">
                                                    <div class=\"tg-directposthead\">
                                                        <h3><a href=\"{{ path('doctor_detail', {'doctor' : doctor.id}) }}\">Dr. {{ doctor.firstName }} {{ doctor.lastName }}</a></h3>

                                                        <div class=\"tg-subjects\">{{ render(controller('DoctorsBundle:Doctors:getDoctorsSpecification', {'doctor':doctor.id})) }}</div>
                                                        <ul class=\"tg-metadata\">
                                                            <li><span class=\"tg-stars\"><span></span></span></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-description\">
                                                        <p>{{ doctor.professionalStatement|slice(0,80) }}...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
            {% if(locations is not empty)%}
                <script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize3\";
                        document.body.appendChild(script);
                    });

                    function initialize3() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'roadmap'
                        };

// Display a map on the page
                        map = new google.maps.Map(document.getElementById(\"mapCanvas\"), mapOptions);
                        map.setTilt(45);

// Multiple Markers
                        var markers = [
                    {% for latLag in locations %}
                                ['{{ latLag.name }}', {{ latLag.latitude }},     {{ latLag.langitude }} ],
                    {% endfor %}
                            ];

                            var infoWindowContent = [
                    {% for infos in locations %}
                                ['<div class=\"info_content\">' +
                                            '<h3>{{ infos.name }}</h3>' +
                                            '<b>{{ infos.doctor.firstName }} {{ infos.doctor.lastName }}</b>' +
                                            '<p>{{ infos.adresse }}</p>' + '</div>'],
                    {% endfor %}
                            ];
                            // Display multiple markers on a map
                            var infoWindow = new google.maps.InfoWindow(), marker, i;



                            // Loop through our array of markers & place each one on the map
                            var markerss = [];
                            for (i = 0; i < markers.length; i++) {
                                var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                                bounds.extend(position);
                                marker = new google.maps.Marker({
                                    position: position,
                                    map: map,
                                    title: markers[i][0]
                                });

                                markerss.push(marker);

                                // Allow each marker to have an info window
                                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                                    return function () {
                                        infoWindow.setContent(infoWindowContent[i][0]);
                                        infoWindow.open(map, marker);
                                    }
                                })(marker, i));

                                // Automatically center the map fitting all markers on the screen
                                if (bounds.getNorthEast().equals(bounds.getSouthWest())) {
                                   var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.01, bounds.getNorthEast().lng() + 0.01);
                                   var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.01, bounds.getNorthEast().lng() - 0.01);
                                   bounds.extend(extendPoint1);
                                   bounds.extend(extendPoint2);
                                }
                                map.fitBounds(bounds);
                            }

                            var markerCluster = new MarkerClusterer(map, markerss, {
                                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

                            //j'ai commenté ces ligne pour avoir un zoom sur les markers

                            // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
                            /*  var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                             this.setZoom(6);
                             google.maps.event.removeListener(boundsListener);
                             });*/
                        }

                </script>
            {% else %}   
                <script>
                    jQuery(function (\$) {
                        // Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initMap\";
                        document.body.appendChild(script);
                    });
                    var map;
                    function initMap() {

                        map = new google.maps.Map(document.getElementById('mapCanvas'), {
                            center: {lat: 48.8566, lng: 2.3522},
                            zoom: 7
                        });
                    }
                </script>
            {% endif %}
            <script>
                \$(document).ready(function () {
                    // configure the bootstrap datepicker
                    \$('.js-datepicker').datepicker({
                        format: 'dd-mm-yyyy'
                    });
                });
            </script>
            <script>

                \$('body').on('submit', '#addDoctorForm', function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();

                    var \$form = \$(this);
                    var formdata = (window.FormData) ? new FormData(\$form[0]) : null;
                    var data = (formdata !== null) ? formdata : \$form.serialize();

                    var URL = \"{{ path('doctors_create')}}\";
                    console.log(URL);

                    \$.ajax({
                        url: URL,
                        type: \"POST\",
                        contentType: false, // obligatoire pour de l'upload
                        processData: false, // obligatoire pour de l'upload
                        dataType: 'html', // selon le retour attendu
                        data: data,
                        success: function (response) {
                            if (response == 'erreur') {
                                \$('#divErreurAlert').show();
                            } else {
                                \$('#formAddDoctor').html(response);
                            }
                            return true;
                        }
                    });
                    return false;
                });
            </script>

            <!--************************************
                    Main End
            *************************************-->
            <!--************************************
                    Footer Start
            *************************************-->
            {% include ('default/footer.html.twig') %}
            <!--************************************
                    Footer End
            *************************************-->
        </div>
        <!--************************************
                Wrapper End
        *************************************-->

    </body>
{% endblock %}
", "doctors/seachResult.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\doctors\\seachResult.html.twig");
    }
}
