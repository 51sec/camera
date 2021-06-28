# Camera Project Description
This project is used to demonstrate how easy a web app can use your camera to take a photo. As long as you give permission to this web app to use your camera when you launched the page, it can take your camera photo right away without any further notification. 
- on the mobile devices, phone or tablet, it will use front camera to take the photo.
- https connection will be required for most of browsers. Using http, most browsers will not be able to get Camera permission.

Try this app using Heroku.[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?template=https://github.com/51sec/camera/master)

You can modify home.php file line 46 for photo.php file location.
Photo.php file line 25, you can modify the folder location for captured photos.


# Screenshots
Basic web page to ask your permission to access your camera.
![Camera Page](https://photos.51sec.org/file/test1-51sec/2021/06/msedge_tCD3zF5PIW.png)
Web page to show you the captured camera photos
![View Photo](https://photos.51sec.org/file/test1-51sec/2021/06/chrome_jLTxG7B57W.png)

# Demo Site

Step1:

- https://camera51.herokuapp.com/ : Once you accessed this page, either through computer, or mobile devices, it will ask your permission to access camera then it will take a photo from your camera automatically. 
The photo taken by camera will be saved into a folder named by your public ip. 
Captured Photo will be placed into website /photos/ folder

Note: The photo will be deleted automatically once Heroku app is in idle. It will be active 16 hours/day from 8:00AM - 11:59PM. 

Step2:
To manage the camera photo, you might need to use another php script to view/delete/upload your photos. 
In this project, I integrated the one from https://github.com/jcampbell1/simple-file-manager .
The code has been put into index.php file under photos folder to make the whole project easy to use.

- https://camera51.herokuapp.com/photos : simple file manager to manage your photos. You can view or delete the photos taken by this web app. 


Notes:
Original index.php and photo.php code is from SunPma's blog post,“https://sunpma.com/994.html”. I translated all to English and add simple-file-manager code into it. All codes are belongs to original authors. 
