<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 11:30:01 --> 404 Page Not Found: Home/assets
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 11:30:01 --> 404 Page Not Found: Home/assets
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 11:30:01 --> 404 Page Not Found: Home/assets
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-01 11:30:01 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:02 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:02 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:02 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:02 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:02 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 11:30:10 --> Severity: error --> Exception: syntax error, unexpected 'public' (T_PUBLIC) C:\xampp\htdocs\register\app\models\Training_model.php 38
ERROR - 2023-03-01 11:31:30 --> Query error: Unknown column 'as' in 'field list' - Invalid query: SELECT `training_schedules`.*, `trainings`.`id` as `trainID`, `trainings`.`training_name`, `as` `trainer_name`, `cooperatives`.`id` as `coID`, `cooperatives`.`cooperative_name`
FROM `training_schedules`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
ERROR - 2023-03-01 11:31:30 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 33
ERROR - 2023-03-01 12:33:12 --> Query error: Table 'avsi_register.training_schedules' doesn't exist - Invalid query: INSERT INTO `training_schedules` (`cooperative_id`, `training_date`) VALUES ('1', '2023-03-02')
ERROR - 2023-03-01 12:48:43 --> Query error: Unknown column 'training_schedules.training_id' in 'on clause' - Invalid query: SELECT `training_schedules`.*, `trainings`.`id` as `trainID`, `trainings`.`training_name`, `cooperatives`.`id` as `coID`, `cooperatives`.`cooperative_name`
FROM `training_schedules`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
ERROR - 2023-03-01 12:48:44 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 33
ERROR - 2023-03-01 12:52:38 --> Severity: error --> Exception: Unable to locate the model you have specified: Management_model C:\xampp\htdocs\register\system\core\Loader.php 344
ERROR - 2023-03-01 13:00:12 --> Query error: Unknown column 'training_schedules.created_by' in 'on clause' - Invalid query: SELECT `training_schedules`.*, `trainings`.`id` as `trainID`, `trainings`.`training_name`, `cooperatives`.`id` as `coID`, `cooperatives`.`cooperative_name`, `users`.`id`, `users`.`fname`, `users`.`lname`
FROM `training_schedules`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
JOIN `users` ON `users`.`id` = `training_schedules`.`created_by`
ERROR - 2023-03-01 13:00:12 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 34
ERROR - 2023-03-01 13:05:13 --> Query error: Unknown column 'users.fname' in 'field list' - Invalid query: SELECT `training_schedules`.*, `trainings`.`id` as `trainID`, `trainings`.`training_name`, `cooperatives`.`id` as `coID`, `cooperatives`.`cooperative_name`, `users`.`id`, `users`.`fname`, `users`.`lname`
FROM `training_schedules`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
JOIN `users` ON `users`.`id` = `training_schedules`.`created_by`
ERROR - 2023-03-01 13:05:13 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 34
ERROR - 2023-03-01 13:14:58 --> Severity: error --> Exception: Too few arguments to function Training_model::save_training(), 0 passed in C:\xampp\htdocs\register\app\controllers\Training.php on line 61 and exactly 1 expected C:\xampp\htdocs\register\app\models\Training_model.php 40
ERROR - 2023-03-01 13:15:00 --> Severity: error --> Exception: Too few arguments to function Training_model::save_training(), 0 passed in C:\xampp\htdocs\register\app\controllers\Training.php on line 61 and exactly 1 expected C:\xampp\htdocs\register\app\models\Training_model.php 40
ERROR - 2023-03-01 14:38:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:58 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:38:59 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 14:57:17 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:22:18 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:22:21 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:22:22 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:22:24 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:22:28 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:23:11 --> Unable to load the requested class: Uri
ERROR - 2023-03-01 15:24:04 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:04 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:04 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:24:05 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-01 15:28:19 --> Severity: error --> Exception: syntax error, unexpected '$cooperative_id' (T_VARIABLE) C:\xampp\htdocs\register\app\controllers\Training.php 61
ERROR - 2023-03-01 15:29:02 --> Severity: error --> Exception: syntax error, unexpected '$cooperative_id' (T_VARIABLE) C:\xampp\htdocs\register\app\controllers\Training.php 62
