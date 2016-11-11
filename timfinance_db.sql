SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'member', 'General User'),
(3, 'employee', 'Employee');

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `account_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6;   
INSERT INTO `account_status` (`id`, `description`) VALUES
(1, 'Active'),
(2, 'Inactive'),
(3, 'Suspended'),
(4, 'Deactivated'),
(5, 'Blocked');

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `account_status_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_laccount_status1` FOREIGN KEY (`account_status_id`) REFERENCES `account_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`,   `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `account_status_id`, `first_name`, `last_name`, `company`, `mobile`) VALUES
(1, '\0\0', 'superadmin', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', NULL, NULL, NULL, 1268889823, 1373438882, 1, 'Admin', 'admin', 'ADMIN', '0'),
(2, '\0\0', 'member', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'member@member.com', NULL, NULL, NULL, 1268889823, 1373438882, 1, 'Member', 'Member', 'MEMBER', '0');


CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2);









-- /genders table 
CREATE TABLE IF NOT EXISTS `marital_status` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `educations` (`id`, `name`) VALUES
(1, 'Single'),
(2, 'Married');

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `marital_status` (`id`, `name`) VALUES
(1, 'PSC'),
(2, 'JSC'),
(3, 'SSC'),
(4, 'HSC');
CREATE TABLE IF NOT EXISTS `professions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `professions` (`id`, `name`) VALUES
(1, 'Agriculture'),
(2, 'Non-Agriculture'),
(3, 'Business'),
(4, 'Services'),
(5, 'Othres');

-- /genders table 
CREATE TABLE IF NOT EXISTS `genders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `genders` (`id`, `name`) VALUES
(1, 'Male'),
(2, 'FeMale');

CREATE TABLE IF NOT EXISTS `political_statuses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `political_status` (`id`, `name`) VALUES
(1, 'Yes'),
(2, 'No');
CREATE TABLE IF NOT EXISTS `business_statuses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `business_status` (`id`, `name`) VALUES
(1, 'OwnerShip'),
(2, 'PartnerShip');

CREATE TABLE IF NOT EXISTS `family_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `family_types` (`id`, `name`) VALUES
(1, 'Single'),
(2, 'Combined');


-- /zone table 
CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
INSERT INTO `zones` (`id`, `name`) VALUES
(1, 'Dhaka');

-- /areas table 
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
ALTER TABLE `areas`
  ADD CONSTRAINT `fk_zone_id` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `areas` (`id`, `zone_id`, `name`) VALUES
(1, 1, "Gazipur");

-- /branches table 
CREATE TABLE IF NOT EXISTS `branches` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `area_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
ALTER TABLE `branches`
  ADD CONSTRAINT `fk_area_id` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `branches` (`id`, `area_id`, `name`) VALUES
(1, 1, "Kapasia");
-- /groups table 
CREATE TABLE IF NOT EXISTS `m_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
ALTER TABLE `m_groups`
  ADD CONSTRAINT `fk_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `m_groups` (`id`, `branch_id`, `name`) VALUES
(1, 1, "Ranigong");

CREATE TABLE IF NOT EXISTS `m_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) unsigned NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;   
ALTER TABLE `m_groups`
  ADD CONSTRAINT `fk_branch_id` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
INSERT INTO `m_groups` (`id`, `branch_id`, `name`) VALUES
(1, 1, "Ranigong");

-- //member table
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `zone_id` int(11) unsigned NOT NULL,
  `area_id` int(11) unsigned NOT NULL,
  `branch_id` int(11) unsigned NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `sur_name` varchar(100) NOT NULL,
  `gender_id` int(11) unsigned NOT NULL,
  `age` int(11) unsigned NOT NULL,
  `education_id` int(11) unsigned NOT NULL,
  `passing_year` int(11) unsigned NOT NULL,


  `f_first_name` varchar(40) DEFAULT NULL,
  `f_last_name` varchar(40) DEFAULT NULL,
  `f_sur_name` varchar(40) DEFAULT NULL,
  `f_age` int(11) unsigned NOT NULL,
  `f_business` varchar(40) DEFAULT NULL,
  `m_first_name` varchar(40) DEFAULT NULL,
  `m_last_name` varchar(40) DEFAULT NULL,
  `m_sur_name` varchar(40) DEFAULT NULL,
  `m_age` varchar(40) DEFAULT NULL,


   
  `m_vill_name` varchar(40) DEFAULT NULL,
  `m_union_name` varchar(40) DEFAULT NULL,
  `m_post_id`  int(11) unsigned NOT NULL,
  `m_thana_id`  int(11) unsigned NOT NULL,
  `m_district_id` int(11) unsigned NOT NULL,

  `p_vill_name` varchar(40) DEFAULT NULL,
  `p_union_name` varchar(40) DEFAULT NULL,
  `p_post_id`  int(11) unsigned NOT NULL,
  `p_thana_id`  int(11) unsigned NOT NULL,
  `p_district_id` int(11) unsigned NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `guardian_email` varchar(20) DEFAULT NULL,
  `s_distance` int(11) unsigned NOT NULL,
  `marital_id` int(11) unsigned NOT NULL,
  `current_profession_id` int(11) unsigned NOT NULL,
  `previous_profession_id` int(11) unsigned NOT NULL,

  `political_status_id` int(11) unsigned NOT NULL,
  `business_type_id` int(11) unsigned NOT NULL,
  `future_business_plan` varchar(20) DEFAULT NULL,
  `family_type_id` int(11) unsigned NOT NULL,
  `family_member_no` int(11) unsigned NOT NULL,
  `male_earned_person` int(11) unsigned NOT NULL,
  `female_earned_person` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
ALTER TABLE `members`
  ADD CONSTRAINT `fk_zone1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_area1` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_branch1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gender1` FOREIGN KEY (`gender_id`) REFERENCES `genders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_education1` FOREIGN KEY (`education_id`) REFERENCES `educations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_post1` FOREIGN KEY (`m_post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thana1` FOREIGN KEY (`m_thana_id`) REFERENCES `thanas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_district1` FOREIGN KEY (`m_district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_post2` FOREIGN KEY (`p_post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_thana2` FOREIGN KEY (`p_thana_id`) REFERENCES `thanas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_district2` FOREIGN KEY (`p_district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_marital1` FOREIGN KEY (`marital_id`) REFERENCES `marital_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_current_profession1` FOREIGN KEY (`current_profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_current_profession2` FOREIGN KEY (`previous_profession_id`) REFERENCES `professions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_political_status1` FOREIGN KEY (`political_status_id`) REFERENCES `political_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_business1` FOREIGN KEY (`business_type_id`) REFERENCES `business_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_family_type1` FOREIGN KEY (`family_type_id`) REFERENCES `family_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;









  