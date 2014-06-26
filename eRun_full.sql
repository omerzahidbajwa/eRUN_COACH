/*
SQLyog Community v11.21 (64 bit)
MySQL - 5.5.24-log : Database - erun
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`erun` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `erun`;

/*Table structure for table `confirm` */

DROP TABLE IF EXISTS `confirm`;

CREATE TABLE `confirm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(128) NOT NULL DEFAULT '',
  `key` varchar(128) NOT NULL DEFAULT '',
  `email` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=latin1;

/*Data for the table `confirm` */

insert  into `confirm`(`id`,`userid`,`key`,`email`) values (121,'1','a5c52552262873a7f3af21b065397017',''),(122,'2','44966d6b5e3ceed4a572d42602769187','omerzahidbajwa@gmail.com'),(123,'3','09d29604ecd4e9f50ad34e6f37ecfb9e','za@gmail.com'),(124,'4','5d99a09f21fd2603f2beaf629502e4be','123@gmail.com'),(125,'5','a5c52552262873a7f3af21b065397017',''),(126,'6','0a99aeb61ce655e5b98ea0e30883836c','abc@gmail.com'),(127,'7','64b8e8ed7ec6442541cb16d7595c98cc','1212321a@gmail.com'),(128,'8','d4f93e9e4bf4a369f539ea3f1f1f9d8b','xczc@gmail.com'),(129,'9','070c751ff69f1231bbe581cb8e2726a1','aliz@gmail.com'),(130,'10','73da19db659855e0ef78d81742664625','hi@gmial.com');

/*Table structure for table `foruminfo` */

DROP TABLE IF EXISTS `foruminfo`;

CREATE TABLE `foruminfo` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postalCode` varchar(255) DEFAULT NULL,
  `homePhone` varchar(255) DEFAULT NULL,
  `mobilePhone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `emergencyContactNo` varchar(255) DEFAULT NULL,
  `theirNo` varchar(255) DEFAULT NULL,
  `mostImportantGoal` varchar(255) DEFAULT NULL,
  `shortTermGoal` varchar(255) DEFAULT NULL,
  `mediumTermGoal` varchar(255) DEFAULT NULL,
  `longTermGoal` varchar(255) DEFAULT NULL,
  `runningFor` varchar(255) DEFAULT NULL,
  `runningAchievements` varchar(255) DEFAULT NULL,
  `currentActivityProgram` varchar(255) DEFAULT NULL,
  `daysAWeekForGoal` varchar(255) DEFAULT NULL,
  `hoursPerDayForGoal` varchar(255) DEFAULT NULL,
  `daysForTraining` varchar(255) DEFAULT NULL,
  `timeOfDayForTraining` varchar(255) DEFAULT NULL,
  `achieveGoalIfContinueCurrent` varchar(255) DEFAULT NULL,
  `changeOrGiveUp` varchar(255) DEFAULT NULL,
  `mainFactorsGettingInWay` varchar(255) DEFAULT NULL,
  `whatWouldYouLikeMeToDo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `foruminfo` */

insert  into `foruminfo`(`userId`,`firstName`,`lastName`,`address`,`postalCode`,`homePhone`,`mobilePhone`,`email`,`emergencyContactNo`,`theirNo`,`mostImportantGoal`,`shortTermGoal`,`mediumTermGoal`,`longTermGoal`,`runningFor`,`runningAchievements`,`currentActivityProgram`,`daysAWeekForGoal`,`hoursPerDayForGoal`,`daysForTraining`,`timeOfDayForTraining`,`achieveGoalIfContinueCurrent`,`changeOrGiveUp`,`mainFactorsGettingInWay`,`whatWouldYouLikeMeToDo`) values (16,'Omer','Zahid','Zeng Streen Model Town Extension','54700','023-1230213-32','123123-12312-34','omerzahidbajwa@gmail.com','213-321-123-32','123223','Serving People','N/A','N/A','N/A','12 months','N/A','swimming','4','2','monday, tuesday','12:30 - 4:30','doubt it','don\'t know','lazyness','HELP ME!');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`userid`,`username`,`email`,`password`) values (2,'majamis','omerzahidbajwa@gmail.com','123'),(3,'omer','za@gmail.com','1234'),(4,'123','123@gmail.com','123'),(5,'','',''),(6,'ali','abc@gmail.com','123'),(7,'ali123','1212321a@gmail.com','123'),(8,'asdsadas','xczc@gmail.com','123'),(9,'aliz','aliz@gmail.com','123'),(10,'hi','hi@gmial.com','123');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
