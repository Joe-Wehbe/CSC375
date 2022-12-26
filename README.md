# CineLeb :film_projector:
Website for cinemas in Lebanon. 

# Contributors :raising_hand_man:
<a href="https://github.com/Joe-Wehbe">Joe Wehbe</a>

# Project Description :page_with_curl: 
First, a signin page will be shown where users can enter their email and password to access the application directly. In case they do not have an account, they will be asked to enter their first name, last name, country, email, and password. All this information will be stored in MySQL database (table users) and you can access it using phpMyAdmin under the 'Database' folder in the repository. Once complete, a list of the user's vehicles will be displayed (if they have any), and they can check each vehicle's current amount of fluids remaining. Users have the option to delete vehicles, or add new vehicles, they will be asked to enter the: brand, model, color, plate. This information will be stored in the table 'cars' of the database. When a new distance is driven, users will have to enter it in miles, and the application will update the remaining amount of fluids accordingly.
      
# App Preview :iphone:
![image](https://user-images.githubusercontent.com/102875229/209582117-72520fc4-858d-42a0-aa90-112f6640bd18.png)
![image](https://user-images.githubusercontent.com/102875229/209581550-7c6e3d9f-d9e9-4dad-bb2a-2a0c1a24ee44.png)
![image](https://user-images.githubusercontent.com/102875229/209581581-87330a63-e445-4042-b879-add7470a0805.png)
![image](https://user-images.githubusercontent.com/102875229/209581911-a6a3d459-a39d-49c1-91cd-530dbf2d9f20.png)
![image](https://user-images.githubusercontent.com/102875229/209581627-73a9e2b5-9c24-4fcd-afc2-a0b68787ace5.png)
![image](https://user-images.githubusercontent.com/102875229/209581682-3e6bf934-b98d-498e-82c1-a3eece643342.png)
![image](https://user-images.githubusercontent.com/102875229/209581737-10d3734a-dae6-4cdf-9b75-15b269a687f7.png)
![image](https://user-images.githubusercontent.com/102875229/209582001-d2fff2d9-4121-410c-a3fa-c58644c94de7.png)

# Stacks :books:
<img src="https://img.shields.io/badge/-PHP-232531?logo=php&logoColor=white&style=for-the-badge" ></img>
<img src="https://img.shields.io/badge/-java-5382a1?logo=&logoColor=white&style=for-the-badge" ></img>
<img src="https://img.shields.io/badge/-MYSQL-00758f?logo=mysql&logoColor=white&style=for-the-badge" ></img>
<img src="https://img.shields.io/badge/-ANDROID%20STUDIO-3DDC84?logo=android-studio&logoColor=white&style=for-the-badge" ></img>

# ER Diagram :link:
![image](https://user-images.githubusercontent.com/102875229/209584552-f608ce76-54e6-4ddf-8d64-77f7dcdcec71.png)

# How to Run the Project :gear:
## What to Download
#### Download XAMPP
```
https://www.apachefriends.org/download.html
```
<br />

## Set up the Project
#### Download all files from the repository
> Click on: 'Code', then 'Download ZIP'.

#### Move the 'final-project' folder to htdocs
> Go to XAMPP/htdocs on your device, and move into it the 'final-project' folder that you downloaded.

#### Run XAMPP server
> Start Apache.\
> Start MySQL.\
> Click on MySQL Admin, which will open phpMyAdmin.

#### Create the database
> Click on 'New' in phpMyAdmin, and create a database, name it 'cinemasdb'.\
> Copy the content of cinemas.sql\
> Paste it under the SQL section in phpMyAdmin and click GO.

#### Go to your browser and type:
```
localhost/final-project
```

<br />
You're all done! :slightly_smiling_face:	
