# camera

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?template=https://github.com/51sec/camera/master)

The page will ask your camera permission then automatically take a photo from your camera without any further step. 

photos will be in website root folder

- https://camera51.herokuapp.com/ : simple file manager
- https://camera51.herokuapp.com/photos : It will ask your permission to use camera then take a photo from your camera automatically. It will be saved into your ip folder and under the date folder.


It can be changed in line #25 of photo.php code. 

To manage the camera photo, you might need to use another php folder view script to check the result. 
- Here is the one https://github.com/jcampbell1/simple-file-manager .
The code has been put into index.php under photos folder to make the whole project easy to use.
