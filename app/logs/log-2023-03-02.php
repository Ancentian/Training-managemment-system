<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-02 03:27:43 --> 404 Page Not Found: Home/assets
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-03-02 03:59:29 --> Query error: Unknown column 'cooperatives.id' in 'on clause' - Invalid query: SELECT `training_schedules`.*, `members`.`id` as `memID`, `members`.`first_name`, `members`.`last_name`, `members`.`id_number`, `members`.`cooperative_id`, `cooperatives`.`id` as `copID`, `cooperatives`.`cooperative_name`, `trainings`.`id` as `trainID`, `trainings`.`training_name`
FROM `training_schedules`
JOIN `members` ON `members`.`cooperative_id` = `cooperatives`.`id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
WHERE `training_schedules`.`training_id` = '9'
AND `training_schedules`.`cooperative_id` = '2'
ORDER BY `members`.`first_name` DESC
ERROR - 2023-03-02 03:59:29 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 48
ERROR - 2023-03-02 04:01:31 --> Query error: Unknown column 'members.id' in 'field list' - Invalid query: SELECT `training_schedules`.*, `members`.`id` as `memID`, `members`.`first_name`, `members`.`last_name`, `members`.`id_number`, `members`.`cooperative_id`, `trainings`.`id` as `trainID`, `trainings`.`training_name`
FROM `training_schedules`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
WHERE `training_schedules`.`training_id` = '9'
AND `training_schedules`.`cooperative_id` = '2'
ORDER BY `members`.`first_name` DESC
ERROR - 2023-03-02 04:01:31 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 48
ERROR - 2023-03-02 04:02:29 --> Query error: Unknown column 'cooperatives.id' in 'on clause' - Invalid query: SELECT `training_schedules`.*, `members`.`first_name`, `members`.`last_name`, `members`.`id_number`, `members`.`cooperative_id`, `cooperatives`.`cooperative_name`, `trainings`.`id` as `trainID`, `trainings`.`training_name`
FROM `training_schedules`
JOIN `members` ON `members`.`cooperative_id` = `cooperatives`.`id`
JOIN `cooperatives` ON `cooperatives`.`id` = `training_schedules`.`cooperative_id`
JOIN `trainings` ON `trainings`.`id` = `training_schedules`.`training_id`
WHERE `training_schedules`.`training_id` = '9'
AND `training_schedules`.`cooperative_id` = '2'
ORDER BY `members`.`first_name` DESC
ERROR - 2023-03-02 04:02:29 --> Severity: error --> Exception: Call to a member function result() on bool C:\xampp\htdocs\register\app\models\Training_model.php 48
ERROR - 2023-03-02 04:05:22 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\register\app\views\trainings\markAttendance.php 87
ERROR - 2023-03-02 04:05:55 --> Severity: error --> Exception: Cannot use object of type stdClass as array C:\xampp\htdocs\register\app\views\trainings\markAttendance.php 87
ERROR - 2023-03-02 04:13:25 --> Query error: Column 'id' in order clause is ambiguous - Invalid query: SELECT `members`.*, `cooperatives`.`id` as `copID`, `cooperatives`.`cooperative_name`, `users`.`id`, `users`.`first_name` as `fname`, `users`.`last_name` as `lname`
FROM `members`
JOIN `cooperatives` ON `cooperatives`.`id` = `members`.`cooperative_id`
JOIN `users` ON `users`.`id` = `members`.`created_by`
ORDER BY `id` DESC
ERROR - 2023-03-02 04:13:25 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\register\app\models\Member_model.php 20
ERROR - 2023-03-02 08:31:17 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:17 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 08:31:18 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:11 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 10:54:12 --> 404 Page Not Found: Home/assets
ERROR - 2023-03-02 11:38:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\register\app\controllers\Training.php 122
ERROR - 2023-03-02 11:43:15 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES (Array, Array, NULL, '1', '1')
ERROR - 2023-03-02 11:43:15 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES (Array, Array, NULL, '1', '1')
ERROR - 2023-03-02 11:48:44 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES (Array, Array, NULL, '1', '1')
ERROR - 2023-03-02 11:48:44 --> Query error: Unknown column 'Array' in 'field list' - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES (Array, Array, NULL, '1', '1')
ERROR - 2023-03-02 11:52:40 --> Query error: Column 'member_id' cannot be null - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES ('1', '3', NULL, '1', '1')
ERROR - 2023-03-02 12:03:56 --> Query error: Column 'attendance_value' cannot be null - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES ('9', '2', '2223345667', NULL, '1')
ERROR - 2023-03-02 12:09:34 --> Query error: Column 'attendance_value' cannot be null - Invalid query: INSERT INTO `trainings_attendance` (`training_id`, `cooperative_id`, `member_id`, `attendance_value`, `marked_by`) VALUES ('14', '2', '2223345667', NULL, '1')
