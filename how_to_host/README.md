I am not yet conversant with how to host my project on the server
so this file contains cerain codes and instructions on how i did it
i want to always read this as a guide when i am deploying my project
to the worldwide web

ginicorn serves the flask_app (app_name.py) on port :5000
nginx serves the front_end (index.html) on port :80

https://medium.com/@tobijahekperikpe/my-portfolio-project-blog-post-9d61c3e7d9db


/home/ubuntu/.local/bin/gunicorn

------------- this would be in sudo nano /etc/systemd/system/gunicorn.service ------------------------

[Unit]
Description=Gunicorn instance to serve your Flask app
After=network.target

[Service]
User=ubuntu
Group=www-data
WorkingDirectory=/home/ubuntu/chatwebapp4
Environment="PATH=/home/ubuntu/.local/bin"
ExecStart=/home/ubuntu/.local/bin/gunicorn --workers 3 --bind unix:/run/app.sock wsgi:app
PermissionsStartOnly=true
RuntimeDirectory=gunicorn
RuntimeDirectoryMode=0755

[Install]
WantedB=multi-user.target

------------------------------------------------
---------------this would be in project-directory/app_name.sock-----------------------------------

from app import app


if __name__ == "__main__":
    app.run()
------------------------------------------------------------------------------
---------------this would be in etc/nginx/sites-available/desired file name---------------------------
server {
	listen 80;
	server_name tobitech.tech www.tobitech.tech;

	location / {
		include proxy_params;
		proxy_pass http://unix:/run/app.sock;
	}
}

--------------------------------------------------------

sudo nano /etc/systemd/system/gunicorn.service

sudo systemctl daemon-reload

sudo systemctl restart gunicorn

sudo systemctl status gunicorn

sudo systemctl restart app.service

sudo systemctl status app.service

sudo systemctl restart nginx

sudo systemctl status nginx

srw-rw---- 1 ubuntu www-data 0 Sep 19 10:23 /run/app.sock

ls -l /run/app.sock

sudo vi /etc/nginx/sites-available/app.conf

symlink - sudo ln -s /etc/nginx/sites-available/app.conf /etc/nginx/sites-enabled/

symlink - sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

sudo nginx -t

sudo systemctl restart nginx

sudo ufw status

sudo tail /var/log/nginx/error.log

sudo chmod 775 /home/ubuntu/

sudo ufw allow 'Nginx Full'

