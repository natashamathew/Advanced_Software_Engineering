INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('1', 'Banana', '111111', '120');
INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('2', 'Apple', '222222', '60');
INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('3', 'Orange', '333333', '200');

insert into `mydb`.Users (`idUser`) VALUES ('101');
insert into `mydb`.Users (`idUser`) VALUES ('202');


INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '1', '2', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '2', '3', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '3', '1', '2018-11-03');

INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('202', '1', '5', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('202', '2', '5', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('202', '3', '10', '2018-11-03');

INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '1', '1', '2018-11-02');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '2', '1', '2018-11-02');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `date_eaten`) VALUES ('101', '3', '1', '2018-11-02');
