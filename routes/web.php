<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/chart-data', 'ChartDataController@selectAllData');
$router->get('/client-review', 'ClientReviewController@selectAllReview');
$router->post('/add-contact-data', 'ContactController@addContactData');

// courses route here
$router->get('/home-course', 'CourseController@selectFourseCourse');
$router->get('/all-course', 'CourseController@selectAllCourse');
$router->post('/course-details', 'CourseController@selectCourseDetails');

$router->get('/footer-data', 'FooterController@selectFooterData');
$router->get('/footer-information', 'FooterInformationController@selectFooterInformation');
$router->get('/services-data', 'ServiceController@selectServicesData');
// Projects route here
$router->get('/home-project', 'ProjectController@selectThreeCourse');
$router->get('/all-projects', 'ProjectController@selectAllProjects');
$router->post('/project-details', 'ProjectController@selectProjectDetails');

//Home routes for HomeEtc table
$router->get('/home-video', 'HomeEtcController@selectVideosData');
$router->get('/project-client', 'HomeEtcController@selectTotalProjectClient');
$router->get('/tech-description', 'HomeEtcController@selectTechDescription');
$router->get('/title-subtitle', 'HomeEtcController@selectHomeTitleSubTitle');