#Food
INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('1', 'Banana', '111111', '120');
INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('2', 'Apple', '222222', '60');
INSERT INTO `mydb`.`FoodNutrition` (`IDFoodNutrition`, `foodName`, `upc_code`, `total_calories`) VALUES ('3', 'Orange', '333333', '200');

#Users
INSERT INTO `mydb`.`Users` (`idUser`,`age`,`currentWeight`) VALUES ('101','25','150');
INSERT INTO `mydb`.`Users` (`idUser`,`age`,`currentWeight`) VALUES ('202','35','250');

#Food Log
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '1', '2', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '2', '3', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '3', '1', '2018-11-03');

INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('202', '1', '5', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('202', '2', '5', '2018-11-03');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('202', '3', '10', '2018-11-03');

INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '1', '1', '2018-11-02');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '2', '1', '2018-11-02');
INSERT INTO `mydb`.`FoodLog` (`User_idUser`, `FoodNutrition_IDFoodNutrition`, `quanity`, `Time_Stamp`) VALUES ('101', '3', '1', '2018-11-02');

#Base Meals and Ingredents
INSERT INTO `mydb`.`BaseMeal` (`idBaseMeal`, `BaseMeal_name`) VALUES ('1', 'Fruit Salad');
INSERT INTO `mydb`.`BaseIngredent` (`FoodNutrition_IDFoodNutrition`, `BaseMeal_idBaseMeal`) VALUES ('1', '1');
INSERT INTO `mydb`.`BaseIngredent` (`FoodNutrition_IDFoodNutrition`, `BaseMeal_idBaseMeal`) VALUES ('2', '1');
INSERT INTO `mydb`.`BaseIngredent` (`FoodNutrition_IDFoodNutrition`, `BaseMeal_idBaseMeal`) VALUES ('3', '1');


#Meal Plan
INSERT INTO `mydb`.`MealSchedule` (`idMealSchedule`, `Users_idUser`) VALUES ('1', '101');

INSERT INTO `mydb`.`WeeklyMeals` (`idWeeklyMeals`, `MealSchedule_idMealSchedule`) VALUES ('42', '1');

INSERT INTO `mydb`.`DailyMeals` (`idDailyMeals`, `WeeklyMeals_idWeeklyMeals`) VALUES ('4', '42');
INSERT INTO `mydb`.`DailyMeals` (`idDailyMeals`, `WeeklyMeals_idWeeklyMeals`) VALUES ('3', '42');

INSERT INTO `mydb`.`MealContent` (`BaseMeal_idBaseMeal`, `DailyMeals_idDailyMeals`, `meal_type`) VALUES ('1', '4', '1');
INSERT INTO `mydb`.`MealContent` (`BaseMeal_idBaseMeal`, `DailyMeals_idDailyMeals`, `meal_type`) VALUES ('1', '4', '2');
INSERT INTO `mydb`.`MealContent` (`BaseMeal_idBaseMeal`, `DailyMeals_idDailyMeals`, `meal_type`) VALUES ('1', '4', '3');

INSERT INTO `mydb`.`MealContent` (`BaseMeal_idBaseMeal`, `DailyMeals_idDailyMeals`, `meal_type`) VALUES ('1', '3', '1');
INSERT INTO `mydb`.`MealContent` (`BaseMeal_idBaseMeal`, `DailyMeals_idDailyMeals`, `meal_type`) VALUES ('1', '3', '2');