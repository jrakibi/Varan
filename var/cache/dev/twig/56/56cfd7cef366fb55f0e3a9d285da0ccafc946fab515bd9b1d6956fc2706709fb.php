<?php

/* locations/nearestDoctors.html.twig */
class __TwigTemplate_4d6825850ebd98c98211ef8267cf59641fd6a5f0a3dfe4de38ab561158c104cc extends Twig_Template
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
        $__internal_f84e612ea4cd37a1b501429fead8076b38385376a4e0ceba959036adf0d24b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84e612ea4cd37a1b501429fead8076b38385376a4e0ceba959036adf0d24b35->enter($__internal_f84e612ea4cd37a1b501429fead8076b38385376a4e0ceba959036adf0d24b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/nearestDoctors.html.twig"));

        $__internal_b7172c87aa68cad39e24300a45cd831958014b8f900d59c407b70afa55dcc0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7172c87aa68cad39e24300a45cd831958014b8f900d59c407b70afa55dcc0a7->enter($__internal_b7172c87aa68cad39e24300a45cd831958014b8f900d59c407b70afa55dcc0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/nearestDoctors.html.twig"));

        // line 1
        echo "<div class=\"col-md-3 col-sm-4 col-xs-12\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget\">
            <div class=\"tg-widgettitle\">
                <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Professionals Around You "), "html", null, true);
        echo " (en construction)</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <div class=\"tg-mapbox\">
                    <div id=\"mapCanvas\" style=\"width: 100%; height: 300px;\"></div>
                    <div class=\"tg-map-controls\">
                        <span id=\"doc-mapplus\"><i class=\"fa fa-plus\"></i></span>
                        <span id=\"doc-mapminus\"><i class=\"fa fa-minus\"></i></span>
                        <span id=\"doc-lock\"><i class=\"fa fa-lock\"></i></span>
                        <span id=\"tg-geolocation\"><i class=\"fa fa-crosshairs\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>          
     
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
";
        // line 23
        if ( !twig_test_empty(($context["locations"] ?? $this->getContext($context, "locations")))) {
            // line 24
            echo "<script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize2\";
                        document.body.appendChild(script);
                    });

                    function initialize2() {
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
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["latLag"]) {
                // line 46
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
            // line 48
            echo "                            ];

                            var infoWindowContent = [
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
            foreach ($context['_seq'] as $context["_key"] => $context["infos"]) {
                // line 52
                echo "                                ['<div class=\"info_content\">' +
                                            '<h3>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "name", array()), "html", null, true);
                echo "</h3>' +
                                            '<b>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["infos"], "doctor", array()), "lastName", array()), "html", null, true);
                echo "</b>' +
                                            '<p>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "adresse", array()), "html", null, true);
                echo "</p>' + '</div>'],
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
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
            // line 108
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
        
        $__internal_f84e612ea4cd37a1b501429fead8076b38385376a4e0ceba959036adf0d24b35->leave($__internal_f84e612ea4cd37a1b501429fead8076b38385376a4e0ceba959036adf0d24b35_prof);

        
        $__internal_b7172c87aa68cad39e24300a45cd831958014b8f900d59c407b70afa55dcc0a7->leave($__internal_b7172c87aa68cad39e24300a45cd831958014b8f900d59c407b70afa55dcc0a7_prof);

    }

    public function getTemplateName()
    {
        return "locations/nearestDoctors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 108,  124 => 57,  116 => 55,  110 => 54,  106 => 53,  103 => 52,  99 => 51,  94 => 48,  81 => 46,  77 => 45,  54 => 24,  52 => 23,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-md-3 col-sm-4 col-xs-12\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget\">
            <div class=\"tg-widgettitle\">
                <h3>{{ 'Professionals Around You '|trans }} (en construction)</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <div class=\"tg-mapbox\">
                    <div id=\"mapCanvas\" style=\"width: 100%; height: 300px;\"></div>
                    <div class=\"tg-map-controls\">
                        <span id=\"doc-mapplus\"><i class=\"fa fa-plus\"></i></span>
                        <span id=\"doc-mapminus\"><i class=\"fa fa-minus\"></i></span>
                        <span id=\"doc-lock\"><i class=\"fa fa-lock\"></i></span>
                        <span id=\"tg-geolocation\"><i class=\"fa fa-crosshairs\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>          
     
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
{% if(locations is not empty)%}
<script>
                    jQuery(function (\$) {
// Asynchronously Load the map API
                        var script = document.createElement('script');
                        script.src = \"//maps.googleapis.com/maps/api/js?key=AIzaSyAcgnHwvZsCydPTdHNn_mCaG8eCcPllzD4&callback=initialize2\";
                        document.body.appendChild(script);
                    });

                    function initialize2() {
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
{% endif %}", "locations/nearestDoctors.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\nearestDoctors.html.twig");
    }
}
