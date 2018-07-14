<?php

/* locations/doctorLocations.html.twig */
class __TwigTemplate_fdb8c7b099f253ae2115d0f112729ed2d32a937afd40e9a51b8c376a3adbe89d extends Twig_Template
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
        $__internal_3b6aa8f40d1d4153e21f0b8410c574610fbb2cf6449777a4b633c3d3a5f30a3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6aa8f40d1d4153e21f0b8410c574610fbb2cf6449777a4b633c3d3a5f30a3d->enter($__internal_3b6aa8f40d1d4153e21f0b8410c574610fbb2cf6449777a4b633c3d3a5f30a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/doctorLocations.html.twig"));

        $__internal_9b2842d518f4f22d0526884ed30ec44ff346e408ec860192c76fcb1b1583baf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2842d518f4f22d0526884ed30ec44ff346e408ec860192c76fcb1b1583baf2->enter($__internal_9b2842d518f4f22d0526884ed30ec44ff346e408ec860192c76fcb1b1583baf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "locations/doctorLocations.html.twig"));

        // line 1
        echo "<div class=\"tg-servicelocations\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locations"] ?? $this->getContext($context, "locations")));
        foreach ($context['_seq'] as $context["_key"] => $context["location"]) {
            // line 3
            echo "    <div class=\"tg-servicelocation\" style=\"width: 100%\">
        <div class=\"tg-directpost\" style=\"width: 100%\">
            <div class=\"tg-detail\">
                <figure class=\"tg-directpostimg\">
                    ";
            // line 7
            if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile")) {
                // line 8
                echo "                        <a href=\"#\">
                            <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["doctor"] ?? $this->getContext($context, "doctor")), "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["doctor"] ?? $this->getContext($context, "doctor")), "image", array()), "html", null, true);
                echo "\" />
                        </a>
                    ";
            } else {
                // line 12
                echo "                        <a href=\"#\">
                            <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-01.jpg"), "html", null, true);
                echo "\" alt=\"image description\">
                        </a>
                    ";
            }
            // line 16
            echo "                    <figcaption>
                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                            <em class=\"tg-usericonholder\">
                                <i class=\"fa fa-shield\"></i>
                                <span>varified</span>
                            </em>
                        </a>
                    </figcaption>

                </figure>
            </div>
            <div class=\"tg-directinfo\" >
                <div class=\"tg-directposthead\">

                    <h3
                    ><a href=\"#\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "name", array()), "html", null, true);
            echo "</a></h3>

                    <div class=\"tg-subjects\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "ville", array()), "html", null, true);
            echo "</div>
                    <ul class=\"tg-metadata\">
                        <li><span class=\"tg-stars\"><span></span></span></li>
                        <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                    </ul>
                    <div style=\"display: inlines;\">
                        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("DoctorsBundle:Locations:comments", array("location" => $context["location"])));
            echo "
                    </div>
                </div>
                <div class=\"tg-description\">
                    <p>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["location"], "adresse", array()), "html", null, true);
            echo "</p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['location'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</div>

";
        
        $__internal_3b6aa8f40d1d4153e21f0b8410c574610fbb2cf6449777a4b633c3d3a5f30a3d->leave($__internal_3b6aa8f40d1d4153e21f0b8410c574610fbb2cf6449777a4b633c3d3a5f30a3d_prof);

        
        $__internal_9b2842d518f4f22d0526884ed30ec44ff346e408ec860192c76fcb1b1583baf2->leave($__internal_9b2842d518f4f22d0526884ed30ec44ff346e408ec860192c76fcb1b1583baf2_prof);

    }

    public function getTemplateName()
    {
        return "locations/doctorLocations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 50,  99 => 44,  92 => 40,  82 => 33,  77 => 31,  60 => 16,  54 => 13,  51 => 12,  43 => 9,  40 => 8,  38 => 7,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"tg-servicelocations\">
    {% for location in locations %}
    <div class=\"tg-servicelocation\" style=\"width: 100%\">
        <div class=\"tg-directpost\" style=\"width: 100%\">
            <div class=\"tg-detail\">
                <figure class=\"tg-directpostimg\">
                    {% if vich_uploader_asset(doctor, 'imageFile') %}
                        <a href=\"#\">
                            <img src=\"{{ vich_uploader_asset(doctor, 'imageFile') }}\" alt=\"{{ doctor.image }}\" />
                        </a>
                    {% else %}
                        <a href=\"#\">
                            <img src=\"{{ asset('assets/images/directpost/img-01.jpg') }}\" alt=\"image description\">
                        </a>
                    {% endif %}
                    <figcaption>
                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                            <em class=\"tg-usericonholder\">
                                <i class=\"fa fa-shield\"></i>
                                <span>varified</span>
                            </em>
                        </a>
                    </figcaption>

                </figure>
            </div>
            <div class=\"tg-directinfo\" >
                <div class=\"tg-directposthead\">

                    <h3
                    ><a href=\"#\">{{ location.name }}</a></h3>

                    <div class=\"tg-subjects\">{{ location.ville }}</div>
                    <ul class=\"tg-metadata\">
                        <li><span class=\"tg-stars\"><span></span></span></li>
                        <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i> 99% (1009 votes</a></li>
                    </ul>
                    <div style=\"display: inlines;\">
                        {{  render(controller('DoctorsBundle:Locations:comments',{'location': location})) }}
                    </div>
                </div>
                <div class=\"tg-description\">
                    <p>{{ location.adresse }}</p>
                </div>
            </div>
        </div>
    </div>
    {% endfor %}
</div>

", "locations/doctorLocations.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\locations\\doctorLocations.html.twig");
    }
}
