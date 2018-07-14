<?php

/* default/footer.html.twig */
class __TwigTemplate_5d9cf3b4df1d472ef4103c4378fdcdfddb9ccc167a96f34b48586da3db630f5d extends Twig_Template
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
        $__internal_df45379b28a91b402f63363a8de48597d1cf8fee27e443f55ff2d79578d69968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df45379b28a91b402f63363a8de48597d1cf8fee27e443f55ff2d79578d69968->enter($__internal_df45379b28a91b402f63363a8de48597d1cf8fee27e443f55ff2d79578d69968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_2784ad14a1da657a464f21e569adaae69b7f1964a7d338cf07814f0ceb1ae4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2784ad14a1da657a464f21e569adaae69b7f1964a7d338cf07814f0ceb1ae4ed->enter($__internal_2784ad14a1da657a464f21e569adaae69b7f1964a7d338cf07814f0ceb1ae4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        echo "<!--************************************
\t\t\t\tFooter Start
\t\t*************************************-->
<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
    <div class=\"tg-subscribe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-fcols\">
                    <div class=\"col-sm-3\">

                    </div>
                    <div class=\"col-sm-9\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"tg-quicklinks\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-fcols\">
                    <div class=\"tg-fcol\">
                        <strong class=\"tg-logo\">
                            <a href=\"index.html\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"image description\"></a>
                        </strong>
                        <ul class=\"tg-contactinfo\">
                            <li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>Consectetur aelit 2456, AC1255 Manchester, UK</address></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 06 50 25 25 25</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i><span>contact@e-zeedoc.com</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-fax\"></i><span>+33 06 45 45 45 45</span></a></li>
                        </ul>
                        <ul class=\"tg-socialsharewithtext\">
                            <li class=\"tg-facebook\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-facebook-f\"></i>
                                        <span>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on facebook"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-twitter\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-twitter\"></i>
                                        <span>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on twitter"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-linkedin\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-linkedin\"></i>
                                        <span>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on linkdin"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-googleplus\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-google-plus\"></i>
                                        <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on google"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-rss\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-rss\"></i>
                                        <span>";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on RSS"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-youtube\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                        <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("share on YouTube"), "html", null, true);
        echo "</span>
                                    </em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"tg-fcol tg-specialities\">
                        <div class=\"tg-title\">
                            <h3>";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Top Specialities"), "html", null, true);
        echo "</h3>
                        </div>
                        <ul>
                            <li><a href=\"#\">Arnos Grove</a></li>
                            <li><a href=\"#\">Dalston</a></li>
                            <li><a href=\"#\">Balham</a></li>
                            <li><a href=\"#\">Denmark Hill</a></li>
                            <li><a href=\"#\">Barkingside</a></li>
                            <li><a href=\"#\">Derry Downs</a></li>
                            <li><a href=\"#\">Barnes Cray</a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\">East Bedfont</a></li>
                            <li><a href=\"#\">Camden Town</a></li>
                            <li><a href=\"#\">Eden Park</a></li>
                            <li><a href=\"#\">Canonbury</a></li>
                            <li><a href=\"#\">";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View All"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                    <div class=\"tg-fcol tg-latestlistings\">
                        <div class=\"tg-title\">
                            <h3>";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Latest Listings"), "html", null, true);
        echo "</h3>
                        </div>
                        <ul>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-08.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-09.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/directpost/img-10.jpg"), "html", null, true);
        echo "\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                        </ul>
                        <a class=\"tg-btnviewmore\" href=\"javascript:void(0);\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View All"), "html", null, true);
        echo " <i class=\"fa fa-angle-double-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"tg-footerbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-xs-12\">
                    <nav id=\"tg-footernav\" class=\"tg-footernav\">
                        <ul>
                            <li class=\"tg-active\"><a href=\"\">";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"\">";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("About"), "html", null, true);
        echo "</a></li>
                            <li><a href=\"\">";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("How It Works"), "html", null, true);
        echo "?</a></li>
                            <li><a href=\"\">";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Categories"), "html", null, true);
        echo "</a></li>
                        </ul>
                    </nav>
                    <span class=\"tg-copyright\">2017 All Rights Reserved &copy; <a href=\"#\">Frontonis</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->";
        
        $__internal_df45379b28a91b402f63363a8de48597d1cf8fee27e443f55ff2d79578d69968->leave($__internal_df45379b28a91b402f63363a8de48597d1cf8fee27e443f55ff2d79578d69968_prof);

        
        $__internal_2784ad14a1da657a464f21e569adaae69b7f1964a7d338cf07814f0ceb1ae4ed->leave($__internal_2784ad14a1da657a464f21e569adaae69b7f1964a7d338cf07814f0ceb1ae4ed_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 153,  226 => 152,  222 => 151,  218 => 150,  203 => 138,  192 => 130,  180 => 121,  168 => 112,  160 => 107,  152 => 102,  133 => 86,  122 => 78,  111 => 70,  100 => 62,  89 => 54,  78 => 46,  67 => 38,  51 => 25,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!--************************************
\t\t\t\tFooter Start
\t\t*************************************-->
<footer id=\"tg-footer\" class=\"tg-footer tg-haslayout\">
    <div class=\"tg-subscribe\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-fcols\">
                    <div class=\"col-sm-3\">

                    </div>
                    <div class=\"col-sm-9\">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"tg-quicklinks\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"tg-fcols\">
                    <div class=\"tg-fcol\">
                        <strong class=\"tg-logo\">
                            <a href=\"index.html\"><img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"image description\"></a>
                        </strong>
                        <ul class=\"tg-contactinfo\">
                            <li><a href=\"#\"><i class=\"fa fa-location-arrow\"></i><address>Consectetur aelit 2456, AC1255 Manchester, UK</address></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\"></i><span>+33 06 50 25 25 25</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i><span>contact@e-zeedoc.com</span></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-fax\"></i><span>+33 06 45 45 45 45</span></a></li>
                        </ul>
                        <ul class=\"tg-socialsharewithtext\">
                            <li class=\"tg-facebook\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-facebook-f\"></i>
                                        <span>{{ 'share on facebook'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-twitter\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-twitter\"></i>
                                        <span>{{ 'share on twitter'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-linkedin\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-linkedin\"></i>
                                        <span>{{ 'share on linkdin'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-googleplus\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-google-plus\"></i>
                                        <span>{{ 'share on google'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-rss\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-rss\"></i>
                                        <span>{{ 'share on RSS'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                            <li class=\"tg-youtube\">
                                <a class=\"tg-roundicontext\" href=\"#\">
                                    <em class=\"tg-usericonholder\">
                                        <i class=\"fa fa-youtube-play\"></i>
                                        <span>{{ 'share on YouTube'|trans }}</span>
                                    </em>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"tg-fcol tg-specialities\">
                        <div class=\"tg-title\">
                            <h3>{{ 'Top Specialities'|trans }}</h3>
                        </div>
                        <ul>
                            <li><a href=\"#\">Arnos Grove</a></li>
                            <li><a href=\"#\">Dalston</a></li>
                            <li><a href=\"#\">Balham</a></li>
                            <li><a href=\"#\">Denmark Hill</a></li>
                            <li><a href=\"#\">Barkingside</a></li>
                            <li><a href=\"#\">Derry Downs</a></li>
                            <li><a href=\"#\">Barnes Cray</a></li>
                        </ul>
                        <ul>
                            <li><a href=\"#\">East Bedfont</a></li>
                            <li><a href=\"#\">Camden Town</a></li>
                            <li><a href=\"#\">Eden Park</a></li>
                            <li><a href=\"#\">Canonbury</a></li>
                            <li><a href=\"#\">{{ 'View All'|trans }}</a></li>
                        </ul>
                    </div>
                    <div class=\"tg-fcol tg-latestlistings\">
                        <div class=\"tg-title\">
                            <h3>{{ 'Latest Listings'|trans }}</h3>
                        </div>
                        <ul>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"{{ asset('assets/images/directpost/img-08.jpg') }}\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"{{ asset('assets/images/directpost/img-09.jpg') }}\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                            <li>
                                <figure class=\"tg-authordp\">
                                    <img src=\"{{ asset('assets/images/directpost/img-10.jpg') }}\" alt=\"image description\">
                                </figure>
                                <div class=\"tg-directposthead\">
                                    <h3><a href=\"#\">Dr. David Pujol</a></h3>
                                    <div class=\"tg-subjects\">MDS - Pédiatre &amp; Dentiste</div>
                                </div>
                            </li>
                        </ul>
                        <a class=\"tg-btnviewmore\" href=\"javascript:void(0);\">{{ 'View All'|trans }} <i class=\"fa fa-angle-double-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"tg-footerbar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 col-xs-12\">
                    <nav id=\"tg-footernav\" class=\"tg-footernav\">
                        <ul>
                            <li class=\"tg-active\"><a href=\"\">{{ 'Home'|trans }}</a></li>
                            <li><a href=\"\">{{ 'About'|trans }}</a></li>
                            <li><a href=\"\">{{ 'How It Works'|trans }}?</a></li>
                            <li><a href=\"\">{{ 'Categories'|trans }}</a></li>
                        </ul>
                    </nav>
                    <span class=\"tg-copyright\">2017 All Rights Reserved &copy; <a href=\"#\">Frontonis</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--************************************
        Footer End
*************************************-->", "default/footer.html.twig", "C:\\wamp64\\www\\varan\\app\\Resources\\views\\default\\footer.html.twig");
    }
}
