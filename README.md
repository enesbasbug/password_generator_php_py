# A password generator using PHP and Python in each X seconds intervals

## Example Supervisor conf (ubuntu) - PHP:

<br />
- PHP: location of the conf file /etc/supervisor/conf.d/password_generator.conf
<br />

![Php conf settings](/screenshoots/phpconf4.png)

Useful Supervisor commands (ubuntu):

- sudo apt install supervisor
- sudo service supervisor start
- sudo supervisorctl reread
- sudo supervisorctl update
- sudo supervisorctl start password_generator
- sudo supervisorctl stop password_generator
- sudo service supervisor stop

- Output:
    - ![Php output](/screenshoots/php2.png)


<br/>
<br/>

## Example Supervisor conf (ubuntu) - Python:


<br />
- Python: location of the conf file /etc/supervisor/conf.d/password_generator_py.conf
<br />

![Python conf settings](/screenshoots/pyconf3.png)


Useful Supervisor commands (ubuntu):

- sudo apt install supervisor
- sudo service supervisor start
- sudo supervisorctl reread
- sudo supervisorctl update
- sudo supervisorctl start password_generator_py
- sudo supervisorctl stop password_generator_py
- sudo service supervisor stop

- Output:
    - ![Python output](/screenshoots/py1.png)



