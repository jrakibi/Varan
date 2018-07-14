<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/horaire')) {
            // horaire_index
            if ('/horaire' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_horaire_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'horaire_index');
                }

                return array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::indexAction',  '_route' => 'horaire_index',);
            }
            not_horaire_index:

            // horaire_new
            if ('/horaire/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horaire_new;
                }

                return array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::newAction',  '_route' => 'horaire_new',);
            }
            not_horaire_new:

            // horaire_show
            if (preg_match('#^/horaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_horaire_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horaire_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::showAction',));
            }
            not_horaire_show:

            // horaire_edit
            if (preg_match('#^/horaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_horaire_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horaire_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::editAction',));
            }
            not_horaire_edit:

            // horaire_delete
            if (preg_match('#^/horaire/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_horaire_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'horaire_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::deleteAction',));
            }
            not_horaire_delete:

            // horaire_add
            if ('/horaire/horaire/add' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_horaire_add;
                }

                return array (  '_controller' => 'DoctorsBundle\\Controller\\HoraireController::addHoraireAction',  '_route' => 'horaire_add',);
            }
            not_horaire_add:

        }

        elseif (0 === strpos($pathinfo, '/Admin')) {
            // admin_homepage
            if ('/Admin' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_homepage',);
            }

            // admin_homepage_login
            if ('/Admin/Login' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::loginAction',  '_route' => 'admin_homepage_login',);
            }

            // admin_homepage_logout
            if ('/Admin/Logout' === $pathinfo) {
                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'admin_homepage_logout',);
            }

            if (0 === strpos($pathinfo, '/Admin/Weekends')) {
                // admin_holiday_index_weekend
                if ('/Admin/Weekends' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::indexAction',  '_route' => 'admin_holiday_index_weekend',);
                }

                // admin_holiday_index_weekend_add
                if ('/Admin/Weekends/New' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::addweekendAction',  '_route' => 'admin_holiday_index_weekend_add',);
                }

                // admin_holiday_index_weekend_delete
                if (0 === strpos($pathinfo, '/Admin/Weekends/Delete') && preg_match('#^/Admin/Weekends/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_holiday_index_weekend_delete')), array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::deleteweekendAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/Admin/PublicHolidays')) {
                // admin_holiday_index_pHoliday
                if ('/Admin/PublicHolidays' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::publicholidaysAction',  '_route' => 'admin_holiday_index_pHoliday',);
                }

                // admin_holiday_index_pHoliday_add
                if ('/Admin/PublicHolidays/New' === $pathinfo) {
                    return array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::addphAction',  '_route' => 'admin_holiday_index_pHoliday_add',);
                }

                // admin_holiday_index_pHoliday_delete
                if (0 === strpos($pathinfo, '/Admin/PublicHolidays/Delete') && preg_match('#^/Admin/PublicHolidays/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_holiday_index_pHoliday_delete')), array (  '_controller' => 'AdminBundle\\Controller\\HolidayController::deletephAction',));
                }

            }

        }

        // data_homepage
        if ('/data/data1234' === $pathinfo) {
            return array (  '_controller' => 'DataBundle\\Controller\\DefaultController::indexAction',  '_route' => 'data_homepage',);
        }

        if (0 === strpos($pathinfo, '/doctors')) {
            if (0 === strpos($pathinfo, '/doctors/specialities')) {
                // specialities_index
                if ('/doctors/specialities' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_specialities_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'specialities_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SpecialitiesController::indexAction',  '_route' => 'specialities_index',);
                }
                not_specialities_index:

                // specialities_show
                if (preg_match('#^/doctors/specialities/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_specialities_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialities_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\SpecialitiesController::showAction',));
                }
                not_specialities_show:

                // specialities_new
                if ('/doctors/specialities/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_specialities_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SpecialitiesController::newAction',  '_route' => 'specialities_new',);
                }
                not_specialities_new:

                // specialities_edit
                if (preg_match('#^/doctors/specialities/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_specialities_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialities_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\SpecialitiesController::editAction',));
                }
                not_specialities_edit:

                // specialities_delete
                if (preg_match('#^/doctors/specialities/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_specialities_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'specialities_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\SpecialitiesController::deleteAction',));
                }
                not_specialities_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/socialinformation')) {
                // socialinformation_index
                if ('/doctors/socialinformation' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_socialinformation_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'socialinformation_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SocialInformationController::indexAction',  '_route' => 'socialinformation_index',);
                }
                not_socialinformation_index:

                // socialinformation_show
                if (preg_match('#^/doctors/socialinformation/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_socialinformation_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialinformation_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\SocialInformationController::showAction',));
                }
                not_socialinformation_show:

                // socialinformation_new
                if ('/doctors/socialinformation/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_socialinformation_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SocialInformationController::newAction',  '_route' => 'socialinformation_new',);
                }
                not_socialinformation_new:

                // socialinformation_edit
                if (preg_match('#^/doctors/socialinformation/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_socialinformation_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialinformation_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\SocialInformationController::editAction',));
                }
                not_socialinformation_edit:

                // socialinformation_delete
                if (preg_match('#^/doctors/socialinformation/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_socialinformation_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'socialinformation_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\SocialInformationController::deleteAction',));
                }
                not_socialinformation_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/locations')) {
                // locations_index
                if ('/doctors/locations' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_locations_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'locations_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::indexAction',  '_route' => 'locations_index',);
                }
                not_locations_index:

                // locations_show
                if (preg_match('#^/doctors/locations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_locations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locations_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::showAction',));
                }
                not_locations_show:

                // locations_new
                if ('/doctors/locations/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_locations_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::newAction',  '_route' => 'locations_new',);
                }
                not_locations_new:

                // locations_edit
                if (preg_match('#^/doctors/locations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_locations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locations_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::editAction',));
                }
                not_locations_edit:

                // locations_delete
                if (preg_match('#^/doctors/locations/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_locations_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locations_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::deleteAction',));
                }
                not_locations_delete:

                // locations_updatepublc
                if (preg_match('#^/doctors/locations/(?P<id>[^/]++)/updatePublc$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_locations_updatepublc;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'locations_updatepublc')), array (  '_controller' => 'DoctorsBundle\\Controller\\LocationsController::changePublicAction',));
                }
                not_locations_updatepublc:

            }

            elseif (0 === strpos($pathinfo, '/doctors/educations')) {
                // educations_index
                if ('/doctors/educations' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_educations_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'educations_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::indexAction',  '_route' => 'educations_index',);
                }
                not_educations_index:

                // educations_show
                if (preg_match('#^/doctors/educations/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_educations_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'educations_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::showAction',));
                }
                not_educations_show:

                // educations_new
                if ('/doctors/educations/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_educations_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::newAction',  '_route' => 'educations_new',);
                }
                not_educations_new:

                // educations_addEducation
                if ('/doctors/educations/addEducation' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::addEducationAction',  '_route' => 'educations_addEducation',);
                }

                // educations_edit
                if (preg_match('#^/doctors/educations/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_educations_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'educations_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::editAction',));
                }
                not_educations_edit:

                // educations_delete
                if (preg_match('#^/doctors/educations/(?P<education>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'educations_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\EducationsController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/doctors/doctor')) {
                // doctors_index
                if ('/doctors/doctor' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_doctors_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'doctors_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::indexAction',  '_route' => 'doctors_index',);
                }
                not_doctors_index:

                // doctor_search
                if ('/doctors/doctor/search' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_doctor_search;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::searchAction',  '_route' => 'doctor_search',);
                }
                not_doctor_search:

                // doctors_show
                if (preg_match('#^/doctors/doctor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_doctors_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::showAction',));
                }
                not_doctors_show:

                // doctor_detail
                if (preg_match('#^/doctors/doctor/(?P<doctor>[^/]++)/details$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_doctor_detail;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctor_detail')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::detailsAction',));
                }
                not_doctor_detail:

                // doctors_new
                if ('/doctors/doctor/CreateAccountStep1' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_doctors_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::newAction',  '_route' => 'doctors_new',);
                }
                not_doctors_new:

                // doctors_create
                if ('/doctors/doctor/CreateAccountStep2' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::createAction',  '_route' => 'doctors_create',);
                }

                // doctors_addSpecialitie
                if ('/doctors/doctor/addSpecialitie' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::addSpecialitieAction',  '_route' => 'doctors_addSpecialitie',);
                }

                // doctor_verifierNom
                if ('/doctors/doctor/verifierNom' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::verifierNomAction',  '_route' => 'doctor_verifierNom',);
                }

                // doctor_verifierPrenom
                if ('/doctors/doctor/verifierPrenom' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::verifierPrenomAction',  '_route' => 'doctor_verifierPrenom',);
                }

                // doctors_edit
                if (preg_match('#^/doctors/doctor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_doctors_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::editAction',));
                }
                not_doctors_edit:

                // doctors_delete
                if (preg_match('#^/doctors/doctor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_doctors_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::deleteAction',));
                }
                not_doctors_delete:

                // doctor_deleteSpecialitie
                if (preg_match('#^/doctors/doctor/(?P<id>[^/]++)/deleteSpecialitie$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctor_deleteSpecialitie')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::deleteSpecialitieAction',));
                }

                // doctors_image_edit
                if (preg_match('#^/doctors/doctor/(?P<id>[^/]++)/imageEdit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_doctors_image_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_image_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\DoctorsController::profileEditImageAction',));
                }
                not_doctors_image_edit:

            }

            // doctors_homepage
            if ('/doctors' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'doctors_homepage');
                }

                return array (  '_controller' => 'DoctorsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'doctors_homepage',);
            }

            if (0 === strpos($pathinfo, '/doctors/invoices')) {
                // invoices_index
                if (preg_match('#^/doctors/invoices/(?P<doctor>[^/]++)/(?P<service>[^/]++)/index$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_invoices_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoices_index')), array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::indexAction',));
                }
                not_invoices_index:

                // invoices_listSubServices
                if (preg_match('#^/doctors/invoices/(?P<doctor>[^/]++)/(?P<service>[^/]++)/listSubService$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_invoices_listSubServices;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoices_listSubServices')), array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::listSubServicesByDoctorAction',));
                }
                not_invoices_listSubServices:

                // invoices_show
                if (preg_match('#^/doctors/invoices/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_invoices_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoices_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::showAction',));
                }
                not_invoices_show:

                // invoices_new
                if ('/doctors/invoices/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_invoices_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::newAction',  '_route' => 'invoices_new',);
                }
                not_invoices_new:

                // invoices_edit
                if (preg_match('#^/doctors/invoices/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_invoices_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoices_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::editAction',));
                }
                not_invoices_edit:

                // invoices_delete
                if (preg_match('#^/doctors/invoices/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('DELETE', 'GET'))) {
                        $allow = array_merge($allow, array('DELETE', 'GET'));
                        goto not_invoices_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'invoices_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\InvoicesController::deleteAction',));
                }
                not_invoices_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/subservices')) {
                // subservices_index
                if ('/doctors/subservices' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_subservices_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'subservices_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::indexAction',  '_route' => 'subservices_index',);
                }
                not_subservices_index:

                // subservices_comboSubServicesByService
                if (preg_match('#^/doctors/subservices/(?P<service>[^/]++)/comboSubServices$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subservices_comboSubServicesByService')), array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::comboSubServicesByServiceAction',));
                }

                // subservices_show
                if (preg_match('#^/doctors/subservices/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_subservices_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subservices_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::showAction',));
                }
                not_subservices_show:

                // subservices_new
                if ('/doctors/subservices/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subservices_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::newAction',  '_route' => 'subservices_new',);
                }
                not_subservices_new:

                // subservices_edit
                if (preg_match('#^/doctors/subservices/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_subservices_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subservices_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::editAction',));
                }
                not_subservices_edit:

                // subservices_delete
                if (preg_match('#^/doctors/subservices/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_subservices_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'subservices_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\SubServicesController::deleteAction',));
                }
                not_subservices_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/services')) {
                // services_index
                if (preg_match('#^/doctors/services/(?P<doctor>[^/]++)/index$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_services_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_index')), array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::indexAction',));
                }
                not_services_index:

                // services_settings
                if ('/doctors/services/settings' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_services_settings;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::settingsAction',  '_route' => 'services_settings',);
                }
                not_services_settings:

                // services_comboServicesBySpecialitie
                if (preg_match('#^/doctors/services/(?P<specialitie>[^/]++)/comboSpecialitie$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_services_comboServicesBySpecialitie;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_comboServicesBySpecialitie')), array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::comboServicesBySpecialitieAction',));
                }
                not_services_comboServicesBySpecialitie:

                // services_show
                if (preg_match('#^/doctors/services/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_services_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::showAction',));
                }
                not_services_show:

                // services_new
                if ('/doctors/services/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_services_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::newAction',  '_route' => 'services_new',);
                }
                not_services_new:

                // services_edit
                if (preg_match('#^/doctors/services/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_services_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::editAction',));
                }
                not_services_edit:

                // services_delete
                if (preg_match('#^/doctors/services/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_services_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'services_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\ServicesController::deleteAction',));
                }
                not_services_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/certifications')) {
                // certifications_index
                if ('/doctors/certifications' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_certifications_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'certifications_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::indexAction',  '_route' => 'certifications_index',);
                }
                not_certifications_index:

                // certifications_show
                if (preg_match('#^/doctors/certifications/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_certifications_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'certifications_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::showAction',));
                }
                not_certifications_show:

                // certifications_new
                if ('/doctors/certifications/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_certifications_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::newAction',  '_route' => 'certifications_new',);
                }
                not_certifications_new:

                // certifications_addCertification
                if ('/doctors/certifications/addCertification' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::addCertificationAction',  '_route' => 'certifications_addCertification',);
                }

                // certifications_edit
                if (preg_match('#^/doctors/certifications/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_certifications_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'certifications_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::editAction',));
                }
                not_certifications_edit:

                // certifications_delete
                if (preg_match('#^/doctors/certifications/(?P<certification>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'certifications_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\CertificationsController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/doctors/reviews')) {
                // reviews_index
                if ('/doctors/reviews' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviews_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reviews_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\ReviewsController::indexAction',  '_route' => 'reviews_index',);
                }
                not_reviews_index:

                // reviews_new
                if ('/doctors/reviews/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reviews_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\ReviewsController::newAction',  '_route' => 'reviews_new',);
                }
                not_reviews_new:

                // reviews_show
                if (preg_match('#^/doctors/reviews/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviews_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviews_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\ReviewsController::showAction',));
                }
                not_reviews_show:

                // reviews_edit
                if (preg_match('#^/doctors/reviews/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reviews_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviews_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\ReviewsController::editAction',));
                }
                not_reviews_edit:

                // reviews_delete
                if (preg_match('#^/doctors/reviews/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reviews_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviews_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\ReviewsController::deleteAction',));
                }
                not_reviews_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/questions')) {
                // questions_index
                if ('/doctors/questions' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_questions_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'questions_index');
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\QuestionsController::indexAction',  '_route' => 'questions_index',);
                }
                not_questions_index:

                // questions_show
                if (preg_match('#^/doctors/questions/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_questions_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questions_show')), array (  '_controller' => 'DoctorsBundle\\Controller\\QuestionsController::showAction',));
                }
                not_questions_show:

                // questions_new
                if ('/doctors/questions/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_questions_new;
                    }

                    return array (  '_controller' => 'DoctorsBundle\\Controller\\QuestionsController::newAction',  '_route' => 'questions_new',);
                }
                not_questions_new:

                // questions_edit
                if (preg_match('#^/doctors/questions/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_questions_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questions_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\QuestionsController::editAction',));
                }
                not_questions_edit:

                // questions_delete
                if (preg_match('#^/doctors/questions/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_questions_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'questions_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\QuestionsController::deleteAction',));
                }
                not_questions_delete:

            }

            elseif (0 === strpos($pathinfo, '/doctors/patient/display')) {
                // patient_doctor_display
                if ('/doctors/patient/display' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\PatientController::displayAction',  '_route' => 'patient_doctor_display',);
                }

                // patient_doctor_display_changestatus
                if ('/doctors/patient/display/ChangeStatus' === $pathinfo) {
                    return array (  '_controller' => 'DoctorsBundle\\Controller\\PatientController::changestatusAction',  '_route' => 'patient_doctor_display_changestatus',);
                }

            }

            elseif (0 === strpos($pathinfo, '/doctors/Location/Comments')) {
                // doctors_comments
                if (preg_match('#^/doctors/Location/Comments/(?P<location>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_comments')), array (  '_controller' => 'DoctorsBundle\\Controller\\CommentsController::indexAction',));
                }

                // doctors_comments_new
                if (0 === strpos($pathinfo, '/doctors/Location/Comments/New') && preg_match('#^/doctors/Location/Comments/New/(?P<location>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_comments_new')), array (  '_controller' => 'DoctorsBundle\\Controller\\CommentsController::newAction',));
                }

                // doctors_comments_delete
                if (0 === strpos($pathinfo, '/doctors/Location/Comments/Delete') && preg_match('#^/doctors/Location/Comments/Delete/(?P<comment>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_comments_delete')), array (  '_controller' => 'DoctorsBundle\\Controller\\CommentsController::deleteAction',));
                }

                // doctors_comments_edit
                if (0 === strpos($pathinfo, '/doctors/Location/Comments/Edit') && preg_match('#^/doctors/Location/Comments/Edit/(?P<comment>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'doctors_comments_edit')), array (  '_controller' => 'DoctorsBundle\\Controller\\CommentsController::editAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/calendries')) {
            // calendries_index
            if (preg_match('#^/calendries/(?P<id>[^/]++)/calendrier$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_index')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::indexAction',));
            }
            not_calendries_index:

            // calendries_activation
            if (preg_match('#^/calendries/(?P<id>[^/]++)/(?P<active>[^/]++)/activation$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_activation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_activation')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::activationAction',));
            }
            not_calendries_activation:

            // calendries_show
            if (preg_match('#^/calendries/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_show')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::showAction',));
            }
            not_calendries_show:

            // calendries_getCalendriesByLocation
            if (preg_match('#^/calendries/(?P<location>[^/]++)/getCalendriesByLocation$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_getCalendriesByLocation;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_getCalendriesByLocation')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::getCalendriesByLocationAction',));
            }
            not_calendries_getCalendriesByLocation:

            // calendries_getCalendriesByLocationByDate
            if (preg_match('#^/calendries/(?P<location>[^/]++)/(?P<date>[^/]++)/getCalendriesByLocationByDate$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_getCalendriesByLocationByDate;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_getCalendriesByLocationByDate')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::getCalendriesByLocationByDateAction',));
            }
            not_calendries_getCalendriesByLocationByDate:

            // calendries_new
            if ('/calendries/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_calendries_new;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::newAction',  '_route' => 'calendries_new',);
            }
            not_calendries_new:

            // calendries_edit
            if (preg_match('#^/calendries/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_calendries_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_edit')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::editAction',));
            }
            not_calendries_edit:

            // calendries_delete
            if (preg_match('#^/calendries/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::deleteAction',));
            }
            not_calendries_delete:

            // calendries_absence
            if (preg_match('#^/calendries/(?P<id>[^/]++)/absence$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_absence;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_absence')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::absenceAction',));
            }
            not_calendries_absence:

            // calendries_create_absence
            if ('/calendries/Create/Absence' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_calendries_create_absence;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::createabsenceAction',  '_route' => 'calendries_create_absence',);
            }
            not_calendries_create_absence:

            // calendries_create_app
            if ('/calendries/Create/Appointment' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_calendries_create_app;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::createappAction',  '_route' => 'calendries_create_app',);
            }
            not_calendries_create_app:

            // calendries_duplicate_app
            if (0 === strpos($pathinfo, '/calendries/Duplicate/Appointment') && preg_match('#^/calendries/Duplicate/Appointment/(?P<calendrie>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_calendries_duplicate_app;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_duplicate_app')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::copyadayAction',));
            }
            not_calendries_duplicate_app:

            // calendries_check_app
            if ('/calendries/Duplicate/Check/Appointment' === $pathinfo) {
                return array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::checkCalendrieAction',  '_route' => 'calendries_check_app',);
            }

            // calendries_publier
            if (preg_match('#^/calendries/(?P<id>[^/]++)/publier$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_calendries_publier;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_publier')), array (  '_controller' => 'AppointmentsBundle\\Controller\\CalendriesController::publierAction',));
            }
            not_calendries_publier:

        }

        elseif (0 === strpos($pathinfo, '/seances')) {
            // seances_index
            if (preg_match('#^/seances/(?P<calendrie>[^/]++)/?$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_seances_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'seances_index');
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_index')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::indexAction',));
            }
            not_seances_index:

            // seances_index_getSeancesByDoctor
            if (0 === strpos($pathinfo, '/seances/Locations') && preg_match('#^/seances/Locations/(?P<location>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_index_getSeancesByDoctor')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::getSeancesByDoctorAction',));
            }

            // seances_takeAppointement
            if (preg_match('#^/seances/(?P<id>[^/]++)/takeAppointement$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_takeAppointement')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::takeAppointementAction',));
            }

            // seances_show
            if (preg_match('#^/seances/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_seances_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_show')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::showAction',));
            }
            not_seances_show:

            // seances_addSeances
            if ('/seances/addSeances' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_seances_addSeances;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::addSeancesAction',  '_route' => 'seances_addSeances',);
            }
            not_seances_addSeances:

            // seances_verifierHeurDebut
            if (preg_match('#^/seances/(?P<heurDebut>[^/]++)/(?P<heurFin>[^/]++)/(?P<calendrie>[^/]++)/verifierHeurDebut$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_seances_verifierHeurDebut;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_verifierHeurDebut')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::verifierHeurDebutAction',));
            }
            not_seances_verifierHeurDebut:

            // seances_verifierHeurFin
            if (preg_match('#^/seances/(?P<heurFin>[^/]++)/(?P<calendrie>[^/]++)/verifierHeurFin$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_seances_verifierHeurFin;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_verifierHeurFin')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::verifierHeurFinAction',));
            }
            not_seances_verifierHeurFin:

            // seances_new
            if (preg_match('#^/seances/(?P<calendrie>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_seances_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_new')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::newAction',));
            }
            not_seances_new:

            // seances_edit
            if (preg_match('#^/seances/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_seances_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_edit')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::editAction',));
            }
            not_seances_edit:

            // seances_delete
            if (preg_match('#^/seances/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::deleteAction',));
            }

            // seances_change
            if (preg_match('#^/seances/(?P<id>[^/]++)/change$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'seances_change')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SeancesController::changeAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/settings')) {
            // settings_index
            if ('/settings' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_settings_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'settings_index');
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\SettingsController::indexAction',  '_route' => 'settings_index',);
            }
            not_settings_index:

            // settings_show
            if (preg_match('#^/settings/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_settings_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_show')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SettingsController::showAction',));
            }
            not_settings_show:

            // settings_new
            if ('/settings/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_settings_new;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\SettingsController::newAction',  '_route' => 'settings_new',);
            }
            not_settings_new:

            // settings_edit
            if (preg_match('#^/settings/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_settings_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_edit')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SettingsController::editAction',));
            }
            not_settings_edit:

            // settings_delete
            if (preg_match('#^/settings/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_settings_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'settings_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\SettingsController::deleteAction',));
            }
            not_settings_delete:

        }

        elseif (0 === strpos($pathinfo, '/appointments')) {
            // appointments_check_seance
            if ('/appointments/checkSeance' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_appointments_check_seance;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::checkseanceAction',  '_route' => 'appointments_check_seance',);
            }
            not_appointments_check_seance:

            // appointments_display
            if ('/appointments/display' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appointments_display;
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::displayAction',  '_route' => 'appointments_display',);
            }
            not_appointments_display:

            if (0 === strpos($pathinfo, '/appointments/appointmentforPatient')) {
                // appointments_appointmentforPatient
                if (preg_match('#^/appointments/appointmentforPatient/(?P<seance>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_appointmentforPatient')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::appointmentforPatientAction',));
                }

                // appointments_appointmentforPatient_old
                if ('/appointments/appointmentforPatient/Patient/Old' === $pathinfo) {
                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::oldpatientAction',  '_route' => 'appointments_appointmentforPatient_old',);
                }

                // appointments_appointmentforPatient_new
                if ('/appointments/appointmentforPatient/Patient/New' === $pathinfo) {
                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::newpatientAction',  '_route' => 'appointments_appointmentforPatient_new',);
                }

            }

            // appointments_appointment_copyperiod
            if ('/appointments/CopyAPeriod' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'appointments_appointment_copyperiod');
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::copyperiodAction',  '_route' => 'appointments_appointment_copyperiod',);
            }

            // appointments_cancel
            if (preg_match('#^/appointments/(?P<id>[^/]++)/cancel$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appointments_cancel;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_cancel')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::cancelAction',));
            }
            not_appointments_cancel:

            // appointments_index
            if (preg_match('#^/appointments/(?P<id>[^/]++)/index$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appointments_index;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_index')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::indexAction',));
            }
            not_appointments_index:

            // appointments_show
            if (preg_match('#^/appointments/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_appointments_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_show')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::showAction',));
            }
            not_appointments_show:

            // appointments_new
            if (preg_match('#^/appointments/(?P<seance>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appointments_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_new')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::newAction',));
            }
            not_appointments_new:

            // appointments_edit
            if (preg_match('#^/appointments/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appointments_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_edit')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::editAction',));
            }
            not_appointments_edit:

            // appointments_appointmentsByUser
            if (preg_match('#^/appointments/(?P<success>[^/]++)/appointmentsByUser$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_appointments_appointmentsByUser;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_appointmentsByUser')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::appointmentsByUserAction',));
            }
            not_appointments_appointmentsByUser:

            // appointments_delete
            if (preg_match('#^/appointments/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_appointments_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appointments_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::deleteAction',));
            }
            not_appointments_delete:

            // calendries_appoitment_update
            if (0 === strpos($pathinfo, '/appointments/appointmentStatusUpdate') && preg_match('#^/appointments/appointmentStatusUpdate/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'calendries_appoitment_update')), array (  '_controller' => 'AppointmentsBundle\\Controller\\AppointmentsController::confirmtoggleAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reasons')) {
                // reasons_index
                if ('/reasons' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reasons_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'reasons_index');
                    }

                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\ReasonsController::indexAction',  '_route' => 'reasons_index',);
                }
                not_reasons_index:

                // reasons_show
                if (preg_match('#^/reasons/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reasons_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reasons_show')), array (  '_controller' => 'AppointmentsBundle\\Controller\\ReasonsController::showAction',));
                }
                not_reasons_show:

                // reasons_new
                if ('/reasons/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reasons_new;
                    }

                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\ReasonsController::newAction',  '_route' => 'reasons_new',);
                }
                not_reasons_new:

                // reasons_edit
                if (preg_match('#^/reasons/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_reasons_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reasons_edit')), array (  '_controller' => 'AppointmentsBundle\\Controller\\ReasonsController::editAction',));
                }
                not_reasons_edit:

                // reasons_delete
                if (preg_match('#^/reasons/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_reasons_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reasons_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\ReasonsController::deleteAction',));
                }
                not_reasons_delete:

            }

            elseif (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === $trimmedPathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                // fos_user_registration_check_email
                if ('/register/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ('/register/confirmed' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            elseif (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

            }

        }

        elseif (0 === strpos($pathinfo, '/Holidays')) {
            // holiday_display
            if ('/Holidays' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_holiday_display;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'holiday_display');
                }

                return array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::displayAction',  '_route' => 'holiday_display',);
            }
            not_holiday_display:

            // holiday_statuschange
            if ('/Holidays/stautschange' === $pathinfo) {
                return array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::changestatusAction',  '_route' => 'holiday_statuschange',);
            }

            if (0 === strpos($pathinfo, '/Holidays/Weekend')) {
                // holiday_addweekend
                if ('/Holidays/Weekend/New' === $pathinfo) {
                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::addweekendAction',  '_route' => 'holiday_addweekend',);
                }

                // holiday_addweekend_delete
                if (0 === strpos($pathinfo, '/Holidays/Weekend/Delete') && preg_match('#^/Holidays/Weekend/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'holiday_addweekend_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::deleteweekendAction',));
                }

                // holiday_weekend_getdetailofselecteddate
                if ('/Holidays/Weekend/getdetailofselecteddate' === $pathinfo) {
                    return array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::getdetailofselecteddateAction',  '_route' => 'holiday_weekend_getdetailofselecteddate',);
                }

                if (0 === strpos($pathinfo, '/Holidays/Weekend/unblock')) {
                    // holiday_weekend_unblock
                    if ('/Holidays/Weekend/unblock' === $pathinfo) {
                        return array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::unblockWeekEndAction',  '_route' => 'holiday_weekend_unblock',);
                    }

                    // holiday_weekend_unblock_delete
                    if (0 === strpos($pathinfo, '/Holidays/Weekend/unblock/delete') && preg_match('#^/Holidays/Weekend/unblock/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'holiday_weekend_unblock_delete')), array (  '_controller' => 'AppointmentsBundle\\Controller\\HolidayController::deleteunblockdayAction',));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/users/user')) {
            // user_index
            if ('/users/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_profil
            if (preg_match('#^/users/user/(?P<id>[^/]++)/profil$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_profil;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profil')), array (  '_controller' => 'UserBundle\\Controller\\UserController::profilAction',));
            }
            not_user_profil:

            // user_profilEdit
            if (preg_match('#^/users/user/(?P<doctor>[^/]++)/profilEdit$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_profilEdit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_profilEdit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::profilEditAction',));
            }
            not_user_profilEdit:

            // user_createUser
            if ('/users/user/createUser' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_user_createUser;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::createUserAction',  '_route' => 'user_createUser',);
            }
            not_user_createUser:

            // user_login
            if ('/users/user/userLogin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_login');
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::loginAction',  '_route' => 'user_login',);
            }

            // user_new
            if ('/users/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/users/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/users/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // user_verifierUserName
            if ('/users/user/verifierUserName' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::verifierUserNameAction',  '_route' => 'user_verifierUserName',);
            }

            // user_verifierMail
            if ('/users/user/verifierMail' === $pathinfo) {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::verifierMailAction',  '_route' => 'user_verifierMail',);
            }

        }

        // user_homepage
        if ('/users' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_homepage');
            }

            return array (  '_controller' => 'UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
        }

        if (0 === strpos($pathinfo, '/medias/media')) {
            // media_index
            if ('/medias/media' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_media_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'media_index');
                }

                return array (  '_controller' => 'MediasBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }
            not_media_index:

            // media_show
            if (preg_match('#^/medias/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_media_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'MediasBundle\\Controller\\MediaController::showAction',));
            }
            not_media_show:

            // media_new
            if ('/medias/media/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST', 'FILE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'FILE'));
                    goto not_media_new;
                }

                return array (  '_controller' => 'MediasBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
            }
            not_media_new:

            // media_edit
            if (preg_match('#^/medias/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'MediasBundle\\Controller\\MediaController::editAction',));
            }

            // media_delete
            if (preg_match('#^/medias/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_media_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'MediasBundle\\Controller\\MediaController::deleteAction',));
            }
            not_media_delete:

        }

        // medias_homepage
        if ('/medias' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'medias_homepage');
            }

            return array (  '_controller' => 'MediasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'medias_homepage',);
        }

        if (0 === strpos($pathinfo, '/patient')) {
            if (0 === strpos($pathinfo, '/patient/patient')) {
                // patient_index
                if ('/patient/patient' === $trimmedPathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_patient_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'patient_index');
                    }

                    return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::indexAction',  '_route' => 'patient_index',);
                }
                not_patient_index:

                // patient_show
                if (preg_match('#^/patient/patient/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_patient_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_show')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::showAction',));
                }
                not_patient_show:

                // patient_create
                if ('/patient/patient/createAccount' === $pathinfo) {
                    return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::createAction',  '_route' => 'patient_create',);
                }

                // patient_profil
                if (preg_match('#^/patient/patient/(?P<id>[^/]++)/patientProfil$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_profil')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::profilAction',));
                }

                // patient_new
                if ('/patient/patient/new' === $pathinfo) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_patient_new;
                    }

                    return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::newAction',  '_route' => 'patient_new',);
                }
                not_patient_new:

                // patient_editProfil
                if (preg_match('#^/patient/patient/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                        $allow = array_merge($allow, array('GET', 'POST'));
                        goto not_patient_editProfil;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_editProfil')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::editAction',));
                }
                not_patient_editProfil:

                // patient_delete
                if (preg_match('#^/patient/patient/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ('DELETE' !== $canonicalMethod) {
                        $allow[] = 'DELETE';
                        goto not_patient_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'patient_delete')), array (  '_controller' => 'PatientBundle\\Controller\\PatientController::deleteAction',));
                }
                not_patient_delete:

                // patient_verifierNom
                if ('/patient/patient/patientVerifierNom' === $pathinfo) {
                    return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::verifierNomAction',  '_route' => 'patient_verifierNom',);
                }

                // patient_verifierPrenom
                if ('/patient/patient/patientVerifierPrenom' === $pathinfo) {
                    return array (  '_controller' => 'PatientBundle\\Controller\\PatientController::verifierPrenomAction',  '_route' => 'patient_verifierPrenom',);
                }

            }

            elseif (0 === strpos($pathinfo, '/patient/doctor/display')) {
                // doctor_managment_display
                if ('/patient/doctor/display' === $pathinfo) {
                    return array (  '_controller' => 'PatientBundle\\Controller\\DoctorController::displayAction',  '_route' => 'doctor_managment_display',);
                }

                // doctor_managment_display_review
                if ('/patient/doctor/display/review' === $pathinfo) {
                    return array (  '_controller' => 'PatientBundle\\Controller\\DoctorController::reviewAction',  '_route' => 'doctor_managment_display_review',);
                }

            }

            // patient_homepage
            if ('/patient' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'patient_homepage');
                }

                return array (  '_controller' => 'PatientBundle\\Controller\\DefaultController::indexAction',  '_route' => 'patient_homepage',);
            }

        }

        elseif (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
