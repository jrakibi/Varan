<?php

/* default/homepage.html.twig */
class __TwigTemplate_56bcd879bff71102d56f9894fe8640962b7ef8467a055d300f15911e1207286a extends Twig_Template
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
        $__internal_ca66f1f9e93ee22af4d889e5dc4bd080b576af0f554a61f67be2011612c5e18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca66f1f9e93ee22af4d889e5dc4bd080b576af0f554a61f67be2011612c5e18e->enter($__internal_ca66f1f9e93ee22af4d889e5dc4bd080b576af0f554a61f67be2011612c5e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_4c795ea0e135c7f73a436b13c9777a1a5ba85281a7260def40f8218e975d7c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c795ea0e135c7f73a436b13c9777a1a5ba85281a7260def40f8218e975d7c63->enter($__internal_4c795ea0e135c7f73a436b13c9777a1a5ba85281a7260def40f8218e975d7c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        // line 1
        $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ca66f1f9e93ee22af4d889e5dc4bd080b576af0f554a61f67be2011612c5e18e->leave($__internal_ca66f1f9e93ee22af4d889e5dc4bd080b576af0f554a61f67be2011612c5e18e_prof);

        
        $__internal_4c795ea0e135c7f73a436b13c9777a1a5ba85281a7260def40f8218e975d7c63->leave($__internal_4c795ea0e135c7f73a436b13c9777a1a5ba85281a7260def40f8218e975d7c63_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_fb8d72d10cf7df3e14e1c1cae5391fd013527f87a7aa787bfd3184f5cee41ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8d72d10cf7df3e14e1c1cae5391fd013527f87a7aa787bfd3184f5cee41ae8->enter($__internal_fb8d72d10cf7df3e14e1c1cae5391fd013527f87a7aa787bfd3184f5cee41ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ec7550461101a900b4e4f3a499923a82d51412998a0a4ff8b6b089801ad02fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7550461101a900b4e4f3a499923a82d51412998a0a4ff8b6b089801ad02fc6->enter($__internal_ec7550461101a900b4e4f3a499923a82d51412998a0a4ff8b6b089801ad02fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <body class=\"tg-home tg-login\">
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
                            Home Banner Start
            *************************************-->
            <div id=\"tg-homebanner\" class=\"tg-homebanner tg-haslayout\">
                <figure class=\"tg-bannerbg\">
                    <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/banner/index.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                </figure>
                <div class=\"tg-bannercontent\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <form class=\"tg-formtheme tg-formsearch\" action=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("doctor_search");
        echo "\" method=\"get\">
                                    <div class=\"tg-sectionhead\">
                                        <div class=\"tg-sectiontitle\">
                                            <h1>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find a Medical Help"), "html", null, true);
        echo "!</h1>
                                            <img class=\"tg-svginject\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                        </div>
                                    </div>
                                    <fieldset>
                                        <input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
                                        <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                                    </fieldset>
                                    <div class=\"tg-searchbulder\">
                                        <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                            <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist\">
                                                        <span><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent\">
                                                        <span><img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist\">
                                                        <span><img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist\">
                                                        <span><img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist\">
                                                        <span><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath\">
                                                        <span><img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist\">
                                                        <span><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda\">
                                                        <span><img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist\">
                                                        <span><img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist\">
                                                        <span><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"hospitalscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath2\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath2\">
                                                        <span><img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist2\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist2\">
                                                        <span><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda2\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda2\">
                                                        <span><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist2\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist2\">
                                                        <span><img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist2\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist2\">
                                                        <span><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist2\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist2\">
                                                        <span><img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent2\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent2\">
                                                        <span><img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist2\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist2\">
                                                        <span><img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist2\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist2\">
                                                        <span><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist2\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist2\">
                                                        <span><img src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"spascategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist3\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist3\">
                                                        <span><img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent3\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent3\">
                                                        <span><img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist3\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist3\">
                                                        <span><img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist3\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist3\">
                                                        <span><img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist3\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist3\">
                                                        <span><img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath3\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath3\">
                                                        <span><img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist3\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist3\">
                                                        <span><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda3\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda3\">
                                                        <span><img src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist3\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist3\">
                                                        <span><img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist3\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist3\">
                                                        <span><img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"pharmaciescategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath4\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath4\">
                                                        <span><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist4\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist4\">
                                                        <span><img src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda4\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda4\">
                                                        <span><img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist4\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist4\">
                                                        <span><img src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist4\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist4\">
                                                        <span><img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist4\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist4\">
                                                        <span><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent4\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent4\">
                                                        <span><img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist4\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist4\">
                                                        <span><img src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist4\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist4\">
                                                        <span><img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist4\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist4\">
                                                        <span><img src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"labscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist5\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist5\">
                                                        <span><img src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent5\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent5\">
                                                        <span><img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist5\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist5\">
                                                        <span><img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist5\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist5\">
                                                        <span><img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist5\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist5\">
                                                        <span><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath5\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath5\">
                                                        <span><img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist5\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist5\">
                                                        <span><img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda5\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda5\">
                                                        <span><img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 389
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist5\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist5\">
                                                        <span><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist5\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist5\">
                                                        <span><img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"fitnesscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath6\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath6\">
                                                        <span><img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist6\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist6\">
                                                        <span><img src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda6\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda6\">
                                                        <span><img src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist6\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist6\">
                                                        <span><img src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist6\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist6\">
                                                        <span><img src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist6\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist6\">
                                                        <span><img src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 447
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent6\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent6\">
                                                        <span><img src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist6\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist6\">
                                                        <span><img src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist6\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist6\">
                                                        <span><img src=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist6\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist6\">
                                                        <span><img src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"bloodbankcategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist7\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist7\">
                                                        <span><img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent7\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent7\">
                                                        <span><img src=\"";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist7\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist7\">
                                                        <span><img src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist7\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist7\">
                                                        <span><img src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist7\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist7\">
                                                        <span><img src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath7\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath7\">
                                                        <span><img src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist7\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist7\">
                                                        <span><img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda7\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda7\">
                                                        <span><img src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist7\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist7\">
                                                        <span><img src=\"";
        // line 539
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist7\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist7\">
                                                        <span><img src=\"";
        // line 546
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"clinicscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath8\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath8\">
                                                        <span><img src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-21.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Homeopath"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist8\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist8\">
                                                        <span><img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-22.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ophthalmologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda8\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda8\">
                                                        <span><img src=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-23.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ayurveda"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist8\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist8\">
                                                        <span><img src=\"";
        // line 576
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-24.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dermatologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist8\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist8\">
                                                        <span><img src=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-25.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Neurologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist8\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist8\">
                                                        <span><img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-16.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 591
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Dentist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent8\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent8\">
                                                        <span><img src=\"";
        // line 597
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-17.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 598
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Ear-Nose-Throat"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist8\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist8\">
                                                        <span><img src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-18.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gastroenterologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist8\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist8\">
                                                        <span><img src=\"";
        // line 611
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-19.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Psychiatrist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist8\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist8\">
                                                        <span><img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-20.png"), "html", null, true);
        echo "\" alt=\"image description\"></span>
                                                        <span>";
        // line 619
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Urologist"), "html", null, true);
        echo "</span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                            Home Banner End
            *************************************-->
            <!--************************************
                            Main Start
            *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
                <!--************************************
                                Features Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>";
        // line 647
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("A Complete Medical Portal"), "html", null, true);
        echo "</h2>
                                        <img class=\"tg-svginject\" src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tg-features\">
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Find Medical Help"), "html", null, true);
        echo "</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Make Appointment"), "html", null, true);
        echo "</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"";
        // line 673
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">";
        // line 674
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Get Facilitate"), "html", null, true);
        echo "</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Features End
                *************************************-->
                <!--************************************
                                Statistics Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg tg-imgoverlap\" data-bleed=\"-17\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-02.jpg"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-xs-12\">
                                <div class=\"tg-statisticscounters\">
                                    <div class=\"row\">
                                        <div class=\"tg-counter\">
                                            <h2><span data-from=\"0\" data-to=\"36012\" data-speed=\"8000\" data-refresh-interval=\"50\">36012</span></h2>
                                            <h3>";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Happy Customers"), "html", null, true);
        echo "</h3>
                                        </div>
                                        <div class=\"tg-counter\">
                                            <figure><img src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-06.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                                            <h2><span data-from=\"0\" data-to=\"21067\" data-speed=\"8000\" data-refresh-interval=\"50\">21067</span></h2>
                                            <h3>";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active Members"), "html", null, true);
        echo "</h3>
                                        </div>
                                        <div class=\"tg-counter\">
                                            <figure><img src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/icons/icon-07.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                                            <h2><span data-from=\"0\" data-to=\"6954\" data-speed=\"8000\" data-refresh-interval=\"50\">6954</span></h2>
                                            <h3>";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("New Members"), "html", null, true);
        echo "</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs\">
                                <figure class=\"tg-sectionimg\"><img src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Statistics End
                *************************************-->
                <!--************************************
                                Featured DiretPost Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>";
        // line 731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Featured Listings"), "html", null, true);
        echo "</h2>
                                        <img class=\"tg-svginject\" src=\"";
        // line 732
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                    </div>
                                </div>
                                <ul id=\"tg-filterbalenav\" class=\"tg-filterbalenav option-set\">
                                    <li><a class=\"tg-active\" data-filter=\"*\" href=\"javascript:void(0);\">all</a></li>
                                    <li><a data-filter=\".doctors\" href=\"javascript:void(0);\">Doctors</a></li>
                                    <li><a data-filter=\".hospitals\" href=\"javascript:void(0);\">Hospitals</a></li>
                                        ";
        // line 744
        echo "                                </ul>
                                <div id=\"filter-masonry\" class=\"tg-featureddirectposts tg-searchresult tg-filtermasonry\">

                                    ";
        // line 747
        if ((($context["doctors"] ?? $this->getContext($context, "doctors")) != null)) {
            // line 748
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["doctors"] ?? $this->getContext($context, "doctors")));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 749
                echo "
                                            <div class=\"tg-directpost doctors\">
                                                <figure style=\"width:120px; height: 120px\" class=\"tg-directpostimg\">
                                                    ";
                // line 752
                if ($this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["doctor"], "imageFile")) {
                    // line 753
                    echo "                                                        <a href=\"#\">
                                                            <img src=\"";
                    // line 754
                    echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "image", array()), "html", null, true);
                    echo "\" />
                                                        </a>
                                                    ";
                } else {
                    // line 757
                    echo "                                                        <a href=\"#\">
                                                            <img src=\"";
                    // line 758
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-02.jpg"), "html", null, true);
                    echo "\" alt=\"image description\">
                                                        </a>
                                                    ";
                }
                // line 761
                echo "                                                    <figcaption>
                                                        <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                                <span>";
                // line 765
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("featured"), "html", null, true);
                echo "</span>
                                                            </em>
                                                        </a>
                                                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-shield\"></i>
                                                                <span>";
                // line 771
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("verified"), "html", null, true);
                echo "</span>
                                                            </em>
                                                        </a>
                                                    </figcaption>
                                                </figure>
                                                <div class=\"tg-directinfo\">
                                                    <div class=\"tg-leftarea\">
                                                        <div class=\"tg-directposthead\">
                                                            <h3><a href=\"#\">Dr. ";
                // line 779
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "getFirstName", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "getLastName", array(), "method"), "html", null, true);
                echo "</a></h3>
                                                            <div class=\"tg-subjects\">";
                // line 780
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "getProfessionalStatement", array(), "method"), "html", null, true);
                echo "</div>
                                                        </div>
                                                        <ul class=\"tg-contactinfo\">
                                                            <li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>";
                // line 784
                echo twig_escape_filter($this->env, $this->getAttribute($context["doctor"], "getGSM", array(), "method"), "html", null, true);
                echo "</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-rightarea\">
                                                        <div class=\"tg-bookappoinment\">
                                                            <a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
                                                            <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
                                                                ";
                // line 791
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Book Appointment"), "html", null, true);
                echo "</button>
                                                            <ul class=\"tg-metadata\">
                                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 801
            echo "                                    ";
        }
        // line 802
        echo "

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Featured DiretPost End
                *************************************-->
                <!--************************************
                                Student Review Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"";
        // line 815
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-03.jpg"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>";
        // line 821
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valuable Feedback"), "html", null, true);
        echo "</h2>
                                        <img class=\"tg-svginject\" src=\"";
        // line 822
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                    </div>
                                </div>
                                <div id=\"tg-feedbackslider\" class=\"tg-feedbackslider tg-feedback\">
                                    ";
        // line 826
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataComments"] ?? $this->getContext($context, "dataComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["dataComment"]) {
            echo " 
                                        <div class=\"item\">
                                            <div class=\"tg-feedbackcontent\">
                                                <blockquote>
                                                    <q>";
            // line 830
            echo twig_escape_filter($this->env, $this->getAttribute($context["dataComment"], "Comments", array()), "html", null, true);
            echo "</q>
                                                </blockquote>
                                                <h3>Dr. ";
            // line 832
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dataComment"], "doctor", array()), "getFirstName", array(), "method"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dataComment"], "doctor", array()), "getLastName", array(), "method"), "html", null, true);
            echo "</h3>
                                                <ul class=\"tg-metadata\">
                                                    <li><span>";
            // line 834
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dataComment"], "doctor", array()), "getProfessionalStatement", array(), "method"), "html", null, true);
            echo " </span></li>
                                                    <li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
                                                </ul>
                                            </div>
                                        </div>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 840
        echo " 
                                </div>
                                <div id=\"tg-reviewerdpslider\" class=\"tg-reviewerdpslider tg-reviewerdp\">
                                    ";
        // line 843
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataComments"] ?? $this->getContext($context, "dataComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["dataComment"]) {
            echo " 
                                        <div class=\"item\">
                                            ";
            // line 845
            if ($this->getAttribute($this->getAttribute($context["dataComment"], "doctor", array()), "image", array())) {
                // line 846
                echo "                                                <figure class=\"tg-directpostimg\"> 
                                                    <img src=\"";
                // line 847
                echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset($this->getAttribute($context["dataComment"], "doctor", array()), "imageFile"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["dataComment"], "doctor", array()), "image", array()), "html", null, true);
                echo "\" />
                                                </figure>
                                            ";
            } else {
                // line 850
                echo "
                                                <figure>
                                                    <img src=\"";
                // line 852
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/thumbnails/img-01.jpg"), "html", null, true);
                echo "\" alt=\"image description\">
                                                </figure>
                                            ";
            }
            // line 855
            echo "

                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataComment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 859
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Student Review End
                *************************************-->
                <!--************************************
                                Trusted By Many Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"tg-trustedbymany\">
                                    <div class=\"tg-sectionhead\">
                                        <div class=\"tg-sectiontitle\">
                                            <h2>";
        // line 877
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Trusted By Many"), "html", null, true);
        echo "</h2>
                                            <img class=\"tg-svginject\" src=\"";
        // line 878
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                        </div>
                                    </div>
                                    <div id=\"tg-brandsslider\" class=\"tg-brandsslider tg-brands\">
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 884
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 885
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 886
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                        </div>
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"";
        // line 889
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 891
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 892
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                        </div>
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"";
        // line 895
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-01.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 896
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-02.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 897
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-03.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"";
        // line 898
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/brands/img-04.png"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Trusted By Many Start
                *************************************-->
                <!--************************************
                                Register Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"";
        // line 912
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/parallax/bgparallax-04.jpg"), "html", null, true);
        echo "\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"tg-freeregistration\">
                                <div class=\"tg-regleftarea\">
                                    <h2>";
        // line 917
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register For Free"), "html", null, true);
        echo "!</h2>
                                    <div class=\"tg-description\"><p>Consectetur adiaisicine elit eiusmod temtor incididunt ut laborei dolore matna alicua minim veniam.</p></div>
                                </div>
                                <div class=\"tg-regrightarea\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">";
        // line 921
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register Now"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Register Start
                *************************************-->
                <!--************************************
                                News Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"tg-newstrusted\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>";
        // line 939
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest News"), "html", null, true);
        echo "</h2>
                                        <img class=\"tg-svginject\" src=\"";
        // line 940
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/sectionline.svg"), "html", null, true);
        echo "\" alt=\"image description\">
                                    </div>
                                </div>
                                <div class=\"tg-latestnews\">
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 946
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-01.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">";
        // line 950
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>";
        // line 954
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 964
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-02.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">";
        // line 968
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>";
        // line 972
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"";
        // line 982
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/post/img-03.jpg"), "html", null, true);
        echo "\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">";
        // line 986
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Always Take Right Decision"), "html", null, true);
        echo "</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>";
        // line 990
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Posted By"), "html", null, true);
        echo ": </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                News & Trusted End
                *************************************-->
            </main>
            <!--************************************
                            Main End
            *************************************-->

        </div>
        <!--************************************
                        Wrapper End
        *************************************-->
        ";
        // line 1015
        $this->loadTemplate("default/footer.html.twig", "default/homepage.html.twig", 1015)->display($context);
        // line 1016
        echo "    ";
        
        $__internal_ec7550461101a900b4e4f3a499923a82d51412998a0a4ff8b6b089801ad02fc6->leave($__internal_ec7550461101a900b4e4f3a499923a82d51412998a0a4ff8b6b089801ad02fc6_prof);

        
        $__internal_fb8d72d10cf7df3e14e1c1cae5391fd013527f87a7aa787bfd3184f5cee41ae8->leave($__internal_fb8d72d10cf7df3e14e1c1cae5391fd013527f87a7aa787bfd3184f5cee41ae8_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1794 => 1016,  1792 => 1015,  1764 => 990,  1757 => 986,  1750 => 982,  1737 => 972,  1730 => 968,  1723 => 964,  1710 => 954,  1703 => 950,  1696 => 946,  1687 => 940,  1683 => 939,  1662 => 921,  1655 => 917,  1647 => 912,  1630 => 898,  1626 => 897,  1622 => 896,  1618 => 895,  1612 => 892,  1608 => 891,  1604 => 890,  1600 => 889,  1594 => 886,  1590 => 885,  1586 => 884,  1582 => 883,  1574 => 878,  1570 => 877,  1550 => 859,  1541 => 855,  1535 => 852,  1531 => 850,  1523 => 847,  1520 => 846,  1518 => 845,  1511 => 843,  1506 => 840,  1493 => 834,  1486 => 832,  1481 => 830,  1472 => 826,  1465 => 822,  1461 => 821,  1452 => 815,  1437 => 802,  1434 => 801,  1418 => 791,  1408 => 784,  1401 => 780,  1395 => 779,  1384 => 771,  1375 => 765,  1369 => 761,  1363 => 758,  1360 => 757,  1352 => 754,  1349 => 753,  1347 => 752,  1342 => 749,  1337 => 748,  1335 => 747,  1330 => 744,  1320 => 732,  1316 => 731,  1296 => 714,  1287 => 708,  1282 => 706,  1276 => 703,  1271 => 701,  1265 => 698,  1254 => 690,  1235 => 674,  1231 => 673,  1220 => 665,  1216 => 664,  1205 => 656,  1201 => 655,  1191 => 648,  1187 => 647,  1156 => 619,  1152 => 618,  1143 => 612,  1139 => 611,  1130 => 605,  1126 => 604,  1117 => 598,  1113 => 597,  1104 => 591,  1100 => 590,  1091 => 584,  1087 => 583,  1078 => 577,  1074 => 576,  1065 => 570,  1061 => 569,  1052 => 563,  1048 => 562,  1039 => 556,  1035 => 555,  1024 => 547,  1020 => 546,  1011 => 540,  1007 => 539,  998 => 533,  994 => 532,  985 => 526,  981 => 525,  972 => 519,  968 => 518,  959 => 512,  955 => 511,  946 => 505,  942 => 504,  933 => 498,  929 => 497,  920 => 491,  916 => 490,  907 => 484,  903 => 483,  892 => 475,  888 => 474,  879 => 468,  875 => 467,  866 => 461,  862 => 460,  853 => 454,  849 => 453,  840 => 447,  836 => 446,  827 => 440,  823 => 439,  814 => 433,  810 => 432,  801 => 426,  797 => 425,  788 => 419,  784 => 418,  775 => 412,  771 => 411,  760 => 403,  756 => 402,  747 => 396,  743 => 395,  734 => 389,  730 => 388,  721 => 382,  717 => 381,  708 => 375,  704 => 374,  695 => 368,  691 => 367,  682 => 361,  678 => 360,  669 => 354,  665 => 353,  656 => 347,  652 => 346,  643 => 340,  639 => 339,  628 => 331,  624 => 330,  615 => 324,  611 => 323,  602 => 317,  598 => 316,  589 => 310,  585 => 309,  576 => 303,  572 => 302,  563 => 296,  559 => 295,  550 => 289,  546 => 288,  537 => 282,  533 => 281,  524 => 275,  520 => 274,  511 => 268,  507 => 267,  496 => 259,  492 => 258,  483 => 252,  479 => 251,  470 => 245,  466 => 244,  457 => 238,  453 => 237,  444 => 231,  440 => 230,  431 => 224,  427 => 223,  418 => 217,  414 => 216,  405 => 210,  401 => 209,  392 => 203,  388 => 202,  379 => 196,  375 => 195,  364 => 187,  360 => 186,  351 => 180,  347 => 179,  338 => 173,  334 => 172,  325 => 166,  321 => 165,  312 => 159,  308 => 158,  299 => 152,  295 => 151,  286 => 145,  282 => 144,  273 => 138,  269 => 137,  260 => 131,  256 => 130,  247 => 124,  243 => 123,  232 => 115,  228 => 114,  219 => 108,  215 => 107,  206 => 101,  202 => 100,  193 => 94,  189 => 93,  180 => 87,  176 => 86,  167 => 80,  163 => 79,  154 => 73,  150 => 72,  141 => 66,  137 => 65,  128 => 59,  124 => 58,  115 => 52,  111 => 51,  95 => 38,  91 => 37,  85 => 34,  76 => 28,  67 => 22,  46 => 3,  28 => 2,  26 => 1,);
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
            {{  render(controller('AppBundle:Default:header')) }}
            <!--************************************
                            Home Banner Start
            *************************************-->
            <div id=\"tg-homebanner\" class=\"tg-homebanner tg-haslayout\">
                <figure class=\"tg-bannerbg\">
                    <img src=\"{{ asset('assets/images/banner/index.jpg') }}\" alt=\"image description\">
                </figure>
                <div class=\"tg-bannercontent\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <form class=\"tg-formtheme tg-formsearch\" action=\"{{ path('doctor_search') }}\" method=\"get\">
                                    <div class=\"tg-sectionhead\">
                                        <div class=\"tg-sectiontitle\">
                                            <h1>{{ 'Find a Medical Help'|trans }}!</h1>
                                            <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                        </div>
                                    </div>
                                    <fieldset>
                                        <input type=\"text\" name=\"mots\" class=\"form-control\" placeholder=\"Specialities, Doctors, Hospitals, Labs, Spas...\">
                                        <button type=\"submit\" class=\"tg-btnformsearch\"><i class=\"fa fa-search\"></i></button>
                                    </fieldset>
                                    <div class=\"tg-searchbulder\">
                                        <div id=\"tg-subcategories\" class=\"tg-subcategories\">
                                            <div id=\"doctorscategory\" class=\"tg-tabcontent tg-active\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"hospitalscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath2\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist2\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda2\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist2\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist2\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist2\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent2\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist2\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist2\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist2\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist2\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"spascategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist3\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent3\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist3\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist3\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist3\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath3\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist3\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda3\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist3\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist3\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist3\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"pharmaciescategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath4\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist4\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda4\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist4\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist4\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist4\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent4\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist4\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist4\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist4\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist4\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"labscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist5\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent5\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist5\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist5\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist5\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath5\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist5\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda5\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist5\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist5\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist5\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"fitnesscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath6\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist6\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda6\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist6\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist6\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist6\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent6\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist6\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist6\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist6\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist6\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"bloodbankcategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist7\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent7\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist7\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist7\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist7\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath7\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist7\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda7\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist7\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist7\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist7\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                            <div id=\"clinicscategory\" class=\"tg-tabcontent\">
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"homeopath8\" name=\"subcategory\" value=\"Homeopath\">
                                                    <label for=\"homeopath8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-21.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Homeopath'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ophthalmologist8\" name=\"subcategory\" value=\"Ophthalmologist\">
                                                    <label for=\"ophthalmologist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-22.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ophthalmologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ayurveda8\" name=\"subcategory\" value=\"Ayurveda\">
                                                    <label for=\"ayurveda8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-23.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ayurveda'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dermatologist8\" name=\"subcategory\" value=\"Dermatologist\">
                                                    <label for=\"dermatologist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-24.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dermatologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"neurologist8\" name=\"subcategory\" value=\"Neurologist\">
                                                    <label for=\"neurologist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-25.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Neurologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"dentist8\" name=\"subcategory\" value=\"Dentist\">
                                                    <label for=\"dentist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-16.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Dentist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"ent8\" name=\"subcategory\" value=\"Ear-Nose-Throat (ENT)\">
                                                    <label for=\"ent8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-17.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Ear-Nose-Throat'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"gastroenterologist8\" name=\"subcategory\" value=\"Gastroenterologist\">
                                                    <label for=\"gastroenterologist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-18.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Gastroenterologist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"psychiatrist8\" name=\"subcategory\" value=\"Psychiatrist\">
                                                    <label for=\"psychiatrist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-19.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Psychiatrist'|trans }}</span>
                                                    </label>
                                                </span>
                                                <span class=\"tg-checkbox tg-subcategorycheckbox\">
                                                    <input type=\"checkbox\" id=\"urologist8\" name=\"subcategory\" value=\"Urologist\">
                                                    <label for=\"urologist8\">
                                                        <span><img src=\"{{ asset('assets/images/icons/icon-20.png') }}\" alt=\"image description\"></span>
                                                        <span>{{ 'Urologist'|trans }}</span>
                                                    </label>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--************************************
                            Home Banner End
            *************************************-->
            <!--************************************
                            Main Start
            *************************************-->
            <main id=\"tg-main\" class=\"tg-main tg-haslayout\">
                <!--************************************
                                Features Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>{{ 'A Complete Medical Portal'|trans }}</h2>
                                        <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tg-features\">
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-02.png') }}\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">{{ 'Find Medical Help'|trans }}</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-03.png') }}\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">{{ 'Make Appointment'|trans }}</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-4 col-xs-12\">
                                    <div class=\"tg-feature\">
                                        <figure class=\"tg-featureicon\"><img src=\"{{ asset('assets/images/icons/icon-04.png') }}\" alt=\"image description\"></figure>
                                        <h3><a href=\"#\">{{ 'Get Facilitate'|trans }}</a></h3>
                                        <div class=\"tg-description\">
                                            <p>Consectetur adipisicing elit eiusmod tempor incididunt ut labore dolore magna aliqua minim veniam quis nostrud exercitation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Features End
                *************************************-->
                <!--************************************
                                Statistics Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg tg-imgoverlap\" data-bleed=\"-17\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-02.jpg') }}\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6 col-xs-12\">
                                <div class=\"tg-statisticscounters\">
                                    <div class=\"row\">
                                        <div class=\"tg-counter\">
                                            <h2><span data-from=\"0\" data-to=\"36012\" data-speed=\"8000\" data-refresh-interval=\"50\">36012</span></h2>
                                            <h3>{{ 'Happy Customers'|trans }}</h3>
                                        </div>
                                        <div class=\"tg-counter\">
                                            <figure><img src=\"{{ asset('assets/images/icons/icon-06.png') }}\" alt=\"image description\"></figure>
                                            <h2><span data-from=\"0\" data-to=\"21067\" data-speed=\"8000\" data-refresh-interval=\"50\">21067</span></h2>
                                            <h3>{{ 'Active Members'|trans }}</h3>
                                        </div>
                                        <div class=\"tg-counter\">
                                            <figure><img src=\"{{ asset('assets/images/icons/icon-07.png') }}\" alt=\"image description\"></figure>
                                            <h2><span data-from=\"0\" data-to=\"6954\" data-speed=\"8000\" data-refresh-interval=\"50\">6954</span></h2>
                                            <h3>{{ 'New Members'|trans }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6 hidden-xs\">
                                <figure class=\"tg-sectionimg\"><img src=\"{{ asset('assets/images/img-04.png') }}\" alt=\"image description\"></figure>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Statistics End
                *************************************-->
                <!--************************************
                                Featured DiretPost Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>{{ 'Featured Listings'|trans }}</h2>
                                        <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                    </div>
                                </div>
                                <ul id=\"tg-filterbalenav\" class=\"tg-filterbalenav option-set\">
                                    <li><a class=\"tg-active\" data-filter=\"*\" href=\"javascript:void(0);\">all</a></li>
                                    <li><a data-filter=\".doctors\" href=\"javascript:void(0);\">Doctors</a></li>
                                    <li><a data-filter=\".hospitals\" href=\"javascript:void(0);\">Hospitals</a></li>
                                        {#
                                        <li><a data-filter=\".spas\" href=\"javascript:void(0);\">Spas</a></li>
                                        <li><a data-filter=\".pharmacies\" href=\"javascript:void(0);\">Pharmacies</a></li>
                                        <li><a data-filter=\".lab\" href=\"javascript:void(0);\">Lab</a></li>
                                        <li><a data-filter=\".fitnesscenters\" href=\"javascript:void(0);\">Fitness Centers</a></li>#}
                                </ul>
                                <div id=\"filter-masonry\" class=\"tg-featureddirectposts tg-searchresult tg-filtermasonry\">

                                    {% if doctors != null %}
                                        {% for doctor in doctors %}

                                            <div class=\"tg-directpost doctors\">
                                                <figure style=\"width:120px; height: 120px\" class=\"tg-directpostimg\">
                                                    {% if vich_uploader_asset(doctor, 'imageFile') %}
                                                        <a href=\"#\">
                                                            <img src=\"{{ vich_uploader_asset(doctor, 'imageFile') }}\" alt=\"{{ doctor.image }}\" />
                                                        </a>
                                                    {% else %}
                                                        <a href=\"#\">
                                                            <img src=\"{{ asset('assets/images/directpost/img-02.jpg') }}\" alt=\"image description\">
                                                        </a>
                                                    {% endif %}
                                                    <figcaption>
                                                        <a class=\"tg-usericon tg-iconfeatured\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-bolt\"></i>
                                                                <span>{{ 'featured'|trans }}</span>
                                                            </em>
                                                        </a>
                                                        <a class=\"tg-usericon tg-iconvarified\" href=\"#\">
                                                            <em class=\"tg-usericonholder\">
                                                                <i class=\"fa fa-shield\"></i>
                                                                <span>{{ 'verified'|trans }}</span>
                                                            </em>
                                                        </a>
                                                    </figcaption>
                                                </figure>
                                                <div class=\"tg-directinfo\">
                                                    <div class=\"tg-leftarea\">
                                                        <div class=\"tg-directposthead\">
                                                            <h3><a href=\"#\">Dr. {{doctor.getFirstName()}} {{doctor.getLastName()}}</a></h3>
                                                            <div class=\"tg-subjects\">{{doctor.getProfessionalStatement()}}</div>
                                                        </div>
                                                        <ul class=\"tg-contactinfo\">
                                                            <li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>154 Bayswater Rd, W2 4HP, UK</address></a></li>
                                                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>{{doctor.getGSM()}}</span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class=\"tg-rightarea\">
                                                        <div class=\"tg-bookappoinment\">
                                                            <a href=\"#\"><i class=\"fa fa-thumbs-o-up\"></i>99%<span>(1009 votes)</span></a>
                                                            <button type=\"button\" class=\"tg-btn\" data-toggle=\"modal\" data-target=\"#tg-appointmentlightbox\">
                                                                {{ 'Book Appointment'|trans }}</button>
                                                            <ul class=\"tg-metadata\">
                                                                <li><span class=\"tg-stars\"><span></span></span></li>
                                                                <li><a href=\"#\"><i class=\"fa fa-heart tg-like\"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}
                                    {% endif %}


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Featured DiretPost End
                *************************************-->
                <!--************************************
                                Student Review Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-03.jpg') }}\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-md-offset-1 col-sm-12 col-xs-12\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>{{ 'Valuable Feedback'|trans }}</h2>
                                        <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                    </div>
                                </div>
                                <div id=\"tg-feedbackslider\" class=\"tg-feedbackslider tg-feedback\">
                                    {% for dataComment in dataComments %} 
                                        <div class=\"item\">
                                            <div class=\"tg-feedbackcontent\">
                                                <blockquote>
                                                    <q>{{dataComment.Comments}}</q>
                                                </blockquote>
                                                <h3>Dr. {{dataComment.doctor.getFirstName()}} {{dataComment.doctor.getLastName()}}</h3>
                                                <ul class=\"tg-metadata\">
                                                    <li><span>{{dataComment.doctor.getProfessionalStatement()}} </span></li>
                                                    <li><span class=\"tg-tooltip tg-stars\" data-toggle=\"tooltip\" data-placement=\"top right\" title=\"Moyenne de 4,85 sur la base de 423 avis\"><span></span></span></li>
                                                </ul>
                                            </div>
                                        </div>

                                    {% endfor %} 
                                </div>
                                <div id=\"tg-reviewerdpslider\" class=\"tg-reviewerdpslider tg-reviewerdp\">
                                    {% for dataComment in dataComments %} 
                                        <div class=\"item\">
                                            {% if dataComment.doctor.image %}
                                                <figure class=\"tg-directpostimg\"> 
                                                    <img src=\"{{ vich_uploader_asset(dataComment.doctor, 'imageFile') }}\" alt=\"{{ dataComment.doctor.image }}\" />
                                                </figure>
                                            {% else %}

                                                <figure>
                                                    <img src=\"{{ asset('assets/images/thumbnails/img-01.jpg') }}\" alt=\"image description\">
                                                </figure>
                                            {% endif %}


                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Student Review End
                *************************************-->
                <!--************************************
                                Trusted By Many Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-12 col-sm-12 col-xs-12\">
                                <div class=\"tg-trustedbymany\">
                                    <div class=\"tg-sectionhead\">
                                        <div class=\"tg-sectiontitle\">
                                            <h2>{{ 'Trusted By Many'|trans }}</h2>
                                            <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                        </div>
                                    </div>
                                    <div id=\"tg-brandsslider\" class=\"tg-brandsslider tg-brands\">
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
                                        </div>
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
                                        </div>
                                        <div class=\"item\">
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-01.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-02.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-03.png') }}\" alt=\"image description\"></a></figure>
                                            <figure><a href=\"#\"><img src=\"{{ asset('assets/images/brands/img-04.png') }}\" alt=\"image description\"></a></figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Trusted By Many Start
                *************************************-->
                <!--************************************
                                Register Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout tg-parallaximg\" data-position-x=\"center\" data-position-y=\"center\" data-appear-top-offset=\"600\" data-parallax=\"scroll\" data-bleed=\"0\" data-image-src=\"{{ asset('assets/images/parallax/bgparallax-04.jpg') }}\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"tg-freeregistration\">
                                <div class=\"tg-regleftarea\">
                                    <h2>{{ 'Register For Free'|trans }}!</h2>
                                    <div class=\"tg-description\"><p>Consectetur adiaisicine elit eiusmod temtor incididunt ut laborei dolore matna alicua minim veniam.</p></div>
                                </div>
                                <div class=\"tg-regrightarea\">
                                    <a class=\"tg-btn\" href=\"javascript:void(0);\">{{ 'Register Now'|trans }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                Register Start
                *************************************-->
                <!--************************************
                                News Start
                *************************************-->
                <section class=\"tg-main-section tg-haslayout\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"tg-newstrusted\">
                                <div class=\"tg-sectionhead\">
                                    <div class=\"tg-sectiontitle\">
                                        <h2>{{ 'Latest News'|trans }}</h2>
                                        <img class=\"tg-svginject\" src=\"{{ asset('assets/images/sectionline.svg') }}\" alt=\"image description\">
                                    </div>
                                </div>
                                <div class=\"tg-latestnews\">
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-01.jpg') }}\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>{{ 'Posted By'|trans }}: </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-02.jpg') }}\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>{{ 'Posted By'|trans }}: </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <article class=\"tg-post\">
                                            <figure class=\"tg-postimg\"><a href=\"#\"><img src=\"{{ asset('assets/images/post/img-03.jpg') }}\" alt=\"image description\"></a></figure>
                                            <div class=\"tg-postcontent\">
                                                <time class=\"tg-postdate\" datetime=\"2011-10-10\">Juin <span>27</span></time>
                                                <div class=\"tg-posttitle\">
                                                    <h3><a href=\"#\">{{ 'Always Take Right Decision'|trans }}</a></h3>
                                                </div>
                                                <ul class=\"tg-metadata\">
                                                    <li>
                                                        <em>{{ 'Posted By'|trans }}: </em>
                                                        <a href=\"#\">Pricilla Nader</a>
                                                    </li>
                                                </ul>
                                                <div class=\"tg-description\"><p>Consectetur adipisicing elit eiusmod ipor incididunt utreiat.</p></div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                                News & Trusted End
                *************************************-->
            </main>
            <!--************************************
                            Main End
            *************************************-->

        </div>
        <!--************************************
                        Wrapper End
        *************************************-->
        {% include ('default/footer.html.twig') %}
    {% endblock %}", "default/homepage.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\default\\homepage.html.twig");
    }
}
