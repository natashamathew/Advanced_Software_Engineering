# -*- coding: utf-8 -*-
"""
Created on Tue Nov  6 16:52:32 2018

@author: Jonathon
"""

from nutritionix import Nutritionix
import mysql.connector
from mysql.connector import errorcode


#Set up for script run
ifile  = open('food_list.txt', "rt")
nix = Nutritionix(app_id="27b883d2", api_key="6765efa618f90e2eaca84fda9f90d69f")

try:
    connection = mysql.connector.connect(user='devsoft', password='Test2018',
                              host='advsoft.codryjh8aaby.us-west-2.rds.amazonaws.com',
                              database='mydb')
except mysql.connector.Error as err:
  if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
    print("Something is wrong with your user name or password")
  elif err.errno == errorcode.ER_BAD_DB_ERROR:
    print("Database does not exist")
  else:
    print(err)

cursor =  connection.cursor()

#Insert Statment for 20 attributes for Food
add_food = ("INSERT INTO FoodNutrition"
"(IDFoodNutrition,foodName,"
"total_calories,serving_size_value,serving_size_mass,serving_size_units,"
"calories_from_fats,total_fat_grams,trans_fat_grams,saturated_fat_grams,"
"cholesterol_grams,sodium_grams,total_carbohydrates_grams,"
"dietary_fiber_grams,sugars_grams,protein_grams,"
"vitamin_a_dv,vitamin_c_dv,calcium_dv,iron_dv)"
"VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)")


#For each food item in our test list of food items
for item in ifile:
    #0:2 means only get two items from the results list.
    food = nix.search(item, results="0:2").json()
    #if more than one item is returned
    food_list = food['hits']
    for food_item in food_list: 
        foodid = food_item['_id']
        food_info = nix.item(id=foodid).json()
        
        #prep the data for insert
        food_data = food_info['item_id'],food_info['item_name'],food_info['nf_calories'],food_info['nf_serving_size_qty'],food_info['nf_serving_weight_grams'],food_info['nf_serving_size_unit'],food_info['nf_calories_from_fat'],food_info['nf_total_fat'],food_info['nf_trans_fatty_acid'],food_info['nf_saturated_fat'],food_info['nf_cholesterol'],food_info['nf_sodium'],food_info['nf_total_carbohydrate'],food_info['nf_dietary_fiber'],food_info['nf_sugars'],food_info['nf_protein'],food_info['nf_vitamin_a_dv'],food_info['nf_vitamin_c_dv'],food_info['nf_calcium_dv'],food_info['nf_iron_dv'],
        
        try:
            cursor.execute(add_food, food_data)
        except mysql.connector.Error as err:
            print(err)

connection.commit()
cursor.close()
connection.close()