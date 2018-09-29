# AwesomeTheSauce
fan webpage for AwesomeTheSauce wiztuber

when uploading on heroku, heroku is case sensitive (lower case) for images! also, use png images!

when deploying on heroku, make sure the PHP file is at the root of the repository, because heroku recognizes PHP not a fodler as root.
this means since the app is being deployed on heroku directly from github, github must have the index file right at the root of the repository
NOT inside a folder!

to test PHP file locally, run Apache, and make sure w3svc service is stopped because PHP needs to use port 80/443
net stop w3svc
once Apache starts, you can restart it net start w3svc

also, every commit thats done here, if the heroku setting for automatic deployments is checked, this means every commit/edit here pushed/committed takes effects right away at the deployed webpage!
meaning no access is necessary to my heroku account, this repository can be updated to reflect new things on the webpage right from here!
