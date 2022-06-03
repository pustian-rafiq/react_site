<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|infinity auth: user: epiz_31872479, dbname: epiz_31872479_laravel, host: sql310.epizy.com
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/chart-data', ['middleware'=>'auth','uses'=>'ChartDataController@selectAllData']);
$router->get('/client-review', ['middleware'=>'auth','uses'=>'ClientReviewController@selectAllReview']);
$router->post('/add-contact-data', ['middleware'=>'auth','uses'=>'ContactController@addContactData']);

// courses route here
$router->get('/home-course', ['middleware'=>'auth','uses'=>'CourseController@selectFourseCourse']);
$router->get('/all-course', ['middleware'=>'auth','uses'=>'CourseController@selectAllCourse']);
$router->get('/course-details/{id}', ['middleware'=>'auth','uses'=>'CourseController@selectCourseDetails']);

$router->get('/footer-data', ['middleware'=>'auth','uses'=>'FooterController@selectFooterData']);
$router->get('/footer-information', ['middleware'=>'auth','uses'=>'FooterInformationController@selectFooterInformation']);
$router->get('/services-data', ['middleware'=>'auth','uses'=>'ServiceController@selectServicesData']);
// Projects route here
$router->get('/home-project', ['middleware'=>'auth','uses'=>'ProjectController@selectThreeCourse']);
$router->get('/all-projects', ['middleware'=>'auth','uses'=>'ProjectController@selectAllProjects']);
$router->get('/project-details/{id}', ['middleware'=>'auth','uses'=>'ProjectController@selectProjectDetails']);

//Home routes for HomeEtc table
$router->get('/home-video', ['middleware'=>'auth','uses'=>'HomeEtcController@selectVideosData']);
$router->get('/project-client', ['middleware'=>'auth','uses'=>'HomeEtcController@selectTotalProjectClient']);
$router->get('/tech-description', ['middleware'=>'auth','uses'=>'HomeEtcController@selectTechDescription']);

$router->get('/title-subtitle', ['middleware'=>'auth','uses'=>'HomeEtcController@selectHomeTitleSubTitle']);