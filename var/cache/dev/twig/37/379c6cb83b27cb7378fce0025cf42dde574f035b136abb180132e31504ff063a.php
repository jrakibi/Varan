<?php

/* locations/mapLocations.html.twig */
class __TwigTemplate_d1a65b85952eacc4af5594db90b2cdb77c082c45ebf91286c35c6e6d9ccf412c extends Twig_Template
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
        $__internal_95ab4f11df42babdfa4e92188df23a5ed4c7a44d843910a5b9f2c899108de93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ab4f11df42babdfa4e92188df23a5ed4c7a44d843910a5b9f2c899108de93f->enter($__internal_95ab4f11df42babdfa4e92188df23a5ed4c7a44d843910a5b9f2c899108de93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/mapLocations.html.twig"));

        $__internal_98277cd5dd554dc8d3dec7df0e748c0cd1a72af4c879aae2ade2e5ff9823a43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98277cd5dd554dc8d3dec7df0e748c0cd1a72af4c879aae2ade2e5ff9823a43c->enter($__internal_98277cd5dd554dc8d3dec7df0e748c0cd1a72af4c879aae2ade2e5ff9823a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/mapLocations.html.twig"));

        // line 1
        echo "<div id=\"map_cavas\" style=\"width: 100%; height: 400px\">

</div>
<br><br><br>
";
        // line 5
        if ( !twig_test_empty(($context["locations"] ?? $this->getContext($context, "locations")))) {
            // line 6
            echo "<script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize\";
                        document.body.appendChild(script);
                    });

                    function initialize() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'satellite'
                        };

// Display a map on the page
                        map = new google.maps.Map(document.getElementById(\"map_cavas\"), mapOptions);
                        map.setTilt(45);

// Multiple Markers
                        var markers = [
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["latLag"]) {
                // line 28
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
            // line 30
            echo "                            ];

                            var infoWindowContent = [
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["infos"]) {
                // line 34
                echo "                                ['<div class=\"info_content\">' +
                                            '<h3>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "name", array()), "html", null, true);
                echo "</h3>' +
                                            '<b>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "lastName", array()), "html", null, true);
                echo "</b>' +
                                            '<p>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "adresse", array()), "html", null, true);
                echo "</p>' + '</div>'],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
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
                                   var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.001, bounds.getNorthEast().lng() + 0.001);
                                   var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.001, bounds.getNorthEast().lng() - 0.001);
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
            // line 88
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
        // line 105
        echo "                ";
        
        $__internal_95ab4f11df42babdfa4e92188df23a5ed4c7a44d843910a5b9f2c899108de93f->leave($__internal_95ab4f11df42babdfa4e92188df23a5ed4c7a44d843910a5b9f2c899108de93f_prof);

        
        $__internal_98277cd5dd554dc8d3dec7df0e748c0cd1a72af4c879aae2ade2e5ff9823a43c->leave($__internal_98277cd5dd554dc8d3dec7df0e748c0cd1a72af4c879aae2ade2e5ff9823a43c_prof);

    }

    public function getTemplateName()
    {
        return "locations/mapLocations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 105,  155 => 88,  103 => 39,  95 => 37,  89 => 36,  85 => 35,  82 => 34,  78 => 33,  73 => 30,  60 => 28,  56 => 27,  33 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"map_cavas\" style=\"width: 100%; height: 400px\">

</div>
<br><br><br>
{% if(locations is not empty)%}
<script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize\";
                        document.body.appendChild(script);
                    });

                    function initialize() {
                        var map;
                        var bounds = new google.maps.LatLngBounds();
                        var mapOptions = {
                            mapTypeId: 'satellite'
                        };

// Display a map on the page
                        map = new google.maps.Map(document.getElementById(\"map_cavas\"), mapOptions);
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
                                   var extendPoint1 = new google.maps.LatLng(bounds.getNorthEast().lat() + 0.001, bounds.getNorthEast().lng() + 0.001);
                                   var extendPoint2 = new google.maps.LatLng(bounds.getNorthEast().lat() - 0.001, bounds.getNorthEast().lng() - 0.001);
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
            {% endif %}                ", "locations/mapLocations.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\mapLocations.html.twig");
    }
}
