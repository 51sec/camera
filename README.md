# camera
This project is used to demonstrate how easy a web app can take your camera. As long as you give permissin to the web app to use your camera, it can take your camera photo without asking. 

Try this app using Heroku.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://dashboard.heroku.com/new?template=https://github.com/51sec/camera/master)

Once you visited this page, it will ask your camera permission then automatically take a photo from your camera without any further step. 

Captured Photo will be placed into website /photos/ folder

- https://camera.51sec.eu.org/ : It will ask your permission to use camera then take a photo from your camera automatically. The phone taken by camera will be saved into the folder named by your public ip. 

Note: The photo will be deleted automatically once Heroku app goes into idle. The demo site will be running all the time. But the camera captured photos will be removed every 15 days automatically. 


To manage the camera photo, you might need to use another php script to view/delete/upload your photos. 
- In this project, I integrated the one from https://github.com/jcampbell1/simple-file-manager .
The code has been put into index.php under photos folder to make the whole project easy to use.

- https://camera.51sec.eu.org/photos : simple file manager to manage your photos. You can view or delete the photos taken by this app. 
